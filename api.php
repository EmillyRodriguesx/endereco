<?php

function buscarCEP($cep) {
    if(strlen($cep) == 8) {
        $dados = json_decode(file_get_contents("https://viacep.com.br/ws/01001000/json/"),true);

        if(isset($dados['erro'])) {

            return "cep não rncontrado!!";

        }else{
            return $dados;
        }
    }
}