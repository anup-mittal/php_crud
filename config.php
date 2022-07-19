<?php
if(strtoupper($_SERVER['HTTP_HOST'])=='LOCALHOST')
{
    $host = 'localhost:3306';
    $user = 'root';
    $pass = '';
    $db_name='test';
}

$db_conn = new mysqli($host, $user, $pass, $db_name);  
if(! $db_conn )  
{  
    echo "DB connection not working";
}
?>