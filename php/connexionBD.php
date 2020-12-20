<?php 
    $bd=null;
    $dsn='mysql:host=localhost;dbname=gestu';
    $dbuser='root';
    $pw='';
        try
        {
            $bd = new PDO($dsn,$dbuser,$pw);
            $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            echo ('Connexion non établi: ' . $e->getMesasge());
        }
        
        $bd->query("SET NAMES UTF8");
        return $bd;
    ?>