<?php 

        //conexão com banco de dados

        //função de conexão        
    function getCon(){
    $dsn = 'mysql:host=localhost;dbname=atlantic';//dados para conexão
    $user = 'root';
    $pass = '';
    //testando funcionalidade
    try {
    $pdo = new PDO($dsn,$user,$pass);

    return $pdo;

    //caso tenho erro no banco
    } catch(PDOException $e){
            echo "erro com banco". $e->getMessage();


    //caso haja erro no codigo        
    } catch(Exception $e){
            echo "erro". $e->getMessage();
    }
    }
?>
