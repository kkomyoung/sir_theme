<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<script>
$(document).ready(function(){
	$('.slide_wrap').bxSlider({
		auto:true,
		controls:false,
		pause:6000
	});

	$('.section1 .sub_slide').bxSlider({
		auto:true,
		controls:false
	});

<?php if (defined("_INDEX_")) { ?> //메인페이지 스크롤
	$(document).mousewheel(function(event,delta){
			console.log(delta);
			//delta 마우스 휠 up:양수 down:음수

			$(window).scroll(function(){
				var winTop = $(this).scrollTop();
				if(winTop > 1075){
					if(delta < 0){
						$("#hd").addClass("fixed");
						$("#logo .white").hide();
						$("#logo .black").show();
					}	
				}else{
					$("#hd").removeClass("fixed");
					$("#logo .black").hide();
					$("#logo .white").show();
				}//scroll end
			});
		});
<?}?>
});
</script>

<!-- 상단 시작 { -->
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
    
    <div id="hd_wrapper">
        <div id="logo">
			<? if(defined("_INDEX_")){?>
            <a href="<?php echo G5_URL ?>" class="white"><img src="<? echo G5_THEME_IMG_URL ?>/logo_main01.png" alt="<?php echo $config['cf_title']; ?>"></a>
			<a href="<?php echo G5_URL ?>" class="black"><img src="<? echo G5_THEME_IMG_URL ?>/logo_main02.png" alt="<?php echo $config['cf_title']; ?>"></a>
			<?php } ?>
			<? if(!defined("_INDEX_")){?>
			<a href="<?php echo G5_URL ?>"><img src="<? echo G5_THEME_IMG_URL ?>/logo_main02.png" alt="<?php echo $config['cf_title']; ?>"></a>
			<?php } ?>
        </div> 

        <nav id="gnb">
            
            <div class="gnb_wrap">
                <ul id="gnb_1dul">
                    
                    <?php
                    $sql = " select *
                                from {$g5['menu_table']}
                                where me_use = '1'
                                  and length(me_code) = '2'
                                order by me_order, me_id ";
                    $result = sql_query($sql, false);
                    $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                    $menu_datas = array();

                    for ($i=0; $row=sql_fetch_array($result); $i++) {
                        $menu_datas[$i] = $row;

                        $sql2 = " select *
                                    from {$g5['menu_table']}
                                    where me_use = '1'
                                      and length(me_code) = '4'
                                      and substring(me_code, 1, 2) = '{$row['me_code']}'
                                    order by me_order, me_id ";
                        $result2 = sql_query($sql2);
                        for ($k=0; $row2=sql_fetch_array($result2); $k++) {
                            $menu_datas[$i]['sub'][$k] = $row2;
                        }

                    }

                    $i = 0;
                    foreach( $menu_datas as $row ){
                        if( empty($row) ) continue; 
                    ?>
                    <li class="gnb_1dli" style="z-index:<?php echo $gnb_zindex--; ?>">
                        <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                       <!-- depth2 -->
                    </li>
                    <?php
                    $i++;
                    }   //end foreach $row

                    if ($i == 0) {  ?>
                        <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- } 상단 끝 -->
<hr>

<!-- 메인 슬라이드 시작 -->
<? if(defined("_INDEX_")){?> 

<div id="main_slide">
	<ul class="slide_wrap">
		<li>
			<img src="<? echo G5_THEME_IMG_URL ?>/main_slide1.jpg" alt="img1">
			<div class="slide_txt">	
					<p class="slide_title">백종원의 역전우동</p>
					<p>맛있는 김이 서리는 감칠맛 진한 국물,<br />
					매끄러운 질감 속 숨은 쫄깃한 면발의 식감!<br />
					<br />역전우동０４１０은 외식경영전문가 백종원의<br />
					우동&amp;소바 전문점입니다.</p>		
				</div>
		</li>
		<li>
			<img src="<? echo G5_THEME_IMG_URL ?>/main_slide2.jpg" alt="img2">
				<div class="slide_txt">	
					<p class="slide_title">정성과 열정</p>
					<p>가격은 더없이 합리적이지만,<br />
					든든하고 맛있는 우동과 소바 한 그릇을 위한<br />
					역전우동０４１０의 노력에는<br />
					합리를 넘어서는 열정과 정성이 깃듭니다.</p>
				</div>
		</li>
		<li>
			<img src="<? echo G5_THEME_IMG_URL ?>/main_slide3.jpg" alt="img3">
				<div class="slide_txt">	
					<p class="slide_title">역전우동０４１０,  한결같은 친근함으로</p>
					<p>유난히 지친 하루의 끝자락에서<br />
					문득 따끈한 우동 국물이 떠오를 때<br />
					<br />언제든, 누구든 부담 없이 문을 열고 들어가서<br />
					든든한 한끼를 대접받을 수 있는 곳입니다.</p>
				</div>
		</li>
	</ul>
</div>
<!-- 메인 슬라이드 끝 -->

<!-- 메인 콘텐츠 시작 -->
<div id="main_contents">
	<section class="section1 clearfix">
		<div class="cont_img">
			<ul class="sub_slide">
				<li><img src="<? echo G5_THEME_IMG_URL ?>/main_section01_01.png" alt="img1"></li>
				<li><img src="<? echo G5_THEME_IMG_URL ?>/main_section01_02.png" alt="img2"></li>
				<li><img src="<? echo G5_THEME_IMG_URL ?>/main_section01_03.png" alt="img3"></li>
			</ul>
		</div>
		<div class="cont_txt">
			<h2>백종원의 우동&소바 전문점,<br>역전우동 0410</h2>
			<p>감칠맛 진한 국물, 매끄러운 질감 속 쫄깃한 면발의 우동이 있는 곳, 역전우동0410.</p>
				<p style="margin-top:20px;">추운 날 길거리 포장마차, 잠시 지나치는 휴게소에서 즐겨 먹던 푸근한 한 그릇에서 떠오르는 추억의 맛과 향이 따끈한 우동 한 그릇에 오롯이 담겨 있습니다.</p>
		</div>
		<div class="more_btn">
				<a href="#"><em>Read More</em></a>
			</div>
	</section>
	<section class="section2">
		<div class="cont1">
			<div class="cont_wrap">
				<div class="txt_left">
					<h2>감칠맛 넘치는<br>특제 육수</h2>
					<p>가쓰오부시의 깊은 감칠맛과 우리 입맛에 익숙한 육수 재료들 고유의 맛을 조화롭게 아우르는 간장의 가장 맛있는 배합비를 찾아내고자 수없이 많은 테스트와 시행착오를 거쳤습니다.</p>
					<p style="margin-top:20px;">그렇게 때로는 차분하게 면의 씹는 맛을 살리면서도, 한편으로는 입에 착 감기는 감칠맛으로 긴 여운을 남기는 맛의 우동 국물을 만들었습니다.</p>
					<div class="more_btn">
						<a href="#"><em>Read More</em></a>
					</div>
				</div>
			</div>
		</div>
		<div class="cont2">
			<div class="cont_wrap clearfix">
				<div class="txt_right">
					<h2>정성과 정직이 담긴<br>한 그릇을 위해</h2>
					<p>훤히 들여다보이는 청결한 주방으로부터 야채와 새우의 바삭한 튀김 소리가, 방금 건진 면과 갓 지은 밥에서 모락모락 올라오는 수증기가, 그리고 역전우동 0410만의 감칠맛 넘치는 국물에서 풍기는 깊은 향이 한 그릇에 어우러져 든든한 한 끼 식사로 완성됩니다.</p>
					<p style="margin-top:40px;">작은 주방을 마주 보고 길게 뻗은 테이블에 나란히 앉아 우동을 먹던 언젠가의 추억이 떠오르도록, 역전우동0410이 식사 한 그릇에 열정과 정성을 담아 안전하고 맛있는 먹거리를 만듭니다.</p>
					<div class="more_btn">
						<a href="/udon_history/#tab3"><em>Read More</em></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section3">
		<h2>매일 먹어도 질리지 않는<br>역전우동0410의 메뉴</h2>
		<ul class="clearfix">
			<li class="cont_box1">
				<a href="#">
					<div class="img_box"><img src="<? echo G5_THEME_IMG_URL ?>/main_section03_01.png" alt="img1"></div>
					<div class="txt_box">
						<h3>덮밥</h3>
						<p>따끈하고 고소한 맛의 하얀 쌀밥과 그 위를<br>형형색색으로 장식하는 먹음직한 반찬들의 조합.</p>
					</div>
					<div class="more_btn">
						<a href="#"><em>Read More</em></a>
					</div>
				</a>
			</li>
			<li class="cont_box2">
				<a href="#">
					<div class="img_box"><img src="<? echo G5_THEME_IMG_URL ?>/main_section03_02.png" alt="img2"></div>
					<div class="txt_box">
						<h3>우동 & 모밀</h3>
					<p>추운 날 길거리 포장마차,<br>잠시 지나치는 휴게소에서 즐겨 먹던 푸근한 한 그릇으로부터 떠오르는 바로 그 맛과 향</p>
					</div>
					<div class="more_btn">
						<a href="#"><em>Read More</em></a>
					</div>
				</a>
			</li>
			<li class="cont_box3">
				<a href="#">
					<div class="img_box"><img src="<? echo G5_THEME_IMG_URL ?>/main_section03_03.png" alt="img3"></div>
					<div class="txt_box">
						<h3>세트 & 사이드</h3>
					<p>튀김의 바삭한 식감, 풍성한 세트 메뉴의<br>든든한 포만감. 역전우동0410의 식탁을 풍성히 채우는 다양한 메뉴를 만나보세요.</p>
					</div>
					<div class="more_btn">
						<a href="#"><em>Read More</em></a>
					</div>
				</a>
			</li>
		</ul>
	</section>
	<section class="section4">
		<ul class="clearfix">
			<li>
				<img src="<? echo G5_THEME_IMG_URL ?>/main_section04_01.png" alt="img1">
				<div class="txt_box">
					<h2>Locations</h2>
					<p>가슴 따뜻한 한 그릇 식사가 그리울 때,<br>주변 가까운 역전우동0410 매장을 찾아보세요.</p>
					<div class="more_btn"><a href="#"><em>Read More</em></a></div>
				</div>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL ?>/main_section04_02.png" alt="img2">
				<div class="txt_box">
					<h2>Franchise</h2>
					<p>맛있는 한끼 식사를 위한 열정과 정성!<br>역전우동0410과 함께할 점주 여러분을 찾습니다.</p>
					<div class="more_btn"><a href="#"><em>Read More</em></a></div>
				</div>
			</li>
		</ul>
	</section>
</div>
<!-- 메인 콘텐츠 끝 -->
<!-- 서브 해더 시작 -->
<?}else{?>

<style>
	#hd {
	position:relative;width: 100%;
	border-top:2px solid #e71921;transition:0.3s;
	}
	#hd #gnb a.gnb_1da{color:#666}
	#subBg{height:500px;}
	#subBg .sbtImg{height:500px;text-align:center;position: relative;}
	#subBg .title{
	width: 500px;position: absolute;left:50%;top:28%;transform:translateX(-50%);
	}
	#subBg .loc1D{color:#fff;font-size:2.7em;padding-bottom:30px;}
	#subBg .loc1D:after{
	display:block;clear:both;content:"";margin-top:30px !important;
	width: 40px;height: 2px;background-color: #fff;margin:0 auto;
	}
	#subBg .text{
	color:#fff;font-size:1.2em;
	}
	
</style>

<div id="subBg">
	<div id="page_title" class="sbtImg">
		<div class="title">
			<h2 class="loc1D"><!-- 1차메뉴 --></h2>
			<p class="text"></p>
		</div>
	</div>
</div>
<script>
	window.onload = function(){
		var menuDep = $("#subBg .loc1D").html();
		var subDep = $(".loc2D").text();
		console.log("현재위치 : "+menuDep);
		console.log("현재위치 : "+subDep);

		if(menuDep == "역전우동"){ //menu1
			$("#subBg .text").html("우리에게 맞는 우동의 맛을 연구하다.");
		}else if(menuDep == "매장안내"){ //menu3
			$("#subBg .text").html("원하시는 지역의 매장을 검색해 보세요!");
			$(".subTopBg_03").css("background","url('<? echo G5_THEME_IMG_URL ?>/sub_header_store_info.png')");
		}else if(menuDep == "창업안내"){ //menu4
			$("#subBg .text").html("다년간의 경영 노하우로 안정감 있게 성장 중인"+ "<br>" +"역전우동0410과 함께할 파트너 여러분을 찾습니다.");
			$(".subTopBg_04").css("background","url('<? echo G5_THEME_IMG_URL ?>/sub_header_information.png')");
		}else if(menuDep == "고객의 소리"){ //menu5
			$("#subBg .text").html("항상 고객의 소리에 귀 기울이며, 고객만족 향상을 위해 노력하겠습니다.");
			$(".subTopBg_05").css("background","url('<? echo G5_THEME_IMG_URL ?>/sub_header_customer.png')");
		}

		if(subDep == " 역전우동의 시작"){ //menu1_1
			$(".subTopBg_01").css("background","url('<? echo G5_THEME_IMG_URL ?>/sub_header_history01.png')");
		}else if(subDep == " 역전우동 이야기"){//menu1_2
				$(".subTopBg_01").css("background","url('<? echo G5_THEME_IMG_URL ?>/sub_header_history02.png')");
		}else if(subDep == " 믿음직한 위생관리"){//menu1_3
				$(".subTopBg_01").css("background","url('<? echo G5_THEME_IMG_URL ?>/sub_header_history03.png')");
		}else if(subDep == " 우동 & 모밀"){//menu2_1
				$(".subTopBg_02").css("background","url('<? echo G5_THEME_IMG_URL ?>/sub_header_menu01.png')");
				$("#subBg .text").html("추운 날 길거리 포장마차, 잠시 지나치는 휴게소에서 즐겨 먹던"+ "<br>" +"푸근한 한 그릇으로부터 떠오르는 바로 그 맛과 향.");
		}else if(subDep == " 덮밥"){//menu2_2
				$(".subTopBg_02").css("background","url('<? echo G5_THEME_IMG_URL ?>/sub_header_menu02.png')");
				$("#subBg .text").html("따뜻하고 고소한 맛의 하얀 쌀밥과"+ "<br>" +"그 위를 형형색색으로 장식하는 먹음직한 재료들의 조합.");
		}else if(subDep == " 세트 & 사이드"){//menu2_3
				$(".subTopBg_02").css("background","url('<? echo G5_THEME_IMG_URL ?>/sub_header_menu03.png')");
				$("#subBg .text").html("튀김의 바삭한 식감, 풍선한 세트 메뉴의 든든한 포만감."+ "<br>" +"역전우동 0410의 식탁을 풍성히 채우는 다양한 메뉴를 만나보세요.");
		}
	};
</script>
<?}?>
<!-- 서브 해더 끝 -->


<!-- 콘텐츠 시작 { -->
<?php if (!defined("_INDEX_")) { ?>
<div id="wrapper">

    <div id="container">
		<div class="lotaion_wrap"> 
			<span class="locationBar" title="현재위치">
			<span><em class="fa fa-home" aria-hidden="true"></em> HOME <i class="fa fa-angle-right" aria-hidden="true"></i></span>
			<span class="loc1D"><!-- 1차메뉴 --></span>
			<span class="loc2D"><!-- 2차메뉴 --></span>
			</span>
		</div>

		<!-- <h2 id="container_title" style="text-align:center;font-size:2em">
		<?php echo get_head_title($g5['title']); ?><br>
		</h2> -->
			
		<!-- <div class="subTitle">
			<?
			$subTitle = get_head_title($g5['title']);
			
			if($subTitle == "역전우동의 시작"){
			?>
				
			<?
			}else if($subTitle == "역전우동 이야기"){
			?>
				안녕하세sss요안녕하세요안녕하세요
				<img src="<? echo G5_THEME_IMG_URL ?>/main_section04_02.png" alt="img">
			<?
			}
			?>
		</div> -->


        <?php } ?>



