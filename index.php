<?php
session_start();
// colocar algum parâmetro no sessão
include "app/config/conexao.php";
include "models/Usuario.php";
include "models/Produto.php";
include "controllers/UsuarioController.php";
include "controllers/ProdutoController.php";
// $_SESION['img'] = $usuario['imagem'];

if(isset($_SESSION['adm'])) {
//pergunta se existe a função adm, para verificar qual sessão está ativa
    echo"<p>";
    //Essa sessão guarda alguma coisa, nesse caso guarda o nome, que deve estra em usuarioController
    echo "Bem vindo, ".$_SESSION['adm'];
    echo " | ";
    echo "<a href='index.php?acao=logout'>Sair</a>";
    echo "</p>";
}else{
    //Se não estiver conectado responde isso:
    include "views/Usuario/login.php";
}


?>