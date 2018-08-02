<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 멘토멘티 찾기 게시판 로직(멘티 게시판 글쓰기에서 글 저장 할때) 로직 
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php
#1 MySQL 연결
$db = mysql_connect('127.0.0.1', 'root' , '0000' );
if( !$db ){
    die('MySQL connect ERROR : ' . mysql_error());
}
//DB 접속
$ret = mysql_select_db('developer', $db);
if (!$ret) {
    die('MySQL select ERROR : '. mysql_error());
    }
#3 해당 페이지에서 세션을 사용하겠다
session_start();
 
// write.php에서 게시글 제목, 게시글 내용 입력받아서 옴
$title = $_POST[title];
$text = $_POST[text];
// 세션에 저장되어 있는 로그인 한 사용자의 아이디
$user_id = $_POST[user];
// data()함수를 이용해 게시글 작성시간을 구한다
//$write_time = date("Y:M:D");
 
// 게시글 번호는 자동으로 입력된다
// 게시글 제목, 게시글내용, 작성자아이디, 작성시간을 DB에 추가한다                                                                                                                                                                                                                                           
$sql = "INSERT INTO menti_board(title, text, user_id, write_time) VALUE('$title','$text','$user_id',now())";
$ret = mysql_query( $sql );
if ( $ret ){
    echo "<script> alert('게시글 등록 완료');</script>";
}else{
    echo "<script> alert('게시글 등록 실패');</script>";
}
//게시글 등록 완료 후 초기 페이지로 이동한다
 echo "<meta http-equiv='Refresh' content='0; URL=index.php?page=menti_find_list'>";
?>

