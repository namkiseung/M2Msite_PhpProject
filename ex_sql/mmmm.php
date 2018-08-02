<?php
$conn = mysql_connect('127.0.0.1','root','0000');
mysql_select_db('developer', $conn);

#setcookie('cookie1', 'namekiseung');
#setcookie('cookie2', time(), time()+6500); //현재시간을 리턴해주는게 time()
//session_save_path('/usr/local/php/include/php/ext/session'); #사용자가 세션데이터를 저장. 하는것을 지정하는 것.
//session_start(); //세션시작 로직초입에 반드시 작성.
//$_SESSION['title'] = 'namekiseung';

/*
쿠키나 세션이나 사용자의 상태를 유지 시키는 목적
쿠키는 모든 데이터를 '쿠키'형태로 저장
세션은 현재 이게 누구인지 식별자만을 브라우저에 저장. 실질적 정보는 서버나 디비에 저장.

쿠키는 모든 정보를 브라우저에 저장하기에 데이터가 보안에 취약
세션은 식별자만을 로컬에 저장하기에 private 정보는 서버에.
*/

//$query = "se";
// $res = mysql_query($query, $conn);
// while($row= mysql_fetch_assoc($res)){

//    print_r($row); 
//  echo '<br>';

 #}
//DB연결 체크
/*if($db->connect_error) {
		die('데이터베이스 연결에 문제가 있습니다.\n관리자에게 문의 바랍니다.');
	}
	$query="CREATE TABLE threadboard(
id int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
thread int(11) UNSIGNED NOT NULL,
depth int(11) UNSIGNED NOT NULL DEFAULT '0',
name varchar(20) NOT NULL,
email varchar(30),
pass varchar(10) NOT NULL,
title varchar(70) NOT NULL,
content text NOT NULL,
wdate int(11) NOT NULL,
ip varchar(16) NOT NULL,
VIEW int(11) NOT NULL DEFAULT '0',
PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=euckr";

$res = mysql_query($query, $conn);*/


/*if($db->connect_error) {
		die('데이터베이스 연결에 문제가 있습니다.\n관리자에게 문의 바랍니다.');
	}
	$query="CREATE TABLE mentor_list(
idx int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
tname varchar(30) NOT NULL,
tintroduce varchar(100) NOT NULL,
temail varchar(30),
tsns varchar(30),
tprofile varchar(100),
PRIMARY KEY (idx)
)";*/
/*$query = "INSERT INTO mentor_list (tname, tintroduce, temail, tsns, tprofile) VALUES ('shvm','반가워요','shvm@naver.com','','./mentot_list22.jpeg')";
$res = mysql_query($query, $conn);*/
?>

<!--  $query = "INSERT INTO mentor (name, introduce, email, sns, profile) VALUES ('','','','','')";
$query = "INSERT INTO mentor (name, introduce, email, sns, profile) VALUES ('taeyeon','반가워요','tangu89@naver.com','instrgram','net7.jpeg')";

$query="delete from mentor WHERE idx=11";


$res = mysql_query($query, $conn);

 while($row= mysql_fetch_assoc($res)){

   print_r($row); 
 echo '<br>';

 }
  -->
  <?php 
  echo "DOCUMENT_ROOT(서버상 사이트 위치) :".$_SERVER['DOCUMENT_ROOT'].'<br>';// = 현재 사이트가 위치한 서버상의 위치 => /webapp/include
echo "HTTP_ACCEPT_ENCODING(인코딩방식) :".$_SERVER['HTTP_ACCEPT_ENCODING'].'<br>';// = 인코딩 받식 => gzip, deflate
echo "HTTP_ACCEPT_LANGUAGE(사용언어) :".$_SERVER['HTTP_ACCEPT_LANGUAGE'].'<br>';// = 언어 => ko
echo 'HTTP_USER_AGENT(사이트 접속 사용자 환경) :'.$_SERVER['HTTP_USER_AGENT'].'<br>';// = 사이트 접속한 사용자 환경 => Mozilla/4.0(compatible; MSIE 6.0; Windows NT 5.1; Q312461; .NET CLR 1.0.3705
echo 'REMOTE_ADDR(접속한 사용자 IP) :'.$_SERVER['REMOTE_ADDR'].'<br>';// = 사이트 접속한 사용자 IP => xxx.xxx.xxx.xxx
echo 'HTTP_REFERER(현재 페이지 오기전 주소) :'.$_SERVER['HTTP_REFERER'].'<br>';// = 현제 페이지로 오기전의 페이지주소값 => http://www.test.net/index.php?user=???
//(A태그나 form으로 전송시 값이 넘어옴. onclick으로 전송시 값이 넘어오지 않음)
echo 'SCRIPT_FILENAME(실행되는 위치와 파일명) :'.$_SERVER['SCRIPT_FILENAME'].'<br>';// = 실행되고 있는 위치와 파일명 => webapp/include/index.php
echo 'SERVER_NAME(가상호스트에 지정한 사이트 도메인) :'.$_SERVER['SERVER_NAME'].'<br>';// = 사이트 도메인 => www.test.com (버추얼 호스트에 지정한 도메인)
echo 'HTTP_HOST(접속할때 사용한 도메인) :'.$_SERVER['HTTP_HOST'].'<br>';// = 사이트 도메인 => www.test.com (접속할 때 사용한 도메인)
echo 'SERVER_PORT(사용포트) :'.$_SERVER['SERVER_PORT'].'<br>';// = 사이트가 사용하는 포트 => 80
echo 'SERVER_SOFTWARE(서버의 소프트웨어 환경) :'.$_SERVER['SERVER_SOFTWARE'].'<br>';// = 서버의 소프트웨어 환경 => Apache/1.3.23 (Unix) PHP/4.1.2 mod_fastcgi/2.2.10 mod_throttle/3.1.2 mod_ssl/2.8.6 OpenSSL/0.9.6c
echo 'GATEWAY_INTERFACE(cGI정보) :'.$_SERVER['GATEWAY_INTERFACE'].'<br>';// = cGI 정보 => CGI/1.1
echo 'SERVER_PROTOCOL(사용하는 서버 프로토콜) :'.$_SERVER['SERVER_PROTOCOL'].'<br>';// = 사용된 서버 프로토콜 => HTTP/1.1
echo 'REQUEST_URI(현재페이지 GET메서드) :'.$_SERVER['REQUEST_URI'].'<br>';// = 현재페이지의 주소에서 도메인 제외 => /index.php?user=???&name=???
echo 'PHP_SELF(현재페이지 주소에서 넘겨지는 값 제외) :'.$_SERVER['PHP_SELF'].'<br>';// = 현재페이지의 주소에서 도메인과 넘겨지는 값 제외 = /default/index.php
//*파일명만 가져올때 : basename($_SERVER['PHP_SELF']);
echo 'APPL_PHYSICAL_PATH(현재페이지 실제 파일 위치) :'.$_SERVER['APPL_PHYSICAL_PATH'].'<br>';// = 현재페이지의 실제 파일 주소 => D:\webapp/
echo 'QUERY_STRING(도메인 파라미터) :'.$_SERVER['QUERY_STRING'].'<br>';// = get방식의 파일명 뒤에 붙어서 넘어오는 값 => ?user=???&name=??? (반드시get방식으로 넘겨야됨)


   ?>