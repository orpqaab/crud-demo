<?php
$dsn = 'mysql:host=localhost;dbname=test';
$username = 'root';
$password = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
); 

$dbh = new PDO($dsn, $username, $password, $options);
$stmt=$dbh->prepare("insert into test (nev) values (:nev)");
$stmt->execute($_POST);
if($result===false){
    var_dump(mysql_error($connect));
}
header("Location: http://localhost/koltsegvetes");