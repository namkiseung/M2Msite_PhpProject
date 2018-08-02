<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 메인 홈페이지 명예멘토 리스트 가져와서 틀에 맞춰 보여주게 하는 로직(5행)
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php
include 'db_info.php';

// $sql = "CREATE TABLE mentor(
// idx INT(11) NOT NULL AUTO_INCREMENT,
// name VARCHAR(30) NOT NULL,
// introduce VARCHAR(150) NOT NULL,
// email VARCHAR(80) NOT NULL,
// sns VARCHAR(30) NULL,
// profile VARCHAR(100) NULL,
// PRIMARY KEY(idx)
// )";
// mysql_query($sql, $con);

# LIST 설정
# 1. 한 페이지에 보여질 게시물의 수
$page_size=5;

# 2. 페이지 나누기에 표시될 페이지의 수
// $no는 페이지가 시작되는 첫 글의 순번이다.
$page_list_size = 10;
$no = $_GET[no];
if (!$no || $no <0) $no=0;

// 데이터베이스에서 페이지의 첫번째 글($no)부터 
// $page_size 만큼의 글을 가져온다.
$query = "SELECT * FROM mentor ORDER BY idx DESC";
$result = mysql_query($query, $conn);


// 총 게시물 수 를 구한다.
$result_count=mysql_query("SELECT count(*) FROM mentor",$conn);
$result_row=mysql_fetch_row($result_count);
$total_row = $result_row[0];
//결과의 첫번째 열이 count(*) 의 결과다.
//mysql_fetch_row 쓰면 $result_row[0] 처럼 숫자를 써서 접근을 해야한다. 

# 총 페이지 계산
# ceil는 올림이다. 
//if ($total_row <= 0) $total_row = 0;
//$total_page = ceil($total_row / $page_size);//1개면

# 현재 페이지 계산
# no 변수는 0부터 시작해서 +1을 해줌.
//$current_page = ceil(($no+1)/$page_size);

?>