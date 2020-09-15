<?php

namespace Classes;

require Usuario.php;
use Classes\Usiario;

class api {
    public function getApi() {
        /* API RESTFull em PHP puro */

        //Informar para o cliente que será retonado JSON
        header('Content-type: application/json');

        //Capturar os parâmetros
        $param = filter_input_array(INPUT_GET, FILTER_DEFAULT);

        //Captura o método de requisição
        $method =  $_SERVER['REQUEST_METHOD'];

        //Captura os dados enviados no body/cliente
        $body = file_get_contents('php://input');

        // if ($method == 'GET') {
        //     $resultado = $usu->listar();
        //     $usuarios = [];
        
        //     foreach ($resultado as $usuario) {
        //         unset($usuario[0]);
        //         unset($usuario[1]);
        //         unset($usuario[2]);
        //         unset($usuario[3]);
        //         $usuarios [] = $usuario;
        //     }
        //      return json_encode($usuarios);
        
        // } else if ($method == 'POST'){
            
        // }else if ($method == 'PUT'){
        //     echo 'Vou editar';
        // }else if ($method == 'DELETE'){
        //     echo 'Vou eliminar';
        // }

    }
}



?>