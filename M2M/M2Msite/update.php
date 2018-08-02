<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 메인 홈페이지 자유게시판에서 글 수정하고 데이터베이스에서 수정한 값 때려넣는 로직
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php
    //데이터 베이스 연결하기
    include "db_info.php";
    $id = $_GET[id];
    $name = $_POST[name];
    $pass = $_POST[pass];
    $email = $_POST[email];
    $title = $_POST[title];
    $content = $_POST[content];

    // 글의 비밀번호를 가져온다.
    $query = "SELECT pass FROM board WHERE id=$id";
    $result=mysql_query($query, $conn);
    $row=mysql_fetch_array($result);

    //입력된 값과 비교한다.
    if ($pass==$row[pass]) { //비밀번호가 일치하는 경우
        $query = "UPDATE board SET name='$name', email='$email',
        title='$title', content='$content' WHERE id=$id";//업데이트 쿼리문
        $result=mysql_query($query, $conn);       
    }
    else { // 비밀번호가 일치하지 않는 경우
        echo ("
        <script>
        alert('비밀번호가 틀립니다.');
        history.go(-1);
        </script>
        ");
        exit;//반드시 exit를 써줘야됨. 안그러면 아래의 코드가 실행이됨.
    }

    //데이터베이스와의 연결 종료
    mysql_close($conn);

    //수정하기인 경우 수정된 글로..
    echo ("<meta http-equiv='Refresh' content='1; 
    URL=http://127.0.0.1/M2M/M2Msite/home.php'>");    
?>
<center>
<!-- <font size=2>정상적으로 수정되었습니다.</font> -->
<script type="text/javascript">alert('수정되었습니다.');</script>
<!-- 출처: http://gakari.tistory.com/entry/PHP-MYSQL과-PHP를-이용한-간단한-게시판-만들기?category=480575 [가카리의 공부방] -->