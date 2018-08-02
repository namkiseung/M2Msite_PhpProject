<style type="text/css">
  #img_size{
  width: 420px; height: 340px; overflow: hidden;  
}
#img{
  width:100%;
  height: 70%;
}
</style> -->
<!-- <div class="container">    
  <h1> 게시판</h1>
  <nav>
    <ul><h2>멘토찾기</h2>
    <li>제목 </li>
    <li>내용 </li>
    <li>작성자 </li>
    <li>작성일 </li>
    </ul>
  </nav>
</div>
<div class="container">   
  <nav>
    <ul><h2>멘티찾기</h2>
    <li>제목 </li>
    <li>내용 </li>
    <li>작성자 </li>
    <li>작성일 </li>
    </ul>
  </nav>
</div> -->
<!-- 멘토 멘토 멘토 멘토 멘토 멘토 멘토 멘토 멘토 멘토 멘토 멘토 멘토 멘토 멘토 멘토  -->
<!-- nav  인클루드  -->
  <!-- <div id="content"> 멘토 랭킹
   
   
   <div class="row">
    <div class="column">
      <div class="content" id="img_size">
        <img src="face_dev.jpg" alt="Mountains" id="img">
        <h3>마크 저커버그</h3>
        <p>배포한 정보 : 17건</p>
      </div>
    </div>
    <div class="column">
      <div class="content" id="img_size">
        <img src="hoking.jpg" alt="Lights" id="img">
        <h3>스티븐 호킹</h3>
        <p>배포한 정보 : 189건</p>
      </div>
    </div>
    <div class="column">
      <div class="content" id="img_size">
        <img src="insta_dev.jpg" alt="Nature" id="img">
        <h3>케빈 시스트룸</h3>
        <p>배포한 정보 : 8건</p>
      </div>
    </div>
    <div class="column">
      <div class="content" id="img_size">
        <img src="stiven_dev.jpg" alt="Mountains" id="img">
        <h3>스티븐 잡스</h3>
        <p>배포한 정보 : 16건</p>
      </div>
    </div>
  </div>
</div>
-->

<!DOCTYPE html>

<html lang="ko">
<head>
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

</head>
<body >


  <div id="wrap" class="layout_wide">
   
  <form class="_wholeproduct_form">
  <!-- 정렬방식 -->
   <h4 class="title_home"><span class="inner">멘토목록</span></h4>
        <div class="module_list_sort">
          <strong class="blind">화면정렬방식</strong>
          <ul class="sort_list" role="tablist">
            <li class="item _click(nmp.front.sellershop.wholeproduct.getWholeProductsByProductSortType(DISPLAY)) _stopDefault" role="presentation"><a href="#" role="tab" aria-selected="false" class="option _productgroup_sort_type_display">명예순</a></li>
            <li class="item _click(nmp.front.sellershop.wholeproduct.getWholeProductsByProductSortType(POPULAR)) _stopDefault" role="presentation"><a href="#" role="tab" aria-selected="false" class="option _productgroup_sort_type_popular">활동순</a></li>
            <li class="item _click(nmp.front.sellershop.wholeproduct.getWholeProductsByProductSortType(EVALUATION)) _stopDefault" role="presentation"><a href="#" role="tab" aria-selected="false" class="option _productgroup_sort_type_evaluation">리뷰순</a></li>
            <li class="item _click(nmp.front.sellershop.wholeproduct.getWholeProductsByProductSortType(RECENT)) _stopDefault" role="presentation"><a href="#" role="tab" aria-selected="true" class="option _productgroup_sort_type_recent">경력순</a></li>
          </ul>
        </div>

<!-- 컨텐츠 시작 -->
    <!-- <div class="_productgroup_products_ajax_area">
      <div class="module_list_product_default extend_five extend_thumbnail_square">
        <ul class="list">

             <li class="item">
                  <a href="/subling/products/2751119257" class="N=a:all.product area_overview">                    
                    <div class="thumbnail ">
                      <img src="" data-src="" alt="릴린부츠컷팬츠" class="image img_full_h" onerror="this.onerror=null;this.src=''">                        </div>
                      <strong class="title" title="[슈블링]마릴린부츠컷팬츠">마릴린부츠컷팬츠</strong>
                      <div class="area_price">
                        <strong class="price"><span class="number">54,000</span><span class="currency">원</span></strong>
                      </div>
                    </a>                            
                  </li>

               <li class="item">
                  <a href="/subling/products/2751119257" class="N=a:all.product area_overview">                    
                    <div class="thumbnail ">
                      <img src="" data-src="" alt="릴린부츠컷팬츠" class="image img_full_h" onerror="this.onerror=null;this.src=''">                        </div>
                      <strong class="title" title="[슈블링]마릴린부츠컷팬츠">마릴린부츠컷팬츠</strong>
                      <div class="area_price">
                        <strong class="price"><span class="number">54,000</span><span class="currency">원</span></strong>
                      </div>
                    </a>                            
                  </li>

                  <li class="item">
                  <a href="/subling/products/2751119257" class="N=a:all.product area_overview">                    
                    <div class="thumbnail ">
                      <img src="" data-src="" alt="릴린부츠컷팬츠" class="image img_full_h" onerror="this.onerror=null;this.src=''">                        </div>
                      <strong class="title" title="[슈블링]마릴린부츠컷팬츠">마릴린부츠컷팬츠</strong>
                      <div class="area_price">
                        <strong class="price"><span class="number">54,000</span><span class="currency">원</span></strong>
                      </div>
                    </a>                            
                  </li>

                <li class="item">
                  <a href="/subling/products/2751119257" class="N=a:all.product area_overview">                    
                    <div class="thumbnail ">
                      <img src="" data-src="" alt="릴린부츠컷팬츠" class="image img_full_h" onerror="this.onerror=null;this.src=''">                        </div>
                      <strong class="title" title="[슈블링]마릴린부츠컷팬츠">마릴린부츠컷팬츠</strong>
                      <div class="area_price">
                        <strong class="price"><span class="number">54,000</span><span class="currency">원</span></strong>
                      </div>
                    </a>                            
                  </li>


                </ul>
              </div>
            </div> -->
<!-- 여기까지가 content들 -->

      <!--     </form>
        <a class="button_scrolltop N=a:SSB.top" role="button" href="#" onclick="window.scrollTo(0,0); return false;"><span class="blind">맨위로</span></a>
      </div>


    </body>
    </html>