 <?php
//데이터 베이스 연결하기
session_start();
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
$query = "SELECT * FROM wish_menti_list ORDER BY idx DESC LIMIT $no, $page_size";
$ret = mysql_query($query, $conn);

// 총 게시물 수 를 구한다.
$result_count=mysql_query("SELECT count(*) FROM wish_menti_list",$conn);
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

 <center>
    <br>
    <!-- 게시판 타이틀 -->
    <!-- <font size=2><h2>[ 자유게시판 ]</h2></a> -->
      <div align="left"><h1>[위시리스트]</h1><br></div>
      <!-- 게시물 리스트를 보이기 위한 테이블 -->
      <table width=100% border=0 cellpadding=2 cellspacing=1
      bgcolor=black border="3" bordercolor="black">
      <!-- 리스트 타이틀 부분 -->
      <tr height=50 bgcolor=gray>
        <td width=100 align=center>
          <font color=white size='4pt'>분류</font>
        </td>
        <td width=50 align=center>
          <font color=white size='4pt'>프로필</font>
        </td>
        <td width=70 align=center>
          <font color=white size='4pt'>정보</font>
        </td>
        <td width=500 align=center>
          <font color=white size='4pt'>소개</font>
        </td>
        <td width=40 align=center>
          <font color=white size='4pt'>비고</font>
        </td>
      </tr>
      <!-- 리스트 타이틀 끝 -->


      <!-- 리스트 부분 시작 -->
      <?php      
      while($o=mysql_fetch_array($ret))
      {        
        ?>
        <!-- 행 시작 -->

        <tr>
          <!-- 분류 -->
          <td height=100 bgcolor=white align=center>                  
              <?=$o[etc]?>
            </td>
            <!-- 분류 끝 -->
            <!-- 프로필 -->
            <td height=50 bgcolor=white>&nbsp;      
              <div align="center"><img src="<?=$o[profile] ?>" class="border1" data-src="" style="border-radius: 150px 150px;" height="100" width="100" alt="기본이미지" class="image img_full_h" onerror="this.onerror=null;this.src=''"></div>                    
                </td>
                <!-- 프로필 끝 -->
                <!-- 아이디 -->
                <td align=center height=50 bgcolor=white>
                  <font color=black size="4pt">
                    <?=$o[name]?> <br>
                    <font color=black size="2pt"><?=$o[email]?></font>                
                  </font>
                </td>
                <!-- 아이디 끝 -->
                <!-- 이메일 -->
                <td align=center height=50 bgcolor=white>
                  <font color=black size="2pt"><?=$o[introduce]?></font>
                </td>
                <!-- 이메일 끝 -->
                <!-- 내용 -->
                <td align=center height=50 bgcolor=white>
                  <a href="http://127.0.0.1/M2M/M2Msite/menti_wish_delete.php?&idx=<?=$o[idx]?>&no=<?=$no?>"/><button class="button"><font size='2pt' color="white">
                  삭제</font></button></a>
                </td>
                <!-- 내용 끝 -->
              </tr>
              <!-- 행 끝 -->              
              <?php

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

<br><br>
</center>