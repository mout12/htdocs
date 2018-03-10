<?php


#phpinfo();

#db user information.
$user = 'root';
$password = '';
$db = 'testdb';


$db = new mysqli('localhost', $user, $password, $db)
    or die(" Unable to connect to database ");

echo("good job connecting to the db");
?>