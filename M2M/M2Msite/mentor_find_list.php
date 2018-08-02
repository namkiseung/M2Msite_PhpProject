<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 멘토멘티 찾기 게시판 로직(멘토 게시판 리스트)
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php 
//--------------------세션 사용을 위한 필수 메서드 이자, 세션 사용을 허용
session_start();
//--------------------DB에 연결
$db = mysql_connect('127.0.0.1', 'root', '0000');
if(!$db){
  die('DB연결에 대한 에러 내용 : '.mysql_error());
}
//--------------------DB 접속
$ret  = mysql_select_db('developer', $db);
if(!ret){
  die('DB선택에 대한 에러 내용 : '.mysql_error());
}
?>
<!-- 게시판 HTML소스코드 !-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">      
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><h2>멘토찾기 방명록</h2></a>          
<?php          
//--------------------세션 값이 없을때의 경우 시작

function hide(){
    echo "<br><br><div align='center'><button class='button' style='width: 200px'><font color=white>로그인 후 이용가능 합니다</font></button></div>";
  }
  
//--------------------세션 값이 존재하면 (로그인 상태) => 아이디비번 입력하는폼을 보여주면 안된다.
  function apper(){
    echo "<br><br><div align='center'><button class='button'><a href='index.php?page=mentor_find_write'><font color=white>글쓰기</font></a></button></div>";
  echo "<div align='center'><button class='button'><a href='index.php?page=findm2m'><font color=white>목록보기</font></a></button></div>";
}
?>

<!-- </div>
        <div id="navbar" class="navbar-collapse collapse"> -->
        <!-- 
                 method=POST , action=signin.php 
                 POST방식으로 signin.php로 입력받은 데이터를 전송하는 form태그 
          !-->
          <!-- <form class="navbar-form navbar-right" method=POST action=signin.php>
 
            <div class="form-group">
              <input type="text" name="user_id" placeholder="USER ID" class="form-control">
            </div>
 
            <div class="form-group">
              <input type="password" name="user_pw" placeholder="Password" class="form-control">
            </div>
 
            <button type="submit" class="btn btn-success">Sign in</button>
 
          </form>
        </div>
      </div> -->
      <!--/.navbar-collapse -->
   
</nav>
 
    <!-- 게시글들을 모아놓는 테이블 -->
      <div class="jumbotron">
      <div class="container">
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <div align="center">
              <tr>
                <th> <div align=center><font size='5px'><span style="font-weight: initial;">번호</span></font> </th></div>
                <th> <div align=center><font size='5px'><span style="font-weight: initial;">게시글 제목</span></font> </th></div>
                <th> <div align=center><font size='5px'><span style="font-weight: initial;">작성자</span></font> </th></div>
                <th> <div align=center><font size='5px'><span style="font-weight: initial;">작성시간</span></font></th></div> 
              </tr>
            </div>
            </thead>
            <tbody>
             <?php 
 
$resource = mysql_query( "SELECT * FROM mentor_board ");
// board테이블의 데이터 개수를 저장
$total_len = mysql_num_rows($resource);
 
 
if (isset($_GET[idx]) ){         // GET메서드로 출력할 게시글 시작번호가 넘어온다
    $start = $_GET[idx] * 10;    // 10개씩 화면에 출력 / ORDER BY , LIMIT 설명은 따로하겠습니다
                                // $start = board테이블의 x번째 데이터를 지정
    $sql = "SELECT * FROM mentor_board ORDER BY no DESC LIMIT $start, 10 ";    
} else{            // idx변수가 넘어오지않았으므로 처음 10개의 게시글을 출력
    $sql = "SELECT * FROM mentor_board ORDER BY no DESC LIMIT 10";
}
// resource변수에 10개의 데이터들을 저장한다
$resource = mysql_query( $sql );
 
$num=1;    // 게시글 번호
while( $row = mysql_fetch_array( $resource ) ){
    print "<tr>";
    echo "<th> <font size='3px'><div align=center>";
    print $row[no];
    echo "<div></font></th>";
    print "<td> <font size='3px'><div align=center>$row[title] <div></font></td>";
    print "<td> <font size='3px'><div align=center>$row[user_id] <div></font></td>";
    print "<td> <font size='3px'><div align=center>$row[write_time] <div></font></td>";
    print "</tr>";

    $num++;
}
 
// 게시글 목록 페이지 개수(count) = 총 게시글수 / 10 한다
$count = (int)( $total_len / 10 );
// 마지막 게시글 목록의 게시글 개수가 1개 이상,10개 이하인 경우 게시글목록개수+1
if ( $total_len % 10 ){ $count++; }
 
    print "<tr>";
    print "<td colspan=4 align=center>";
    print "<br>";
    for ( $i = 0; $i < $count ; $i++ ){ // 변수i와 게시글목록개수 비교
        // 게시글 목록 번호를 idx변수에 넣고 GET메서드로 전송한다
        print "<a href=http:index.php?page=mentor_find_list&idx={$i}>" ;
        $j = $i + 1;

        print "<font size='4px'>[{$j}]</font>";    // 게시글 목록 번호: " [1][2] "
        print "</a>";
    }
    print "</td>";
    print "</tr>";
?>
            </tbody>
          </table>
        </div>
        <?php
        if(!isset($_SESSION['username'])) {
 echo hide();
      }else{
  echo apper();
}
        ?>
        
      </div>
    </div>
      <hr>
    
 
  </body>
</html>




<?php
/*
// #1 MySQL 접속
$db = mysql_connect( localhost , 'root' , 'password1!' );
if( !$db ){
    die('MySQL connect ERROR : ' . mysql_error());
}
// #2 DB 접속
$ret = mysql_select_db( 'bbs', $db);
if (!$ret) {
    die('MySQL select ERROR : '. mysql_error());
    }
// 세션 사용 선언
session_start();
 
// index.php의 로그인폼에서 보내온 정보를 변수에 저장한다
// user_id 와 user_pw를 POST로 전달받는다
$id = $_POST[user_id];
$pw = $_POST[user_pw];
 
// user테이블에서 입력받은 아이디와 비밀번호가 일치하는 데이터 검색
$sql = "SELECT * FROM user WHERE user_id = '{$id}' and user_pw = md5('{$pw}')";
$resource = mysql_query( $sql );
$num = mysql_num_rows( $resource );
 
 
$asoc= mysql_fetch_asoc($resource);    # 참고 내용 참조
// -> $asoc : Array=( [no]=>사용자 식별번호, [user_id]=>아이디, [user_pw]=>비밀번호, [email]=>이메일 )
 
if( $num > 0 ){ // 아이디와 패스워드가 일치하는 데이터가 검색된 경우.
    // session 테이블에서 입력받은 아이디와 일치한 데이터가 있는지 검색한다
    // session 테이블 = 접속해있는 계정을 저장하는 테이블
    $sql = "SELECT * FROM session WHERE user_id = '{$id}'";
    $resource = mysql_query( $sql );
    $num = mysql_num_rows( $resource );
 
    if ( $num > 0 ){  // session 테이블에 데이터가 존재 = 이미 로그인된 사용자
        echo "<script> alert('이미 로그인 한 사용자입니다 ');</script>";
    }else{
        // 로그인을 아직 안한 사용자, 이제 로그인 됫다!
        // # session 테이블에 사용자 정보를 입력(INSERT)
 
        $sess_id = session_id();         
        // session_id() : 세션번호 반환
        $sql = "INSERT INTO session VALUE( $row[no], '$id','$sess_id')";
        // 사용자 식별번호, 아이디, 세션아이디 값을 세션테이블에 저장시킨다
        // 다음 로그인 시 해당 테이블에 데이터 존재유무를 통해 로그인중인지 아닌지 판단한다
        $ret = mysql_query( $sql );
 
        // # 세션변수에 데이터 추가
        $_SESSION[user_id] = $id;
        $_SESSION[is_login] = 1;
        // # 로그인 환영 메시지 출력
        echo "<script> alert('로그인 되었습니다');</script>";
    }
}else{ // user테이블에 입력받은 아이디와 패스워드가 일치하는 데이터가 없다. 
 
    echo "<script> alert('아이디 또는 패스워드가 올바르지 않습니다 ');</script>";
 
}
 
?>
 
 <meta http-equiv='refresh'content="0;url='http://192.168.6.123/index.php'">
*/