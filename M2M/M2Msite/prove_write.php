<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 메인 메뉴의 '인증하기'로직에서 게시판의 글 쓸때 로직
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php
  include('includefile/header.php');
  ?>
<html>
<head>    
    <title></title>
    <link rel="stylesheet" type="text/css" href="includefile/style.css" />  
<link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->

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
            <form action=prove_insert.php method=post>
                <table width=1000 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777 class="table table-bordered">                    
                    <tr>
                        <td height=50 align=center bgcolor=#999999>
                            <font color=white><B><h2>글 작성하기</h2></B></font>
                        </td>
                    </tr>
                    <!-- 입력 부분 -->
                    <tr>
                        <td bgcolor=white>&nbsp;
                            <table class="table table-bordered">
                                <tr>
                                    <td width=100 align=left>이름</td>
                                    <td align=left >
                                        <INPUT type=text name="name" size=20 maxlength=10 class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td width=100 align=left >이메일</td>
                                    <td align=left >
                                        <INPUT type=text name=email size=20 maxlength=25 class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td width=100 align=left >비밀번호</td>
                                    <td align=left >
                                        <INPUT type=password name=pass size=8 maxlength=8 class="form-control"> 
                                    </td>
                                </tr>
                                <tr>
                                    <td width=100 align=left >제 목</td>
                                    <td align=left >
                                        <INPUT type=text name=title size=60 maxlength=35 class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td width=100 align=left >내용</td>
                                    <td align=left >
                                        <TEXTAREA name=content cols=65 rows=15 class="form-control"></TEXTAREA>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=10 align=center>
                                        <INPUT type=submit value="등록하기" class="button">
                                        &nbsp;&nbsp;
                                        <!-- <INPUT type=reset value="다시 쓰기">
                                        &nbsp;&nbsp; -->
                                        <INPUT type=button value="뒤로가기" class="button"
                                        onclick="history.back(-1)"> <!--버튼이 클릭되었을때 발생하는 이벤트로 자바스크립트를 실행함. 이렇게 하면 바로 이전페이지로 감-->
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
    </html>

<?php
include('includefile/bodyform.php');
include('includefile/introfooter.php');
include('includefile/footer.php');
?>