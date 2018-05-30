<?php 
	require_once 'app/Db.php';

	if(isset($_POST['submit']))
	{
		$email = (string)htmlspecialchars($_POST['email']);
		$login = (string)htmlspecialchars($_POST['login']);
		$username = (string)htmlspecialchars($_POST['username']);
		$password = (string)htmlspecialchars($_POST['password']);
		$password_confirmation = (string)htmlspecialchars($_POST['password_confirmation']);
		$birthdate = $_POST['birthdate'];
		$country = $_POST['country'];
		$date = date('m-d-y');

		$user->checkEmpty($email, 'Enter your email address');
		$user->checkEmpty($login, 'Enter login');
		$user->checkEmpty($username, 'Enter your name');
		$user->checkEmpty($password, 'Enter password');
		$user->checkEmpty($password_confirmation, 'Enter confirmation password');
		$user->checkEmpty($birthdate, 'Enter your birth date');
		$user->checkEmpty($country, 'Enter your country');

		$user->checkPasswords($password, $password_confirmation, 'Passwords don\'t match');
		
		$sql = "SELECT count(email) FROM users WHERE email = :email";
		$stmt = $db->prepare($sql);

		$stmt->bindValue(':email', $email);

		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$user->checkUnqiue($row, "User with the email address <b>$email</b> already exists");

		$sql = "SELECT count(login) FROM users WHERE login = :login";
		$stmt = $db->prepare($sql);

		$stmt->bindValue(':login', $login);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$user->checkUnqiue($row, "User with the login <b>$login</b> already exists");

		if(empty($user->getError())){
			
			$encryptedPassword = $user->passwordHash($password);

			if($user->register($email, $login, $username, $encryptedPassword, $birthdate, $country))
			{
				$_SESSION['name'] = $username;
				$_SESSION['email'] = $email;
				header("Location: logged.php");
			}

		} else echo '<div style="color: red;">' . array_shift($user->getError()) . '</div><hr>';
	}
?>

	<?php 
	require_once 'template/header.php';
	?>

	<h1>Registration form</h1>

	<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
		<div>
			<label for="email">Email</label><br>
			<input type="email" name="email" id="email" value="<?php echo $_POST['email']; ?>" placeholder="Email" >
		</div>
		<div>
			<label for="login">Login</label><br>
			<input type="text" name="login" id="login" value="<?php echo $_POST['login']; ?>" placeholder="Login">
		</div>
		<div>
			<label for="username">Real name</label><br>
			<input type="text" name="username" id="username" value="<?php echo $_POST['username']; ?>" placeholder="Name">
		</div>
		<div>
			<label for="password">Password</label><br>
			<input type="password" name="password" id="password" placeholder="Password">
		</div>
		<div>
			<label for="password_confirmation">Confirm Password</label><br>
			<input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password">
		</div>
		<div>
			<label for="birthdate">Your birth date</label>
			<input type="date" id="birthdate" name="birthdate" value="<?php echo $_POST['birthdate']; ?>">
		</div>
		<div>
			<label for="country">Country</label><br>
			<select id="country" name="country">
				<?php 
				require_once 'app/Db.php';
					$sql = 'SELECT id, country_name FROM apps_countries';
					$stmt = $db->prepare($sql);
					$stmt->execute(); 
				?>
					<?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
       				<option value="<?php echo $row['country_name']?>"><?php echo $row['country_name'] ?></option>
    				<?php endwhile; ?>
			</select>
		</div><br>
		<div>
			<input type="checkbox" name="checkbox" value="check" id="agree" <?php if(isset($_POST['checkbox'])):?> checked <?php endif; ?>/> I have read and agree to the Terms and Conditions and Privacy Policy
		</div><br>
		<input type="submit" id="button" name="submit" value="Register">
	</form>
</body>
</html>