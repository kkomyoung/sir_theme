<?php

include_once('./_common.php');


	$co_id = "intro03";

	//상단 메뉴바의 몇번째 1차메뉴에 속해 있는지 지정해 주세요.
	$menuNum = "1";

	//상단 메뉴바의 1차메뉴중 몇번째 2차메뉴에 속해 있는지 지정해 주세요.
	$menuNum2 = "3";
	
	//본 페이지의 제목을 입력해 주시기 바랍니다.
	$g5['title'] = "믿음직한 위생관리";


include_once(G5_THEME_PATH.'/head.php');
?>
<script>
$(document).ready(function(){
	$('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
	$('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
	});
</script>

<div id="intro3_wrap">
<div class="intro_cont1 clearfix">
	<div class="txt_box">
		<h2>한 눈에 들여다보이는 주방</h2><br>
		<p>잘 익은 면을 건지며 올라오는 모락모락 수증기와, 갓 튀겨 먹음직스러운 튀김의 향이 어우러지는 곳.<br> 
		역전우동0410에 들어서면 길게 뻗은 일자형 테이블 너머 청결한 주방 전경이 한 눈에 들어옵니다.<br>
		쫄깃한 면을 건져 올려 정성껏 끓인 국물을 더해 따끈한 우동을 담아 내는 모습, 깨끗한 기름으로부터<br>
		갓 건져 올린 튀김의 먹음직스러운 모습들.</p><br>
		<h3>이렇게 주방의 모든 조리 과정이 훤히 들여다보이는 설계 구조는<br>
		역전우동0410이 고객 여러분께 전하는<br>
		청결에 대한 약속의 표현이기도 합니다.</h3>
	</div>
</div>
<div class="intro_cont2"></div>
<div class="intro_cont1 clearfix">
	<div class="txt_box">
		<h2>청결은 신뢰의 기본</h2><br>
		<h3>청결한 주방이야말로 모든 음식점의 기본이기에, 역전우동0410은<br>
		주방 설비는 물론 앞치마와 모자 등 유니폼에 이르기까지 모든 부분에서<br>
		청결을 유지하고자 노력합니다.</h3><br>
		<p>뿐만 아니라 평소 손이 잘 닿지 않는 깊숙한 곳들, 심지어 매장 외부의 간판까지 청결한 모습으로<br>
		고객 여러분을 맞이하고자 전 가맹점 대청소 캠페인을 주기적으로 진행합니다.</p>
	</div>
</div>
<div class="intro_cont3"></div>
<div class="intro_cont1 clearfix">
	<div class="txt_box">
		<h2>믿을 수 있는 식재료</h2><br>
		<h3>좋은 맛의 핵심 중 하나는 좋은 재료라는 것은<br>
		오늘날 많은 사람이 잘 아는 사실이고,<br>
		역전우동0410 역시 이를 중요한 가치로 여깁니다.</h3><br>
		<p>그래서 이를 지키기 위해 안전하고 청결한 식재료 상태를 유지하는 데에 청결한 주방을 유지하는 것만큼이나 큰 노력을 기울입니다.<br> 
		주방에서 다루는 모든 식재료 하나하나의 이력은 물론, 보관 방법과 온도까지 철저히 관리합니다.</p>
		
	</div>
</div>
<div class="intro_cont4"></div>
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>