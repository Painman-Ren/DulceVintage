<?php 


require 'database_connect.php';

$correo= $_POST["correo"];
$correo_ver= $_POST["correo_ver"];
$password= $_POST["password"];
$password_ver=$_POST["password_ver"];
if ($correo===""||$password===""||$password_ver===""||$username==="") {
	echo "Favor de llenar todos los campos";
}elseif (!strpos($correo, "@")) {
	echo "Favor de introducir un correo en el campo de correo";
}
elseif($password_ver!=$password){
	echo "Las contraseñas no coinciden";
}else{
	if(isset($conn)){
		$query = 'INSERT INTO mst_persona (  mst_persona_correo, mst_persona_password, mst_persona_username ) VALUES ( \''. $correo.'\',\''.$password.'\',\''.$username.'\')';
		$result = $conn->query($query);
		if(($conn->error)==='Duplicate entry \''. $correo.'\' for key \'mst_persona_correo\''){
			echo "Ya existe un usuario con ese correo";
		}elseif (!$result ) {
			echo "Error al realizar el registro";
		}
		else{
			echo "<span style=\" color: #FF9975 \" >Usuario creado exitosamente</span>";
		}
	}
	else{
		echo "Error al conectar con la base de datos";
	}}
mysqli_close($conn);
?>