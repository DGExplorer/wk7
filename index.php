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
$sql = $dbh->prepare('SELECT * FROM accounts WHERE id <6');
$sql->execute();
echo $sql->rowCount() ." records returned<br>";

//setting up the html table
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>id</th><th>email</th><th>fname</th><th>lname</th><th>phone</th><th>birthday</th><th>gender</th><th>password</th>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }
    function current() {
        return "<td style='width; 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }
    function beginChildren() {
        echo "<tr>";
    }
    function endChildren() {
        echo "</tr>" . "\n";
    }

}

try {

//set the resulting array to associative
    $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($sql->fetchALL())) as $k=>$v) {
        echo $v; }
}

catch(PDOException $e) {
    echo "Error:" . $e->getMessage();
}
echo "</table>";
?>