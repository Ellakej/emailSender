<?php
// Prueba para mandar el nombre por correo
if($_POST["Nombre"]){
    mail("alikingno@gmail.com", "Nombre: ", $_POST["Nombre"], "From: webmaster@example.com");
}

?>
