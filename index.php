<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de usuario</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <script src="librerias/jquery-3.2.1.min.js"></script>
</head>
<body style="background-color: gray">
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"> </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">Sistema de ventas y
                        almacen</div>
                    <div class="panel panel-body"> </div>
                        <p>
                            <img src="img/logo.png" width="150px" height="190px" alt="">
                        </p>
                        <form id="frmlogin">
                            <label>Usuario</label>
                            <input type="text" class="form-control input-sm" 
                            name="usuario" id="usuario">
                            <label>Password</label>
                            <input type="password" name="password" id="
                            password" class="form-control input-sm">
                            <p></p>
                            <span class="btn btn-primary btn-sm">Entrar</span>
                            <a href="registro.php"class="btn btn-danger btn-sm">
                            Registrar</a>
                            <!-- <span class="btn btn-danger btn-sm">Registrar</span> -->
                        </form>
                </div>
            </div>
            <div class="col-sm-4"> </div>
        </div>
    </div>
</body>
</html>