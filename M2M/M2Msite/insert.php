<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 멘토멘티 자유게시판 글 저장 하는 로직
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php
    //데이터 베이스 연결하기
    include "db_info.php";

    $id = $_GET[id];
    $name = $_POST[name];
    $email = $_POST[email];
    $pass = $_POST[pass];
    $title = $_POST[title];
    $content = $_POST[content];
    $REMOTE_ADDR = $_SERVER[REMOTE_ADDR];
  //  print_r($_POST);
    $query = "INSERT INTO board 
    (name, email, pass, title, content, wdate, ip, view)
    VALUES ('$name', '$email', '$pass', '$title', 
    '$content', now(), '$REMOTE_ADDR', 0)";
    //echo $query;
    //echo '출력';
    $result=mysql_query($query, $conn) or die(mysql_error());

    //데이터베이스와의 연결 종료
    mysql_close($conn);

    // 새 글 쓰기인 경우 리스트로..
    //echo ("?");
    //1초후에 list.php로 이동함.
?>

<center>
<font size=2>정상적으로 저장되었습니다.</font>

<?php
header("Location: home.php"); 
?> 