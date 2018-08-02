<!-- /////////////////////////////////////////////////////////////////////////////////////
메인 홈페이지에 자유게시판 삭제 하기
predel로 부터 넘어와서 비밀번호 입력했을때 확인하는 로직 
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php
//데이터 베이스 연결하기
include "db_info.php";
$id = $_GET[id];
$pass = $_POST[pass];
// 해당 하는 인덱스의 정보의 비밀번호 가져오기
$result=mysql_query("SELECT pass FROM board WHERE id=$id", $conn);
$row=mysql_fetch_array($result);

if ($pass==$row[pass] )//사용자가 입력한 비밀번호 맞다면?
{
    $query = "DELETE FROM board WHERE id=$id "; //데이터 삭제하는 쿼리문
    $result=mysql_query($query, $conn); //쿼리 실행
}
else //사용자가 입력한 비밀번호 틀리면?
{
    echo ("    <script>    alert('비밀번호가 틀립니다.');    history.go(-1);    </script>    ");
    exit;
}
?>
<center>
    <meta http-equiv='Refresh' content='0; URL=http://127.0.0.1/M2M/M2Msite/home.php'>
    <script type="text/javascript">alert('삭제되었습니다.');</script>
