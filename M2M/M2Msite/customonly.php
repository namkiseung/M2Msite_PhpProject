<!-- /////////////////////////////////////////////////////////////////////////////////////
메인 홈페이지 '문의하기' 메뉴의 로직
///////////////////////////////////////////////////////////////////////////////////////////-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://static-smartstore.pstatic.net/markup/pc/dist/renew/css/smartstore!!!MjAxOC0wNC0xM1QxMzo1MzowNFpfbmY%3D.css">
<style type="text/css">
.button { height:50px; width:100px;  background-color: #f8585b;  border: none; border-radius: 10px;  color:#fff; padding: 5px 0;  text-align: center; text-decoration: none;  display: inline-block;  font-size: 15px;  margin: 2px;  cursor: pointer;}
    .button:hover {    background-color: blue;}
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
    line-height: 1.5em
}

body{
  background: #fff;
  box-sizing: border-box;
}
section{
  padding: 5% 10%;
}
.animate{
  transition: all .3s;
}

input[name=question]{
    display: none;
}
input[name=question] + label{
    position: relative;
    display: block;
    padding: 5px 5px;
    font-size: 1.2em;
    cursor: pointer;
    background: #1C4A6B;    
    color: white;
    z-index: 2;
    box-shadow: 0 0 10px rgba(0,0,0,.2);
    border-radius: 3px;
}

.response{
    position: relative;
    background: orange;
    color: black;
    padding: 5px 10px;
    -webkit-transform: translate3d(0,-10px, 0) rotate(-.5deg);
    z-index: 1;
    box-shadow: 0 0 10px rgba(0,0,0,.1);
    opacity: 0;
    border-radius: 3px;
}

input[name=question]:checked + label{
    background: #1C4A6B;
    color: black;
}
input[name=question]:checked + label + .response{
    opacity: 1;
    visibility: visible;
    padding: 5px 10px;
    -webkit-transform: translate3d(0, 0, 0) rotate(0deg);
    -webkit-filter: blur(0px);
    margin-bottom: 10px;
    color: white;
}

.fixed-height{
    height: 50px;
    overflow: hidden;
    opacity: 1 !important;
}

</style>

<!-- 버튼을 눌렀을때 입력값 체크하는 자바스크립트 -->
<script type="text/javascript">
    function check_login(){
       if(question.email.value==""){
        alert('이메일을 입력하시오');
        question.content.focus();
        return false;
    }else if(question.subject.value==""){
        alert('제목을 입력하시오');
        question.subject.focus();
        return false;        
    }else if(question.content.value==""){
        alert('내용을 입력하시오');
        question.content.focus();
        return false;
    }else{
       alert("고객님의 의견이 접수되었습니다.");
   }
}
</script>

<!-- Q*A설명  -->
<script type="text/javascript">
   $(function(){

    function setHeight(){
        $(".response").each(function(index,element){
            var target = $(element);
            target.removeClass("fixed-height");
            var height = target.innerHeight();
            target.attr("data-height", height)
            .addClass("fixed-height");
        });
    };

    $("input[name=question]").on("change", function(){
        $("p.response").removeAttr("style");

        var target = $(this).next().next();
        target.height(target.attr("data-height"));
    })

    setHeight();
});</script>

<font align=center>  <h2><b>[ Q&A ]</b></h2></font> <br>
<section>
    <input class="animate" type="radio" name="question" id="q1"/>
    <label class="animate" for="q1">1. M2M의 가치금액 이란?</label>
    <p class="response animate">멘토와 멘티 사이의 정보 교류를 통해 1,000원씩 책정 됩니다. <br> 여기서 정보 교류로 인정하는 범위는 게시글 등록, 명예점수 부여, 경험치 획득 등 <br>이와 같은 멘토와 멘티사이 상호교류 활동을 말합니다.</p>

    <input class="animate" type="radio" name="question" id="q2"/>
    <label class="animate" for="q2">2. 비밀번호 분실시</label>
    <p class="response animate">아래에 '문의하기' 를 이용하여 M2M 담당자에게 문의 해주세요. <br>(단, 본인이 인증 될 수 있는 등본 혹은 신분증을 첨부하여 보내주시기 바라며, 소요기간은 최대 일주일 입니다.)</p>

    <input class="animate" type="radio" name="question" id="q3"/>
    <label class="animate" for="q3">3. 멘토 or 멘티가 되는 방법은?</label>
    <p class="response animate">M2M 이용하는 모든 회원들은 잠재적 멘토와 동시에 잠재적 멘티입니다.<br> 역할 구분없이 자신이 가지고 있는 정보를 마음껏 나누시길 바랍니다. (올바르지 않는 정보는 댓글을 통해서 다른 멘토와 멘티가 피드백을 해주며, <br>건전하지 못한 컨텐츠는 M2M 담당자가 작업 조취를 취할 것입니다.)</p>

    <input class="animate" type="radio" name="question" id="q4"/>
    <label class="animate" for="q4">4. 건의사항 요청방법</label>
    <p class="response animate">M2M에게 요청하고 싶은 건의사항은 언제든지 아래의 문의하기를 이용해 주시기 바라며, 문의시 글의 제목에 '[건의사항]' 이라는 라벨을 붙혀 주시면, 요청하는 건의 사항을 조금더 신속하게 처리해 드리겠습니다. </p>
</section>


<a class="button_scrolltop N=a:SSB.top" role="button" href="#" onclick="window.scrollTo(0,0); return false;"><span class="blind">맨위로</span></a>