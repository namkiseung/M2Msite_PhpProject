<?php



$conn = mysql_connect("localhost", "root", "0000") or die(mysql_error());



  @mysql_select_db("developer", $conn);//데이터베이스 이름

  mysql_query("set names euckr");



  $query = "SELECT * FROM guestbook2 ORDER BY id DESC";

  $result = mysql_query($query, $conn);

  $total = mysql_affected_rows();//쿼리의 결과가 몇개인지 확인함



  $pagesize=5;



  ?>



  <FORM ACTION="bang_tor_insert.php" METHOD="POST">
  <TABLEBORDER=1 WIDTH=500>
  <TR>
  	<TD>이름</TD><TD><INPUT TYPE="TEXT" NAME="name"></TD>
  	<TD>비밀번호</TD><TD><INPUT TYPE="PASSWORD" NAME="pass"></TD>
  </TR>
  <TR>
  	<TDCOLSPAN=4><TEXTAREA NAME="content" COLS=65 ROWS=5></TEXTAREA></TD>
  </TR>
  <TR>
  	<TDCOLSPAN=4 align=right><INPUT TYPE="submit" VALUE=" 확인 "></TD>
  </TR>
</TABLE>
</FORM>
<BR>



<?php





for($i=$_GET[no] ; $i < $_GET[no]+$pagesize ; $i++) {



	if ($i < $total)

	{

      mysql_data_seek($result,$i);//result에 지정한 MYSQL 결과의 내부 행 포인터를 지정한 행번호로 옮깁니다.

      $row = mysql_fetch_array($result);

      ?>



      <TABLEWIDTH=500 BORDER=1>

      <TR>

      	<TD>No.<?=$row[id]?></TD>

      	<TD><?=$row[name]?></TD>

      	<TD>(<?=$row[wdate]?>)</TD>

      	<TD><ahref="delete.php?id=<?=$row[id]?>">del</a></TD>

      </TR>

      <TR>

      	<TDCOLSPAN=4><?=$row[content]?></TD>

      </TR>

  </TABLE>



  <?php

    } //end if

  } //end for



  $prev = $_GET[no] - $pagesize ; // 이전 페이지는 시작 글에서 $scale을 뺀 값부터

  $next = $_GET[no] + $pagesize ; // 다음 페이지는 시작 글에서 $scale을 더한 값부터



  if ($prev >= 0) {//음수면 페이지가 존재하지않음

  	echo"<a href='{$_SERVER['PHP_SELF']}?no=$prev'>이전</a>";

  }



  if ($next < $total) {

  	echo"<a href='{$_SERVER['PHP_SELF']}?no=$next'>다음</a></center>";

  }

  ?>



