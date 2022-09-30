<?php
    session_start();

    if(isset($_SESSION['usuario'])){

    
?>
<?php require_once "menu.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>categorias</title>
    </head>
    <body>
        
    </body>
</html>
<?php
    }else{
        header("location:../index.php");
    }
?>