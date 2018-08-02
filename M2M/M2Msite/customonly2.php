<?php 
session_start();
?>
<!-- 문의보내기 폼 -->
<div class="container">
    <table class="table table-bordered">

        <font align=center>  <h2><b>[ 문의보내기 ]</b></h2></font> <br>

        <tbody>
            <form name="question" action="customonly_ok.php" method="POST" encType="multiplart/form-data" onsubmit="return check_login();">                
               <tr>
                <th>이메일 : </th>
                <td><input type="email" name="email" placeholder="이메일을 입력하세요" class="form-control"/></td>
            </tr>            
            <tr>
                <th>제목: </th>
                <td><input type="text" placeholder="제목을 입력하세요. " name="subject" class="form-control" /></td>
            </tr>
            <tr>
                <th>내용: </th>
                <td><textarea cols="10" placeholder="내용을 입력하세요. " name="content" class="form-control"></textarea></td>
            </tr>
            <tr>
                <th>첨부파일: </th>
                <td><input type="file" name="filename" /></td>
            </tr>               
            <tr>
                <td colspan="2">
                  <div align="center"><button type="submit" class="button" >접수하기</button></div>
                  <!-- <a href="mailto:M2M@naver.com">메일보내기</a> -->
                  <!-- <input type="button" value="뒤로" class="pull-right" onclick="javascript:location.href='index.php?page=customonly'"/> -->
                    <!-- <a class="btn btn-default" onclick="check_login()"> 등록 </a>
                    <a class="btn btn-default" type="reset"> reset </a>
                    <a class="btn btn-default" onclick="javascript:location.href='list.jsp'">글 목록으로...</a> -->
                </td>
            </tr>
        </form>
    </tbody>
</table>
</div>