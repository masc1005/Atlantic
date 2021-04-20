<?php

    include '../class/Conect.php';

    $con = getCon(); //instanciando conexão

    //buscando parametros 
    $cpf = $_POST['cpf']; 
    $nome = $_POST['nome'];
    $dat = $_POST['dat'];
    $quarto = $_POST['quarto'];
    $pessoas = $_POST['pessoas'];

    $sql = 'INSERT INTO reserva (cpf,nome,dat,quarto,pessoas) VALUES (?,?,?,?,?)'; //inserindo valores 

    $stmt = $con->prepare($sql);
    
    //inserindo valores atraves de parametros
    $stmt->bindParam(1,$cpf);
    $stmt->bindParam(2,$nome);
    $stmt->bindParam(3,$dat);
    $stmt->bindParam(4,$quarto);
    $stmt->bindParam(5,$pessoas);

    if($stmt->execute()){
        header ('location: ../view/alternativo.html');
    }else{
        echo "errooooe!";
    }
