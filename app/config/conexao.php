<?php

function conectar() {
    
    $con = mysqli_connect("localhost","root", "123456", "bd_loja_mvc", 3307);
    // Teste de software
    // if(!$con) {
    //     div("Erro na conexão com o banco");
    // }
    return $con;
}