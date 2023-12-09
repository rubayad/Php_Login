<?php
/*

*/

define('DB_SERVER', '172.31.22.43');
define('DB_USERNAME', 'Rubayad200550045');
define('DB_PASSWORD', 'DW3YsyvRqh');
define('DB_NAME', 'Rubayad200550045');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    die('Error: Cannot connect');
}

?>
