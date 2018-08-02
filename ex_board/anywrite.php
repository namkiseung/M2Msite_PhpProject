<?php 
	include '127.0.01/M2M/M2Msite/anyboarddb.php';
?>
<!doctype html>
<html lang="ko">
 <head>
  <meta charset="UTF-8">
  <title>게시판</title>
  <link rel="stylesheet" type="text/css" href="includefile/style.css" />  
 </head>
 <body>
 <h1><a href="/anyboard.php">자유게시판</a></h1>
 <h4>글쓰기</h4>
        <div id="board_write">
            <form action="write_ok.php" method="post">
                    <table id="boardWrite">
                        <tr>
                            <td class="tb"><label for="uname">이름</label></td>
                            <td height="30"><input type="text" name="name" id="uname" size="50" class="inh"/></td>
                        </tr>
                        <tr>
                            <td class="tb"><label for="upw">비밀번호</label></td>
                            <td height="30"><input type="password" name="pw" id="upw" size="50"/></td>
                        </tr>
                        <tr>
                            <td class="tb"><label for="utitle">제목</label></td>
                            <td height="30"><input type="text" name="title" id="utitle" size="50"/></td>
                        </tr>
                        <tr>
                            <td class="tb"><label for="ucontent">내용</label></td>
                            <td height="30"><textarea name="content" id="ucontent" rows="10" cols="37"></textarea></td>
                        </tr>
                    </table>
                <div class="bt_se">
                    <button>작성</button>
                </div>
            </form>
        </div>
    </body>
</html>


