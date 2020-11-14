<html>
<head>
<title></title>
</head>
<body>
    <?php
    $conexion=mysqli_connect("localhost","root","1234567890","pruebas") or die("Problemas en la conexion");
    mysqli_query($conexion, "insert into usuarios_pass (USUARIOS,PASSWORD) 
    values ('$_REQUEST[nom]','$_REQUEST[pass]') ")
    or die("Problemas en el select: ".mysqli_error($conexion));
    if($conexion){
        echo "Se agregaron los datos";
    }else{
        echo "No se agregaron los datos";
    }
    mysqli_close($conexion);
    ?><br>
    <a href="login.php"><input type="button" value="Regresar"</a>
</body>
</html>