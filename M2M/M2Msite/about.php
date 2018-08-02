<!-- /////////////////////////////////////////////////////////////////////////////////////
메인 홈페이지 'M2M 소개' 메뉴의 로직
///////////////////////////////////////////////////////////////////////////////////////////-->
<link rel="stylesheet" type="text/css" href="https://static-smartstore.pstatic.net/markup/pc/dist/renew/css/smartstore!!!MjAxOC0wNC0xM1QxMzo1MzowNFpfbmY%3D.css">

<div align="center"><h1>[ M2M의 소개 ]</h1></div><br>
<!-- 탭 HTML 레이아웃 추가 -->
<?php include("includefile/noticeTab.php"); ?>
<br><br><br>
<style>
div.container {
  width: 100%;
  border: 1px solid gray;
}

.about_header, .about_footer {
  padding: 1em;
  color: white;
  background-color: black;
  clear: left;
  text-align: center;
}

.about_nav {
  float: left;
  max-width: 160px;
  margin: 0;
  padding: 1em;
}

.about_nav ul {
  list-style-type: none;
  padding: 0;
}

.about_nav ul a {
  text-decoration: none;
}

article {
  margin-left: 170px;
  border-left: 1px solid gray;
  padding: 1em;
  overflow: hidden;
}
</style>
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<div align="center"><h1>[ M2M 컨텐츠 기본적인 지식 ]</h1></div><br>
<div class="container">
  <nav class="about_nav">	
    <ul>프로그래밍<br>
      <li><a href="index.php?page=about&&pcontent=<?=1?>">HTML기초</a></li>
      <li><a href="index.php?page=about&&pcontent=<?=2?>">JAVA기초</a></li>
      <li><a href="index.php?page=about&&pcontent=<?=3?>">Android기초</a></li>
      <li><a href="index.php?page=about&&pcontent=<?=4?>">php기초</a></li>    
    </ul>
  </nav>
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
  <article>
    <h1>설명 :</h1>  
    <?php  
    if($_GET['pcontent']==1){
      echo apper_content();
    }else if($_GET['pcontent']==2){
      echo apper_content();
    }else if($_GET['pcontent']==3){
      echo apper_content();
    }else if($_GET['pcontent']==4){
      echo apper_content();
    }else{ /*디폴트 설명 페이지 내용*/
      echo '<p>기계(컴퓨터)에게 명령 또는 연산을 시킬 목적으로 설계되어 기계와 의사소통을 할 수 있게 해주는 언어를 뜻한다. 그 결과, 사람이 원하는 작업을 컴퓨터가 수행할 수 있도록 프로그래밍 언어로 일련의 과정을 작성하여 일을 시킨다. 쉽게 말하면 컴퓨터를 부려먹기 위한 언어. 소프트웨어를 만드는데 기본이 된다.</p>
      <p>컴퓨터보다 먼저 등장하였으며 본격적인 연구는 1930년대 즈음부터 수학자들에 의해 기계적으로 계산 가능한 함수에 대한 연구가 진행된 데에서 비롯되었다. 그 결과 기계가 이해할 수 있는 언어가 탄생했으며, 바로 이 기계가 계산 가능하고 이해 가능한 언어를 실행하는 기계로 언어보다 나중에 발명된 것이 바로 현대적 의미의 컴퓨터다. </p>';
    } 
    ?>
  </article>
</div>
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<div class="container">  
  <nav class="about_nav">	
    <ul>디자인<br>
      <li><a href="index.php?page=about&&dcontent=<?=1?>">포토샵 기초</a></li>
      <li><a href="index.php?page=about&&dcontent=<?=2?>">3D MAX 기초</a></li>
      <li><a href="index.php?page=about&&dcontent=<?=3?>">영상편집 기초</a></li>
    </ul>
  </nav>
  <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
  <article>
    <h1>설명 :</h1>
    <?php  
    if($_GET['dcontent']==1){
      echo apper_content();
    }else if($_GET['dcontent']==2){
      echo apper_content();
    }else if($_GET['dcontent']==3){
      echo apper_content();
    }else{ /*디폴트 설명 페이지 내용*/
      echo '<p>컴퓨터그래픽 프로그램 즉 CG소프트웨어는 크게 2가지가 있습니다. 2D 그래픽과, 3D그래픽입니다.
      2D는 2차원 그래픽인데, 이것은 일반적인 그림이나 사진을 그리고 편집하는 것이고, 3D는 3차원 그래픽입니다. 삼차원 메쉬(그물)를 이용하여 실물과 같은 입체적인 그림을 그리는 것입니다.</p>
      <p>2D 그래픽 소프트웨어로 가장 유명하고 널리 사용되는 것은 포토샵 그리고 3D 그래픽 소프트웨어는 3D Max 라는 프로그램이 가장 유명합니다. 흔히 "맥스"라고 불립니다. 건축물의 삼차원 조감도를 그릴 때 주로 사용되었는데 지금은 영화 제작이나 CF제작 등에서도 널리 사용됩니다.   </p>';
    } 
    ?>
  </article>
</div>
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<?php
function apper_content(){
  if($_GET['pcontent']==1){
			/*$page=$_GET['page'];
			$display=$page.'.php';*/
			$view = "<p>먼저 Html 이란 Hyper Text Markup Language 의 약자이며
      홈페이지를 만드는데 있어서 기본적인 프로그램 언어라고 생각하시면 됩니다.
      1. Html 의 구조
      Html 은 <로 시작해서 > 로 끝나는 태그라는 것을 가지고 작성합니다.
      하나의 시작 태그는 <html>과 같은 구조이며 이 태그가 끝나는 시점을 알리는 부분은 </ 로 시작해서 >로 끝나는 태그로 작성합니다.
      그럼 하나의 태그 모양은 <html> </html> 과같은 모양이 되고 이 태그 사이에 다른 태그 및 텍스트를 작성하여 홈페이지를 만든다고 생각하시면 되겠습니다.</p>";
      return $view;
    }else if($_GET['pcontent']==2){			
      $view = "<p>Java의 특징
      기술 진보는 '절망의 성숙'을 통해서 이루어진다. 자바 이전에도 많은 언어들가 있었다. 이들 선배 언어들은 그 언어가 소속된 시대의 문제를 해결하기 위해서 고안되었다. 마침내 이들 언어들가 문제를 해결했을 때 이 언어들은 새로운 문제에 직면하게 된다. 문제들은 점점 처치 곤란한 절망이 되고 그 절망이 충분히 성숙했을 때 비로소 새로운 도약지점이 보이기 시작한다. 자바라는 언어를 온전하게 이해하기 위해서는 자바 이전 세대의 기술들이 초래한 절망을 이해해야 할 것이다.</p>";
      return $view;
    }else if($_GET['pcontent']==3){			
      $view = "<p>안드로이드 개요
      구글 안드로이드는 개방적이고 무료인 최초의 모바일 플랫폼이다. 안드로이드는 완전한 소프트웨어 스택으로서 운영체제, 미들웨어, 주요 모바일 애플리케이션을 포함하고 있으며 애플리케이션을 개발할 수 있도록 도와주는 도구들과 API도 제공하고 있다. 이러한 이유로 안드로이드는 기업뿐만 아니라 개인들도 쉽게 개발할 수 있다.
      안드로이드 사용자는 기존 핸드폰과는 다르게 PC처럼 다양하고 많은 콘텐츠를 접할 수 있으며 개발자는 애플리케이션 개발을 통해 수익을 얻을 수 있다. 또한 이동통신 사업자는 안드로이드 활성화를 통해 단말기 판매 수익과 콘텐츠 유통 수익을 얻을 수 있다. 단말기 제조사는 저렴한 비용으로 안드로이드 플랫폼을 사용하여 여러 단말을 제조하여 수익을 얻을 수 있다.</p>";
      return $view;
    }else if($_GET['pcontent']==4){			
      $view = "<p>대표적인 서버 사이드 스크립트 언어로 한국을 비롯한 전 세계 수많은 웹 시스템의 기반이 되는 언어. 비슷한 언어로는 ASP, JSP, ROR 등이 있다. C-like 문법[2]을 사용하여, 소규모 웹 페이지 제작시 쉽고 빠르다는 점에서 사용자, 사용처가 많다. 1995년 라스무스 러돌프[3]에 의하여 처음 공개되었고, The PHP Group이라는 단체에서 개발 및 관리를 맡고 있다.</p>
      <p>PHP는 서버 측에서 실행되는 프로그래밍 언어로 HTML을 프로그래밍적으로 생성해주고, 데이터베이스와 상호작용 하면서 데이터를 저장하고, 표현합니다. PHP는 웹을 위해서 만들어졌고, 지금도 웹을 위해서 발전하고 있는 웹을 위한 언어입니다. 웹프로그래밍을 위한 높은 생산성을 제공하는 언어입니다.</p>";
      return $view;
    }else if($_GET['pcontent']==5){     
      $view = "<p>대표적인 서버 사이드 스크립트 언어로 한국을 비롯한 전 세계 수많은 웹 시스템의 기반이 되는 언어. 비슷한 언어로는 ASP, JSP, ROR 등이 있다. C-like 문법[2]을 사용하여, 소규모 웹 페이지 제작시 쉽고 빠르다는 점에서 사용자, 사용처가 많다. 1995년 라스무스 러돌프[3]에 의하여 처음 공개되었고, The PHP Group이라는 단체에서 개발 및 관리를 맡고 있다.</p>
      <p>PHP는 서버 측에서 실행되는 프로그래밍 언어로 HTML을 프로그래밍적으로 생성해주고, 데이터베이스와 상호작용 하면서 데이터를 저장하고, 표현합니다. PHP는 웹을 위해서 만들어졌고, 지금도 웹을 위해서 발전하고 있는 웹을 위한 언어입니다. 웹프로그래밍을 위한 높은 생산성을 제공하는 언어입니다.</p>";
      return $view;
    }else if($_GET['dcontent']==1){			
      $view = "<p>포토샵 또는 어도비 포토샵(Adobe Photoshop)는 어도비 시스템즈에서 개발되어 발표된 그래픽 관련 소프트웨어어도비 시스템즈에서 개발하고 발표한 그래픽 편집 프로그램을 말합니다.
      1987년 미시간 대학교의 PhD 학생이었던 Thomas Knoll은 흑백이미지로 변환하기 위한 프로그램을 개발하기 시작했습니다. Display라고 불렸던 이 프로그램은 그의 형제인 John Knoll의 관심을 받으면서 완전히 모양을 갖춘 이미지 편집 프로그램으로 개발되었습니다.
      포토샵은 다른 어도비 소프트웨어와 파일을 공유함으로써 미디어 편집, 애니메이션 편집 작업이 가능합니다. 포토샵에서 사용되는 포토샵 문서인 PSD파일은 이미지 파일의 편집 정보가 저장된 상태로 존재합니다.</p>";
      return $view;
    }else if($_GET['dcontent']==2){			
      $view = "<p>오토데스크 3ds 맥스는 오토데스크 미디어 및 엔터테인먼트에서 개발된 3차원 컴퓨터 그래픽스를 위한 디자인 소프트웨어이다. 도스용으로 개발된 3D 스튜디오의 후속 버전으로 마이크로소프트 윈도 플랫폼에서 작동한다. 주로 사용되는 용도는 엔터테인먼트 분야이고 3ds max design이라는 소프트웨어도 있지만 3ds max와 겉모습은 같지만 주 사용처는 다르다. 3ds max design은 주로 건축에 쓰인다고 한다.</p>";
      return $view;
    }else if($_GET['dcontent']==3){			
      $view = "<p>영상 편집은 다음을 가리키는 말이다: 비선형 편집 시스템: 영상 편집 소프트웨어가 설치된 컴퓨터를 사용하여 영상을 편집한다. 선형 영상 편집: 영상 테이프를 직접 사용하여 영상을 편집한다. 영상 편집은 다른 조각의 영상을 형성하기 위해 영상의 단편을 수정하거나 다시 정렬하는 과정을 말한다. 영상 편집의 목적은 원치 않는 영상 부분을 지우고 원하는 부분을 분리하고 새로운 부분과 합성, 정렬하는 필름 편집과 같다. </p>";
      return $view;
    }
  } 
  ?>

  <a class="button_scrolltop N=a:SSB.top" role="button" href="#" onclick="window.scrollTo(0,0); return false;"><span class="blind">맨위로</span></a>