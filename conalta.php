<html>
<body>
<?php
	$user="root";
	$pass="";
	$server="localhost";
	$db="hotel";
	$conexion=mysqli_connect($server,$user,$pass,$db) or die ("Problemas de conexion");
mysqli_query($conexion, 
	"INSERT INTO clien_alta values ('$_REQUEST[nombre]','$_REQUEST[apellido]', '$_REQUEST[email]', '$_REQUEST[asunto]', '$_REQUEST[mensaje]')") or die ("Problemas en el select".mysqli_error($conexion));
	mysqli_close($conexion);
	echo "Su mensaje ha sido enviado y sera respondido a la brevedad";
?>
<br>
<br>
</body>
</html>