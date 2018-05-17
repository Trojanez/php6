<?php include ROOT . '/views/layouts/header.php';?>

	<div id="main">
		<div class="layout">
			<h2 class="auth_head">Форма авторизации</h2>
		</div>
		<form id="auth_form" method="post">
            <p>Электронный адрес:
                  <input type="email" name="email" id="email_reg" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"/>
            </p>
            <p>Пароль:
                  <input type="password" id="password_reg" name="password" />
            </p>
            <p><input type="submit" id="register" name="auth" class="button" value="Регистрация"/></p>
        </form>
	</div>

<?php require_once ROOT . '/views/layouts/footer.php';?>