<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 멘토멘티 찾기 게시판 에서 멘티 게시판에 데이터 추가하는 로직
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php
// 디비 연결 하기
include "db_info.php";

$name=$_POST['name'];
$email=$_POST['email'];
$content=$_POST['content'];

$sql = "INSERT INTO ti_guestbook (name, email, content)
VALUES ('$name', '$email', '$content')";

$result=mysql_query($sql, $conn) or die(mysql_error());


mysql_close($conn);

header("Location: findm2m.php"); 
?>