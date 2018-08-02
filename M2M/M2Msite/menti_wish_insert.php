<?php
session_start();
#1. 데이터베이스 연결 
include 'db_info.php';

#2 전 페이지로 부터 저장할 정보 변수에 담기
#(프로필, 아이디, 이메일, 경력, 소개)

$wish_profile = $_GET['wish_profile'];
$wish_user = $_GET['wish_user'];
$wish_email = $_GET['wish_email'];
$wish_sns = $_GET['wish_sns'];
$wish_introduce = $_GET['wish_introduce'];

#3 담은 변수 값을 로그인한 사용자의 wish_menti_list 라는 테이블에 담아두기
$query = "INSERT INTO wish_menti_list (name , introduce, email, sns, login_user, profile) VALUES ('".$wish_user."','".$wish_introduce."','".$wish_email."','".$wish_sns."', '".$_SESSION[username]."', '".$wish_profile."')";
mysql_query($query, $conn);

?>
<!-- 저장이 끝난 후 이전페이지로 돌아가기 -->
<script type="text/javascript">window.history.go(-1);</script>
	
