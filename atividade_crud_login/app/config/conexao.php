<?php
function conectar(){
    return mysqli_connect("localhost","root","123456","bd_loja_mvc", 3307);
}