<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 메인 메뉴의 '인증하기'로직에서 게시판의 글(댓글) 저장할때 로직
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php
    //데이터 베이스 연결하기
    include "db_info.php";

    
    $prev_parent_thread = ceil($_POST[parent_thread]/1000)*1000 - 1000;//ceil는 올림함수인것을 잊지말자.

    //원본글보다는 작고 위값보다는 큰 글들의 thread 값을 모두 1씩 낮춘다.
    //만약 부모글이 2000이면 prev_parent_thread는 1000이므로 2000> x >1000 인 x값을 모두 -1을 한다.
    //만약 부모글이 1950이면 prev_parent_thread는 1000이므로 1950> x >1000 인 x값을 모두 -1을 한다. 
    $query = "UPDATE threadboard SET thread=thread-1 WHERE 
    thread >$prev_parent_thread and thread <$_POST[parent_thread]";
    $update_thread = mysql_query($query, $conn);

    //원본글보다는 1작은 값으로 답글을 등록한다.
    //원본글의 바로 밑에 등록되게 된다.
    //depth는 원본글의 depth + 1 이다. 원본글이 3(이글도 답글이군)이면 답글은 4가된다.
    $query = "INSERT INTO threadboard (thread,depth,name,pass,email";
    $query .= ",title,view,wdate,ip,content)";
    $query .= " VALUES ('" . ($_POST[parent_thread]-1) . "'";
    $query .= ",'" . ($parent_depth+1) ."','$_POST[name]','$_POST[pass]','$_POST[email]'";
    $query .= ",'$_POST[title]',0, UNIX_TIMESTAMP(),'$_SERVER[REMOTE_ADDR]'";
    $query .= ",'$_POST[content]')";
    $result=mysql_query($query, $conn);

    //데이터베이스와의 연결 종료
    mysql_close($conn);

    // 새 글 쓰기인 경우 리스트로..
    echo ("<meta http-equiv='Refresh' content='0; URL=index.php?page=prove'>");
?>
<center>
<font size=2>정상적으로 저장되었습니다.</font>

