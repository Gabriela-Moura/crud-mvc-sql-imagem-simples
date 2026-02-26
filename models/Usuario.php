<?php
require_once "app/config/conexao.php";

function listarUsuarios() {
    $con = conectar();
    $sql = "SELECT * FROM usuario";
    $resultado =mysqli_query($con, $sql);

    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

function inserirUsuario($nome, $email, $imagem) {
    $con = conectar();
    //id está em auto increment
    $sql = "INSERT INTO usuario(nome, email, imagem) VALUES ('$nome', '$email', '$imagem')";

    mysqli_query($con, $sql);
}

function buscarUsuario($id) {
    $con = conectar();
    $sql = "SELECT*FROM usuario WHERE id=$id";
    $resultado = mysqli_query($con, $sql);

    return mysqli_fetch_assoc($resultado);
}
       
function atualizarUsuario($id, $nome, $email, $imagem) {
    $con = conectar();
//echo ("$id.$nome.$email.$imagem");
    $sql = "UPDATE usuario SET nome='$nome', email='$email', imagem='$imagem' WHERE id=$id";
           // UPDATE usuario SET nome='RIcardo Akira', email='email@email', imagem='img/cachorro.jpg' WHERE id=2   
    mysqli_query($con, $sql);
}

function excluirUsuario($id) {
    $con = conectar();
    $sql="DELETE FROM usuario WHERE id=$id";
    
    mysqli_query($con, $sql);
}