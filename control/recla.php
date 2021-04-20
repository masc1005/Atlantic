<?php

    include '../class/Conect.php';

    $con = getCon(); //instanciando conexão

    $cpf = $_POST['cpfrec']; // buscando parametros
    $rec = $_POST['reclama']; 

    $sql = 'INSERT INTO reclamac (cpfrec,reclama) VALUES (?,?)'; //inserindo dados na tabela de reclamac

    $stmt = $con->prepare($sql); 
    
    //inserindo valores atraves de parametros
    $stmt->bindParam(1,$cpf); 
    $stmt->bindParam(2,$rec);

    if($stmt->execute()){
        header ('location: ../view/alternativo.html');
    }else{
        echo "errooooe!";
    }
