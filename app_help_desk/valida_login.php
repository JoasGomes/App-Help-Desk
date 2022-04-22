<?php 

    session_start();

    print_r($_SESSION);
    echo '<hr />';

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
        $_SESSION['autenticado'] = 'SIM';
    } else{
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro');
    }



    //colocando a forma de envio dos dados
    /* print_r($_POST);

    echo '<br/>';

    echo $_POST['email'];
    echo '<br/>';
    echo $_POST['senha'];  */

?>