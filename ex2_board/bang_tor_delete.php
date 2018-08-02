<?php

  if ($_GET['mode']!="delete")

  {

?>

<HTML>

<FORMMETHOD="POST"

ACTION="<?=$_SERVER['PHP_SELF']?>?id=<?=$_GET[id]?>&mode=delete">

<TABLE>

  <TR>

    <TD>비밀번호</TD>

    <TD><INPUTTYPE="PASSWORD" NAME="pass"></TD>

    <TD><INPUTTYPE="SUBMIT" VALUE=" 확 인 "></TD>

  </TR>

</TABLE>

<?

    exit;

  } //end if



  $conn = mysql_connect("localhost", "root", "0000") or die(mysql_error());

  @mysql_select_db("developer", $conn);

  @mysql_query("set names euckr");



  $query = "SELECT pass FROM guestbook2 WHERE id='$_GET[id]'";

  $result = mysql_query($query, $conn);

  $row = mysql_fetch_array($result);

 

  if ($row[pass] == $_POST[pass])

  {

    $query = "DELETE FROM guestbook2 WHERE id='$_GET[id]'";

    $result = mysql_query($query, $conn);

  }

?>

<script>alert("글이 삭제되었습니다."); location.href="bang_tor_list.php"; </script>



