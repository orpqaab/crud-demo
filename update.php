<?php

$connect= mysql_connect("localhost", "root", "");
mysql_select_db("test", $connect);
$result=mysql_query("update test set nev= ' ". $_POST["nev"] . "' where id=" . $_POST["id"], $connect);
if (mysql_num_rows(mysql_query("select user_id from phones where user_id= " . $_POST["id"],$connect))){
    $result=mysql_query("update phones set tel= ' ". $_POST["tel"] . "' where user_id=" . $_POST["id"],$connect);
}
else $result=mysql_query("insert into phones (tel,user_id) values ( ' ". $_POST["tel"] ."',".$_POST["id"].")",$connect);
if($result===false){
    var_dump(mysql_error($connect));
}
echo "fasz";
header("Location: http://localhost/szargep");
