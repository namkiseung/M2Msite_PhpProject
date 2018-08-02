<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 메인 홈페이지 자유게시판의 게시글 작성할때 DB에 값 넣는 로직
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php
header('Content-Type: text/html; charset=utf-8');

include '127.0.0.1/M2M/M2Msite/anyboarddb.php';
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$sql = mq("insert into ANYboard(anyname,anypw,anytitle,anycontent,anydate) values('".$_POST['name']."','".$userpw."','".$_POST['title']."','".$_POST['content']."','".now()."')");
echo "<script>alert('글쓰기 완료되었습니다.');</script>"; 
?>
<meta http-equiv="refresh" content="0 url=127.0.01/M2M/M2Msite/anyboard.php" />
