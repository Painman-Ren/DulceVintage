<?php 


require 'database_connect.php';
$correo= $_POST["correo"];
$password= $_POST["password"];
if(isset($conn)){
	$query = 'SELECT  mst_persona_id FROM mst_persona WHERE mst_persona_correo LIKE \''.$correo.'\' AND  mst_persona_password LIKE \''.$password.'\'';
$result = $conn->query($query);
if(!$result){

echo "Error";


}
elseif(mysqli_num_rows($result)==0){
			echo "Usuario o contraseña incorrectos";
		}else{
$data=mysqli_fetch_assoc($result);
$id=$data["mst_persona_id"];
echo "<script type=\"text/javascript\">

	$.redirect('curso.php', { id: ".$id.", password: ".$password."});

 </script>	  ";


}}
mysqli_close($conn);




 ?>


