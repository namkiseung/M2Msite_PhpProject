<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 어디서나 볼 수 있는 로그인 폼 
///////////////////////////////////////////////////////////////////////////////////////////-->
<style type="text/css">
.main-wrapper{	
	margin-left: 0px;
	width: 100%;			
	background-color: #1C4A6B;	
}
.headerr .nav{
	width: 100%;
	height: 60px;	
	background-color: #fff;		
}
.headerr .nav .ul{
	float: left;	
}
.headerr .nav .ul .li{
	float: right;
	list-style: none;
}
.headerr .nav .ul .li .a{
	line-height: 63px;
	color: #111;
}
.headerr .nav .ul .a{
	font-family: arial;
	font-size: 10px;
	color: #111;
	line-height: 63px;
}
.headerr .nav-login{
	float :right;	
}
.headerr .nav-login .form{
	float :right;
	padding-top: 15px;
}
.headerr .nav-login .input{
	/*float :left;
	width: 140px;*/
	height: 30px;
	padding: 0px; 
	margin-right: 10px;
	border: none;
	background-color: #CCC;
	
	font-size: 10px;
	color: #111;
	line-height: 30px;
}
.headerr .nav-login .bb{
	float :left;
	width: 60px;
	height: 30px;	
	margin-right: 10px;
	border: none;
	background-color: #f3f3f3;
	
	font-size: 10px;
	color: #555;
	cursor: pointer;	
}
.headerr .nav-login .form .bb{
	background-color: #fff;
}
.bb{
	background-color: #1C4A6B;	
	color: #fff;
}

.bb:hover{
	background-color: #fff;	
	color: #000;
	font-style: solid;
}
.headerr .nav-login .a{
	
	font-size: 10px;
	color: #fff;
	float: left;
	display: block;
	width: 60px;
	height: 60px;
	border: none;
	line-height: 63px;
	cursor: pointer;

}
</style>

<?php
include('./server.php'); 
// ----------------로그인 사용자가 없을때(시작)
if(empty($_SESSION['username'])){
	?>
	<!-- 로그인 비밀번호 입력하는 폼 -->
	<div id=headerr align="right">
		<div id=nav>
			<div class='main-wrapper'>
				<form name='' method='post' class="form">
					<input type='text' name='username' placeholder='아이디' class="input">
					<input type='password' name='password_1' placeholder='비밀번호' class="input">
					<button type='submit' name='login' class="bb">&nbsp;[로그인]&nbsp;</button>
					<a href='index.php?page=register' style="color: #1C4A6B"><font color=white>[회원가입]</font></a>
				</form>   				
			</div>
		</div>
	</div>
	<?php
} // ----------------로그인 사용자가 없을때(끝)
?>
<!-- ==================로그인 사용자가 있을때(시작) -->
<div id=headerr align="right">
	<div id=nav>
		<div class="main-wrapper">			
			<div class="nav-login" align="right" >	
				<?php if(isset($_SESSION['username'])) : ?>	
					<!-- <?=$_SESSION['email'];?> 				 -->
					<!-- <a href='http://127.0.0.1/M2M/M2Msite/home.php'></a> -->
					<form name='' method='get' class="form" style=" margin-right: 5px; size: 10pt">
						<font color=white><?=$_SESSION['username'];?>님이 로그인 하였습니다. </font>
						<button type="submit" name="logout" class="bb"> &nbsp;[로그아웃]&nbsp;</button>
						<a href='index.php?page=edit_user' style="color: #1C4A6B"><font color=white>[내정보]</font></a> 	
					</form>
				<?php endif ?>
<!-- ==================로그인 사용자가 있을때(끝) -->
			</div>      
		</div>
	</div>
</div>
