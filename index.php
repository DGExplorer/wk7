<?php
//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);

$dsn = 'mysql:dbname=dg457;host=sql1.njit.edu';
$user = 'dg457';
$password = 'xx0YWWEe';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully<br>";
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

//printing the number of records where it is less than six
$sql = "SELECT * FROM accounts WHERE id <6";
$statement = $dbh->prepare($sql);
$statement =->bindValue(':id');
$num_row = $statement->fetchColumn(); {
    echo $num_row . " records returned<br>";}

?>