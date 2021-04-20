<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ATLANTIC</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.min.css'> <!--link css bootstrap-->
</head>
<body>
    

    <div class="row bg-info">
        <div class="col-md-12 text-center">
            <img src="../img/logo.png" class="brand-logo" width="175">  <!-- logo e header-->
        </div>
    </div>


    <br><br><br><br><br><br>

    <div class="row">
        <div class="col-md-4">

        </div>
        <!--form para login -->
        <div class="col-md-4 text-center">
            <form method="POST" action="home.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Login</label>
                    <input type="text" class="form-control text-center" name="login" placeholder="LOGIN">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control text-center" name="senha" placeholder="SENHA"><br>
                </div>
                    <button type="submit" class="btn btn-primary bg-info border-0">LOGIN</button>
            </form>
        </div>

        <div class="col-md-4">
            
        </div>
    </div>
    <script src='../js/jquery-3.4.1.min.js'></script><!--link bootstrap jQuery-->
    <script src='../js/bootstrap.min.js'></script><!--link bootstrap JavaScript-->
</body>
</html>