<!-- /////////////////////////////////////////////////////////////////////////////////////
M2M 멘토멘티 찾기 게시판 로직(멘토 게시판에서 글 쓸때 폼)
///////////////////////////////////////////////////////////////////////////////////////////-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">    
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">멘토에게 방명록 남기기</a>
        </div>

      </div>

    </nav>
    <div class="jumbotron">
      <div class="container">
 
            
        <form class="form-horizontal" method=POST action=mentor_find_write_ok.php>                      
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label"> 제목 </label>
            <div class="col-sm-10">
              <input type="text" name="ttitle" class="form-control" id="inputEmail3" >
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label"> 작성자 </label>
            <div class="col-sm-10">
              <input type="text" name="tuser" class="form-control" id="inputEmail3" value="<?=$_SESSION['username'];?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label"> 게시글 </label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="10" name="ttext" ></textarea>
            </div>
          </div>
 
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="button">작성 완료</button>
               <INPUT type=button value="뒤로가기" class="button"
                                        onclick="history.back(-1)">
            </div>
          </div>
        </form>
 
      </div>
    </div>
  </body>
</html>
