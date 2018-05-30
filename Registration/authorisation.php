<?php 

	require_once 'app/Db.php';

	if(isset($_POST['do_signup'])) {

		$loginEmail = (string)htmlspecialchars($_POST['login']);
		$pass = (string)htmlspecialchars($_POST['password']);

		$user->checkEmpty($loginEmail, 'Enter login');
		$user->checkEmpty($pass, 'Enter password');

		$row = [];
		$row = $user->checkLogin($loginEmail);

		// Checking login or email
		$user->checkIfExists($row, "User not found. If you don't have an account, please register.");

		//Checking password
		foreach ($row as $value) {
			$user->checkPasswords($value['password'], $user->passwordHash($pass), 'Incorrect password.');
		}	
		
		if(empty($user->getError())) {
			// we can login the user

			$_SESSION['logged_user'] = $loginEmail;
			if(isset($_POST['remember'])) {
				setcookie('login', $loginEmail, time() + (10*365*24*60*60));
				setcookie('password', $pass, time() + (10*365*24*60*60));
			}
			header("Location: logged.php");

		} else {
			echo '<div style="color: red;">' . array_shift($user->getError()) . '</div><hr>';
		}
	}

?>

		<?php  
			require_once 'template/header.php';
		?>
		<h1>Authorisation form</h1>

		<form method="post" action="<?php $_SERVER['SCRIPT_NAME']?>">
			<div>
				<label for="login">Enter your email or login</label><br />
				<input type="text" name="login" id="login" value="<?php if(isset($_COOKIE['login'])) {echo $_COOKIE['login'];?><?php } else ?><?php { ?><?php echo $_POST['login']; ?><?php } ?>" placeholder="Email or login">
			</div>
			<div>
				<label for="password">Enter your password</label><br />
				<input type="password" name="password" id="password" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];?><?php } ?>" placeholder="Password">
			</div>
			<div>
				<label for="remember">Remeber me</label>
				<input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE['login'])) { ?> checked <?php } ?>>
			</div> <br />
			<button type="submit" id="button" name="do_signup">Login</button>
		</form>
	</div>
</body>
</html>