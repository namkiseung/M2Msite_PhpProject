<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 멘토멘티 홈 제외하고 디폴트 틀 
///////////////////////////////////////////////////////////////////////////////////////////-->
<title>M2M</title>
<link rel="stylesheet" type="text/css" href="https://static-smartstore.pstatic.net/markup/pc/dist/renew/css/smartstore!!!MjAxOC0wNC0xM1QxMzo1MzowNFpfbmY%3D.css">

<link rel="stylesheet" type="text/css" href="includefile/style.css" />  
<link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<div id='uni'>
<!-- 헤더  인클루드  -->
<?php
include('includefile/header.php');
?>

<!-- nav  인클루드  -->
<div id="content">		
	<?php
		if($_GET['page']){
			$page=$_GET['page'];
			$display=$page.'.php';
			include($display);            
			//if(true){
				/*'<fieldset>'
        		$a=1; while($a<=50) {
        			$a=$a+1; echo '&nbsp';
        		}
        		'<label>접속자 :' echo $_POST['id']; '<br></label>'
        		'<label>, 접속시간 : '
        		'<script type="text/javascript"> var d=new Date(); document.write(d.getHours()+'시'+d.getMinutes()		+'분');</script> </label>'
        		$a=1; while($a<=105) {
        			$a=$a+1; echo '&nbsp';
        		}
        		'<button><a href="index.php?page=index">로그아웃</a></button>'
        		//<label>비밀번호 : echo $_POST['password']; </label><br>      
      			'</fieldset> '*/
      		//	echo "접속자 :".$_POST['id'].", 접속시간 :".$_POST['d'];
			//}
		}
	?>
</div>
<!-- body  인클루드  -->

<!-- footer  인클루드  -->
<?php
include('includefile/bodyform.php');
include('includefile/introfooter.php');
include('includefile/footer.php');
?>

</div>












<!-- 원종씨랑 mysql -->
<!-- where써야한다
delete 쓰지말아라
디비 사용이유는 인터페이스를 통해 사용자에게 정보서비스 제공하기 위해서
프론트엔드(html, css, js) 모바일웹(android,ios) 백엔드(php apache mysql)

Select id, title, created FROM topic;
Select id, title, created FROM topic ORDER BY title;
LIMIT 0,2
LIMIT 1,2
LIMIT 2,2

MySQL 정보를 PHP엔진에게 주고 이것을 html로 준다.

<1>.
mysql_query.php 만든다
<?php
    //mysql_connect('localhost','root','0000');  // mysql -uroot -p0000 -hlocalhost;와 같다.(디비접속)
    //mysql_select_db('won'); //use won;
    //mysql_query("SELECT id FROM topic WHERE id =5");//SELECT id FROM topic WHERE id =5;
?>
2. -->