<style>
        .inputs {
            float:left;
            width:20%;
            background-color: #10263d;
            height:100%;
            color:white;
          }
          .myButton {
	-moz-box-shadow:inset 0px -3px 7px 0px #29bbff;
	-webkit-box-shadow:inset 0px -3px 7px 0px #29bbff;
	box-shadow:inset 0px -3px 7px 0px #29bbff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #2dabf9), color-stop(1, #0688fa));
	background:-moz-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
	background:-webkit-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
	background:-o-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
	background:-ms-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
	background:linear-gradient(to bottom, #2dabf9 5%, #0688fa 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#2dabf9', endColorstr='#0688fa',GradientType=0);
	background-color:#2dabf9;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #0b0e07;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	padding:9px 23px;
	text-decoration:none;
	text-shadow:0px 1px 0px #263666;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #0688fa), color-stop(1, #2dabf9));
	background:-moz-linear-gradient(top, #0688fa 5%, #2dabf9 100%);
	background:-webkit-linear-gradient(top, #0688fa 5%, #2dabf9 100%);
	background:-o-linear-gradient(top, #0688fa 5%, #2dabf9 100%);
	background:-ms-linear-gradient(top, #0688fa 5%, #2dabf9 100%);
	background:linear-gradient(to bottom, #0688fa 5%, #2dabf9 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0688fa', endColorstr='#2dabf9',GradientType=0);
	background-color:#0688fa;
}
.myButton:active {
	position:relative;
	top:1px;
}

    

</style>

<?php
session_start();
if($_SESSION["verify"]!=1){
?>
<head>

</head>
<form action="login.php" method="GET">
    <input type="text" name="login" placeholder="login" required>
    <input type="password" name="haslo" placeholder="haslo" required>
    <input type="submit" value="zaloguj sie">
</form>
<?php
}
if($_SESSION["verify"]==1){

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Query</title>
</head>
<body>

<form action="query.php" method="post">
<div id="cointainer">
        
    <div class="inputs">
</form>
<form action="EAN.php" method="GET">
			<img src="https://funnycase.pl/img/funnycasepl-logo-15281125831.jpg"><br><br><br><br>
			Tekst:  &nbsp&nbsp
			<textarea rows="4" cols="50" name="tekst">
</textarea>
  
    <br>KodEan
	
    <input type="text" name="eancode" placeholder="EAN13 CODE" ><br>
    <br>
	
    <input type="submit" class="myButton" value="Utwórz kod EAN"><br>
    

</form>


</body>
</html>

<?php
}

?>