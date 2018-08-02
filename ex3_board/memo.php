<?php
session_start();

$pdo = mysql_connect('127.0.0.1', 'root', '0000');
mysql_select_db('memo');
try{
	$sql = "SELECT * FROM memo order by num desc";
	$stmh = $pdo->query($sql);
}catch(PDOException $Exception){
	print "오류 :".$Exception->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
</head>


<body>
	<div id="wrap">
		<div id="header">
			<?php include('127.0.0.1/M2M/M2Msite/login.php');?>			
		</div>

		<div id=menu>
			<?php include('127.0.0.1/M2M/M2Msite/top_menu2.php');?>
		</div>

		<div id="content">
			<div id="col1">
				<div id="left_menu">
					<?php include('127.0.0.1/M2M/M2Msite/left_menu.php');?>
				</div>
			</div>	
			<div id="col2">
				<div id="title">

				</div>
				<?php
		if(isset($SESSION["userid"])){ //로그인시 글 쓸 수 있는 권한 부여
			?>
			<div id="memo_row1">
				<form name="memo_form" method="post" action="insert.php">
					<div id="memo_writer"><span>-> <?=$_SESSION["nick"]?></span></div>
					<div id="memo1"><textarea rows="6" cols="86" name="content" required></textarea></div>
					<div id="memo2"><input type="image" src=""></div>
				</form>
			</div>
			<?php
		}
		while($row = $stmh->fetch(PDO::FETCH_ASSOC)){ //레코드를 행단위 별로 변수에 테이블의 필드단위 데이터를 삽입 
			$name_id = $row["id"];
			$name_num = $row["num"];
			$name_date = $row["regist_day"];
			$name_nick = $row["nick"];
			$name_content = str_replace("\n", "<br>", $row["content"]);
			$name_content = str_replace(" ", "&nbsp", $memo_content);
			?>
			<div id="memo_writer_title">
				<ul>
					<li id="write_title1"><?=$memo_num ?></li>
					<li id="write_title2"><?=$memo_nick ?></li>
					<li id="write_title3"><?=$memo_date ?></li>
					<li id="write_title4">
						<?php
						if(isset($_SESSION["userid"])){
							if($_SESSION["userid"]=="admin" || $_SESSION["userid"]==$memo_id)
								print "<a href='delete.php?num=$memo_num'>[삭제]</a>";
						}
						?>				
					</li>
				</ul>
			</div>
			<div id="memo_content"><?= $memo_content?>
			</div>

			<div id="ripple">
				<div id="ripple1">덧글</div>
				<div id="ripple2">
					<?php
					try{
						$sql = "SELECT * FROM memo_ripple WHERE parent='$memo_num'";
						$stmh1 = $pdo->query($sql);

					}catch(PDOException $Exception){
						print "오류 :".$Exception->getMessage();
					}
					while ($row_ripple = $stmh1->fetch(PDO::FETCH_ASSOC)) {
						$ripple_num = $row_ripple["num"];
						$ripple_id = $row_ripple["id"];
						$ripple_nick = $row_ripple["nick"];
						$ripple_content = str_replace("\n", "<br>", $row_ripple["content"]);
						$ripple_content = str_replace(" ", "&nbsp;", $ripple_content);
						$ripple_date = $row_ripple["regist_day"];
						?>
						<div id="ripple_title">
							<ul>
								<li><?=$ripple_nick ?>&nbsp;&nbsp;&nbsp; <?= $ripple_date ?></li>
								<li id="mdi_del">
									<?php
									if(isset($_SESSION["userid"])){
										if($_SESSION["userid"]=="admin" || $_SESSION["userid"]==$ripple_id)
											print "<a href='delete_ripple.php?num=$ripple_num'>[삭제]</a>";
									}
									?>	
								</li>
							</ul>
						</div>
						<div id="ripple_content"><?= $ripple_content ?></div>
						<?php
					}
					if(isset($_SESSION["userid"])){
						?>
						<form name="ripple_form" method="post" action="insert_ripple.php">
							<input type="hidden" name="num" value="<?= $memo_num ?>">
							<div id="ripple_insert">
								<div id="ripple_textarea">
									<textarea row="3" cols="80" name="ripple_content" required></textarea>
								</div>
								<div id="ripple_button">
									<input type="image" src=""></div>			
								</div>
							</form>
							<?php } ?>
						</div>
						<div class="clear"></div>
						<div class="linespace_10"></div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<p>&nbsp;</p><p>&nbsp;</p>

</body>	
</html>