<?php
$host = '127.0.0.1';
$user = 'root';
$pw = '0000';
$dbName = 'developer';
$db = mysql_connect($host, $user, $pw);
mysql_select_db($dbName);
?>
<script type="text/javascript">
		alert("아 ");
	</script>
<?php
switch ($_GET['data']) {
	case 'insert':	
	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	
	
	

	if(empty('$first') || empty('$last') || empty('$email') || empty('$uid') || empty('$pwd') ){
		header("Location : ./register.php");
		exit();
	}else{
		$sql ="SELECT * FROM users WHERE user_uid='$uid'";
		$result = mysql_query($sql, $db);
		$resultCheck = mysql_num_rows($result);

		if($resultCheck > 0){
			exit();
		}else{
			$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
			$sql = "INSERT INTO users ('user_first','user_last','user_email','user_uid','user_pwd') VALUES ('$first','$last','$email','$uid','$pwd')";
			$result = mysql_query($sql, $db);
			header("Location : ./home.php");			
		}
	}


 //                $sql = "SELECT * FROM dev_info WHERE email = '{$email}'";
 //                $res = mysql_query($sql);

	// if(res->){}

	// $result = mysql_query("INSERT INTO dev_info (email, name, password, hobby, experence, seasoned, donation) VALUES ('".$_POST['email']."','".$_POST['name']."','".mysql_real_escape_string($_POST['pwd'])."','".$_POST['hobbySelect']."','".$_POST['experence']."','".$_POST['seasoned']."','".$_POST['donation']."')");

	// echo mysql_error();
	// header("Location: http://127.0.0.1/M2M/M2Msite/home.php");
	break;	
	case 'delete':
	mysql_query('DELETE FROM dev_info WHERE uid='.$_POST['uid']);
	echo mysql_error();

	//header("Location: M2M/M2Msite/home.php");
	break;
	case 'modify':
	mysql_query('UPDATE dev_info SET email = "'.$_POST['email'].'", name = "'.$_POST['name'].'" WHERE uid = '.$_POST['uid']);	
	echo mysql_error();
	
	break;
}

?>