<?php
    @session_start();
        if(isset($_SESSION['usuario'])){
            $_SESSION['usuario'] = null;
            include_once 'index.html';
        }
?>
