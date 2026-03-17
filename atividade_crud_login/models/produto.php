<?php
require_once "app/config/conexao.php";

function listarProduto() {
    $con = conectar();
    $sql = "SELECT * FROM produto";
    $resultadoP =mysqli_query($con, $sql);

    return mysqli_fetch_all($resultadoP, MYSQLI_ASSOC);
}

function inserirProduto($nomeP, $descricao, $fornecedor, $quantidade, $fabricante, $preco, $margem, $data_cadastro, $status_pro, $imagemP) {
    $con = conectar();
    $sql = "INSERT INTO produto(nomeP, descricao, fornecedor, quantidade, fabricante, preco, margem, data_cadastro, status_pro, imagemP) VALUES ('$nomeP', '$descricao', '$fornecedor', '$quantidade', '$fabricante', '$preco', '$margem', '$data_cadastro', '$status_pro', '$imagemP')";
    mysqli_query($con, $sql);
}

function buscarProduto($id_produto) {
    $con = conectar();
    $sql = "SELECT*FROM produto WHERE id_produto=$id_produto";
    $resultadoP = mysqli_query($con, $sql);

    return mysqli_fetch_assoc($resultadoP);
}
       
function atualizarProduto($nomeP, $descricao, $fornecedor, $quantidade, $fabricante, $preco, $margem, $data_cadastro, $status_pro, $imagemP, $id_produto) {
    $con = conectar();
    $sql = "UPDATE produto SET nomeP='$nomeP', descricao='$descricao', fornecedor='$fornecedor', quantidade='$quantidade', fabricante='$fabricante',  preco='$preco', margem='$margem', data_cadastro='$data_cadastro', status_pro='$status_pro', imagemP='$imagemP' WHERE id_produto=$id_produto";
    mysqli_query($con, $sql);
}
//adicionar um login, id, senha FROM usuario WHERE login=$login e senha=$senha
function excluirProduto($id_produto) {
    $con = conectar();
    $sql="DELETE FROM produto WHERE id_produto=$id_produto";
    
    mysqli_query($con, $sql);
}