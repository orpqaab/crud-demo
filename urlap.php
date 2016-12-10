<?php

$connect=mysql_connect("localhost", "root", "");
var_dump($connect);
mysql_select_db("test");
$result=mysql_query("select test.id , test.nev , phones.tel from test left join phones on test.id=phones.user_id", $connect);


