<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript">
		function login_check(){
			if(!document.login_form.id.value)
			{
				alert("아이디를 입력하세요");
				document.login_form.id.focus();
				return;
			}
			if(!document.login_form.pass.value){
				alert("pw를 입력하세요");
				document.login_form.pass.focus();
				return;	
			}
			document.login_form.submit();
		}
	</script>
</head>
<body>
	<form name="login_form" method="post" action="login_result.php">
		<div>
			<ul>
				<li>아이디 <input type="text" name="id" required></li>
				<li>비번 <input type="text" name="pw" required></li>
			</ul>			
		</div>
		<button onclick="login_check()">완료</button>
	</form>	
</body>
</html>