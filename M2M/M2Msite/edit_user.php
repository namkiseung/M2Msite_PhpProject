<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 로그인 한 다음에 자기 정보 확인 하는 로직
///////////////////////////////////////////////////////////////////////////////////////////-->
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
  height: 65px;
  font-size: 14pt;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>
<?php
//디비 접근
include 'db_info.php';


// 총 게시물 수 를 구한다.
//count 를 통해 구할 수 있는데 count(항목) 과 같은 방법으로 사용한다. * 는 모든 항목을 뜻한다.
//총 해당 항목의 값을 가지는 게시물의 개수가 얼마인가를 묻는것이다.
//따라서 전체 글수가 된다. count(id) 와 같은 방법도 가능하지만 
//이례적으로 count(*)가 조금 빠르다. 일반적으로는 * 가 느리다.

$sqlsql = "SELECT * FROM new_users WHERE username='{$_SESSION[username]}'"; //DB에 아이디 있는지 확인

	$result = mysql_query($sqlsql, $conn);//쿼리 실행
	//////////////////////////////////////입력 정보 데이터 담기
  $username = $_POST['username'];
  $email = $_POST['email'];

  $num = mysql_num_rows($result);
  $row=mysql_fetch_array($result);
  //////////////////////////////정보가 있을때 정보 다 담기
  if($num > 0){
    $username=$row['username'];
    $email=$row['email'];
    $experience=$row['experience'];
    $pass=$row['password'];
    $seasoned=$row['seasoned'];
    $donation=$row['donation'];
  }
//while($row=mysql_fetch_array($result))
  ?>
  <body>

    <!-- //////////////////////현재 로그인한 사용자의 아이디를 이용해, DB에 있는 모든 정보를 가져온다. -->
    <h2>사용자 정보</h2>
    <table>
      <tr>
        <th>분류</th>
        <th>내용</th>
        <th>비고</th>
      </tr>
      <tr>
        <td>아이디</td>
        <td><?= $username?></td>
        <td></td>
      </tr>
      <tr>
        <td>이메일</td>
        <td><?= $email?></td>
        <td></td>
      </tr>
      <tr>
        <td>비밀번호</td>
        <td><?php echo "<input type=password>";?></td>
        <td></td>
      </tr>
      <tr>
        <td>비밀번호 확인</td>
        <td><?php echo "<input type=password>";?></td>
        <td></td>
      </tr>
      <tr>
        <td>경험치</td>
        <td><?= $experience?> %</td>
        <td></td>
      </tr>
      <tr>
        <td>내공</td>
        <td><?= $seasoned?> %</td>
        <td></td>
      </tr>
      <tr>
        <td>기부금</td>
        <td><?= $donation?> 원</td>
        <td></td>
      </tr>
      <tr>
        <td>전담 멘토</td>
        <td> 님</td>
        <td></td>
      </tr>
    </tr>
    <tr>
      <td>전담 멘티</td>
      <td> 님</td>
      <td></td>
    </tr>

  </table><br><div align="right"><button style="width: 150px" class="button">(준비중)<br>수정완료</button></div><br>
  <!-- //////////////////////현재 로그인한 사용자의 아이디를 이용해, DB에 있는 모든 정보를 가져온다. -->
  <h2>사용자의 시스템 정보</h2>
  <table>
    <tr>
      <th>분류</th>
      <th>내용</th>
      <th>비고</th>
    </tr>
    <tr>
      <td>접속 IP & Port</td>
      <td><?= $_SERVER['REMOTE_ADDR']." / ".$_SERVER['SERVER_PORT']?></td>
      <td></td>
    </tr>
    <tr>
      <td>인코딩 방식</td>
      <td><?= $_SERVER['HTTP_ACCEPT_ENCODING']?></td>
      <td></td>
    </tr>
    <tr>
      <td>Client 언어</td>
      <td><?=$_SERVER['HTTP_ACCEPT_LANGUAGE']?></td>
      <td></td>
    </tr>
    <tr>
      <td>사용자 브라우저</td>
      <td><?=$_SERVER['HTTP_USER_AGENT']?></td>
      <td></td>
    </tr>
    <tr>
      <td>사용자 소프트웨어 환경</td>
      <td><?= $_SERVER['SERVER_SOFTWARE']?></td>
      <td></td>
    </tr>
    <tr>
      <td>CGI 정보</td>
      <td><?=$_SERVER['GATEWAY_INTERFACE']?></td>
      <td></td>
    </tr>
    <tr>
      <td>프로토콜</td>
      <td><?=$_SERVER['SERVER_PROTOCOL']?></td>
      <td></td>
    </tr>
  </table>

</body>