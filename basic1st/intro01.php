<?php

include_once('./_common.php');


	$co_id = "intro01";

	//상단 메뉴바의 몇번째 1차메뉴에 속해 있는지 지정해 주세요.
	$menuNum = "1";

	//상단 메뉴바의 1차메뉴중 몇번째 2차메뉴에 속해 있는지 지정해 주세요.
	$menuNum2 = "1";
	
	//본 페이지의 제목을 입력해 주시기 바랍니다.
	$g5['title'] = "역전우동의 시작";


include_once(G5_THEME_PATH.'/head.php');
?>
<script>
$(document).ready(function(){
	$('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
	$('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
	});
</script>
<div id="intro1_wrap">	
<div class="intro_cont1 clearfix">
	<div class="img_box">
		<img src="<? echo G5_THEME_IMG_URL ?>/intro01_01.png" alt="img">
	</div>
	<div class="txt_box">
		<h2>우동에서 떠올리는<br>우리의 기억</h2><br>
		<p>우동 하면 어떤 것들이 떠오르시나요? 누군가는 고속도로의 여정 속 휴게소에서의 든든한 한 끼를,누군가는 쌀쌀했던 어느 날 포장마차에서 술 한 잔과 함께했던 국물의 맛을, 또 누군가는 승강장에 들어선 열차에서 다급히 뛰쳐나와,기차 놓칠세라 후루룩 들이키던 따끈한 한 그릇의 추억을 떠올릴 것입니다.<br><br>				
		이렇게 저마다 간직한 그 언젠가의 추억 속 한편에 자리잡은 따끈한 한 그릇의 기억이 우리가 알고 있는 우동의 모습입니다.<br><br>
		이따금 그런 마음을 되새겨 우동이 생각나곤 하지만, 막상 생각날 때 언제든 쉽게 접하기는 또 애매한 것이 우동이었습니다.
		당시의 뭇 우동 전문점에 들어서려니 혼자서는 발걸음이 잘 떨어지지 않았고, 매번 고속도로 휴게소를 찾을 수도 없는 노릇이었습니다.</p>
	</div>
</div>
<div class="intro_cont2"></div>
<div class="intro_cont3">
	<div class="txt_box">
		<h2>나만의 식사를 위한 편안한 공간,<br>역전우동0410</h2><br>
		<p>그 언젠가 기차역 앞에서 혼자 사 먹던 우동 한 그릇의 느낌을 전하면서도, 누구든 언제든 부담없이 식사하게끔 만들 방법은 없을까 많은 고민을 기울였습니다. 그러던 차에 일본에서 처음 접했던 식권 자판기를 떠올리고, 당시 국내엔 생소했던 이들 기계를 들이기로 결정하면서 본격적으로 역전우동을 향한 고민을 시작했습니다.<br><br>				
		이후 다양한 시도와 시행착오를 거친 끝에 지금의 형태를 만들었습니다. 작은 주방을 마주보고 길게 뻗은 일렬의 테이블에 나란히 앉아 우동을 먹던 그 언젠가의 추억을 떠올리는 한편, 주방의 조리 과정을 바로 볼 수 있게끔 하여 식사의 청결과 신뢰를 더하는 편안한 공간.
		바로 지금의 역전우동0410입니다.<br><br>
		모락모락 맛있는 김이 서리는 감칠맛 진한 국물, 매끄럽게 넘어가는 질감 속에 숨은 쫄깃한 면발의 식감, 우동. 그리고 더없이 편한 분위기에서 그 누구의 눈치도 보지 않고 오직 나만을 위한 든든한 식사가 약속되는 곳. 오늘 저녁, 역전우동0410에서 소박하지만 든든하고 맛있는 메뉴들로 편안한 추억을 한 젓가락 들어 보시기 바랍니다.</p>
		<img src="<? echo G5_THEME_IMG_URL ?>/intro01_04.png" alt="sign" class="sign">
	</div>
	
	<div class="img_box">
		<img src="<? echo G5_THEME_IMG_URL ?>/intro01_03.png" alt="img">
	</div>
</div>
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>