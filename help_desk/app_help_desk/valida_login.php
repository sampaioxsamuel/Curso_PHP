<?php
    session_start();

    $_SESSION['auth'];
    
    $autenticado = False;
    $idUsuario = NULL;
    $perfilID = NULL;
    
    $perfis = ['Administrador' => 1, 'Usuario' => 2];
    $contas = [
        ['id' => 1, 'email' => 'admin@local.com', 'senha' => '1234', 'perfil_id' => 1],
        ['id' => 2, 'email' => 'user@local.com', 'senha' => '1234', 'perfil_id' => 1],
        ['id' => 3, 'email' => 'jose@local.com', 'senha' => '1234', 'perfil_id' => 2],
        ['id' => 4, 'email' => 'maria@local.com', 'senha' => '1234', 'perfil_id' => 2]
    ];  
    

    foreach($contas as $conta){
        if($conta['email'] == $_POST['email'] && $conta['senha'] == $_POST['senha']){
            $autenticado = True;
            $idUsuario = $conta['id'];
            $perfilID = $conta['perfil_id'];
            
        }
    }

    if($autenticado){
        $_SESSION['auth'] = 'sim';
        $_SESSION['id'] = $idUsuario;
        $_SESSION['perfil_id'] = $perfilID;

        header("Location: home.php");
    }else{
	    $_SESSION['auth'] = 'não';
        header("Location: index.php?login=error");
    }

?>
