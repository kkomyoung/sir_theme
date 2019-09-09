<?php

include_once('./_common.php');


	$co_id = "menu01";

	//상단 메뉴바의 몇번째 1차메뉴에 속해 있는지 지정해 주세요.
	$menuNum = "2";

	//상단 메뉴바의 1차메뉴중 몇번째 2차메뉴에 속해 있는지 지정해 주세요.
	$menuNum2 = "3";
	
	//본 페이지의 제목을 입력해 주시기 바랍니다.
	$g5['title'] = "세트 & 사이드";


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
			<img src="<? echo G5_THEME_IMG_URL ?>/menu03_01.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>돈까스덮밥 우동, 모밀세트</h3>
				<p>바삭한 돈까스덮밥에 미니우동, 또는 미니모밀을 함께 먹을 수 있는<br>
				실속 세트메뉴</p>
				<span>우동 6,500원 / 모밀 7,000원</span>
			</div>
			</div>
		</li>
		<li class="right clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu03_02.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>소불고기김치닾밥 우동, 모밀세트</h3>
				<p>매콤한 소불고기김치덮밥에 미니우동, 또는 미니모밀을 함께 먹을 수 있는<br>실속세트메뉴</p>
				<span>우동 7,000원 / 모밀 7,500원</span>
			</div>
			</div>
		</li>
		<li class="left clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu03_03.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>치킨가라아게미니덮밥</h3>
				<p>입맛 돋우는 특제 소스를 얹은 치킨과 함께 즐기는 미니덮밥
				</p>
				<span>3,000원</span>
			</div>
			</div>
		</li>
		<li class="right clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu03_04.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>명란미니덮밥</h3>
				<p>따뜻한 밥에 짭쪼롭한 명란을 얹은 미니덮밥</p>
				<span>2,000원</span>
			</div>
			</div>
		</li>
		<li class="left clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu03_05.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>가쓰오 튀김주먹밥</h3>
				<p>특제 간장소스와 가쓰오부시, 대파, 깨 등으로 감칠맛을 살린 튀김 주먹밥
				</p>
				<span>1,500원</span>
			</div>
			</div>
		</li>
		<li class="right clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu03_06.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>매콤 튀김주먹밥</h3>
				<p>특제 매운소스와 볶음김치, 대파, 깨 등으로 매콤한 맛을 살린 튀김 주먹밥</p>
				<span>1,500원</span>
			</div>
			</div>
		</li>
		<li class="left clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu03_07.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>불만두</h3>
				<p>바삭하게 튀겨낸 만두에 맛있게 매운 양념 소스를 뿌려내는 불만두</p>
				<span>3,500원</span>
			</div>
			</div>
		</li>
		<li class="right clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu03_08.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>새우튀김</h3>
				<p>주문과 동시에 즉석에서 튀겨 더욱 신선하고 고소한 왕새우<br>
				※ 메인 메뉴와 함께 드시면 더욱 맛있습니다.</p>
				<span>1,500원</span>
			</div>
			</div>
		</li>
		<li class="left clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu03_09.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>야채튀김</h3>
				<p>겉은 바삭하고 속은 부드러운 야채튀김<br>
				※ 메인 메뉴와 함께 드시면 더욱 맛있습니다.</p>
				<span>1,500원</span>
			</div>
			</div>
		</li>
		<li class="right clearfix">
			<img src="<? echo G5_THEME_IMG_URL ?>/menu03_10.png" alt="menu">
			<div class="txt">
			<div class="txt_wrap">
				<h3>튀김어묵</h3>
				<p>어묵을 통째로 튀겨내 더욱 바삭바삭 감칠맛이 일품인 통어묵 튀김<br>
				※ 메인 메뉴와 함께 드시면 더욱 맛있습니다</p>
				<span>1,500원</span>
			</div>
			</div>
		</li>
	</ul>
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>