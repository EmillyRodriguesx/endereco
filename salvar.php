<?php
include "api.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $cep = $_POST['cep'];
    $endereco = buscarCEP($cep);

    
}

?>