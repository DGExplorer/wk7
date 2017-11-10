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

//printing the number of records where is is less than six
$sql = "SELECT * FROM accounts WHERE id <6";
$result = $dbh->query($sql);
if ($dbh->query($sql){
$num_row = $result->fetchColumn(); {
    echo $num_row . " records returned<br>";}

?>