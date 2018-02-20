<?php  

	$box = array("", "", "", "", "", "", "", "", "");
	
	$winner = "n";

	if(isset($_POST["submitbtn"])) {
		$box[0] = $_POST["box0"];
		$box[1] = $_POST["box1"];
		$box[2] = $_POST["box2"];
		$box[3] = $_POST["box3"];
		$box[4] = $_POST["box4"];
		$box[5] = $_POST["box5"];
		$box[6] = $_POST["box6"];
		$box[7] = $_POST["box7"];
		$box[8] = $_POST["box8"];
		//print_r($box);

		$blank = false;
		for($i = 0; $i <= 8; $i++) {
			if($box[$i] == '') {
				$blank = true;
			}
		}

		if(($box[0] == 'x' && $box[1] == 'x' && $box[2] == 'x') || ($box[3] == 'x' && $box[4] == 'x' && $box[5] == 'x') || ($box[6] == 'x' && $box[7] == 'x' && $box[8] == 'x') || ($box[0] == 'x' && $box[3] == 'x' && $box[6] == 'x') || ($box[1] == 'x' && $box[4] == 'x' && $box[7] == 'x') || ($box[2] == 'x' && $box[5] == 'x' && $box[8] == 'x') || ($box[0] == 'x' && $box[4] == 'x' && $box[8] == 'x') || ($box[2] == 'x' && $box[4] == 'x' && $box[6] == 'x')) {

			$winner = 'x';
			print("X wins");
		}

		if(($box[0] == '0' && $box[1] == '0' && $box[2] == '0') || ($box[3] == '0' && $box[4] == '0' && $box[5] == '0') || ($box[6] == '0' && $box[7] == '0' && $box[8] == '0') || ($box[0] == '0' && $box[3] == '0' && $box[6] == '0') || ($box[1] == '0' && $box[4] == '0' && $box[7] == '0') || ($box[2] == '0' && $box[5] == '0' && $box[8] == '0') || ($box[0] == '0' && $box[4] == '0' && $box[8] == '0') || ($box[2] == '0' && $box[4] == '0' && $box[6] == '0')) {

			$winner = '0';
			print("0 wins");
		}

		if($blank == false && $winner == 'n') {
			$winner = 't';
			print('Tied game');
		}

		/*$blank = false;
		for($i = 0; $i <= 8; $i++) {
			if($box[$i] == '') {
				$blank = true;
			}
		}

		if($blank == true && $winner == 'n') {
			$comp = rand(0,8);
			while($box[$comp] != '') {
				$comp = rand(0,8);
			}

			$box[$comp] = "0";

		if(($box[0] == '0' && $box[1] == '0' && $box[2] == '0') || ($box[3] == '0' && $box[4] == '0' && $box[5] == '0') || ($box[6] == '0' && $box[7] == '0' && $box[8] == '0') || ($box[0] == '0' && $box[3] == '0' && $box[6] == '0') || ($box[1] == '0' && $box[4] == '0' && $box[7] == '0') || ($box[2] == '0' && $box[5] == '0' && $box[8] == '0') || ($box[0] == '0' && $box[4] == '0' && $box[8] == '0') || ($box[2] == '0' && $box[4] == '0' && $box[6] == '0')) {

			$winner = '0';
			print("0 wins");
			}
		}

		if($blank == false && $winner == 'n') {
			$winner = 't';
			print('Tied game');
		}*/

	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>TicTacToe game</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>Let's play tic tac toe game. Your turn!</h1>
	<p>Please use only characters "x" and "0"</p>

	<form id="field" method="post" action="action.php">

	<?php
	for($i = 0; $i <= 8; $i++) {
		printf('<input class="littlefield" type="text" name="box%s" value="%s"/>', $i, $box[$i]);
		if(($i == 2) || ($i == 5) || ($i == 8)) {
			print("<br/>");
		}
	}
	if($winner == 'n') {
		print('<input class="btn" type="submit" name="submitbtn" value="Go"/>');
	} else {
		print('<input class="btn" type="button" value="New Game" onclick="window.location.href=\'action.php\'">');
	}

	?>

	</form>

</body>
</html>