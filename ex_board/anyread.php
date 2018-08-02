<?php
include ('http://127.0.0.1/M2M/M2Msite/anyboarddb.php');

header('Content-Type: text/html; charset=utf-8');

	$bno = $_GET['anyidx'];
	$sql = mq("select * from ANYboard where anyidx='".$bno."'");
	$board = $sql->fetch_array();

/* 조회수 카운트 */

	$hit = mysqli_fetch_array(mq("select * from ANYboard where anyidx ='".$bno."'"));
	$hit = $hit['anyhit'] + 1;
	$fet = mq("update ANYboard set anyhit = '".$hit."' where anyidx = '".$bno."'");


	?>
<!doctype html>
<html lang="ko">
 <head>
  <meta charset="UTF-8">
  <title>게시판</title>
  <link rel="stylesheet" type="text/css" href="includefile/style.css" />  
 </head>
 <body>
 <div id="board_read">
<ul>
	<li class="read w10 fl">제목</li>
	<li class="read_con">&nbsp;<?php echo $board['anytitle'];?></li>
	<li class="read w5 fl">번호</li>
	<li class="read_con">&nbsp;<?php echo $board['anyidx'];?></li>
</ul>
<ul>
	<li class="read w10 fl">작성자</li>
	<li class="read_con">&nbsp;<?php echo $board['anyname'];?></li>
	<li class="read w10 fl">등록일</li>
	<li class="read_con">&nbsp;<?php echo $board['anydate'];?></li>
	<li class="read w10 fl">조회수</li>
	<li class="read_con">&nbsp;<?php echo $board['anyhit'];?></li>
</ul>
<ul>
	<li class="read_nl fl">내용</li>
	<li class="read_nl_con"><?php echo nl2br("$board[content]"); ?></li>
</ul>
</div>
<div class="bo_ser">
	<ul>
		<li><a href="http://127.0.0.1/M2M/M2Msite/anyboard.php">[목록으로]</a></li>
		<li><a href="http://127.0.0.1/M2M/M2Msite/anymodify.php?anyidx=<?php echo $board['anyidx']; ?>">[수정]</a></li>
		<li><a href="http://127.0.0.1/M2M/M2Msite/anydelete.php?anyidx=<?php echo $board['anyidx']; ?>">[삭제]</a></li>
	</ul>
</div>
 </body>
</html>
