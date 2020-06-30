<?php 


$db['db_host'] = "localhost";
$db['db_user'] = "master";
$db['db_password'] = "from122";
$db['db_name'] = "cms";

foreach($db as $key => $value){

	define(strtoupper($key), $value);

}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if($connection){

	

} 


?>
