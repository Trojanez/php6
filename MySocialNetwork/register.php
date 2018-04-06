<?php

	require 'bd.php';
	require 'add_user.php';
	require 'choose_city.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>My page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<script type="text/javascript" src="js/register.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
</head>
<body>
	<div id="wrapper">
		<div class="layout">
			<div id="header">
				<h1 class="logo">
            		<a href="register.php"></a>
        		</h1>
				<div class="form_link">
					<a href="login.php">Авторизация</a>
					<a href="register.php">Регистрация</a>
				</div>
			</div>
		</div>

		<div class="layout">
			<div id="main">
				<h2>Форма регистрации</h2><br/><br/><br/>

				<form method="post" action="<?php $_SERVER['SCRIPT_NAME']?>" class="form_user">
					<div>
						<label for="login">Имя</label><br />
						<input type="text" name="user_name" id="user_name" value="<?php echo $_POST['user_name']; ?>" placeholder="Введите имя">
					</div>
					<div>
						<label for="login">Фамилия</label><br />
						<input type="text" name="user_surname" id="user_surname" value="<?php echo $_POST['user_surname']; ?>" placeholder="Введите фамилию">
					</div>
					<div>
						<label for="login">Логин</label><br />
						<input type="text" name="login" id="login" value="<?php echo $_POST['login']; ?>" placeholder="Введите логин">
					</div>
					<div>
						<label for="email">Электронный адрес</label><br />
						<input type="text" name="email" id="email" value="<?php echo $_POST['email']; ?>" placeholder="Введите электронный адрес">
					</div>
					<div>
						<label for="password">Пароль</label><br />
						<input type="password" name="password" id="password" value="" placeholder="Введите пароль">
					</div>
					<div>
						<label for="password_confirmation">Введите пароль повторно</label><br />
						<input type="password" name="password_confirmation" id="password_confirmation" value="" placeholder="Введите пароль повторно">
					</div>
					<div>
						<label for="password_confirmation">Выберите страну и город проживания</label><br />
						<select name="region" onchange="loadCity(this)">
    						<option>Выберите страну</option>
    						<?php // заполняем список областей
    							foreach ($city as $region => $cityList) {
        						echo '<option value="' . $region . '">' . $region . '</option>' . "\n";
    							}
    						?>
						</select>
						<select name="city">
						    <option>Выберите город</option>
						</select>
					</div><br /> 
					<div>
					<tr>
          				<th><label for="birthDate_d">Дата рождения</label></th><br />
          				<td>
          				<select name="day" id="day">
	             			<?php for($i = 1; $i <= 31; $i++){
		  						$i = str_pad($i, 2, 0, STR_PAD_LEFT);
	            				printf("<option value='$i'>$i</option>");
	             				} 
	             			?>
          				</select>
          				<select name="month" id="month">
             				<?php for($i = 1; $i <= 12; $i++) {
             					$i = str_pad($i, 2, 0, STR_PAD_LEFT);
								printf("<option value='$i'>$i</option>");
             					}
             				?>
            			</select>
          				<select name="year" id="year">
             				<?php for($i = date('Y'); $i >= date('Y', strtotime('-100 years')); $i--) {
            					printf("<option value='$i'>$i</option>");
             				} ?>
          				</select>
          				</td>
       				</tr>
       				</div><br />
       				<div class="gender">
	       				<input type="radio" name="gender" value="male" checked>Мужской<br>
  						<input type="radio" name="gender" value="female">Женский<br>
       				</div>
					<button type="submit" name="do_signup">Зарегистрироваться</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>