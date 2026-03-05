<?php
    require_once "models/Produto.php";
    $acaoP = isset($_GET['acaoP']) ? $_GET['acaoP'] : 'listarP';

    if ($acaoP == 'listarP'){
        $produtos = listarProduto();
        include "views/Produtos/listarP.php";
    }

    if ($acaoP == 'criarP'){
        if ($_POST){
            $nomeP = $_POST['nomeP'];
            $descricao = $_POST['descricao'];
            $fornecedor = $_POST['fornecedor'];
            $quantidade = $_POST['quantidade'];
            $fabricante = $_POST['fabricante'];
            $preco = $_POST['preco'];
            $margem = $_POST['margem'];
            $data_cadastro = $_POST['data_cadastro'];
            $status_pro = $_POST['status_pro'];
            $imagemP = "";

            if ($_FILES['imagemP']['name']){
                $imagemP = "img/" . $_FILES['imagemP']['name'];
                move_uploaded_file($_FILES['imagemP']['tmp_name'], $imagemP);
            }
            inserirProduto($nomeP, $descricao, $fornecedor, $quantidade, $fabricante, $preco, $margem, $data_cadastro, $status_pro, $imagemP);
            header("Location: index.php");
        }

        include "views/Produtos/criarP.php";
    }

    if ($acaoP == 'editarP'){
        $id_produto = $_GET['id_produto'];
        if ($_POST){
            $nomeP = $_POST['nomeP'];
            $descricao = $_POST['descricao'];
            $fornecedor = $_POST['fornecedor'];
            $quantidade = $_POST['quantidade'];
            $fabricante = $_POST['fabricante'];
            $preco = $_POST['preco'];
            $margem = $_POST['margem'];
            $data_cadastro = $_POST['data_cadastro'];
            $status_pro = $_POST['status_pro'];
            $imagemP = $_POST['imagem_nova'];

            if ($_FILES['imagemP']['name']){
                $imagemP = "img/" . $_FILES['imagemP']['name'];
                move_uploaded_file($_FILES['imagemP']['tmp_name'], $imagemP);
            }

            atualizarUsuario($nomeP, $descricao, $fornecedor, $quantidade, $fabricante, $preco, $margem, $data_cadastro, $status_pro, $imagemP);
            header("Location: index.php");
        }

        $produto = buscarUsuario($id_produto);
        include "views/Produtos/editarP.php";
    }

    if ($acaoP == 'excluir'){
        excluirUsuario($_GET['id_produto']);
        header("Location: index.php");
    }
?>

