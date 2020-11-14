<?php
    $conexion=mysqli_connect("localhost","root","1234567890","pruebas");
?>
<html>
<head>
<title>Regristos</title>
<style>
.container-add{
    width:90%;
    margin: 50px auto;
}
.container__title{
    margin: 0;
    padding: 10px;
    background: rgba(184, 35, 52, 1);
    color: white;
    font-size: 1.9em;
    text-align: center;
}
.container__table{
    background: white;
    box-shadow: 0 0 20px #333;
    padding: 20px;
}
.c{
    font-size: 1.3em;
    width: 20%;
    height: 30%;
}
.container__submit2{
    background: rgba(184, 35, 52, 1);
    color: white;
    padding: 10px;
    margin: 15px auto;
    font-size: 1.1em;
    cursor: pointer;
}
</style>
</head>
<body>
<br>
<div class="container-add">
    <h2 class="container__title">Regristos</h2>
    <table class="container__table" border="1">
        <tr>
            <td class="c">Nombre</td>
            <td class="c">Posicion</td>
            <td class="c">Oficina</td>
            <td class="c">Años</td>
            <td class="c">Fecha de Inicio</td>
            <td class="c">Salario</td>
        </tr>
        <?php
            $sql="SELECT * from usuarios_pass2";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td class="c"><?php echo $mostrar['Nombre'] ?></td>
            <td class="c"><?php echo $mostrar['Posicion'] ?></td>
            <td class="c"><?php echo $mostrar['Oficina'] ?></td>
            <td class="c"><?php echo $mostrar['Años'] ?></td>
            <td class="c"><?php echo $mostrar['Fecha_de_inicio'] ?></td>
            <td class="c"><?php echo $mostrar['Salario'] ?></td>
        </tr>
        <?php
        }
        ?>
        <a href="cierre.php"><input class="container__submit2" type="button" value="Cerrar Sesion"</a>
        <a href="tab.php"><input class="container__submit2" type="button" value="Agregar"</a>
    </table>
</div>        
</body>
</html>