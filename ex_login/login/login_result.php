<?php
session_start();

$id = $_POST["id"];
$pw = $_POST["pass"];

// require_once(../login/l); //DB통과 조건경로
// $pdo = db_connect();
$conn = mysql_connect('127.0.0.1', 'root','0000');
	mysql_select_db('developer', $conn);

try{
	$sql = "SELECT * FROM member WHERE id=? ";
	$stmh = $pdo->prepare($sql);
	$stmh->bindValue(1, $id, PDO::PARAM_STR);
	$stmh->execute();

	$count = $stmh->rowCount();	
}catch(PDOException $Exception){
	print "오류: ".$Exception->getMessage();
}
$row=$stmh->fetch(PDO::FETCH_ASSOC);

if($count<1){//일치하는 아이디 없으면
?>
<script type="text/javascript">
	alert("아이디를 확인하세요");
	history.back(-1);
</script>
<?php
}else if($pw!=$row["pass"]){
?>
<script type="text/javascript">
	alert("비밀번호를 확인하세요");
	history.back(-1);
</script>
<?php

}else{
	$_SESSION["userid"]=$row["id"];
	$_SESSION["name"]=$row["name"];
	$_SESSION["nick"]=$row["nick"];
	$_SESSION["level"]=$row["level"];

	header("Location:http://127.0.0.1/M2M/M2Msite/index.php");
	exit;
}
?>