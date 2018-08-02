
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->

<style type="text/css">
.button { width:100px;  background-color: #f8585b;  border: none; border-radius: 10px;  color:#fff; padding: 15px 0;  text-align: center; text-decoration: none;  display: inline-block;  font-size: 15px;  margin: 4px;  cursor: pointer;}
.button:hover {    background-color: blue;}
</style>


<div class="container" align="center">
  <table >
   <form name="check_loginname" action="index.php?page=info&&confirm=200" method="POST" onsubmit="return check_login();">
     
     <tr>
      <td><label>이메일 : <input class="form-control" type="text" name="login_email" style="width: 500px"></label><br><br>
        <label>비밀번호 : <input class="form-control" type="password" name="login_password" style="width: 500px"></label><br></td>
      </tr>                
      <tr>
        <td align="center">
          <br>
          <INPUT type="checkbox" name="check_login" valuse="login" class="button"/>ID저장 <br>
          <br><button type="submit" class="button" >로그인</button></form> <br>                         
          <button class="button" ><a href="index.php?page=register">회원가입</a></button>
          

        </form>        
        </td>
      </tr>    
    </table>
  </form> 
</div>      

<script type="text/javascript">
  function check_login(){
    if(check_loginname.login_email.value==""){
      alert('이메일을 입력하시오');
      check_loginname.login_email.focus();             
      return false;        
    }else if(check_loginname.login_password.value==""){
      alert('패스워드를 입력하시오');
      check_loginname.login_password.focus();
      return false;
    }
  }
</script>