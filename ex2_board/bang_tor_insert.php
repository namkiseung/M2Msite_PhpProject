<?php

$conn = mysql_connect("localhost", "root", "0000") or die(mysql_error());



if(!$conn) {

 echo"Cannot connect to database.";

 exit;

}



@mysql_select_db("developer", $conn);

mysql_query("set names euckr", $conn);



  //$query = "insert guestbook set name='$_POST[name]', pass='$_POST[pass]', content='$_POST[content]'";

$name=$_POST['name'];
$pass=$_POST['pass'];
$content=$_POST['content'];
$query = "INSERT INTO guestbook2 (name, pass, content) VALUES ($name, $pass, $content)";





  //$query .= "VALUES ('$_POST[name]', '$_POST[pass]', '$_POST[content]')";

  //$query .= "VALUES ('$_POST[name]', '$_POST[pass]', '$_POST[content]')";




mysql_query($query, $conn);



   $err_str = mysql_error();#SQL문 오류를 보여주는 명령어

            echo $err_str;        #포함..





  //$query = "SELECT * FROM guestbook ORDER BY id DESC";

  //$result = mysql_query($query, $conn);



  //echo $result;



            ?>



            <script>

              alert("글이 등록되었습니다.");

              location.href="bang_tor_list.php";

            </script>



