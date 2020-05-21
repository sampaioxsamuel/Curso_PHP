<?php
      session_start();
                          
      if(!isset($_SESSION['auth']) || $_SESSION['auth'] != 'sim'){
        header("Location: ../index.php?login=autherror"); }
?>
