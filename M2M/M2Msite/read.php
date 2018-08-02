<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 메인 홈페이지 자유게시판의 글 읽을때 로직 
///////////////////////////////////////////////////////////////////////////////////////////-->
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->

<link rel="stylesheet" type="text/css" href="includefile/style.css" />  
<link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">


<?php
include('includefile/header.php');
?>
<style>
.button { height:50px; width:100px;  background-color: #f8585b;  border: none; border-radius: 10px;  color:#fff; padding: 0px 0;  text-align: center; text-decoration: none;  display: inline-block;  font-size: 15px;  margin: 4px;  cursor: pointer;}
    .button:hover {    background-color: blue;}

td {font-size : 9pt;}
A:link {font : 9pt; color : black; text-decoration : none;
font-family : 굴림; font-size : 9pt;}
A:visited {text-decoration : none; color : black; font-size : 9pt;}
A:hover {text-decoration : underline; color : black; 
font-size : 9pt;}

</style>
</head>

<body topmargin=0 leftmargin=0 text=#464646>

<center>
<BR>
<?php
    //데이터 베이스 연결하기
    include "db_info.php";

    $id = $_GET[id];
    $no = $_GET[no];
    // 글 정보 가져오기
    $result=mysql_query("SELECT * FROM board WHERE id=$id", $conn);
    $row=mysql_fetch_array($result);    
?>
<table width=580 border=0 cellpadding=2 cellspacing=1
bgcolor=#777777 class="table table-bordered">
<tr>
    <td height=30 colspan=4 align=center bgcolor=#999999>
        <font color=white><B><h2>글 제목 : <?=$row[title]?></h2></B></font>
    </td>
</tr>
<tr>
    <td width=50 height=50 align=center bgcolor=#EEEEEE>글쓴이</td>
    <td width=240 bgcolor=white><?=$row[name]?></td>
    <td width=50 height=50 align=center bgcolor=#EEEEEE>이메일</td>
    <td width=240 bgcolor=white><?=$row[email]?></td>
</tr>
<tr>
    <td width=50 height=50 align=center bgcolor=#EEEEEE>
    날&nbsp;&nbsp;&nbsp;짜</td><td width=240
    bgcolor=white><?=$row[wdate]?></td>
    <td width=50 height=50 align=center bgcolor=#EEEEEE>조회수</td>
    <td width=240 bgcolor=white><?=$row[view]?></td>
</tr>
<tr>
    <td bgcolor=white colspan=4>
    <font color=black>
    <pre><?=$row[content]?></pre>
    </font>
    </td>
</tr>
<!-- 기타 버튼 들 -->
<tr>
    <td colspan=4 bgcolor=#FFFFFF>
    <table width=800 class="table table-bordered" >
        <tr>
            <td width=200 align=left height=50 colspan="2">
                <button class="button"><a href=home.php><font color=white>
                목록보기</font></a></button><!-- 
                <button><a href=index.php?id=<?=$id?>><font color=black>
                [글쓰기]</font></a></button> -->
                <button class="button"><a href=edit.php?id=<?=$id?>><font size="4pt" color=white>
                수정</font></a></button>
                <a href=predel.php?id=<?=$id?>>
                <button class="button"><font color=white size="4pt">삭제</font></a></button>
            </td>
            <!-- 기타 버튼 끝 -->
            <!-- 이전 다음 표시 -->
            <td align=right>
<?php
    // 현재 글보다 id 값이 큰 글 중 가장 작은 것을 가져온다. 삭제됬을때를 생각해서 이렇게 구현함
    // 즉 바로 이전 글 ORDER BY id ASC가 함축됨 즉 오름차순으로 정렬되있음
    $query=mysql_query("SELECT id FROM board WHERE id >$id LIMIT 1", 
    $conn);
    $prev_id=mysql_fetch_array($query);

    if ($prev_id[id]) // 이전 글이 있을 경우
    {
        echo "<button class='button'><a href=read.php?id=$prev_id[id]>
        <font color=white>이전</font></a></button>";
    }
    else
    {
        
    }

    //내림차순으로 정렬하고 작은 것 한개 가져옴
    $query=mysql_query("SELECT id FROM board WHERE id <$id 
    ORDER BY id DESC LIMIT 1", $conn);
    $next_id=mysql_fetch_array($query);

    if ($next_id[id])
    {
        echo "<button class='button'><a href=read.php?id=$next_id[id]>
        <font color=white>다음</font></a></button>";
    }
    else
    {
       
    }
?>
            </td>
        </tr>
    </table>
    </b></font>
    </td>
</tr>
</table>
</center>
<?php
include('includefile/bodyform.php');
include('includefile/introfooter.php');
include('includefile/footer.php');
?>
</body>
</html>


<?php

/*
파일을 이용한 쿠기값 저장
$count = file('count.txt');
$count = chop($count[0]);
setcookie('ip', $REMOTE_ADDR);
if(!$ip){
    $count++;
    $fp = fopen('count.txt', 'w');
    fwrite($fp, '$count');
    fclose($fp);
    

}else{

}*/
    // 조회수 업데이트
    $result=mysql_query("UPDATE board SET view=view+1 WHERE id=$id", $conn);        

    mysql_close($conn);
?>