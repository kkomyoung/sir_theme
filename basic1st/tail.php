<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>
    <? if (!defined("_INDEX_")) { ?>
    <div id="aside">
        <?include_once(G5_THEME_PATH.'/skin/nav/mysubmenu.php'); ?>
    </div>
    <?}?>

</div> <!-- wrapper -->
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">

    <div id="ft_wr">
        <div id="ft_catch"><img src="<? echo G5_THEME_IMG_URL ?>/logo_bottom.png" alt="<?php echo G5_VERSION ?>"></div>
		<div id="ft_info">
			(주)더본코리아 | 사업자등록번호 211-86-00870 | 대표이사 백종원
			<br />주소: 서울시 강남구 봉은사로 1길 39 유성빌딩 4~6층 | 팩스: 02-511-3864
			<br />본사 대표전화: 02-549-3864 | 가맹상담전화: 02-3447-0410 | 고객센터: 1544-2360
		</div>
        <div id="ft_copy">Copyright &copy; <b>2018 THEBORN KOREA INC.</b> All rights reserved.</div>
		<div class="brand_site">
			<select name="" id="familiy_site">
				<option value="" selected="">패밀리 사이트 바로가기</option>
				<option value="http://newmaul.com/">새마을식당</option>
				<option value="http://ssambap.co.kr/">원조쌈밥집</option>
				<option value="http://paikdabang.com/">빽다방</option>
				<option value="http://zzambbong.com/">홍콩반점</option>
				<option value="http://www.bornga.co.kr/">본가</option>
				<option value="http://hanshinpocha.com/">한신포차</option>
                <option value="http://www.paiks-pan.com/">백철판</option>
				<option value="http://paiksbeer.com/">백스비어</option>
				<option value="http://dolbaegi.com/">돌배기집</option>
			</select>
		</div>
		<div class="coupon"><a href="http://www.theborn.co.kr/coupon/"target="_blank">더본쿠폰 바로가기<img src="<? echo G5_THEME_IMG_URL ?>/coupon.png" alt="<?php echo G5_VERSION ?>"></a></div>
    </div>
    
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
        <script>
        
        $(function() {
            $("#top_btn").on("click", function() {
                $("html, body").animate({scrollTop:0}, '500');
                return false;
            });
        });
        </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>