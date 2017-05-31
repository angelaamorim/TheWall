<?php
    define("USUARIO", "./bd/usuario.txt");
    define("AREA", "./bd/area.txt");
    define("HORARIO", "./bd/horario.txt");
    define("USUARIOSIMPLES", "./bd/usuariosimples.txt");
    define("WHITELIST", "./bd/whitelist.txt");
    define("BLACKLIST", "./bd/blacklist.txt");
    
    function salvar($registro,$arquivo){
        $registros = ler($arquivo);
        $registros[] = $registro;
        $handle = fopen($arquivo, 'w');
        if (!$handle){
            return false;
        }
        fwrite($handle, serialize($registros));
        fclose($handle);
        return true;
    }

    function ler($arquivo){
        $registros = unserialize(@file_get_contents($arquivo));
        return is_array($registros)?$registros:array();
    }
    
    function lerWhitelist($arquivo){
        $file = fopen(WHITELIST, "r");
        while(!feof($file)){
            $site = fgets($file);
            echo "<tr>";
            echo "<td>  $site</td>";
            echo "</tr>";
        }
        
    }
    function lerBlacklist($arquivo){
        $file = fopen(BLACKLIST, "r");
        while(!feof($file)){
            $site = fgets($file);
            echo "<tr>";
            echo "<td>  $site</td>";
            echo "</tr>";
        }
        
    }
    function lerBlacklistAltera($arquivo){
        $file = fopen(BLACKLIST, "r");
        while(!feof($file)){
            $site = fgets($file);
            echo "$site";
        }
        
    }
    function lerWhitelistAltera($arquivo){
        $file = fopen(WHITELIST, "r");
        while(!feof($file)){
            $site = fgets($file);
            echo "$site";
        }
        
    }
    function salvarWhitelistAlterar($arquivo,$conteudo){
        $gravar = fopen(WHITELIST, "w+");
        fwrite($gravar, $conteudo);
        fclose($gravar);
    }
    function salvarBlacklistAlterar($arquivo,$conteudo){
        $gravar = fopen(BLACKLIST, "w+");
        fwrite($gravar, $conteudo);
        fclose($gravar);
    }

    function criarUsuario($codigo, $nome,$sobrenome,$email,$cargo, $area, $intervalo){
        return array(
            'codigo' => $codigo,
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'email' => $email,
            'cargo' => $cargo,
            'area' => $area,
            'intervalo' => $intervalo
        );
    }

    function Ordenar($a, $b) {
        return $a['email'] > $b['email'];
    }
    function criarArea($nome, $supervisor, $email){
        return array(
            'nome' => $nome,
            'supervisor' => $supervisor,
            'email' => $email
        );
    }
    function criarHorario($horario, $descricao){
        return array(
            'horario' => $horario,
            'descricao' => $descricao
        );
    }
    function criarUsuarioSimples($nome,$sobrenome,$email,$senha){
        return array(
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'email' => $email,
            'senha' => $senha
        );
    }
?>