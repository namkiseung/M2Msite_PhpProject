<?php

$db = mysql_connect('127.0.0.1', 'root', '0000');
mysql_select_db('developer');


function mq($sql){
	global $db;
	return $db->query($sql);
	?>
