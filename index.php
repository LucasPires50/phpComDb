<?php

require './Classes/Usuario.php';

use Classes\Usuario;
$usu = new Usuario();


$usuarios = $usu->listar();

if (isset($data ['excluir'])) {
    require './Classes/Deletar.php';

    $usu = new deletarUser();
    $coigo = $data['codigo'];
    $usuarios = $usu->deletar($codigo);
}

    //     /* API RESTFull em PHP puro */

    //     //Informar para o cliente que será retonado JSON
    //     header('Content-type: application/json');

    //     //Capturar os parâmetros
    //     $param = filter_input_array(INPUT_GET, FILTER_DEFAULT);

    //     //Captura o método de requisição
    //     $method =  $_SERVER['REQUEST_METHOD'];

    //     //Captura os dados enviados no body/cliente
    //     $body = file_get_contents('php://input');

    //     if ($method == 'GET') {
    //         $resultado = $usu->listar();
    //         $usuarios = [];
        
    //         foreach ($resultado as $usuario) {
    //             unset($usuario[0]);
    //             unset($usuario[1]);
    //             unset($usuario[2]);
    //             unset($usuario[3]);
    //             $usuarios [] = $usuario;
    //         }
    //    //json_encode($usuarios);
        
    //     }

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="style/estiloCSS.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="corfundo">
        <div class="form-group letra">

            <h1>Tabela de Usuários</h1>

            <br/>

            <table class="table table-bordered d-table-row">

                <thead class="cabeca">
                    <tr>
                        <td>Código</td>
                        <td>Nome</td>
                        <td>E-mail</td>
                        <td>Login</td>
                        <td>Opções</td>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($usuarios as $index => $usuario) { ?>

                        <tr>
                            <td><?php echo $usuario ['codigo']; ?></td>
                            <td><?php echo $usuario ['nome']; ?></td>
                            <td><?php echo $usuario ['email']; ?></td>
                            <td><?php echo $usuario ['login']; ?></td>
                            <td>
                                <a href="editar.php?codigo=<?php echo $usuario['codigo']; ?>&editar">Editar</a> |
                                <a href="eliminar.php?codigo=<?php echo $usuario['codigo']; ?>&excluir">Excluir</a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>

            </table>

            <br>

            <a href="adicionar.php"><h3>Cadastrar novo usuário</h3></a>

        </div>
    </body>
</html>
