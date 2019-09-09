<?php

include_once('./_common.php');


	$co_id = "intro02";

	//상단 메뉴바의 몇번째 1차메뉴에 속해 있는지 지정해 주세요.
	$menuNum = "1";

	//상단 메뉴바의 1차메뉴중 몇번째 2차메뉴에 속해 있는지 지정해 주세요.
	$menuNum2 = "2";
	
	//본 페이지의 제목을 입력해 주시기 바랍니다.
	$g5['title'] = "역전우동 이야기";


include_once(G5_THEME_PATH.'/head.php');
?>
<script>
$(document).ready(function(){
	$('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
	$('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
	});
</script>
<div id="intro2_wrap">	
<div class="intro_cont1 clearfix">
	<div class="img_box">
		<img src="<? echo G5_THEME_IMG_URL ?>/intro02_slide01.png" alt="img">
	</div>
	<div class="txt_box">
		<h2>우리에게 맞는<br>우동의 맛을 연구하다</h2><br><br>
		<p>역전우동의 맛을 결정하면서 단연 과제는 우리의 입맛을 사로잡을 만한 맛의 지점을 찾아내는 것이었습니다.
		가쓰오부시의 깊은 감칠맛과 우리 입맛에 익숙한 육수 재료들 고유의 맛을 조화롭게 아우르는 간장의 가장 맛있는 배합비를 찾아내고자 수없이 많은 테스트와 시행착오를 거쳤습니다
		그렇게 때로는 차분하게 면의 씹는 맛을 살리면서도, 한편으로는 입에 착 감기는 감칠맛으로 긴 여운을 남기는 맛의 우동 국물을 만들었습니다.</p>
	</div>
</div>
<div class="intro_cont2">
	<div class="box1">
		<div class="txt_wrap">
			<div class="txt_box">
				<h2>매끄럽고 쫄깃한 면발</h2><br><br>
				<p>맛있는 우동 면이란 입안을 매끄럽게 스치는 굵고 탱탱한 면발의 탄성이 느껴지면서도,<br>
				언제든 끊을 수 있도록 부드러워야 합니다. 심지어 뜨거운 국물 속에서도 쉽게 붇지 않아<br>
				마지막 한 젓가락까지 처음의 그 식감을 간직합니다.<br><br>
				마치 마법과도 같은 이런 면을 만드는 비결은 바로 단순한 재료. 역전우동0410은 밀가루,<br> 
				전분, 소금만을 이용한 반죽에 충분한 물을 더해 만든 우동 면을 사용했습니다.<br>
				감칠맛 진한 국물에서 갓 건져 올려 모락모락 맛있는 김이 서리는 우동 한 젓가락에서<br>
				역전우동0410의 맛을 느낄 수 있습니다.
				</p>
			</div>
		</div>
	</div>
	<div class="box2">
		<div class="txt_wrap">
			<div class="txt_box">
				<h2>더욱 특별한<br>우리 입맛을 위한 독자적 메뉴</h2><br><br>
				<p>역전우동0410은 정통 일본식을 표방한 레시피를 따르기보다, 우리 입맛에 잘 맞는 독자적 메뉴를 개발하는 데에 더욱 큰 가치를 둡니다. 익숙한 우동 국물에 매운 고추와 건새우를 더한 얼큰함으로 겨울의 추위를 날리는 얼큰우동, 소바의 시원한 감칠맛에 매콤새콤한 맛과 식감을 더한 코다리모밀, 우동 국물에 한국식 불고기 양념을 더해 더욱 특별한 감칠맛을 자아내는 소불고기 우동 등이 대표적인 특색 메뉴입니다.
				<br><br>
				여기에 한 그릇으로 든든함을 선사하는 다양한 덮밥까지 더해 오직 이곳에서만 맛볼 수 있는 다양한 메뉴를 전하기 위해 역전우동0410은 꾸준히 연구하고, 다양한 메뉴를 선보이고 있습니다.
				</p>
			</div>
		</div>
	</div>
</div>
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>