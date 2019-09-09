<?php

include_once('./_common.php');


	$co_id = "testPage";

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

<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi recusandae minus maxime similique voluptatibus ratione vero non? Rem recusandae, labore ratione minus aut, alias voluptatem hic vero natus nesciunt aliquid vitae distinctio, consequuntur a. Maiores incidunt harum illum dolore accusantium sapiente veritatis, suscipit, earum non velit architecto exercitationem blanditiis et facere. Odio eaque cum delectus, sunt repellat perspiciatis aut vero voluptate consequatur fugiat repellendus ipsa, fuga alias, possimus numquam officiis dignissimos voluptatem. Aliquid libero numquam fugit praesentium suscipit saepe animi neque atque iusto, veniam, repudiandae quae fuga, reprehenderit earum consequatur mollitia quibusdam esse unde quisquam et dolore. Quos rerum, id.</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>