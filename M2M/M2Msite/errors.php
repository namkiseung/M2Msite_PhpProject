<!-- /////////////////////////////////////////////////////////////////////////////////////
각 구문에 에러 매개변수 담아 두고 만약에 errors에 값이 입력 되면 에러구문 출력 하는 로직
///////////////////////////////////////////////////////////////////////////////////////////-->
<?php if(count($errors)>0): ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
			<p><?php echo $error; ?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>