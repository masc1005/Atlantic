<?php


            include '../class/Conect.php';//incluindo o codigo de conexão
            
            $con = getCon();//instancia da conexão

            $cpf = $_POST['cpf'];//criando variaveis atraves de parametros

            $sql1 = "DELETE * FROM reserva Where cpf = :cp"; //deletando dados do banco na tabela reserva
            $sql2 = "DELETE * FROM servicos Where cpfserv = :cp";//deletando dados do banco na tabela servicos
            $sql3 = "DELETE * FROM reclamac Where cpfrec = :cp";//deletando dados do banco na tabela reclamc

            $stmt = $con->prepare($sql1);
            $stmt->bindParam(":cp",$cpf);
            $stmt->execute();
            

            $stmt = $con->prepare($sql2);
            $stmt->bindParam(":cp",$cpf);
            $stmt->execute();
            

            $stmt = $con->prepare($sql3);
            $stmt->bindParam(":cp",$cpf);
            $stmt->execute();

            
            if($stmt->rowCount()>0){
                echo 'fsdafe';
            }else{
                echo '1531351';
            }

        ?>