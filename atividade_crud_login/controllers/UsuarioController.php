<?php
    require_once "models/Usuario.php";
    $acao = isset($_GET['acao']) ? $_GET['acao'] : 'listar';

    //PROTEÇÃO GLOBAL - copiar em todas as páginas protegidas
    if(!isset($_SESSION['adm']) && $acao !='login') {
        include "views/Usuario/login.php";
        exit;
    }

    if ($acao == 'listar'){
        $usuarios = listarUsuarios();
        include "views/Usuario/listar.php";
    }

    if ($acao == 'criar'){
        if ($_POST){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $papel = $_POST['papel'];
            $imagem = "";

            if ($_FILES['imagem']['name']){
                $imagem = "img/" . $_FILES['imagem']['name'];
                move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
            }
            inserirUsuario($nome, $email, $imagem, $login, $senha, $papel);
            header("Location: index.php");
        }

        include "views/Usuario/criar.php";
    }

    if ($acao == 'editar'){
        $id = $_GET['id'];
        if ($_POST){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $papel = $_POST['papel'];
            $imagem = $_POST['imagem_atual'];

            if ($_FILES['imagem']['name']){
                $imagem = "img/" . $_FILES['imagem']['name'];
                move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
            }

            atualizarUsuario($id, $nome, $email, $imagem, $login, $senha, $papel);
            header("Location: index.php");
        }

        $usuario = buscarUsuario($id);
        include "views/Usuario/editar.php";
    }

    if ($acao == 'excluir'){
        excluirUsuario($_GET['id']);
        header("Location: index.php");
    }

    if($acao == 'login') {
        $acao = $_GET['acao'] ?? '';
        if ($acao == 'login') {
            $login = $_POST ['login'] ?? '';
            $senha = $_POST ['senha'] ?? '';

            $usuario = login_adm($login, $senha);

            if($usuario) {
                $_SESSION['adm'] = $usuario['nome'];
                $_SESSION['imagem'] = $usuario['imagem'] ?? 'img/foto.jpg';
                header("Location: index.php");
                exit;
            }else{
                $erro = "Login inválido!";
            }
        }
    }

    if ($acao == 'logout') {
        $acao = $_GET['acao'] ?? '';
        if ($acao == 'logout') {
            session_destroy();
            header("Location: index.php");
            exit;
        }
    }
?>
