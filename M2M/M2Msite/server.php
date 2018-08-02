<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 세션 연결하고
로그인 할때 / 로그아웃 할때 / 회원가입하고 회원정보 처리하른 로직
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php
 //연결 
session_start();

$db=mysql_connect('localhost','root','0000');
mysql_select_db('developer', $db);
//만약 레지스터 버튼이 클릭 된다면
$username="";
$email="";
$errors=array();

if(isset($_POST['register'])){	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password_1 = $_POST['password_1'];	
	$password_2 = $_POST['password_2'];

	//ensure that form 필드가 filled properly
	if(empty($username)){
		array_push($errors, "아이디를 입력하세요.");		
	}
	if(empty($email)){
		array_push($errors, "이메일을 입력하세요.");
	}
	if(empty($password_1)){
		array_push($errors, "비밀번호를 입력하세요.");
	}
	if($password_1 != $password_2){
		array_push($errors, "비밀번호가 일치하지 않습니다.");
	}
	$sqlsql = "SELECT * FROM new_users WHERE username='{$username}'"; //DB에 아이디 있는지 확인
	$resource = mysql_query($sqlsql, $db);
	$num = mysql_num_rows($resource);

	if($num > 0){
		array_push($errors, "이미 가입된 아이디 입니다.");
	}
	//if there are no errors, save user to databases
	if(count($errors) == 0){

		#$password = md5($password_1);
		$password = $password_1;		
		$sql = "INSERT INTO new_users (username, email, password) VALUES ('$username','$email','$password')";

		mysql_query($sql, $db);
		$_SESSION['username'] = $username;
		$_SESSION['email'] = $email;
		$_SESSION['success'] = "님이 로그인 하셨습니다";
		
		header('Location: ./home.php');		
	}
}

if(isset($_POST['login'])){
	$username = $_POST['username'];	
	$password = $_POST['password_1'];	
	
	if(empty($username)){
		array_push($errors, "아이디를 입력하세요.");		
	}
	if(empty($password)){
		array_push($errors, "비밀번호를 입력하세요.");		
	}
	if(count($errors) == 0){

		$query = "SELECT * FROM new_users WHERE username='$username' AND password='$password'";
		$result = mysql_query($query, $db);
		if(mysql_num_rows($result) == 1){
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "로그인 상태 입니다.";
			//세션 테이블에 로그인한 사용자 데이터 넣기
			mysql_query("INSERT INTO session (no, user_id, session_id) VALUES ('$username','$email','$password')");


			
			header('Location: ./home.php');	
		}else{
			array_push($errors, "잘못된 아이디와 비밀번호 입니다.");
			header('Location: ./home.php');	
		}

	}
}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		unset($_SESSION['email']);
		unset($_SESSION['success']);
		header('Location: ./home.php');	
	}
	?>