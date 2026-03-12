<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

echo "Usuario registrado correctamente";

?>