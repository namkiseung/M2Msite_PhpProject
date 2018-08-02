<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 메인 메뉴의 '인증하기'로직에서 게시판의 글 저장할때 로직
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php
//데이터 베이스 연결하기
include "db_info.php";

//Thread 값을 계산한다. 여기서 max는 테이블에서 가장 큰 Thread 값을 가져오라는 뜻이다.
$query = "SELECT max(thread) FROM threadboard";
$max_thread_result = mysql_query($query, $conn);
$max_thread_fetch = mysql_fetch_row($max_thread_result);


//만약에 2000번의 글이 삭제되고 1999번만 있다면?
//그럴 경우 1999/1000을 한다음에 올림을 한뒤 1000을 곱하면 2000이 된다.
//그리고 그값에 1000을 더하면 3000이 되서 새로 입력한 글의 Thread는 3000이 된다.
$max_thread = ceil($max_thread_fetch[0]/1000)*1000+1000;


//UNIX_TIMESTAMP는 유닉스 시간을 되돌려주는 MySQL 내장함수입니다.
//$_SERVER[REMOTE_ADDR]은 IP주소를 가져오는 PHP 변수
$query = "INSERT INTO threadboard (thread, depth, name, pass, email,
title, view, wdate, ip, content) 
VALUES ($max_thread, 0, '$_POST[name]', '$_POST[pass]', 
'$_POST[email]', '$_POST[title]', 0,
UNIX_TIMESTAMP(), '$_SERVER[REMOTE_ADDR]', '$_POST[content]')";
$result=mysql_query($query, $conn);

//데이터베이스와의 연결 종료
mysql_close($conn);

// 새 글 쓰기인 경우 리스트로..
echo ("<meta http-equiv='Refresh' content='0; URL=index.php?page=prove'>");

?>
<center>
<font size=2>정상적으로 저장되었습니다.</font>

