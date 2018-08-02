<!-- /////////////////////////////////////////////////////////////////////////////////////
메인 홈페이지 자유게시판 젤 처음 리스트
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php
//데이터 베이스 연결하기
include "db_info.php";

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
$query = "SELECT * FROM board ORDER BY id DESC LIMIT $no, $page_size";
$result = mysql_query($query, $conn);

// 총 게시물 수 를 구한다.
$result_count=mysql_query("SELECT count(*) FROM board",$conn);
$result_row=mysql_fetch_row($result_count);
$total_row = $result_row[0];
//결과의 첫번째 열이 count(*) 의 결과다.
//mysql_fetch_row 쓰면 $result_row[0] 처럼 숫자를 써서 접근을 해야한다. 

# 총 페이지 계산
# ceil는 올림이다. 
if ($total_row <= 0) $total_row = 0;
$total_page = ceil($total_row / $page_size);//1개면

# 현재 페이지 계산
# no 변수는 0부터 시작해서 +1을 해줌.
$current_page = ceil(($no+1)/$page_size);
?>
<html>
<head>
  <title></title>
  <style>

  td {font-size : 9pt;}
  A:link {font : 9pt;color : black;text-decoration : none; fontfamily : 굴림; font-size : 12pt;}
    A:visited {text-decoration : none; color : black; font-size : 15pt;}
    A:hover {text-decoration : underline; color : black; font-size : 13pt;}


    #container {
      width: 80%;
      margin: 0 auto;     /* 가로로 중앙에 배치 */
      padding-top: 10%;   /* 테두리와 내용 사이의 패딩 여백 */
    }

    #list {
      text-align: center;
    }

    #write {
      text-align: right;
    }

    /* Bootstrap 수정 */
    .table > thead {
      background-color: #b3c6ff;
    }
    .table > thead > tr > th {
      text-align: center;
    }
    .table-hover > tbody > tr:hover {
      background-color: #e6ecff;
    }
    .table > tbody > tr > td {
      text-align: center;
    }
    .table > tbody > tr > #title {
      text-align: left;
    }

    div > #paging {
      text-align: center;
    }

    .hit {
      animation-name: blink;
      animation-duration: 1.5s;
      animation-timing-function: ease;
      animation-iteration-count: infinite;
      /* 위 속성들을 한 줄로 표기하기 */
      /* -webkit-animation: blink 1.5s ease infinite; */
    }

    /* 애니메이션 지점 설정하기 */
    /* 익스플로러 10 이상, 최신 모던 브라우저에서 지원 */
    @keyframes blink {
      from {color: white;}
      30% {color: yellow;}
      to {color: red; font-weight: bold;}
      /* 0% {color:white;}
      30% {color: yellow;}
      100% {color:red; font-weight: bold;} */
    }
    .button { width:100px;  background-color: #f8585b;  border: none; border-radius: 10px;  color:#fff; padding: 15px 0;  text-align: center; text-decoration: none;  display: inline-block;  font-size: 15px;  margin: 4px;  cursor: pointer;}
    .button:hover {    background-color: blue;}
  </style>
</head>
<body topmargin=0 leftmargin=0 text=#464646 font-size="12pt">
  <center>
    <br>
    <!-- 게시판 타이틀 -->
    <font size=2><h2>[ 자유게시판 ]</h2></a>
      <BR>
      <BR>
      <!-- 게시물 리스트를 보이기 위한 테이블 -->
      <table width=1100 border=0 cellpadding=2 cellspacing=1
      bgcolor=#777777 border="1" bordercolor="gray">
      <!-- 리스트 타이틀 부분 -->
      <tr height=50 bgcolor=#f8585b>
        <td width=150 align=center>
          <font color=white size='4pt'>번호</font>
        </td>
        <td width=520 align=center>
          <font color=white size='4pt'>제 목</font>
        </td>
        <td width=100 align=center>
          <font color=white size='4pt'>글쓴이</font>
        </td>
        <td width=100 align=center>
          <font color=white size='4pt'>날 짜</font>
        </td>
        <td width=150 align=center>
          <font color=white size='4pt'>조회수</font>
        </td>
      </tr>
      <!-- 리스트 타이틀 끝 -->


      <!-- 리스트 부분 시작 -->
      <?php
      $num = 1;
      while($row=mysql_fetch_array($result))
      {


        ?>
        <!-- 행 시작 -->

        <tr>
          <!-- 번호 -->
          <td height=100 bgcolor=white align=center>      
            <a href="read.php?id=<?=$row[id]?>&no=<?=$no?>">
              <?=count($row)-$num?></a>
            </td>
            <!-- 번호 끝 -->
            <!-- 제목 -->
            <td height=50 bgcolor=white>&nbsp;      
              <a href="read.php?id=<?=$row[id]?>&no=<?=$no?>">
                <?=strip_tags($row[title], '<b><i>');?></a>
                </td>
                <!-- 제목 끝 -->
                <!-- 이름 -->
                <td align=center height=50 bgcolor=white>
                  <font color=black size="4pt">
                    <a onclick="alertgo();"><?=$row[name]?></a>
                    <!-- <a href="mailto:<?=$row[email]?>"> </a>-->
                  </font>
                </td>
                <!-- 이름 끝 -->
                <!-- 날짜 -->
                <td align=center height=50 bgcolor=white>
                  <font color=black size="2pt"><?=$row[wdate]?></font>
                </td>
                <!-- 날짜 끝 -->
                <!-- 조회수 -->
                <td align=center height=50 bgcolor=white>
                  <font color=black size="2pt"><?=$row[view]?></font>
                </td>
                <!-- 조회수 끝 -->
              </tr>
              <!-- 행 끝 -->
              <script type='text/javascript'>
                function alertgo(){
                   alert('쪽지보내기 준비중');
                }
                </script>
              <?php
              $num++;
              //조회수 쿠키저장
} // end While

//데이터베이스와의 연결을 끝는다.
mysql_close($conn);
?>
</table>
<!-- 게시물 리스트를 보이기 위한 테이블 끝-->
<!-- 페이지를 표시하기 위한 테이블 -->
<table border=0>
  <tr>
    <td width=600 height=50 align=right rowspan=4>
      <font color=gray>
        <div align=center>
        &nbsp;
        <?php
$start_page = floor(($current_page - 1) / $page_list_size) * $page_list_size + 1;
# floor 함수는 소수점 이하는 버림

# 페이지 리스트의 마지막 페이지가 몇 번째 페이지인지 구하는 부분이다.
$end_page = $start_page + $page_list_size - 1;

if ($total_page <$end_page) $end_page = $total_page;
   // echo $start_page.'에러코드입니다. 그리고 page_list_size코드는 :'.$page_list_size;

if ($start_page >= $page_list_size) {
    # 이전 페이지 리스트값은 첫 번째 페이지에서 한 페이지 감소하면 된다.
    # $page_size 를 곱해주는 이유는 글번호로 표시하기 위해서이다.

    $prev_list = ($start_page - 2)*$page_size;
    echo "<a href=".$PHP_SELF.'?no='.$prev_list.">◀</a> ";
}

# 페이지 리스트를 출력
for ($i=$start_page;$i <= $end_page;$i++) {
    $page= ($i-1) * $page_size;// 페이지값을 no 값으로 변환.
    if ($no!=$page){ //현재 페이지가 아닐 경우만 링크를 표시
        echo "<a href=".$PHP_SELF."?no=".$page.">";
    }
    
    echo " <font size='5px'>[$i]</font> "; //페이지를 표시
    
    if ($no!=$page){ //현재 페이지가 아닐 경우만 링크를 표시하기 위해서
        echo "</a>";
    }
}

# 다음 페이지 리스트가 필요할때는 총 페이지가 마지막 리스트보다 클 때이다.
# 리스트를 다 뿌리고도 더 뿌려줄 페이지가 남았을때 다음 버튼이 필요할 것이다.
if($total_page >$end_page)
{
    $next_list = $end_page * $page_size;
    echo "<a href=$PHP_SELF?no=$next_list>▶</a><p>";
  }
  ?>
</div>
</font>
</td>
</tr>
</table>
<button class="button"><a href="index.php?page=write"/><font size='2pt' color="white">게시글 작성하기</font></a></button>
<br><br>
</center>
</body>
</html>











