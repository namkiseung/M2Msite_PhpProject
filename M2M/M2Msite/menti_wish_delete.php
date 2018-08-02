<?php
session_start();
#1. 데이터베이스 연결 
include 'db_info.php';

$idx = $_GET['idx'];


#3 담은 변수 값을 로그인한 사용자의 wish_menti_list 라는 테이블에 담아두기
$query = "DELETE FROM wish_menti_list WHERE idx = $idx";
mysql_query($query, $conn);

?>
<!-- 저장이 끝난 후 이전페이지로 돌아가기 -->
<script type="text/javascript">window.history.go(-1);</script>
	
