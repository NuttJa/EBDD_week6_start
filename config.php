<?php
$db_host = "localhost";
$db_user = "mycompany";
$db_password = "student";
$db_name = "mycompany";


$conn =mysqli_connect($db_host,$db_user,$db_password,$db_name);

if(!$conn)
{
    echo "disconnect";
}

?>