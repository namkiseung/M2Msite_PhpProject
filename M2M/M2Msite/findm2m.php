<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 멘토멘티 찾기 메뉴  로직

* 동작 시나리오
[멘토및멘티 찾기] 메뉴를 눌렀을때, 

멘토와 멘티의 이미지가 쭉 나열 된다.(이미지들 클릭시) => 해당 사용자의 포트폴리오 (출력) 

이때, 정보에는 (
        1. 해당 사용자 프로필
        2. 이름, 이메일, sns
        3. 경력, 자격증, 컨텐츠 부류
        4. 신청하기, 찜, (버튼)
        5. 방명록 및 평가)

///////////////////////////////////////////////////////////////////////////////////////////-->
  <script type="text/javascript">
    var getUserAgent = navigator.userAgent;
    var getDocument = document;

    // IE 8 HTML5 요소 생성
    if(getUserAgent.indexOf('MSIE 8') !== -1){
      createHtml5ElementsForCrossbrowsing();
    }

    // 새로운 HTML5 요소 사용 시 함수 리스트 안에 추가
    function createHtml5ElementsForCrossbrowsing() {
      var i;
      var createElementList = ['address', 'article', 'aside', 'details', 'figcaption', 'figure', 'footer', 'header', 'main', 'menu', 'nav', 'section', 'summary'];
      for(i=0;i<createElementList.length;i++){
        getDocument.createElement(createElementList[i]);
      }
    }
  </script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Script-Type" content="text/javascript">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  
  <link rel="stylesheet" type="text/css" href="https://static-smartstore.pstatic.net/markup/pc/dist/renew/css/public!!!MjAxOC0wNC0xM1QxMzo1MzowNFpfbmY%3D.css">
  <link rel="stylesheet" type="text/css" href="https://static-smartstore.pstatic.net/markup/pc/dist/renew/css/smartstore!!!MjAxOC0wNC0xM1QxMzo1MzowNFpfbmY%3D.css">
  <link rel="stylesheet" type="text/css" href="https://static-smartstore.pstatic.net/markup/pc/dist/renew/css/theme/color_ivory!!!MjAxOC0wNC0xM1QxMzo1MzowNFpfbmY%3D.css">

<body >
  <!-- <script type="text/javascript">alert("<멘토 & 멘티 등록은 M2M 홈페이지 문의하기를 이용해주세요.>");</script> -->
  <?php  
  include 'find_ti_list.php';
  ?>

  <div id="wrap" class="layout_wide">

    <form class="_wholeproduct_form">
      <!-- 정렬방식 -->
      <h3 class="title_home"><span class="inner">멘티 목록<br><h6>(이미지 클릭시 정보를 확인할 수 있습니다.)</h6></span></h3>

      <div class="module_list_sort">
        <strong class="blind">화면정렬방식</strong>
        <ul class="sort_list" role="tablist">
          <li class="item _click(nmp.front.sellershop.wholeproduct.getWholeProductsByProductSortType(DISPLAY)) _stopDefault" role="presentation"><a href="#" role="tab" aria-selected="false" class="option _productgroup_sort_type_display">등록순</a></li>
          <li class="item _click(nmp.front.sellershop.wholeproduct.getWholeProductsByProductSortType(POPULAR)) _stopDefault" role="presentation"><a href="#" role="tab" aria-selected="false" class="option _productgroup_sort_type_popular">활동순</a></li>
          <li class="item _click(nmp.front.sellershop.wholeproduct.getWholeProductsByProductSortType(EVALUATION)) _stopDefault" role="presentation"><a href="#" role="tab" aria-selected="false" class="option _productgroup_sort_type_evaluation">경험치순</a></li>
          
        </ul>
      </div>
      <!-- 리스트 부분 시작 -->
     


        <!-- 컨텐츠 시작 -->
        <div class='_productgroup_products_ajax_area'>
          <div class="module_list_product_default extend_five extend_thumbnail_square">
            <ul class="list">
 <?php     
///////////////////////////////////////////// 멘티 사진 이미지 띄우기
      while($row=mysql_fetch_array($result))
      {

        ?>
             <li class="item">
              <a href="index.php?page=menti_find_list&id=<?= $row[idx]?>" class="N=a:all.product area_overview">                    
                <div class="thumbnail" style="border:1px solid #DDDDDD;" onMouseOver="this.style.border='3px solid #ff0000'" onMouseOut="this.style.border='1px solid #DDDDDD'">
                  <img src="<?=$row[profile] ?>" data-src="" alt="릴린부츠컷팬츠" class="image img_full_h" onerror="this.onerror=null;this.src=''">                        </div>
                  <strong class="title" title=""><?=$row[name]?></strong>
                  <div class="area_price">
                    <strong class="price"><span class="number"><?=$row[email]?></span><span class="currency"></span></strong>
                  </div>
                </a>                            
              </li>

                       <?php
} // end While
//데이터베이스와의 연결을 끝는다.
mysql_close($conn);
?>
   </form>         
<!-- 여기까지가 content들 -->
<a class="button_scrolltop N=a:SSB.top" role="button" href="#" onclick="window.scrollTo(0,0); return false;"><span class="blind">맨위로</span></a>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<?php
  include 'find_tor_list.php';
  ?>

  <div id="wrap" class="layout_wide">

    <form class="_wholeproduct_form">
      <!-- 정렬방식 -->
      <h3 class="title_home"><span class="inner">멘토 목록<br><h6>(이미지 클릭시 정보를 확인할 수 있습니다.)</h6></span></h3>

      <div class="module_list_sort">
        <strong class="blind">화면정렬방식</strong>
        <ul class="sort_list" role="tablist">
         <li class="item _click(nmp.front.sellershop.wholeproduct.getWholeProductsByProductSortType(DISPLAY)) _stopDefault" role="presentation"><a href="#" role="tab" aria-selected="false" class="option _productgroup_sort_type_display">등록순</a></li>
          <li class="item _click(nmp.front.sellershop.wholeproduct.getWholeProductsByProductSortType(POPULAR)) _stopDefault" role="presentation"><a href="#" role="tab" aria-selected="false" class="option _productgroup_sort_type_popular">활동순</a></li>
          <li class="item _click(nmp.front.sellershop.wholeproduct.getWholeProductsByProductSortType(EVALUATION)) _stopDefault" role="presentation"><a href="#" role="tab" aria-selected="false" class="option _productgroup_sort_type_evaluation">내공순</a></li>
        </ul>
      </div>
      <!-- 리스트 부분 시작 -->
        <!-- 컨텐츠 시작 -->
        <div class='_productgroup_products_ajax_area'>
          <div class="module_list_product_default extend_five extend_thumbnail_square">
            <ul class="list">
 <?php     
/////////////////////////////////////////////멘토들 사진 띄우기 
      while($row=mysql_fetch_array($result))
      {

        ?>
             <li class="item">
              <a href="index.php?page=mentor_find_list" class="N=a:all.product area_overview">                    
                <div class="thumbnail" style="border:1px solid #DDDDDD;" onMouseOver="this.style.border='3px solid #ff0000'" onMouseOut="this.style.border='1px solid #DDDDDD'">
                  <img src="<?=$row[tprofile] ?>" data-src="" alt="" class="image img_full_h" onerror="this.onerror=null;this.src=''">                        </div>
                  <strong class="title" title=""><?=$row[tname]?></strong>
                  <div class="area_price">
                    <strong class="price"><span class="number"><?=$row[temail]?></span><span class="currency"></span></strong>
                  </div>
                </a>                            
              </li>

                       <?php
} // end While
//데이터베이스와의 연결을 끝는다.
mysql_close($conn);
?>

   </form>         


</ul>
</div>
</div>
</form>
</div>
</ul>
</div>

<!-- 여기까지가 content들 -->
</div>

<a class="button_scrolltop N=a:SSB.top" role="button" href="#" onclick="window.scrollTo(0,0); return false;"><span class="blind">맨위로</span></a>

