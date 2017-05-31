<?php
    require_once './biblioteca.php';
    if($_POST){
        $whitelist = $_POST['whitelist'];
        salvarWhitelistAlterar(WHITELIST, $whitelist);
        echo "<h3 class='ok'>Whitelist alterada com sucesso...</h3>";
        include_once 'listaWhitelist.php';
    }
    
?>
