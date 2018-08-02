<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 홈페이지 회원가입 로직
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php
include('./server.php');
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<div id="main">
    <style type="text/css">
    .error{
        width: 92%;
        margin:0px auto;
        padding: 10px;
        border: 1px solid #a94442;
        color: #a94442;
        background:#f2dede;
        border-radius: 5px;
        text-align: left;
    }
</style>

<div class="container" align="center">
    <table class="table table-bordered">
        <form name="write_formname" action="index.php?page=register" method="POST">
            <?php
            include('./errors.php');
            ?>            
            <legend><h1>M2M 회원가입</h1></legend>                
            <br>          
            <p>아이디 </p>
            <input type="text" name="username" class="form-control" placeholder="당신의 아이디를 입력하시오." value="<?=$username ?>" style="width: 400px"/>
            <br>
            <p>이메일 </p>
            <input type="text" name="email" class="form-control" placeholder="당신의 이메일을 입력하시오." value="<?=$email ?>" style="width: 400px"/>
            <br>
            <p>비밀번호 </p>
            <input type="password" name="password_1" class="form-control" placeholder="비밀번호를 입력하시오." style="width: 400px"/>
            <br>
            <p>비밀번호 재입력 </p>
            <input type="password" name="password_2" class="form-control" placeholder="비밀번호를 입력하시오." style="width: 400px"/><br><br>

            <div solid #DFDFDF; padding-left: 50px;">                  
                <button type="submit" name="register" class="form-control" style="width: 130px">가입완료</button>
                <br><br>
                <p>이미 가입된 회원 이신가요?<a href="./home.php">로그인</a>하러가기</p>
                
                
            </form>   

        </div>
    </table>















     <!--                <div class="container" align="center">
    <table class="table table-bordered">
        <form name="write_formname" action="/M2M/M2Msite/includefile/registerSAVE.php?data=insert" method="POST" onsubmit="return check_form();">
            <fieldset style="width:600px; float:left;">
                <legend><h1>M2M 회원가입</h1></legend>
                <br> 
                <p>이메일 </p>
                <input type="text" name="email" class="form-control" placeholder="이메일 입력"/>
                <p>이름 </p>
                <input type="text" name="name" class="form-control" placeholder="이름 입력"/>           
                <p>비밀번호 </p>
                <input type="password" name="pwd" class="form-control" placeholder="비밀번호"/>
                <p>비밀번호 재입력 </p>
                <input type="password" name="pwd2" class="form-control" placeholder="비밀번호 재입력"/>   <br>        <input type="hidden" name="experence" value="0" />
                <input type="hidden" name="seasoned" value="0"/>
                <input type="hidden" name="donation" value="0"/>
                <?= $_POST['experence'] ?> -->
                <!--체크 박스 : 여러개 중 여러개 선택 가능-->
              <!-- 
                <p>중점 관심분야 :
                    <select name="hobbySelect" id="hobbySelect" class="form-control">
                        <option selected>해당없음                        
                            <option value="디자인프로그램">디자인 프로그램</option>
                            <option value="개발프로그램">개발 프로그램</option>                    
                        </select>
                    </p>                
                    <br> -->

                   <!--   <script language ="javascript">
                        function SelectValue(idvalue) {
                            var obj_id = document.getElementById('s_id');
                            write_formname.submit() = idvalue;
                        }
                    </script>        --> 

                    <!--   <link rel="stylesheet" type="text/css" href="include/basicstyle.css" />         -->
                    <!-- <div solid #DFDFDF; padding-left: 50px;">                  
                        <button type="submit" class="form-control">약관동의 후 가입완료</button> -->
                        <!-- <a href="temp.php"> -->
                 <!--        </fieldset>    
                       
                    </form>   

                </div>
            </table>
               <div align="center">                            
                            <ul >
                                <li >&nbsp; &nbsp; ○ 서비스 이용약관&nbsp;                         
                                    <a href="index.php?page=register&promise=1">보기</a>&nbsp;&nbsp;<a href="index.php?page=register&promise=2">닫기</a><br>    
                                    <?php setText(); ?>                                                        
                                </li>        
                            </ul>          
                        </div>  -->

                        <!-- <button><a href="login.php">뒤로가기</a></button> -->

            <!-- 회원가입 빈칸 체크 
            <script type="text/javascript">
                function check_form(){
                    if(write_formname.email.value==""){
                        alert('이메일을 입력하시오');
                        write_formname.email.focus();
                        return false;
                    }else if(write_formname.name.value==""){
                        alert('이름을 입력하시오');
                        write_formname.id.focus();
                        return false;
                    }else if(write_formname.pwd.value==""){
                        alert('패스워드를 입력하시오');
                        write_formname.id.focus();
                        return false;
                    }else if(write_formname.pwd2.value==""){
                        alert('패스워드를 입력하시오');
                        write_formname.id.focus();
                        return false;
                    }else if(write_formname.hobby.value==""){
                     /*   alert('관심사를 선택하세요');
            write_formname.id.focus();
            return false;*/
        }
    }
</script>-->



<?php
//function setText(){
/*만약에 text변수에 1이 들어오면
if문 출력한다.
혹은 text변수에 1이 아니라면 else를 출력한다.
$text='';
if($_GET['promise']==1){
    $text = '<br><br> <div align="center|right">
    <p><font align="center">
   &nbsp; &nbsp; 총칙(목적)<br/><br/>

    이 약관은 주식회사 M2M가 “M2M” 인터넷 커뮤니티 서비스 사이트<br>(http://localhost, 이하 "M2M 사이트”라고 합니다)와<br>
    멘토멘티 등 커뮤니티를 통해 제공되는 “M2M” 웹애플리케이션을 통하여 제공하는<br/>
    각종 서비스 및 기타 정보서비스(이하 "서비스"라고 합니다)와 관련하여 회사와 회원간의 권리와<br/>
    의무, 책임사항 및 회원의 서비스이용절차에 관한 사항을 규정함을 목적으로 합니다.
    </p></font>
    </div>
    ';
}else if($_GET['promise']==2){
    // $text2 = '<br><div  align="center|right">
    // <p>
    // &nbsp; &nbsp;개인정보 수집·이용 동의<br/>
    // ① 목적 및 항목<br/><br/>
    // 회사는 다음과 같은 목적으로 개인정보를 수집하여 이용할 수 있습니다. 다만, 전자상거래 등에서의 소비자보호에 관한 법률, 국세기본법, 전자금융거래법 등 관련법령에 따라 주민등록번호 및 은행계좌번호의 수집• 보관이 불가피한 경우에는 이용자에게 고지하여 해당 정보를 수집할 수 있습니다.<br/>
    // 1) 일반회원<br/>
    // - 이메일주소, 휴대폰번호: 회사가 제공하는 서비스의 이용에 따르는 본인확인 등<br/>
    // 2) 구매회원<br/>
    // - 성명, 생년월일, 성별, 외국인등록번호, 이동전화번호, 아이디(e-mail), 비밀번호, 연계정보(CI), 중복가입정보(DI): 회사가 제공하는 서비스의 이용에 따르는 본인확인, 민원사항처리, 회원의 서비스 이용 통계 및 설문 등<br/>
    // - 회사명, 대표자명, 사업자등록번호, 업태, 종목, 전자세금계산서 발급용 이메일, 사업장 혹은 당당자 연락처: 사업자 회원 서비스 제공, 부가가치세법 제32조에 따른 세금계산서 등의 발행 등<br/>
    // - 이메일 주소, 사업장번호, 이동전화번호: 거래의 원활한 진행, 본인의사의 확인, 불만처리, 새로운 상품, 서비스 정보와 고지사항의 안내, 회원의 서비스 이용 통계 및 설문 등<br/>
    // - 수취인 성명, 주소, 전화번호: 서비스 또는 상품과 경품 배송을 위한 배송지 확인 등<br/>
    // - 은행계좌정보, 이동전화번호정보: 대금결제서비스의 제공 등
    // </p></div>';
}
return $text;
}
?>



<!-- mysql_connect('localhost','root','0000');
mysql_select_db('db이름');
$result = mysql_query("질의문");
$row = mysql_fetch_array($result);
var_dump($row);  -->

<!-- 
CREATE TABLE 'member'(
`memberSeq` int(11) NOT NULL AUTO_INCREMENT,
`id` varchar(30) NOT NULL COMMENT`회원 아이디`,
`name` varchar(10) NOT NULL COMMENT`회원 이름`,
`pwd` varchar(20) NOT NULL COMMENT`회원 비밀번호`,
`hobby` varchar(30) DEFAULT NULL COMMENT`취미`, 
`addr` varchar(12) DEFAULT NULL COMMENT`회원 주소`, 
`introduce` varchar(300) DEFAULT NULL COMMENT`자기소개`, 
PRIMARY KEY(`memberSeq`);
)ENGINE=InnoDB DEFAULT CHARSET=utf8
-->*/
?>