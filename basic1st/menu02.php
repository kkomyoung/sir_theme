<?php

include_once('./_common.php');


	$co_id = "menu02";

	//상단 메뉴바의 몇번째 1차메뉴에 속해 있는지 지정해 주세요.
	$menuNum = "2";

	//상단 메뉴바의 1차메뉴중 몇번째 2차메뉴에 속해 있는지 지정해 주세요.
	$menuNum2 = "2";
	
	//본 페이지의 제목을 입력해 주시기 바랍니다.
	$g5['title'] = "덮밥";


include_once(G5_THEME_PATH.'/head.php');
?>
<script>
$(document).ready(function(){
	$('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
	$('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
	});
</script>
<div id="menu_wrap">	
	<ul>
		<li class="left clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu02_01.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>소불고기김치덮밥</h3>
				<p>소불고기와 매콤한 볶은 김치가 가득 올라가<br>
				맛도 든든~ 속도 든든한 덮밥 메뉴</p>
				<span>6,000원</span>
			</div>
			</div>
		</li>
		<li class="right clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu02_02.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>돈까스덮밥</h3>
				<p>두툼한 돈까스가 통째로 올라가 한 그릇이면 배부른 덮밥메뉴</p>
				<span>5,500원</span>
			</div>
			</div>
		</li>
		<li class="left clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu02_03.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>카레덮밥</h3>
				<p>깊고 진한 향의 카레와 고소한 마늘칩을 얹은 덮밥
				</p>
				<span>5,500원</span>
			</div>
			</div>
		</li>
	</ul>
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>