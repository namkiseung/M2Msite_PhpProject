<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 멘토멘티 홈 화면
///////////////////////////////////////////////////////////////////////////////////////////-->
<title>M2M<?= $_SESSION[username]?></title>

<!-- <link rel="stylesheet" type="text/css" href="https://static-smartstore.pstatic.net/markup/pc/dist/renew/css/smartstore!!!MjAxOC0wNC0xM1QxMzo1MzowNFpfbmY%3D.css"> -->
<!-- <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> -->

<link rel="stylesheet" type="text/css" href="includefile/style.css" />  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"/>
<style type="text/css">
#img_size{
  width: 420px; height: 340px; overflow: hidden;  
}
#img{
  width:100%;
  height: 70%;
}
</style>



  <!-- 홈페이지 헤더 인클루드  -->  
  <?php
  include('includefile/header.php');
  ?>
  
  <!-- 메인 Body  -->
  <div id="content" align="center"> 
   <?php
   if($_GET['page']){
     $page=$_GET['page'];
     $display=$page.'.php';
     include($display);
   }	
   ?>
   <!-- <script type="text/javascript">alert(document.cookie);</script> -->
   <!-- high 바디  인클루드  -->
   <!-- <div class="row">
    <div class="column">
      <div class="content" id="img_size">
        <img src="" alt="" id="img">
        <h3>마크 저커버그</h3>
        <p>배포한 정보 : 17건</p>
      </div>
    </div>
    <div class="column">
      <div class="content" id="img_size"> 
        <img src="" alt="" id="img">
        <h3>스티븐 호킹</h3>
        <p>배포한 정보 : 189건</p>
      </div>
    </div>
    <div class="column">
      <div class="content" id="img_size">
        <img src="" alt="" id="img">
        <h3>케빈 시스트룸</h3>
        <p>배포한 정보 : 8건</p>
      </div>
    </div>
    <div class="column">
      <div class="content" id="img_size">
        <img src="" alt="" id="img">
        <h3>스티븐 잡스</h3>
        <p>배포한 정보 : 16건</p>
      </div>
    </div>
  </div>
</div> -->

<!-- body  인클루드  -->
<?php
//명예 멘토 사진들 
include('tor_list_temp.php');
//자유게시판
include('list.php');

echo "</div><br><br>";

//홈페이지 푸터
include('includefile/bodyform.php');
include('includefile/introfooter.php');
include('includefile/footer.php');
?>


<a class="button_scrolltop N=a:SSB.top" role="button" href="#" onclick="window.scrollTo(0,0); return false;"><span class="blind">맨위로</span></a>