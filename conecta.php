<?php
// chave de conexão com o banco de dados MySQL
//session_start();
$servidor="localhost";
$usuario = "root";
$senha="";
$bd="bancoianes";

$chave=mysqli_connect($servidor,$usuario,$senha,$bd);
    /*if($chave){
        echo "conexão realizada com sucesso";
    }*/
    date_default_timezone_set('America/Sao_Paulo');
    $_SESSION['data']=date("d-m-Y");
    $_SESSION['hora']=date("H:i:s");
?>