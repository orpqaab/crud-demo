<?php

$connect=mysql_connect("localhost", "root", "");
mysql_select_db("phpmyadmin");
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $connect);
$jobid=$_POST['Job_ID'];
$vezeteknev=$_POST['Vezeteknev'];
$sql=" SELECT dontes_smp.Job_ID , dontes_smp.Vezeteknev , dontes_smp.Keresztnev , dontes_smp.FOI FROM dontes_smp WHERE dontes_smp.Job_ID like '%".$jobid."%' AND dontes_smp.Vezeteknev like '%".$vezeteknev."%'";
$result=mysql_query($sql, $connect);

