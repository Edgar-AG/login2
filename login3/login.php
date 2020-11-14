<html>
<head>
<title>Login</title>
<style>
h1{text-align:center;
}
table{
	width:25%;
	background-color: #FFC;
	border: 2px dotted #F00;
	margin:auto;
}
.izq{text-align:right;
}
.der{text-align:left;
}
td{
text-align:center;
padding:10px;
}
</style>
</head>
<body>
<h1> INICIAR SESION </h1>
<form action="a.php" method="post">
<table>
<tr>
<td class="izq">
Usuario:</td><td class="der"><input type="text" name="login"></td></tr>
<tr><td class="izq">Contraseña:</td><td class="der"><input type="password" name="password"></td></tr>
<tr><td colspan="2"><input type="submit" name="enviar" value="Iniciar Sesion"></td></tr></table></form>
<h1>O</h1>
<h1>REGRISTARSE</h1>
<form action="a3.php" method="post">
<table>
<tr><td class="izq">
Usuario:</td><td class="der"><input type="text" name="nom"></td></tr>
<tr><td class="izq">Contraseña:</td><td class="der"><input type="password" name="pass"></td></tr>
<tr><td colspan="2"><input type="submit" name="enviar2" value="Regristarse"></td></tr></table></form>
</body>
</html>