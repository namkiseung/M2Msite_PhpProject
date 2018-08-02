<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 멘토멘티 찾기 게시판 로직(멘티)
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php
include 'db_info.php';

$page_size=5;

# 2. 페이지 나누기에 표시될 페이지의 수
// $no는 페이지가 시작되는 첫 글의 순번이다.
$page_list_size = 10;
$no = $_GET[no];
if (!$no || $no <0) $no=0;

// 데이터베이스에서 페이지의 첫번째 글($no)부터 
// $page_size 만큼의 글을 가져온다.
$query = "SELECT * FROM menti_list ORDER BY idx DESC";
$result = mysql_query($query, $conn);


// 총 게시물 수 를 구한다.
$result_count=mysql_query("SELECT count(*) FROM menti_list",$conn);
$result_row=mysql_fetch_row($result_count);
$total_row = $result_row[0];

?>