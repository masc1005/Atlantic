<?php

    include '../class/Conect.php';

    $con = getCon(); //instanciando conexão 

    //buscando parametros
    $cpf = $_POST['cpfs'];
    $nome = $_POST['produto'];
    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];

    $sql = 'INSERT INTO servicos (cpfserv,produto,quantidade,valor) VALUES (?,?,?,?)'; //inserindo valores 


    $stmt = $con->prepare($sql);


    //inserindo valores atraves de parametros
    $stmt->bindParam(1,$cpf);
    $stmt->bindParam(2,$nome);
    $stmt->bindParam(3,$quantidade);
    $stmt->bindParam(4,$valor);
    
    if($stmt->execute()){
        header ('location: ../view/alternativo.html');
    }else{
        echo "errooooe!";
    }
