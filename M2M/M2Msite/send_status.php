<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 멘토와 멘티 문의하기를 통해 신청한 결과를 보는 페이지
///////////////////////////////////////////////////////////////////////////////////////////-->
<!-- 1. 멘토만 신청현황 보기 -->
<!-- 1. 멘티만 신청현황 보기  -->
<!-- 1. 멘토,멘티 같이  -->

<?php
//로그인 사용자며 scode가 신청중인 리스트 뿌려주기

include 'db_info.php'; //DB연결 및 DB선택
$result = mysql_query("SELECT * FROM app_info WHERE tor_id='".$_SESSION[username]."' AND scode=0");

$mcode = 0;
if($mcode == 0){
?>
<div>
<table style="width:100%">
  <tr style="border: 1px solid black"> 
    <td><a href = "#"><h1>신청현황</h1></a></td>
    <td><a href = "#"><h1>연결현황</h1></a></td> 
    <td><a href = "#"><h1>활동내역</h1></a></td>
  </tr>
  <tr>
    <td><h3>[아이디]</h3></td>
    <td><h3>[신청날짜]</h3></td>
    <td><h3>[수락&거절]</h3></td>
  </tr>
  <?php
  while($row=mysql_fetch_array($result)){//회원정보 가져오기
  ?>
  <tr>
    <td><h3><?= $row[ti_id]?></h3></td> <!-- 아이디  -->
    <td><h3><?= $row[wdate]?></h3></td><!-- 신청날짜 -->
    <!-- default 수락과 거절버튼이 나오고
    수락 누르면 없어지고 -> 신청 페이지로 넘어간다
    거절 누르면 없어지고 테이블에서 코드변경 한다 -->
    
    <td><button class="button">수락</button>
    	<button class="button">거절</button></td>
  </tr>
  <?php
}
  ?>
  
</table>
</div>
<?php
}else if($mcode == 2){


}else if($mcode == 3){


}

?>





