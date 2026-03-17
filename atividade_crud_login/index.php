<?php
session_start();

include "app/config/conexao.php";
include "models/Usuario.php";
include "controllers/UsuarioController.php";
include "models/Produto.php";
include "controllers/ProdutoController.php";

if(isset($_SESSION['adm'])) {
    echo"<p>"; 
    echo "<img src='" . ($_SESSION['imagem'] ?? 'img/foto.jpg') . "' alt='Foto do usuário' style='width:50px; height:50px; border-radius:50%; vertical-align:middle; margin-right:10px;'>";
    echo "Bem vindo, ".$_SESSION['adm'];
    echo " | ";
    echo "<a href='index.php?acao=logout'>Sair</a>";
    echo "</p>";

}else{
    //Se não estiver conectado responde isso:
    include "views/Usuario/login.php";
}

?>