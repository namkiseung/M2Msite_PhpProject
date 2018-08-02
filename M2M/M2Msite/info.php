
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->

<style type="text/css">
  .button { width:100px;  background-color: #f8585b;  border: none; border-radius: 10px;  color:#fff; padding: 15px 0;  text-align: center; text-decoration: none;  display: inline-block;  font-size: 15px;  margin: 4px;  cursor: pointer;}
    .button:hover {    background-color: blue;}
</style>
<script type="text/javascript">
    function check_login(){
        if(check_loginname.login_id.value==""){
            alert('아이디를 입력하시오');
            check_loginname.id.focus();
            <?=?>
            return false;        
        }else if(check_loginname.login_password.value==""){
            alert('패스워드를 입력하시오');
            check_loginname.id.focus();
            <?=exit?>
            return false;
        }
    }
</script>
<div class="container">
<table class="table table-bordered">
	<?php 
  if($_GET['confirm']==200){ 
echo '(DB저장데이터)<br><br>접속자 : '.$_POST['login_id']; 
echo '<br>'.$_POST['confirm'].'<br>';

}
?>
접속시간 : <script type="text/javascript"> var d=new Date(); document.write(d.getHours()+'시'+d.getMinutes()+'분');</script>
		   <br><br> <button class="button"><a href="index.php?page=login">로그아웃</a></button>                
          </td>
        </tr>    
</table>
</div>      
