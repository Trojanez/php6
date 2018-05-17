<?php include ROOT .'/views/layouts/header.php';?>

	<div id="main">
		<div class="layout">
			<h2 class="reg_head">Форма регистрации</h2>
		</div>
		<form id="reg_form" method="post">
                  <span class="err_msg"><?php
                        if(isset($errors) && is_array($errors)) {
                              echo array_shift($errors);
                        }
                  ?></span>
                   <span class="success_msg"><?php
                   if(isset($success)) {
                        echo $success;
                        }
                  ?></span>
            <p>Номер телефона:<span class="required_field">*</span> 
                  <input type="tel" id="number" name="phone_number" placeholder="+38***123-45-67" value="<?php if(isset($_POST['name'])) echo $_POST['phone_number']; ?>">
            </p> 
            <p>Имя:<span class="required_field">*</span>
                  <input type="text" name="name" id="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" />
            </p>
            <p>Электронный адрес:<span class="required_field">*</span>
                  <input type="email" name="email" id="email_reg" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"/>
            </p>
            <p>Пароль:<span class="required_field">*</span>
                  <input type="password" id="password_reg" name="password" />
            </p>
            <p>Введите пароль повторно:<span class="required_field">*</span>
                  <input type="password" id="pass1" name="confirm_password" />
            </p>
            <p><input type="submit" id="register" name="submit" class="button" value="Регистрация"/></p>
        </form>
	</div>

<?php require_once ROOT . '/views/layouts/footer.php';?>