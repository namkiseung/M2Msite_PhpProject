<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 메인 홈페이지 자유게시판에서 글 읽은 다음에 수정할때 로직
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
.button { width:100px;  background-color: #f8585b;  border: none; border-radius: 10px;  color:#fff; padding: 15px 0;  text-align: center; text-decoration: none;  display: inline-block;  font-size: 15px;  margin: 4px;  cursor: pointer;}
    .button:hover {    background-color: blue;}
td { font-size : 9pt; }
A:link { font : 9pt; color : black; text-decoration : none; 
font-family: 굴림; font-size : 9pt; }
A:visited { text-decoration : none; color : black; 
font-size : 9pt; }
A:hover { text-decoration : underline; color : black; 
font-size : 9pt;}

</style>
</head>

<body topmargin=0 leftmargin=0 text=#464646>
    <?php
    include "includefile/header.php";
    ?>
<center>
<BR>
<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
<form action=update.php?id=<?=$_GET[id]?> method=post>
<table width=580 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777 class="table table-bordered">
    <tr>
        <td height=20 align=center bgcolor=#999999>
            <font color=white size="5pt"><B>수 정 하 기</B></font>
        </td>
    </tr>
<?php
    //데이터 베이스 연결하기
    include "db_info.php";
    $id = $_GET[id];
    $no = $_GET[no];

    // 먼저 쓴 글의 정보를 가져온다.
    $result=mysql_query("SELECT * FROM board WHERE id=$id", $conn);
    $row=mysql_fetch_array($result);
?>
<!-- 입력 부분 -->
    <tr>
        <td bgcolor=white>&nbsp;
        <table class="table table-bordered" font-size=11pt> 
            <tr>
                <td width=120 align=left >이름</td>
                <td align=left >
                    <INPUT type=text name=name size=20 class="form-control" 
                    value="<?=$row[name]?>">
                </td>
            </tr>
            <tr>
                <td width=120 align=left >이메일</td>
                <td align=left >
                    <INPUT type=text name=email size=20 class="form-control"
                    value="<?=$row[email]?>">
                </td>
            </tr>
            <tr>
                <td width=120 align=left >비밀번호</td>
                <td align=left >
                    <INPUT type=password name=pass size=8 class="form-control"> 
                    (비밀번호가 맞아야 수정가능)
                </td>
            </tr>
            <tr>
                <td width=120 align=left >제 목</td>
                <td align=left >
                    <INPUT type=text name=title size=60 class="form-control"
                    value="<?=$row[title]?>">
                </td>
            </tr>
            <tr>
                <td width=120 align=left >내용</td>
                <td align=left >
                    <TEXTAREA class="form-control" name=content cols=65 rows=15><?=$row[content]?></TEXTAREA>
                </td>
            </tr>
            <tr>
                <td colspan=10 align=center>
                    <INPUT type=submit value="저장하기" class="button">
                    &nbsp;&nbsp;
                    <INPUT type=reset value="실행취소" class="button">
                    &nbsp;&nbsp;
                    <INPUT type=button value="수정취소" class="button"
                    onclick="history.back(-1)">
                </td>
            </tr>
            </TABLE>
        </td>
    </tr>
<!-- 입력 부분 끝 -->
</table>
</form>
</center>
<?php
    include "includefile/footer.php";
    ?>
</body>
</html>

