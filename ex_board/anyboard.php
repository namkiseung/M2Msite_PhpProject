<?php 
include ('http://127.0.0.1/M2M/M2Msite/anyboarddb.php');
?>
<!doctype html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>게시판</title>
  <link rel="stylesheet" type="text/css" href="includefile/style.css" />  
</head>
<body>
   <h1>자유게시판</h1>
   <h4>자유롭게 글을 쓸 수 있는 게시판입니다.</h4>

   <div id="board_area"> 
    <table class="list-table">
       <thead>
           <tr>
               <th width="70">번호</th>
               <th width="500">제목</th>
               <th width="120">글쓴이</th>
               <th width="100">작성일</th>
               <th width="100">조회수</th>
           </tr>
       </thead>
       <?php
       $sql = mq('select * from ANYboard order by anyidx desc limit 0,5;');  
       while($board = $sql->fetch_array()){
          $title=$board['anytitle']; 
          if(strlen($title)>30){ 
              $title=str_replace($board['anytitle'],mb_substr($board['anytitle'],0,30,"utf-8")."...",$board['anytitle']);
          }
          ?>
          <tbody>
              <tr>
                <td width="70"><?php echo $board['anyidx']; ?></td>
                <td width="500"><a href="http://127.0.0.1/M2M/M2Msite/read.php/<?php echo $board['anyidx'];?>"><?php echo $title;?></a></td>
                <td width="120"><?php echo $board['anyname']?></td>
                <td width="100"><?php echo $board['anydate']?></td>
                <td width="100"><?php echo $board['anyhit']; ?></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
    <div>
       <a href="http://127.0.0.1/M2M/M2Msite/anywrite.php">글쓰기</a>
   </div>
</body>
</div>
</html>
