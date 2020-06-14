<html>
<head>
<title>Banerjee,Prodipta</title>
</head>
<body>
<h1>Welcome to my guessing game</h1>
<p>
<form method="post"
<label for ="guess" >Enter Guess: </label>
<input type="text" name="guess" id ="guess"><br>
<?php
  if(!isset($_POST['guess'])){
    echo("Missing guess parameter");
  }
  else if(strlen($_POST['guess']) < 1){
    echo ("Your guess is too short");
  }
  else if(!is_numeric($_POST['guess'])){
    echo ("Your guess is not a number");
  }
  else if($_POST['guess'] < 42){
    echo ("Your guess is too low");
  }
  else if($_POST['guess'] > 42){
    echo ("Your guess is too high");
  }
  else {
    echo ("Congratulations - You are right");
  }
 ?>
</p>
</form>
</body>
</html>
