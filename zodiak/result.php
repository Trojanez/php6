<?php 
  if(isset($_POST['btn'])) {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars(intval($_POST['age']));
    $day = $_POST['taskOption2'];
    $month = $_POST['taskOption'];

    file_put_contents('text.txt', "$name, $age, $day, $month\r\n", FILE_APPEND);
  }

?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
  height: auto;
}
table {
  text-align: center;
  border-collapse: collapse;
  margin:auto;
}

table, td, th {
  width: 600px;
  border: 1px solid black;
}

h2 {
  text-align: center;
}
p {
  text-align: center;
  font-size: 20px;
  font-weight: bold;
}
img {
  width: 300px;
  height: 300px;
  margin-left: 525px;
}
button {
  margin-top: 50px;
  background-color: black;
  color: white;
  width: 200px;
  height: 50px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  margin-left: 575px;
}
</style>
</head>
<body>

  <h2>Ваш результат:</h2>

<table>
  <tr>
    <th>Имя</th>
    <th>Возраст</th>
    <th>День и месяц Рождения</th>
  </tr>
  <tr>
    <td><?=$name?></td>
    <td><?=$age?></td>
    <td><?=$day . " " . $month?></td>
  </tr>
</table>
<br>
<br>

<?php

  if($month == 'February' && $day > "29") {
    echo '
    <meta charset="utf-8">
    <script>
      alert("В феврале не может быть 30 или 31 числа!");
      window.location.href = "index.php";
    </script>
    ';
  }
  if($month == 'April' && $day > "30") {
    echo '
    <meta charset="utf-8">
    <script>
      alert("В Апреле не может быть 31 числа!");
      window.location.href = "index.php";
    </script>
    ';
  }
  if($month == 'June' && $day > "30") {
    echo '
    <meta charset="utf-8">
    <script>
      alert("В Июне не может быть 31 числа!");
      window.location.href = "index.php";
    </script>
    ';
  }
  if($month == 'September' && $day > "30") {
    echo '
    <meta charset="utf-8">
    <script>
      alert("В Сентябре не может быть 31 числа!");
      window.location.href = "index.php";
    </script>
    ';
  }
  if($month == 'November' && $day > "30") {
    echo '
    <meta charset="utf-8">
    <script>
      alert("В Ноябре не может быть 31 числа!");
      window.location.href = "index.php";
    </script>
    ';
  }


  if(($month == 'January') && ($day >= "20" &&  $day <= "31") || ($month == 'February') && ($day >= "1" &&  $day <= "19")) {
      echo '<meta charset="utf-8"><p>Знак зодиака - Водолей</p>';
      echo '<img src="images/Vodoley.jpg"/>';
      echo '
    <div>
    <button onclick="window.location.href=\'index.php\'">Попробовать еще раз</button>
    </div>
    ';
  }

  if(($month == 'February') && ($day >= "20" &&  $day <= "29") || ($month == 'March') && ($day >= "1" &&  $day <= "20")) {
      echo '<meta charset="utf-8"><p>Знак зодиака - Рыбы</p>';
      echo '<img src="images/Fish.jpg"/>';
      echo '
    <div>
    <button onclick="window.location.href=\'index.php\'">Попробовать еще раз</button>
    </div>
    ';
  }

  if(($month == 'March') && ($day >= "21" &&  $day <= "31") || ($month == 'April') && ($day >= "1" &&  $day <= "20")) {
    echo '<meta charset="utf-8"><p>Знак зодиака - Овен</p>';
    echo '<img src="images/Oven.jpg"/>';
    echo '
    <div>
    <button onclick="window.location.href=\'index.php\'">Попробовать еще раз</button>
    </div>
    ';
  }

  if(($month == 'April') && ($day >= "21" &&  $day <= "30") || ($month == 'May') && ($day >= "1" &&  $day <= "21")) {
    echo '<meta charset="utf-8"><p>Знак зодиака - Телец</p>';
    echo '<img src="images/Telec.jpg"/>';
    echo '
    <div>
    <button onclick="window.location.href=\'index.php\'">Попробовать еще раз</button>
    </div>
    ';
  }

  if(($month == 'May') && ($day >= "22" &&  $day <= "31") || ($month == 'June') && ($day >= "1" &&  $day <= "21")) {
    echo '<meta charset="utf-8"><p>Знак зодиака - Близнецы</p>';
    echo '<img src="images/Bliznec.jpg"/>';
    echo '
    <div>
    <button onclick="window.location.href=\'index.php\'">Попробовать еще раз</button>
    </div>
    ';
  }

  if(($month == 'June') && ($day >= "22" &&  $day <= "30") || ($month == 'July') && ($day >= "1" &&  $day <= "22")) {
    echo '<meta charset="utf-8"><p>Знак зодиака - Рак</p>';
    echo '<img src="images/Rak.jpg"/>';
    echo '
    <div>
    <button onclick="window.location.href=\'index.php\'">Попробовать еще раз</button>
    </div>
    ';
  }

  if(($month == 'July') && ($day >= "23" &&  $day <= "31") || ($month == 'August') && ($day >= "1" &&  $day <= "23")) {
    echo '<meta charset="utf-8"><p>Знак зодиака - Лев</p>';
    echo '<img src="images/Lion.jpg"/>';
    echo '
    <div>
    <button onclick="window.location.href=\'index.php\'">Попробовать еще раз</button>
    </div>
    ';
  }

  if(($month == 'August') && ($day >= "24" &&  $day <= "31") || ($month == 'September') && ($day >= "1" &&  $day <= "23")) {
    echo '<meta charset="utf-8"><p>Знак зодиака - Дева</p>';
    echo '<img src="images/Deva.jpg"/>';
    echo '
    <div>
    <button onclick="window.location.href=\'index.php\'">Попробовать еще раз</button>
    </div>
    ';
  }

  if(($month == 'September') && ($day >= "24" &&  $day <= "30") || ($month == 'October') && ($day >= "1" &&  $day <= "22")) {
    echo '<meta charset="utf-8"><p><p>Знак зодиака - Весы</p>';
    echo '<img src="images/Balance.jpg"/>';
    echo '
    <div>
    <button onclick="window.location.href=\'index.php\'">Попробовать еще раз</button>
    </div>
    ';
  }

  if(($month == 'October') && ($day >= "23" &&  $day <= "31") || ($month == 'November') && ($day >= "1" &&  $day <= "22")) {
    echo '<meta charset="utf-8"><p>Знак зодиака - Скорпион</p>';
    echo '<img src="images/Scorpion.jpg"/>';
    echo '
    <div>
    <button onclick="window.location.href=\'index.php\'">Попробовать еще раз</button>
    </div>
    ';
  }

  if(($month == 'November') && ($day >= "23" &&  $day <= "30") || ($month == 'December') && ($day >= "1" &&  $day <= "21")) {
    echo '<meta charset="utf-8"><p>Знак зодиака - Стрелец</p>';
    echo '<img src="images/Strelec.jpg"/>';
    echo '
    <div>
    <button onclick="window.location.href=\'index.php\'">Попробовать еще раз</button>
    </div>
    ';
  }

  if(($month == 'December') && ($day >= "22" &&  $day <= "31") || ($month == 'January') && ($day >= "1" &&  $day <= "19")) {
    echo '<meta charset="utf-8"><p>Знак зодиака - Козерог</p>';
    echo '<img src="images/Kozerog.jpg"/>';
    echo '
    <div>
    <button onclick="window.location.href=\'index.php\'">Попробовать еще раз</button>
    </div>
    ';
  }
?>