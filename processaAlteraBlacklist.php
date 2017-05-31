<?php
    require_once './biblioteca.php';
    if($_POST){
        $blacklist = $_POST['blacklist'];
        salvarBlacklistAlterar(BLACKLIST, $blacklist);
        echo "<h3 class='ok'>Blacklist alterada com sucesso...</h3>";
        include_once 'listaBlacklist.php';
    }
?>
