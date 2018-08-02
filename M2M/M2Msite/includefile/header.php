<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 어디서나 볼 수 있는 홈페이지 최 상단 모습들
///////////////////////////////////////////////////////////////////////////////////////////-->
<!-- (영역)메인 홈페이지 제목 -->
<?php 
	include('login_header.php');  
?>
<div id='header'>멘토to멘티</div>

<!-- (영역)메인 홈페이지 로그인 -->


<!-- (영역)메인 홈페이지 각 메뉴들 -->
<div id="menubar">	
	<a href="home.php">홈</a>
	<a href="index.php?page=about">M2M소개</a>
	<a href="index.php?page=findm2m">멘토&멘티찾기</a>	
	<a href="index.php?page=prove">인증하기</a>
	<a href="index.php?page=precustomonly">문의하기</a>	

	<a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a>

	<?php
	if(!$_SESSION[username]==""){
		if($_SESSION[username]==""){
			echo "<a href=''><font color=black>방명록확인</font></a>";
		}else{
			echo "<font color=orange>&nbps;&nbps;&nbps;</font>";
		}	
	echo "<a href='index.php?page=send_status'><font color=black>신청현황</font></a>";
	echo "<a href=''><font color=black>쪽지함</font></a>";	
	echo "<a href='index.php?page=wish_list'><font color=black>위시리스트</font></a>";
	}else{

	}
	?>
	
	<!-- <a href="index.php?page=login">로그인</a> -->	
</div>
