<!DOCTYPE html>
<html>
<head>
  <title>CodeWars</title>
  <meta charset="utf-8">
  <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="css/form.css" type="text/css">
  <script type="text/javascript" src="/js/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="/js/action.js"></script>
</head>
<body>

<div class="body-content">
  <div class="module">
    <h1 class="title">Регистрация</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['msg']; ?></div>
      <input type="text" placeholder="Имя пользователя" name="username" required />
      <input type="email" placeholder="Электронный адрес" name="email" required />
      <input type="password" placeholder="Пароль" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Подтвердите пароль" name="confirmpassword" autocomplete="new-password" required />
      <div class="avatar"><label>Выберите аватар: </label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Зарегистрироваться" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>

</body>
</html>