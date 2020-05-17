<?php
    session_start();

    unset($_SESSION['auth']);
    if(!isset($_SESSION['auth'])){
        header("Location: ../index.php");
    }

?>
