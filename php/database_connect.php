<?php 


$host_db='mysql.hostinger.in';
$username_db='u124195321_admin';
$password_db='Todolog0s';
$database_name_db='u124195321_dulce';

$conn= new mysqli($host_db,$username_db,$password_db,$database_name_db);
if (mysqli_connect_error()) {
	echo "Fail".mysqli_connect_error();
}



 ?>