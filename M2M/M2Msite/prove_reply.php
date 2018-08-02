<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 메인 메뉴의 '인증하기'로직에서 게시판의 글(댓글) 읽을때 로직
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php

include "db_info.php";

$query = "SELECT * FROM threadboard WHERE id='$_GET[id]'";//부모글을 가져옴.
$parent_result = mysql_query($query, $conn);
$parent_row = mysql_fetch_array($parent_result);
$parent_title = "RE:" . $parent_row[title];//RE : 를 앞에 붙여줌
//$parent_content = "\n>" . str_replace("\n", "\n>", $parent_row[content]);
$parent_content = "\n>" . str_replace("\n", "\n>", $parent_row[content]);
//부모글의 내용에  > 를 붙여줌.
//str_replace(A, B, C) C안에 있는 문자중에서 A를 찾아서 B로 바꾸는 역할
?>
<html>
<head>
            <link rel="stylesheet" type="text/css" href="includefile/style.css" />  
<link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 <style>
    .button { width:100px;  background-color: #f8585b;  border: none; border-radius: 10px;  color:#fff; padding: 15px 0;  text-align: center; text-decoration: none;  display: inline-block;  font-size: 15px;  margin: 4px;  cursor: pointer;}
    .button:hover {    background-color: blue;}
    <!--
    td { font-size : 12pt; }
    A:link { font : 12pt; color : black; text-decoration : none; 
        font-size : 12pt; }
        A:visited { text-decoration : none; color : black; font-size : 12pt; }
        A:hover { text-decoration : underline; color : black; 
            font-size : 12pt; }
            -->
        </style>
</head>
<body topmargin=0 leftmargin=0 text=#464646>
<center>
<BR>
<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
<form action=prove_insert_reply.php method=post>
<input type=hidden name=parent_depth value=<?=$parent_row[depth]?>>
<input type=hidden name=parent_thread value=<?=$parent_row[thread]?>>
<table width=580 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777 class="table table-bordered">
<tr>
        <td height=20 align=center bgcolor=#999999>
        <font color=white><B>관련글 작성</B></font>
        </td>
</tr>
<!-- 입력 부분 -->
<tr>
        <td bgcolor=white>&nbsp;
        <table class="table table-bordered">
        <tr>
        <td width=60 align=left >이름</td>
        <td align=left >
        <INPUT type=text name=name size=20 maxlength=10 class="form-control">
        </td>
        </tr>
        <tr>
        <td width=60 align=left >이메일</td>
        <td align=left >
        <INPUT type=text name=email size=20 maxlength=25 class="form-control">
        </td>
        </tr>
        <tr>
        <td width=60 align=left >비밀번호</td>
        <td align=left >
        <INPUT type=password name=pass size=8 maxlength=8 class="form-control">
        </td>
        </tr>
        <tr>
        <td width=60 align=left >제 목</td>
        <td align=left >
        <INPUT type=text name=title size=60 maxlength=35
        value="" class="form-control">
        </td>
        </tr>
        <tr>
        <td width=60 align=left >내용</td>
        <td align=left >
        <TEXTAREA name=content cols=65 rows=15 class="form-control"></TEXTAREA>
        </td>
        </tr>
        <tr>
        <td colspan=10 align=center>
        <INPUT type=submit value="저장하기" class="button">
        &nbsp;&nbsp;
        <INPUT type=reset value="다시쓰기" class="button">
        &nbsp;&nbsp;
        <INPUT type=button class="button" value="뒤로가기"
        onclick="history.back(-1)">
        </td>
        </tr>
        </TABLE>
        </td>
</tr>
<!-- 입력 부분 끝 -->
</table>
</center>
</body>
</html>


