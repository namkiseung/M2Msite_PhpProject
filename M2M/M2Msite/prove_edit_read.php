<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 메인 메뉴의 '인증하기'로직에서 게시판의 글 수정할때 로직
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php
  include('includefile/header.php');
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
<form action=prove_update.php?id=<?=$_GET[id]?> method=post>
<table width=580 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777 class="table table-bordered">
<tr>
    <td height=20 align=center bgcolor=#999999>
        <font color=white size="6pt"><B>수 정 하 기</B></font>
    </td>
</tr>
<?php
//데이터 베이스 연결하기
include 'db_info.php';

// 먼저 쓴 글의 정보를 가져온다.
$result=mysql_query("SELECT * FROM threadboard WHERE id=$_GET[id]", $conn);
$row=mysql_fetch_array($result);
?>
<!-- 입력 부분 -->
<tr>
<td bgcolor=white>&nbsp;
<table class="table table-bordered">
<tr>
<td width=60 align=left >이름</td>
<td align=left >
<INPUT type=text class="form-control" name=name size=20 value=<?=$row[name]?>>
</td>
</tr>
<tr>
<td width=60 align=left >이메일</td>
<td align=left >
<INPUT type=text class="form-control" name=email size=20 value=<?=$row[email]?>>
</td>
</tr>
<tr>
<td width=60 align=left >비밀번호</td>
<td align=left >
<INPUT type=password class="form-control" name=pass size=8> (비밀번호가 맞아야 수정가능)
</td>
</tr>
<tr>
<td width=60 align=left >제 목</td>
<td align=left >
<INPUT type=text class="form-control" name=title size=60 value=<?=$row[title]?>>
</td>
</tr>
<tr>
<td width=60 align=left >내용</td>
<td align=left >
<TEXTAREA name=content class="form-control" cols=65 rows=15><?=$row[content]?></TEXTAREA>
</td>
</tr>
<tr>
<td colspan=10 align=center>
<INPUT type=submit value="작성하기" class="button">
&nbsp;&nbsp;
<INPUT type=reset value="다시쓰기" class="button">
&nbsp;&nbsp;
<INPUT type=button value="뒤로가기" onclick="history.back(-1)" class="button">
</td>
</tr>
</TABLE>
</td>
</tr>
<!-- 입력 부분 끝 -->
</table>
</form>
</center>
</body>
</html>

<?php
include('includefile/bodyform.php');
include('includefile/introfooter.php');
include('includefile/footer.php');
?>