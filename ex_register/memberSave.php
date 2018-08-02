<?php
 include 'db_info.php';

 $memberId=$_POST['memberId'];
 $memberPw=md5($_POST['memberPw']);
 $memberName=$_POST['memberName'];
 $memberEmailAddress=$_POST['memberEmailAddress'];
 $hobbySelect=$_POST['hobbySelect'];
 
 $sql = "INSERT INTO ('memberId', 'name', 'password', 'eMail', 'hobby') VALUES('$memberId','$memberName','$memberPw','$memberEmailAddress','$hobbySelect')";
 mysql_query($sql);
?>