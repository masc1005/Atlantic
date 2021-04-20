<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ATLANTIC</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.min.css'> <!--link css bootstrap-->
    <link rel='stylesheet' type='text/css' media='screen' href='../css/main.css'>
</head>
<body>
    

    <div class="row bg-info">
        <div class="col-md-12 text-center">
            <img src="../img/logo.png" class="brand-logo" width="175">  <!-- logo e header-->
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-4">

        </div>
        <!--form para login -->
        <div class="col-md-4 text-center">

        <form method="POST" action="../control/delete.php">
            <h1>Dados do cliente</h1>
            <?php

            include '../class/Conect.php'; //incluindo o codigo de conexão 

            $con = getCon(); //instancia da conexão

            $cpf = $_POST['cpf'];
            $sql1 = "SELECT * FROM reserva Where cpf = :cp"; //chamando os dados do banco na tabela reserva
            $sql2 = "SELECT * FROM servicos Where cpfserv = :cp"; //chamando os dados do banco na tabela servicos
            $sql3 = "SELECT * FROM reclamac Where cpfrec = :cp"; //chamando os dados do banco na tabela reclamac

            $stmt = $con->prepare($sql1); //buscando os dados
            $stmt->bindParam(":cp",$cpf); //validando parametro
            $stmt->execute(); //executando 

            $result = $stmt->fetchAll(); // convertendo todos os textos em array's

            foreach($result as $value){
                echo "<b>".'CPF : '."<b>".$value['cpf']."<br>";
                echo "<b>".'Nome : '."<b>".$value['nome']."<br>";
                echo "<b>".'Entrada : '."<b>".$value['dat']."<br>";
                echo "<b>".'Quarto : '."<b>".$value['quarto']."<br>";
                echo "<b>".'Qtd de Pessoas : '."<b>".$value['pessoas']."<br>";
                //exibindo dados guardados
            }

            $stmt = $con->prepare($sql2);//buscando os dados
            $stmt->bindParam(":cp",$cpf);//validando parametro
            $stmt->execute(); //executando 

     

            $result = $stmt->fetchAll();// convertendo todos os textos em array

        foreach($result as $value){
            echo "<b>".'Produto : '."<b>".$value['produto']."<br>";
            echo "<b>".'Quantidade : '."<b>".$value['quatidade']."<br>";
            echo "<b>".'Valor : '."<b>".$value['valor']."<br>";
             //exibindo dados guardados
        }

        $stmt = $con->prepare($sql3); //buscando os dados
        $stmt->bindParam(":cp",$cpf);//validando parametro
        $stmt->execute(); //executando 

     

        $result = $stmt->fetchAll();// convertendo todos os textos em array

        foreach($result as $value){
            echo "<b>".'Reclamação : '."<b>".$value['reclama']."<br>";
             //exibindo dados guardados
        }

        ?>
        <br>
            <div class="form-group encerra">
                    <label for="exampleInputEmail1">Confirme CPF</label>
                    <input type="text" class="form-control text-center" name="cpf">
                </div>
            <button type="submit" class="btn btn-primary bg-info border-0">Encerrar</button>
        </form>
        </div>
    </div>
    <!-- confirmação de fim da estadía -->

        <div class="col-md-4">
            
        </div>
    </div>
    <script src='../js/jquery-3.4.1.min.js'></script><!--link bootstrap jQuery-->
    <script src='../js/bootstrap.min.js'></script><!--link bootstrap JavaScript-->
</body>
</html>

