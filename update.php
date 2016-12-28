<?php

$connect= mysql_connect("localhost", "root", "");
mysql_select_db("phpmyadmin", $connect);
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $connect);
$result=mysql_query("update dontes_smp set FOI= ' ". $_POST["FOI"] . "' where Job_ID=" . $_POST["Job_ID"], $connect);
if($result===false){
    var_dump(mysql_error($connect));
}
header("Location: http://localhost/koltsegvetes");
