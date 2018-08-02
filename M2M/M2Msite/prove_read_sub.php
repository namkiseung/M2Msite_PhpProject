<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 메인 메뉴의 '인증하기'로직에서 게시판의 글(댓글) 읽을때 로직
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php
//데이터 베이스 연결하기
include "db_info.php";

$no = $_GET[no];
$id = $_GET[id];

// 조회수 업데이트
$query = "UPDATE threadboard SET VIEW=VIEW+1 WHERE id=$_GET[id]";
$result=mysql_query($query, $conn);

// 글 정보 가져오기
$query = "SELECT * FROM threadboard WHERE id=$_GET[id]";
$result=mysql_query($query, $conn);
$row=mysql_fetch_array($result);
?>
<html>
<head>

<style>

.button { width:100px;  background-color: #f8585b;  border: none; border-radius: 10px;  color:#fff; text-align: center; text-decoration: none;  display: inline-block;  font-size: 15px;  margin: 4px;  cursor: pointer;}
    .button:hover {    background-color: blue;}

td {font-size : 9pt;}
A:link {font : 9pt; color : black; text-decoration : none;
font-family : 굴림; font-size : 9pt;}
A:visited {text-decoration : none; color : black; font-size : 9pt;}
A:hover {text-decoration : underline; color : black; 
font-size : 9pt;}

</style>
</head>
<body style="margin: 0px">
<div align="center">
<BR>
<h2>[ 게시글 보기 ]</h2><br>
<table width=580 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777 class="table table-bordered">
<tr>
    <td height=30 colspan=4 align=center bgcolor=#999999>
        <font color=white><B><h5>글 제목 : <?=strip_tags($row[title]);?></h5>
        </B></font>
    </td>
</tr>
<tr>
    <td width=50 height=50 align=center bgcolor=#EEEEEE><h5>글쓴이</h5></td>
    <td width=240 bgcolor=white><h5><?=$row[name]?></h5></td>
    <td width=50 height=50 align=center bgcolor=#EEEEEE><h5>이메일</h5></td>
    <td width=240 bgcolor=white><h5><?=$row[email]?></h5></td>
</tr>
<tr>
    <td width=50 height=50 align=center bgcolor=#EEEEEE><h5>
        날&nbsp;&nbsp;&nbsp;짜</h5></td><td width=240 bgcolor=white>
        <h5><?=date("Y-m-d", $row[wdate])?></h5></td>
    <td width=50 height=50 align=center bgcolor=#EEEEEE><h5>조회수</h5></td>
    <td width=240 bgcolor=white><h5><?=$row[VIEW]?></h5></td>
</tr>
<tr>
    <td bgcolor=white colspan=4 style="word-break:break-all;">
        <font color=black>
        <div align="center"><h4><?=strip_tags($row[content]);?></h4></div>
        </font>
    </td>
</tr>
<!-- 기타 버튼 들 -->
<tr>
    <td colspan=4 >
    <table width=100% class="table table-bordered" height=50>
    <tr>
        <td width=800 align=left height=40>
           <!--  <a href=prove_list.php?no=<?=$no?>><font color=white>
            목록보기</font></a> -->
            <div align="center">
           <button class="button"> <a href=prove_reply.php?id=<?=$id?>><font color=white>
            답글달기</font></a></button>
           <button class="button"> <a href=prove_write.php><font color=white>
            글쓰기</font></a></button>
           <button class="button" > <a href=prove_edit_read.php?id=<?=$id?>><font color=white>
            수정</font></a></button>
           <button class="button"> <a href=prove_predel.php?id=<?=$id?>><font color=white>
            삭제</font></a></button>
        </div>
        </td>
    </tr>
    </table>
    </td>
</tr>
</table>
<table width=580 bgcolor=white style="border-bottom-width:1; 
border-bottom-style:solid;border-bottom-color:cccccc;" class="table table-bordered">
<?php
// 현재 글보다 thread 값이 큰 글 중 가장 작은 것의 id를 가져온다. depth가 0인것은 글만 찾기위해서임 depth가 1이상이면 그건  RE: 글이다.
$query = "SELECT id, name, title FROM threadboard 
WHERE thread >$row[thread] and depth=0 LIMIT 1";
$query=mysql_query($query, $conn);
$up_id=mysql_fetch_array($query);

if ($up_id[id]) // 이전 글이 있을 경우
{
    echo "<tr><td width=500 align=left height=25>";
    echo "<a href=prove_read.php?id=$up_id[id]><font align=center size=5pt>원본 게시글</font><br> ▶ $up_id[title]</a></td>
    </tr>";
}

// 현재 글보다 thread 값이 작은 글 중 가장 큰 것의 id를 가져온다. 오름차순으로하고 thread <$row[thread]로 해도 같다.
$query = "SELECT id, name, title FROM threadboard WHERE 
thread <$row[thread] and depth=0  ORDER BY thread DESC LIMIT 1";
$query=mysql_query($query, $conn);
$down_id=mysql_fetch_array($query);

if ($down_id[id])
{
    echo "<tr><td width=500 align=left height=25>";
    echo "<a href=prove_read.php?id=$down_id[id]><font align=center size=5pt>원본 게시글</font><br> ▶ $down_id[title]</a>
    </tr>";
}
?>
</table>
<BR>
<?php
//리스트 출력을 위해 thread를 계산한다.
//출력될 리스트는 글 전체 리스트가 아니라
//1000의 배수인 새글과 이를 포함한 답변글들의 리스트이다.
//답변글이 없는 경우 원본글만 리스트에 나오고
//답변글이 있으면 답변글 모두가 다 나오게된다.
//현재 글이 답변글이어도 새글부터 전체 답변글까지 나온다.
//그럴려면 1000~2000 과 같이 새글사이에 글들을 모두 뿌려주면 된다.

//만약 원본글이 삭제됬다면 답변글만 있다. 
//만약 답변글이 1999라면 1999/1000=1.999 에서 올림을 하면 2가 됨 그리고 *1000을 하면 2000이 됨.
//즉 2000>= x >1000 의 범위의 값을 모두 찾아야됨.
$thread_end = ceil($row[thread]/1000)*1000;
$thread_start = $thread_end - 1000;

//아래와 같은 쿼리문을 쓸때 단점은 답글이 999개가되면 999개를 출력하게 된다는점이 단점.
$query = "SELECT * FROM threadboard WHERE thread <= $thread_end and
thread >$thread_start ORDER BY thread DESC";
$result = mysql_query($query, $conn);
?>
<!-- 게시물 리스트를 보이기 위한 테이블 -->
<table width=880 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777 class="table table-bordered">
<!-- 리스트 타이틀 부분 -->
<tr height=20 bgcolor=#999999>
    <td width=40 align=center>
        <font color=white>번호</font>
    </td>
    <td width=370 align=center>
        <font color=white>제 목</font>
    </td>
    <td width=50 align=center>
        <font color=white>글쓴이</font>
    </td>
    <td width=20 align=center>
        <font color=white>날 짜</font>
    </td>
    <td width=60 align=center>
        <font color=white>조회수</font>
    </td>
</tr>
<br>


<!-- 리스트 타이틀 끝 -->
<!-- 리스트 부분 시작 -->
<?php
    while($row=mysql_fetch_array($result))
    {
?>
<!-- 행 시작 -->
<tr>
<!-- 번호 -->
    <td height=40 bgcolor=white align=center>
        <a href="prove_read.php?id=<?=$row[id]?>&no=<?=$no?>"><!-- =$no는 echo $no와 같은 의미 -->
        -</a><!-- <?=$row[id]?> -->
    </td>
    <!-- 번호 끝 -->
    <!-- 제목 -->
    <td height=20 bgcolor=white>&nbsp;
        <?php //depth 값을 통해서 들여쓰기를 한다. 투명이미지의 가로사이즈를 늘이는 방법
        if ($row[depth] >0) 
            echo "<img src=img/dot.gif height=1 width=" . 
            $row[depth]*7 . ">->";
        ?>
        <a href="prove_read.php?id=<?=$row[id]?>&no=<?=$no?>"><!-- =$no는 echo $no와 같은 의미 -->
        <?=strip_tags($row[title], '<b><i>');?></a>
    </td>
    <!-- 제목 끝 -->
    <!-- 이름 -->
    <td align=center height=20 bgcolor=white>
        <font color=black>
        <a href="mailto:<?=$row[email]?>"><?=$row[name]?></a>
        </font>
    </td>
    <!-- 이름 끝 -->
    <!-- 날짜 -->
    <td align=center height=20 bgcolor=white>
        <font color=black><?=date("Y-m-d",$row[wdate])?></font>
    </td>
    <!-- 날짜 끝 -->
    <!-- 조회수 -->
    <td align=center height=20 bgcolor=white>
        <font color=black><?=$row[VIEW]?></font>
    </td>
<!-- 조회수 끝 -->
</tr>
<!-- 행 끝 -->
<?php
    } // end While
     // 조회수 업데이트
    $result=mysql_query("UPDATE threadboard SET VIEW=VIEW+1 WHERE id=$id",
    $conn);
mysql_close($conn);
?>
</table>
</div>
</body>
</html>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

