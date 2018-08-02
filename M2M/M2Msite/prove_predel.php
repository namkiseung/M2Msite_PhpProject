<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 메인 메뉴의 '인증하기'로직에서 게시판의 글 삭제할때 로직
///////////////////////////////////////////////////////////////////////////////////////////-->
<html>
<head>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->

<link rel="stylesheet" type="text/css" href="includefile/style.css" />  
<link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
<style>

td {font-size : 7pt;}
A:link {font : 7pt;color : black;text-decoration : none;
font-family: 굴림;font-size : 7pt;}
A:visited {text-decoration : none; color : black; font-size : 7pt;}
A:hover {text-decoration : underline; color : black; 
font-size : 7pt;}

.button { width:100px;  background-color: #f8585b;  border: none; border-radius: 10px;  color:#fff; padding: 15px 0;  text-align: center; text-decoration: none;  display: inline-block;  font-size: 15px;  margin: 4px;  cursor: pointer;}
    .button:hover {    background-color: blue;}
</style>
</head>
<body topmargin=0 leftmargin=0 text=#464646>
		<?php
	include "includefile/header.php";
	?>
	<center>
		<BR>
		<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
		<form action=prove_del.php?id=<?=$_GET[id]?> method=post class="table table-bordered">
			<table width=300 border=0 cellpadding=2 cellspacing=1
			bgcolor=#777777>
			<tr>
				<td height=20 align=center bgcolor=#999999>
					<font color=white size="5pt"><B>비 밀 번 호 확 인</B></font><br>
				</td>
			</tr>
			<tr>
				<td align=center >
					<font color=black size="5pt"><B>비밀번호 : </b>
						<INPUT type=password name=pass size=8 ><br>
						<INPUT type=submit value="확 인" class="button">
						<INPUT type=button value="취 소" onclick="history.back(-1)" class="button">
					</td>
				</tr>
			</table>

<?php
include('includefile/bodyform.php');
include('includefile/introfooter.php');
include('includefile/footer.php');
?>