<?php				//로그아웃
//if(isset($_GET['logout'])){
session_start();
session_destroy();
$_SESSION['success']="";	
$_SESSION['username']="";	
$_SESSION['email']="";	
	//}

header('Location: http://127.0.0.1/M2M/M2Msite/home.php');
?>
<!-- <style type="text/css">
.main-wrapper{
	margin: 0 auto;
	width: 1800px;	
}
header nav{
	width: 100%;
	height: 60px;
	background-color: #fff;	
}
header nav ul{
	float: left;
}
header nav ul li{
	float: right;
	list-style: none;
}
header nav ul li a{
	line-height: 63px;
	color: #111;
}
header nav ul a{
	font-family: arial;
	font-size: 16px;
	color: #111;
	line-height: 63px;
}
header .nav-login{
	float :right;	
}
header .nav-login form{
	float :left;
	padding-top: 15px;
}
header .nav-login input{
	float :left;
	width: 140px;
	height: 30px;
	padding: 0px; 10px;
	margin-right: 10px;
	border: none;
	background-color: #CCC;
	font-family: arial;
	font-size: 14px;
	color: #111;
	line-height: 30px;
}
header .nav-login button{
	float :left;
	width: 60px;
	height: 30px;	
	margin-right: 10px;
	border: none;
	background-color: #f3f3f3;
	font-family: arial;
	font-size: 14px;
	color: #111;
	cursor: pointer;	
}
header .nav-login form button:hover{
	background-color: #ccc;
}
header .nav-login a{
	font-family: arial;
	font-size: 14px;
	color: #111;
	float: left;
	display: block;
	width: 60px;
	height: 60px;
	border: none;
	line-height: 63px;
	cursor: pointer;

}
</style>
<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li></li>
			</ul>
			<form name="" method="post" >
				<input type="text" name="username" placeholder="아이디란">
				<input type="password" name="password_1" placeholder="비밀번호란">
				<button type="submit" name="submit">로그인</button>
			</form>   
			<a href="register.php">회원가입</a>    					
		</div>
	</nav>
</header> -->
