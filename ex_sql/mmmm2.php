<HTML>
<HEAD>
<TITLE>GuestBook</TITLE>
</HEAD>


<BODY BGCOLOR="#006699" LINK="#99CCFF" VLINK="#99CCCC" TEXT="#FFFFFF">
<center>
<br><p>

<?php

// ====================================================================================
// DB 접속에 필요한 사항을 설정합니다.
// mysql_connect 함수는 말그대로 MySQL 디비에 접속하는 것입니다.
// 온라인 게임을 하려면 게임서버에 접속해야 하는것과 마찬가지로 디비를 쓰려면 
// 우선 접속을 해야겠지요.
//
// Host (서버주소 - localhost를 쓰면 됩니다.)
// User (디비를 쓸 수 있는 권한을 가진 유저 아이디를 씁니다.)
// Passwd (등록된 유저의 비밀번호를 씁니다.)
//
// mysql_select_db 함수는 등록된 유저가 쓸 수 있는 디비를 선택하는 것입니다. 
// MySQL에는 여러개의 DB를 만들 수 있거든요.그중 쓰고자 하는 하나를 선택하는 것입니다.
//
// 앞시간에 만든 디비와 비교해보면...
// Host = localhost , User = testuser , Passwd = mypass , DB = testdb 입니다.
// 위처럼 자신의 설정에 맞게 host,user,passwd,user_db 를 바꾸어 줍니다.
// ===================================================================================

$connect = mysql_connect("localhost","root","0000") or die("SQL server에 연결할 수 없습니다."); 
mysql_select_db("user_db",$connect);

// ===================================================================================
// die 는 말그대로 죽었단 뜻이죠. DB 가 죽어버렸는지-_- 응답을 안한다는 소리입니다. 
// $connect 변수를 유심히 보세요. mysql_connect 함수의 결과가 $connect 변수에 저장되죠?
// 그런데 다음 mysql_select_db 에서도 $connect 변수가 쓰이고 있습니다.
// 이것은 $connect 변수가 MySQL에 들어가도 좋다는 출입증과 같은 역할이기 때문입니다.
// 그리고 만약 또 다른 MySQL 서버에 접속했다면(혹은 다른 아이디로) 
// 이 연결과 위의 연결을 구별하기 위한 구별자역할도 합니다.
// ===================================================================================

// ================
// 게시판 환경설정
// ================

$scale = 5; // 한 페이지당 자료 수
$admin_ip = '127.0.0.1';  // 삭제시 필요한 관리자 IP
$allow_html = 0; // HTML 허용 여부(1 -> yes, 0 -> no) 

// 방명록의 테이블 이름은 guestbook 입니다.

// ===================================================================================
// $mode 는 new, up, del 또는 NULL 의 값을 가집니다. ( NULL = 無 )
// $mode 가 new 라는 값을 가지면 새 글을 입력할 때
// $mode 가 up 이라는 값을 가지면 글을 DB에 저장할 때
// $mode 가 del 이라는 값을 가지면 글을 지울때 입니다.
// ===================================================================================

// ==========
// 글 지우기
// ==========

if ($mode == 'del') {
   
   if ($REMOTE_ADDR != $admin_ip) //$REMOTE_ADDR 은 접속자의 IP정보입니다.
   { // 관리자 IP와 접속자 IP가 다르므로 글 삭제 권한이 없다.
         echo("
         <script>
            window.alert('관리자만 지울 수 있습니다.')
         </script>");
      echo("<meta http-equiv='Refresh' content='0; URL=$PHP_SELF'>");
      exit;
   } 
   else { //접속자 IP가 관리자 IP와 같으면 글을 지울 수 있는 권리가 있다.
      $que1 = "delete from guestbook where id=$id"; //SQL문을 만들고
      $result = mysql_query($que1,$connect); //SQL문을 실행한다.
   } 
}

// =============
// 새 글 올리기
// =============

if ($mode == 'up') {
   if (!$name || !$comment) { //이름과 내용을 적으란 말야!! 적어!!!
      echo("
         <script>
            window.alert('이름과 남기실 말씀을 적어 주세요');
        history.go(-1);
     </script>"); 
      exit;
   }

   if (!$allow_html) { //HTML 입력을 허용하지 않으면
      $name = htmlspecialchars($name);              // HTML코드를 특수문자로 바꾸어버림 
      $comment = htmlspecialchars($comment); // 예) <b> -> &lt;b&gt;
   }

// ===================================================================================
// htmlspecialchars 함수를 쓰면 HTML 코드가 적용되지 아니하고 코드를 그대로 출력해준다.
// addslashes 함수는 DB에 데이터를 입력할때 ' (작은따옴표) 같은 값들이 SQL 문에서
// 에러가 나지않고 입력되게 하기위한 배려이다.
// ===================================================================================

   $name = addslashes($name); 
   $home = addslashes($home);
   $email = addslashes($email);
   $comment = addslashes($comment);

   $que1 = "insert into guestbook values ";
   $que1 .= "('','$name','$home','$email','$comment','$REMOTE_ADDR',now())"; 
   $result = mysql_query($que1,$connect);

   if ($result) { // DB에 입력이 잘되었다면..
      echo("<META http-equiv='Refresh' content='0; URL=$PHP_SELF'>");
      exit;
   }
   else { // DB에 데이터 입력중 오류가 발생한경우..
      echo("
         <script>
        window.alert('DB 오류가 발생하였습니다.');
        history.go(-1);
         </script>");
      exit;
   }
} //up end

// ==============
// 새 글 쓰기 폼
// ==============

if ($mode == 'new') { //새글쓰기 폼을 출력한다.

   echo("
      <FORM name='form' method='post' action='$PHP_SELF'>
      <TABLE border='0' cellspacing='1'>
      <TR>
      <TD width='109' bgcolor='#5485B6'><P align='center'><FONT face='굴림' size='2' color='#CDDAE4'>
        이름</FONT></TD>
      <TD width='541'><P>&nbsp;<INPUT type='text' name='name' SIZE=6 MAXLENGTHTH='20'></TD>
      </TR>
      <TR>
      <TD bgcolor='#5485B6'><P align='center'><FONT face='굴림' size='2' color='#CDDAE4'>
          HOMEPAGE</FONT></TD>
      <TD><P>&nbsp;http://<INPUT type='text' name='home' maxlength='40'></TD>
      </TR>
      <TR>
      <TD bgcolor='#5485B6'><P align='center'><FONT face='굴림' size='2' color='#CDDAE4'>
          Email 주소</FONT></TD>
      <TD><P>&nbsp;<INPUT type='text' name='email' size=20  maxlength='40'></TD>
      </TR>
      <TR>
      <TD bgcolor='#5485B6'><P align='center'><FONT face='굴림' size='2' color='#CDDAE4'>
          남기실 말씀</FONT></TD>
      <TD><P><TEXTAREA name='comment' rows='4' cols='35'></TEXTAREA></TD>
      </TR>
      <TR>
      <TD><P>&nbsp;</TD>
      <TD><P>&nbsp;<INPUT type='submit' name='submit' value='글올리기'></TD>
      </TR>
      </TABLE>
      <input type=hidden name=mode value='up'>
      </FORM>");
}

// =============
// 내용보여주기  
// =============

if (!$mode || $result) { //$mode 변수가 NULL 이면 입력된 내용을 출력한다.

      if (!$start) { $start = 0; }

       $que1 = "select DATE_FORMAT(reg_date,'%Y.%m.%d') as date,reg_date,id,comment,name";
       $que1 .= ",home,email,ip from guestbook order by id DESC"; 
       $result = mysql_query($que1,$connect);
       $total = mysql_affected_rows();

       // ================================================================
       // $que1  이라는 SQL문을 작성하고 SQL문을 실행한다.
       // $total 에는 검색된 자료의 수가 입력된다.
       // ================================================================


       for($i=$start ; $i<$start+$scale ; $i++) {  //  start 에서 scale 까지 만

          if ($i < $total) { // 전체 자료 개수까지만 출력 
         mysql_data_seek($result,$i); //검색된 자료중 $i 번째글을 찾고
         $row = mysql_fetch_array($result); //$i번째글의 내용을 $row 변수에 배열로 저장합니다.
      
         $row[comment] = stripslashes($row[comment]) ; //addslashes 한값을 제거
             echo("
         <TABLE border='0' cellspacing='1'>
         <TR>
         <TD width='109' bgcolor='#5485B6'><P align='center'><FONT face='굴림' size='2' color='#CDDAE4'>
             <a href=$PHP_SELF?mode=del&id=$row[id]>
             <IMG src='' width='22' height='13' border='0' alt='지우기'>지우기</a></FONT></TD>
         <TD width='541'><P><FONT face='굴림' size='2' color='#FAF1C7'>$row[0] from $row[ip]</FONT></TD>
         </TR>
         <TR>
             <TD width='109' bgcolor='#5485B6'><P align='center'>
             <FONT face='굴림' size='2' color='#CDDAE4'>Name</FONT></TD>
         <TD width='541'><P><FONT face='굴림' size='2' color='#E7EEF5'>$row[name]</FONT></TD>
         </TR>
             <TR>
         <TD width='109' bgcolor='#5485B6'><P align='center'><FONT face='굴림' size='2' color='#CDDAE4'>
             Home / Email</FONT></TD>
         <TD width='541'><P><FONT face='굴림' size='2' color='#E7EEF5'>&nbsp;</FONT>");
         if ($row[email]) echo("<A href='mailto:$row[email]'>
         <IMG SRC= BORDER=0 ALT='편지쓰기' align=center>편지쓰기<FONT face='굴림' size='2'
         color='#E7EEF5'>$row[email]</FONT></A> &nbsp;");
         if ($row[home]) echo("<a href=http://$row[home]>웹페이지<IMG SRC= BORDER=0 ALT='홈페이지' 
        align=center><FONT face='굴림' size='2' color='#E7EEF5'>http://$row[home]</FONT></a>");
         echo("
             </TD>
         </TR>
         <TR>
         <TD width='109' bgcolor='#5485B6'><P align='center'><FONT face='굴림' size='2' color='#CDDAE4'>
                 Comment&nbsp;</FONT></TD>
         <TD width='541'><P><FONT face='굴림' size='2' color='#E7EEF5'>$row[comment]</FONT></TD>
         </TR>
         <TR>
         <TD width='109'><P><HR size='1' noshade></TD>
         <TD width='541'><P><HR size='1' noshade></TD>
         </TR></TABLE>");
          }
      }
}

// ===================== 내용 보여주기 끝 ===========

if (!$mode || $result) {  // ==================== 하단 버튼 ==============
   echo("
   <center>
   <a href=$PHP_SELF?mode=new>방명록 글쓰기<IMG HEIGHT=30 WIDTH=30  
       VSPACE=0 HSPACE=0 ALIGN='TOP' BORDER=0 alt='방명록에 글쓰기'></a> ");

   $p_p = $start - $scale ; // 이전 페이지는 시작 글에서 $scale을 뺀값부터
   $n_p = $start + $scale ; // 다음 페이지는 시작 글에서 $scale을 더한값부터

   if ($p_p >= 0 && $mode != 'new') {
      echo("<a href='$PHP_SELF?start=$p_p'>이전페이지<IMG HEIGHT=30 WIDTH=30 SRC='./img/p-doc.gif' VSPACE=0
      HSPACE=0 ALIGN='TOP' BORDER=0 alt='이전 페이지'></a> ");
   }

   if ($n_p < $total && $mode != 'new') {
      echo("<a href='$PHP_SELF?start=$n_p'>다음페이지 <IMG HEIGHT=30 WIDTH=30 SRC='./img/n-doc.gif' VSPACE=0
      HSPACE=0 ALIGN='TOP' BORDER=0 alt='다음 페이지'></a></center>");
   }
}

echo("
<p>                             
</BODY>
</HTML>");

?>