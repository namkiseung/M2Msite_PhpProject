<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 멘토멘티 찾기 게시판 로직(멘토 게시판 글쓰기 후에 넘어와서 디비에 저장하기)
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php
// #1 MySQL 연결
$db = mysql_connect('127.0.0.1', 'root' , '0000' );
if( !$db ){
    die('MySQL connect ERROR : ' . mysql_error());
}
// #2 bbs DB 접속
$ret = mysql_select_db('developer', $db);
if (!$ret) {
    die('MySQL select ERROR : '. mysql_error());
    }
// #3 해당 페이지에서 세션을 사용하겠다
session_start();
 
// write.php에서 게시글 제목, 게시글 내용 입력받아서 옴
$title = $_POST[ttitle];
$text = $_POST[ttext];
// 세션에 저장되어 있는 로그인 한 사용자의 아이디
$user_id = $_POST[tuser];
// data()함수를 이용해 게시글 작성시간을 구한다
//$write_time = date("Y:M:D");
 
// 게시글 번호는 자동으로 입력된다
// 게시글 제목, 게시글내용, 작성자아이디, 작성시간을 DB에 추가한다                                                                                                                                                                                                                                           
$sql = "INSERT INTO mentor_board(title, text, user_id, write_time) VALUES ('$title','$text','$user_id',now())";
$ret = mysql_query( $sql );
if ( $ret ){
    echo "<script> alert('게시글 등록 완료');</script>";
}else{
    echo "<script> alert('게시글 등록 실패');</script>";
}
//게시글 등록 완료 후 초기 페이지로 이동한다
 echo "<meta http-equiv='Refresh' content='0; URL=index.php?page=mentor_find_list'>";
?>

