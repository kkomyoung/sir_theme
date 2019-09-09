<?php

include_once('./_common.php');


	$co_id = "menu01";

	//상단 메뉴바의 몇번째 1차메뉴에 속해 있는지 지정해 주세요.
	$menuNum = "2";

	//상단 메뉴바의 1차메뉴중 몇번째 2차메뉴에 속해 있는지 지정해 주세요.
	$menuNum2 = "1";
	
	//본 페이지의 제목을 입력해 주시기 바랍니다.
	$g5['title'] = "우동 & 모밀";


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
			<img src="<? echo G5_THEME_IMG_URL ?>/menu01_01.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>옛날우동</h3>
				<p>진한 가쓰오 국물맛과 쫄깃한 면발의 만남이 일품인 역전우동0410의<br>
				대표 우동메뉴</p>
				<span>3,500원</span>
			</div>
			</div>
		</li>
		<li class="right clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu01_02.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>냉모밀</h3>
				<p>사계절 내내 사랑받는 역전우동0410의 시원,담백한 냉모밀</p>
				<span>5,000원</span>
			</div>
			</div>
		</li>
		<li class="left clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu01_03.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>김치우동</h3>
				<p>볶음 김치가 얹어져 더욱 시원하고 깊은 맛을 내는 역전우동0410만의<br>
				특별한 우동</p>
				<span>4,000원</span>
			</div>
			</div>
		</li>
		<li class="right clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu01_04.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>야채튀김우동</h3>
				<p>겉은 바삭하고 속은 부드러운 야채튀김과 우동의 환상조합!</p>
				<span>5,000원</span>
			</div>
			</div>
		</li>
		<li class="left clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu01_05.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>오뎅우동</h3>
				<p>큼지막한 오뎅이 더해져 더욱 깊고 풍부한<br>
				우동의 맛을 느낄 수 있는 메뉴</p>
				<span>4,500원</span>
			</div>
			</div>
		</li>
		<li class="right clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu01_06.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>튀김어묵우동</h3>
				<p>바삭바삭한 통어묵 튀김과 깊은 국물 우동의 만남</p>
				<span>5,000원</span>
			</div>
			</div>
		</li>
		<li class="left clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu01_07.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>새우튀김우동</h3>
				<p>고소하고 바삭한 새우튀김을 얹은 우동</p>
				<span>5,000원</span>
			</div>
			</div>
		</li>
		<li class="right clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu01_08.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>카레우동</h3>
				<p>깊고 진한 향의 카레와 고소한 마늘칩을 얹은 우동</p>
				<span>5,500원</span>
			</div>
			</div>
		</li>
		<li class="left clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu01_09.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>소불고기우동</h3>
				<p>따끈한 우동에 고소한 소불고기가 푸짐하게 얹어져<br>
				한그릇으로 배부르게 즐기는 우동</p>
				<span>5,500원</span>
			</div>
			</div>
		</li>
		<li class="right clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu01_10.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>냉우동</h3>
				<p>살얼음이 동동 띄워진 시원한 우동 국물이<br>
				여름철 더위를 싹~ 가시게 하는 시원한 별미(여름한정)</p>
				<span>5,000원</span>
			</div>
			</div>
		</li>
		<li class="left clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu01_11.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>얼큰우동</h3>
				<p>매운 고추와 건새우가 칼칼한 감칠맛을 내는 우동!<br>
				(겨울한정)</p>
				<span>5,000원</span>
			</div>
			</div>
		</li>
		<li class="right clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu01_12.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>비빔모밀</h3>
				<p>아삭한 야채와 특제소스가 듬뿍!<br>
				매콤새콤 시원하게 즐기는 비빔모밀!
				</p>
				<span>5,000원</span>
			</div>
			</div>
		</li>
	</ul>
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>