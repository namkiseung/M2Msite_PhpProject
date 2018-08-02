<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 메인 메뉴의 '인증하기'로직에서 게시판의 글 삭제할때 처음뜨는 로직
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php
    //데이터 베이스 연결하기
    include "db_info.php";

    $query = "SELECT pass FROM threadboard WHERE id=$_GET[id]";
    $result=mysql_query($query, $conn);
    $row=mysql_fetch_array($result);

    if ($_POST[pass]==$row[pass] )
    {
        $query = "DELETE FROM threadboard WHERE id=$_GET[id] ";
        $result=mysql_query($query, $conn);
    }
    else
    {
        echo ("
        <script>
        alert('비밀번호가 틀립니다.');
        history.go(-1);
        </script>
        ");
        exit;
    }
?>
<center>
<meta http-equiv='Refresh' content='0; URL=index.php?page=prove'>
<FONT size=2 >삭제되었습니다.</font>

