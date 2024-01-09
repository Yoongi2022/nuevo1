
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Administrar clientes</title>
</head>
<body>
    <form action="" method="POST">
    <label for="">id</label>
    <input type="text"name="id"><br>
    <label> Estado </label>
    <input type="text" name="estado"><br>
    <label> Clientes </label>
    <input type="text" name="clientes"><br>
    <label> Empresa </label>
    <input type="text" name="empresa"><br> <br>
    <input type="submit" name="insertar" value="INSERTAR">
    <input type="submit" name="consultar" value="CONSULTAR">
    <input type="submit" name="actualizar" value="ACTUALIZAR">
    <input type="submit" name="eliminar" value="ELIMINAR"><br>

    <?php
    $server="localhost";
    $user="root";
    $pass="your_password";
    $db="clientes"
    $conexion = new mysqli($server,$user,$pass,$db);
    if($conexion->connect_errno){
        die("conexion fallida".$conexion->connect_errno)
    }
    $id=$_POST['id'];
    $id=$_POST['estado'];
    $id=$_POST['clientes'];
    $id=$_POST['empresa'];

    if(isset($_POST['insertar'])){
        $insertar="INSERT INTO clientes (estado,clientes,empresa) VALUES ('$estado','$clientes','$empresa')";
        $sql=mysqli_query($conexion,$insertar);
    }
    if(isset($_POST['consultar'])){
        $consultar="SELECT * FROM clientes";
        $sql=mysqli_query($conexion,$consultar);
        while($ver=mysqli_fetch_array($sql)){
            echo "<br>";
            echo $ver['id'];
            echo " ";
            echo $ver['estado'];
            echo " ";
            echo $ver['clientes'];
            echo " ";
            echo $ver['empresa'];
            echo "<br><hr>";
        }
    }
    if(isset($_POST['actualizar'])){
       $actualizar="UPDATE clientes SET estado='$estado',clientes='$clientes',empresa='$empresa' WHERE id='$id' ";
       $sql=mysqli_query($conexion,$actualizar);
    }
    if(isset($_POST['eliminar'])){
        $eliminar="DELETE FROM clientes WHERE id='$id'";
        $sql=mysqli_query($conexion,$eliminar);
    }
    ?>
</form>
</body>
</html>
