<?php
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
$sql = "SELECT * FROM accounts WHERE id <6";
$result = $dbh->query($sql);
if = $dbh->query($sql)){
    $num_row = $result->fetchColumn();
    echo $num_row." records returned<br>";

    if ($result->fetchColumn()> 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>email</th>";
                echo "<th>fname</th>";
                echo "<th>lname</th>";
                echo "<th>phone</th>";
                echo "<th>birthday</th>";
                echo "<th>gender</th>";
                echo "<th>password</th>";
                



    }

}
try {

    $dbh->exec($sql);
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
echo 'done';
?>