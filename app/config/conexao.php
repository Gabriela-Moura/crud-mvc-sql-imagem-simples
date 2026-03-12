<?php
function conectar() {
$con = mysqli_connect("localhost", "root", "123456", "loja_mvc", 3307);
if (!$con) {
die("Erro na conexão!");
}
return $con;
}