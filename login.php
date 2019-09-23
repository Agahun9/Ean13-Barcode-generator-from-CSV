<?php
session_start();
$login=$_GET["login"];
$haslo=$_GET["haslo"];


if($login=="admin@funnycase.pl"&& $haslo=="secret"){
    $_SESSION["verify"]= 1;
    header("location: index.php");
}
else{
    print("nieprawidłowe dane logowania");
}
?>