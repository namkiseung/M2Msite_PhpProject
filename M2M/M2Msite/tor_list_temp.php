<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 메인 홈페이지에서 명예멘토 부분 나타내는 로직
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php
include 'db_info.php';

// $sql = "CREATE TABLE mentor(
// idx INT(11) NOT NULL AUTO_INCREMENT,
// name VARCHAR(30) NOT NULL,
// introduce VARCHAR(150) NOT NULL,
// email VARCHAR(80) NOT NULL,
// sns VARCHAR(30) NULL,
// profile VARCHAR(100) NULL,
// PRIMARY KEY(idx)
// )";
// mysql_query($sql, $con);

# LIST 설정
# 1. 한 페이지에 보여질 게시물의 수
$page_size=5;

# 2. 페이지 나누기에 표시될 페이지의 수
// $no는 페이지가 시작되는 첫 글의 순번이다.
$page_list_size = 10;
$no = $_GET[no];
if (!$no || $no <0) $no=0;

// 데이터베이스에서 페이지의 첫번째 글($no)부터 
// $page_size 만큼의 글을 가져온다.
$query = "SELECT * FROM mentor ORDER BY idx DESC";
$result = mysql_query($query, $conn);

// 총 게시물 수 를 구한다.
$result_count=mysql_query("SELECT count(*) FROM mentor",$conn);
$result_row=mysql_fetch_row($result_count);
$total_row = $result_row[0];
//결과의 첫번째 열이 count(*) 의 결과다.
//mysql_fetch_row 쓰면 $result_row[0] 처럼 숫자를 써서 접근을 해야한다. 

# 총 페이지 계산
# ceil는 올림이다. 
//if ($total_row <= 0) $total_row = 0;
//$total_page = ceil($total_row / $page_size);//1개면

# 현재 페이지 계산
# no 변수는 0부터 시작해서 +1을 해줌.
//$current_page = ceil(($no+1)/$page_size);

?>
<!DOCTYPE html>

<html lang="ko">
<head>
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
</head>

<body >
	<?php
	include 'tor_list.php';
	?>
	<div id="wrap" class="layout_wide">
		<form class="_wholeproduct_form">
			<!-- 정렬방식 -->
			<h2>[ IT를 빛낸 명예멘토 ]</h2>
			<h4 class="title_home"></h4>
			<div class="module_list_sort">
				<strong class="blind">화면정렬방식</strong>
				<ul class="sort_list" role="tablist">
					<li class="item _click(nmp.front.sellershop.wholeproduct.getWholeProductsByProductSortType(DISPLAY)) _stopDefault" role="presentation"><a href="#" role="tab" aria-selected="false" class="option _productgroup_sort_type_display">명예순</a></li>
					<li class="item _click(nmp.front.sellershop.wholeproduct.getWholeProductsByProductSortType(POPULAR)) _stopDefault" role="presentation"><a href="#" role="tab" aria-selected="false" class="option _productgroup_sort_type_popular">활동순</a></li>
					<li class="item _click(nmp.front.sellershop.wholeproduct.getWholeProductsByProductSortType(EVALUATION)) _stopDefault" role="presentation"><a href="#" role="tab" aria-selected="false" class="option _productgroup_sort_type_evaluation">리뷰순</a></li>
					<li class="item _click(nmp.front.sellershop.wholeproduct.getWholeProductsByProductSortType(RECENT)) _stopDefault" role="presentation"><a href="#" role="tab" aria-selected="true" class="option _productgroup_sort_type_recent">기부금순</a></li>
				</ul>
			</div>
			<!-- 리스트 부분 시작 -->
			
			<!-- ///////////////////////////////////////////////////////////////////////// -->
			<!-- 컨텐츠 시작 -->
			<div class='_productgroup_products_ajax_area'>
				<div class="module_list_product_default extend_five extend_thumbnail_square">
					<ul class="list">
						<?php     
						while($row=mysql_fetch_array($result))
						{
							?>  
							<li class="item">
								<a href="mailto:<?=$row[email]?>" class="N=a:all.product area_overview">               

									<div class="thumbnail" style="border:1px solid #DDDDDD;" onMouseOver="this.style.border='3px solid #000000'" onMouseOut="this.style.border='1px solid #DDDDDD'">
										<img src="<?=$row[profile] ?>" class="border1" data-src="" alt="기본이미지" class="image img_full_h" onerror="this.onerror=null;this.src=''">             </div><a href="mailto:<?=$row[email]?>">    </a>     
										<strong class="title" title="<?=$row[name]?>">이름 : <?=$row[name]?></strong>
										<div class="area_price">
											<strong class="price"><span class="number">이메일 : <?=$row[email]?>

											</span><span class="currency"></span></strong>

										</div>
									</a>                            
								</li>
								<?php
							} 
//데이터베이스와의 연결을 끝는다.
							mysql_close($conn);
							?>
						</ul>
					</div>
				</div>
<!-- 여기까지가 content들 -->
			</form>
			<a class="button_scrolltop N=a:SSB.top" role="button" href="#" onclick="window.scrollTo(0,0); return false;"><span class="blind">맨위로</span></a>
		</div>
	</body>
	</html>