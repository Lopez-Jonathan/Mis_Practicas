<?php
$user = $_POST["user"];
$pass = $_POST["pass"];

$usuario = "admin";
$contraseña = "123";

if ($usuario == $user && $contraseña == $pass) {
  header("location:https://www.youtube.com/");
}else {
  header("location:https://www.elcato.org/");
}
 ?>
