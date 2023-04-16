<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$domdoc = new DOMDocument();
		$email = $_POST['email'];
		$score = $_POST['score'];
		
		if(!empty($email)  /*&& !is_numeric($user_name)*/)
		{

			//save to database
			
			$query = "update users set score = score + '$score' where email='$email'";

			mysqli_query($con, $query);

			header("Location: index.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!doctype html>
<html lang="en">

<head>
	<link rel="icon" type="image/x-icon" href="treasure-chest.png">
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Treasure Hunt Game</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="icon" href="favicon.png">

  
</head>
<body>

<div class="main">

<div class="container">
	
	
	<div id="board">
		<div id="ui" class="col-sm-12 col-md-12 col-lg-12">
		<h1>Treasure Hunt Game</h1>
			<label><img class="icon" src="lifeicon.png" alt="Life" height="35px" /><progress id="health" value="0" max="10"></progress></label><br/>
			<label id="score-div"><img class="icon" src="scoreicon.png" alt="Score" height="35px" /><p id="demo3">0</p><p id="hint"></p>
			
			</label>
			
			<p id="demo4"><strong>How to play:</strong></p>
			<p id="timer">3:00</p>
			<ul id="rules">
				<li>Find and get the Treasure by clicking on any of the blank tile before your Lifebar runs out!</li>
				<li>Look out for the clues provided to find out if they are Treasure near you.</li>
			</ul>
			<?php
				$isHidden = true; // Set the condition to hide the div
			?>
			<form action="" id="submitform"  method="post" <?php if ($isHidden) echo 'class="hidden"'; ?>> 
				<label>Would you like to save the result in database</label><br>
				<label for="email">Email:  </label>
				<input type="email" name="email"/><br>
				<label for="score">Score: </label>
				<input type="text" name="score"/><br>
				<input type="submit" value="submit" id="sub-btn">
			</form>
			
			<button id="start-button"  class="btn-block" onclick="initialise()" >Start Game</button>
			<button id="reset-button"  class="btn-block"  onclick="initialise()">Try again</button>
			
		</div>
		

	</div>
				
		
</div>
<script src="game.js"></script>


	
</body>






</html>
