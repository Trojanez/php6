<?php 

  if(isset($_POST['btn'])) {
    if(!empty($_POST['user_name'])) {
      $name = htmlspecialchars(trim($_POST['user_name']));
    }
    if(!empty($_POST['phone'])) {
      $phone = htmlspecialchars(trim($_POST['phone']));
    }
    if(!empty($_POST['email'])) {
      $email = htmlspecialchars(trim($_POST['email']));
    }
    if(!empty($_POST['taskOption'])) {
      $option = ($_POST['taskOption']);
    }
    if(!empty($_POST['comment'])) {
      $comment = htmlspecialchars(trim($_POST['comment']));
    }

  $result = '
    <table class="table">
      <tr>
        <td>Name:</td>
        <td>'.$name.'</td>
      </tr>
      <tr>
        <td>Phone:</td>
        <td>'.$phone.'</td>
      </tr>
      <tr>
        <td>Email:</td>
        <td>'.$email.'</td>
      </tr>
      <tr>
        <td>Birthday:</td>
        <td>'.$option.'</td>
      </tr>
      <tr>
        <td>Comment:</td>
        <td>'.$comment.'</td>
      </tr>
    </table>
    <hr>
  ';

    file_put_contents("file.html", $result . "\r\n", FILE_APPEND);
  }
  
?>

<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <!-- My CSS -->
      <link rel="stylesheet" type="text/css" href="css\style.css"/>

      <title>Bootstrap form</title>
    </head>
    <body>
      <h1>Feedback form</h1>

      <div class="form_holder">
        <form role="form" class="test" method="post" action="index.php">
          <div class="form-group">
            <input type="text" onblur="promptName()" name="user_name" class="form-control myclass" id="name" placeholder="Username*" value="<?=$name ?>"/>
            <div id="username_err" class="err_value"></div>
          </div>
          <div class="form-group">
            <input type="text" name="phone" class="form-control myclass" id="phone" value="<?=$phone ?>" placeholder="Phone number">
            <div id="number_err" class="err_value"></div>
          </div>
          <div class="form-group">
            <input type="email" onblur="promptEmail()" name="email" class="form-control myclass" id="email" placeholder="Email*" value="<?=$email ?>">
            <div id="email_err" class="err_value"></div>
          </div>
          <label for="taskOption" class="birth">Your birthday</label>
          <select class="selectpicker" name="taskOption">
            <option selected>Choose one of the following...</option>
            <option>1981</option>
            <option>1982</option>
            <option>1983</option>
            <option>1984</option>
            <option>1985</option>
            <option>1986</option>
            <option>1987</option>
            <option>1988</option>
            <option>1989</option>
            <option>1990</option>
            <option>1991</option>
            <option>1992</option>
            <option>1993</option>
            <option>1994</option>
            <option>1995</option>
            <option>1996</option>
            <option>1997</option>
            <option>1998</option>
            <option>1999</option>
            <option>2000</option>
            <option>2001</option>
            <option>2002</option>
            <option>2003</option>
            <option>2004</option>
            <option>2005</option>
            <option>2006</option>
          </select>
          <div class="form-group">
            <textarea class="form-control myclass" name="comment" rows="5" id="comment" placeholder="Comment"></textarea>
          </div>
          <input type="submit" name="btn" class="btn btn-success" value="Submit">
        </form>
      </div>

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="js/action.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

