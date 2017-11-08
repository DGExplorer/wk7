<?php
$dsn = 'mysql:dbname=dg457;host=sql1.njit.edu';
$user = 'dg457';
$password = 'xx0YWWEe';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
$sql = "CREATE TABLE users10 (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP
	)";
try {

    $dbh->exec($sql);
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
echo 'done';
?>