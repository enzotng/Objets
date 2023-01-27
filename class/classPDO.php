<?php
function  connecterALaBase()
{
    $user = 'root';
    $pass = '';
    $hote = 'localhost';
    $port = '8080';
    $base = 'bddanimal';
    $dsn="mysql:$hote;port=$port;dbname=$base";
 
    try {
        $dbh = new PDO($dsn, $user, $pass);
        $dbh->exec("Set character set utf8");
        $dbh->query("Set character set utf8");
    }
    catch (PDOException $e){
        die("Erreur! :" . $e->getMessage());
    }
    return $dbh;
     
    $query->closeCursor();
}
?>