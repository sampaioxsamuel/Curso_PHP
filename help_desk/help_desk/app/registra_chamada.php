<?php
    session_start();

    $arquivo = fopen('../../app_help_desk/chamada.hd','a');
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descrição = str_replace('#', '-', $_POST['descrição']);

    if($_POST['titulo'] == NULL || $_POST['descrição'] == NULL){
        header('Location: abrir_chamado.php');
    }else{
        $texto = $_SESSION['id']. '#'. $titulo .'#'. $categoria .'#'. $descrição . PHP_EOL;
        fwrite($arquivo, $texto);
        header('Location: home.php');
    }
    
    fclose($arquivo);

?>