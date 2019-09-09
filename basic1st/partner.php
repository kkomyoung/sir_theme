<?php

include_once('./_common.php');


	$co_id = "partner";

	//상단 메뉴바의 몇번째 1차메뉴에 속해 있는지 지정해 주세요.
	$menuNum = "4";

	//상단 메뉴바의 1차메뉴중 몇번째 2차메뉴에 속해 있는지 지정해 주세요.
	$menuNum2 = "1";
	
	//본 페이지의 제목을 입력해 주시기 바랍니다.
	$g5['title'] = "창업 안내";


include_once(G5_THEME_PATH.'/head.php');
?>
<script>
$(document).ready(function(){
	$('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
	$('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
	});
</script>
<div id="partner">	
	<div class="title">
		<img src="<? echo G5_THEME_IMG_URL ?>/partner_01.png" alt="img">
		<div class="txt_box">	
			<h3>창업절차</h3>
			<p>가맹점 창업을 위한 절차를 안내 드리니 참고가 되시길 바랍니다.</p>
		</div>
	</div>
	<div class="cont1">
		<ul class="clearfix">
			<li>
				<span>1</span>
				<h4>창업설명회</h4>
				<p>가맹지원서 및 상권조사표 작성</p>
			</li>
			<li>
				<span>2</span>
				<h4>점포문의 및 본부확인</h4>
				<p>상권 및 입지확인<br>(2주 이내 확인)</p>
			</li>
			<li>
				<span>3</span>
				<h4>본사 점주 승인</h4>
				<p>더본코리아 본사 검토 후<br>가맹점 개설 여부 결정<br>정보공개서, 가맹계약서<br>메일로 발송/확인</p>
			</li>
			<li>
				<span>4</span>
				<h4>점포 개설 협의</h4>
				<p>인테리아 및 시설공사 등<br>점포 개설 과정 협의</p>
			</li>
			<li>
				<span>5</span>
				<h4>당사 계약 체결</h4>
				<p>최초 2년계약, 이후<br>1년 단위 재계약<br>임대차 계약 후 가맹 계약 체결</p>
			</li>
			<li>
				<span>6</span>
				<h4>인테리어 & 시설공사</h4>
				<p>가맹지원서 및 상권조사표 작성</p>
			</li>
			<li>
				<span>7</span>
				<h4>교육</h4>
				<p>- 점주포함 최소 3명<br>- 교육기간 : 실습 6일 / 이론 2일<br>(테스트 미통과 or 교육 불성실 시 재교육)</p>
			</li>
			<li>
				<span>8</span>
				<h4>개점준비 & 가오픈</h4>
				<p>운영 시뮬레이션을 통한<br>오픈 준비사항 최종 점검</p>
			</li>
			<li>
				<span>9</span>
				<h4>개점</h4>
				<p>가맹점 정식 오픈 및 인터넷 정보 등록</p>
			</li>
			<li>
				<span>10</span>
				<h4>사후 관리</h4>
				<p>관리본사 점검팀 순회를 통해<br>주기적인 매장 점검</p>
			</li>
		</ul>
	</div>
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>