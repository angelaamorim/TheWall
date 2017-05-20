<?php
    define("USUARIO", "./bd/usuario.txt");
    define("AREA", "./bd/area.txt");

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

    function criarUsuario($nome,$sobrenome,$email,$cargo, $area, $intervalo){
        return array(
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
            'email' => $email,
        );
    }
?>