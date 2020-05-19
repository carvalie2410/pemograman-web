<?php
session_start();
$_SESSION["User_ID"]="Carvalie123";
$_SESSION["password"]="123";
if (isset($_POST["login"])){
    if ($_POST["User_ID"]=="Carvalie" && $_POST["password"]=="123"){
        header("location:home.php");
    }else{
        echo "Maaf Username Atau Password Salah !";
    }
}
?>