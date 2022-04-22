<?php 

    /* print_r($_GET);

    echo '<br/>';

    echo $_GET['email'];
    echo '<br/>';
    echo $_GET['senha']; */

    //variavel que verifica se a autenticação foi feita
    $usuario_autenticado = false;


    //usuarios do sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br','senha' => '123456'),
        array('email' => 'user@teste.com.br','senha' => 'abcd'),

    );

    /* echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>'; */

    //percorrendo os users e vendo se são compatíveis
    foreach($usuarios_app as $user){

        if($user['email'] == $_POST['email'] &&  $user['senha'] ==  $_POST['senha']){
            $usuario_autenticado = true;
        }
        
    }

    if($usuario_autenticado){
        echo 'usuario autenticado';
    } else{
        header('Location: index.php?login=erro');
    }



    //colocando a forma de envio dos dados
    /* print_r($_POST);

    echo '<br/>';

    echo $_POST['email'];
    echo '<br/>';
    echo $_POST['senha'];  */

?>