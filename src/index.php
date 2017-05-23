<?php
$_URL = "http://event.smartbrz.com/heroesadv/";
$_Description = "작은 영웅들의 커다란 이야기! 마인히어로 지금 사전예약 하세요!";
$_Title = "마인히어로 사전예약";
$_FB_AppID = "930172757103199";
$_GA_TrackingID = "UA-67423723-3";
$_ImageURL = "http://event.smartbrz.com/heroesadv/images/2.png";
$_Encoded_url = urlencode( $_URL );
$_Encoded_description =  urlencode( $_Description );
?><!DOCTYPE html>
<html lang="ko">
<head>
<title><?PHP echo $_Title?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<!-- Facebook -->
<meta property="fb:app_id" content="<?PHP echo $_FB_AppID ?>" />
<meta property="og:url" content="<?PHP echo $_URL ?>" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?PHP echo $_Title ?>" />
<meta property="og:description" content="<?php echo $_Description ?>" />
<meta property="og:image" content="<?php echo $_ImageURL ?>" />
<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="<?PHP echo $_URL ?>">
<meta name="twitter:title" content="<?PHP echo $_Title ?>">
<meta name="twitter:description" content="<?php echo $_Description ?>">
<meta name="twitter:image" content="<?php echo $_ImageURL ?>">
<link rel="stylesheet" type="text/css" href="css/minehero.css">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.fullPage.js"></script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '<?php echo $_FB_AppID; ?>'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=<?php echo $_FB_AppID; ?>&ev=PageView&noscript=1"
/></noscript>
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', '<?PHP echo $_GA_TrackingID ?>', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->
</head>
<body>



    <div class="wrap">
        <h1 class="blind">마인 히어로 사전등록 이벤트</h1>
        <!-- 상단 탭 -->
        <div id="fix_menu" class="fix_menu">
            <ul>
            <li data-menuanchor="firstPage" class="active"><a href="#firstPage" class="link_first">사전등록</a></li>
            <li data-menuanchor="secondPage"><a href="#secondPage" class="link_second">게임 소개</a></li>
            <li data-menuanchor="thirdPage"><a href="#thirdPage" class="link_third">이벤트</a></li>
            </ul>
            <a  target="_blank" href="http://cafe.naver.com/heroesadv" class="link_cafe">
                <span class="link">
                    <span class="blind">공식까페</span>
                </span>
                <p class="layer"><span class="blind">가입시 클레오파트라 지급</span></p>
            </a>
        </div>

        <!-- //상단 탭 -->

        <!-- 사전 등록 section -->
        <section data-anchor="firstPage" class="section spot_section">

            <div class="area_title">
                <h2 class="blind">마인히어로</h2>
                <strong class="blind">작은 영웅들의 커다란 이야기!</strong>
            </div>
            <!-- [D] video 영역 -->
            <div class="area_video">
                <!-- Video -->
                <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/g2UxjLOgZ1k?ecver=2" class="youtubeVideo" frameborder="0" allowfullscreen></iframe></div>
                <!-- Video -->
            </div>
            <!-- //[D] video 영역 -->
			<form id="oform" name="oform" action="insert.php" method="POST" target="insertFrame" onsubmit="return chkForm(this);">
			<input type="hidden" name="referer" value="<?PHP echo $_SERVER['HTTP_REFERER']; ?>">
			<input type="hidden" name='store' value="Google" id="form_store">
                <div class="area_select">
                    <a id="btn_store" href="#a" class="btn_store google">
                        <span class="text">google</span>
                    </a>
                    <!-- [D] 셀렉트박스 -->
                    <ul class="layer_select" style="display:none">
                        <li id="btn_ios"><a href="#" class="btn_ios"><span class="text">ios</span></a></li>
                        <li id="btn_onestore"><a href="#" class="btn_onestore"><span class="text">onestore</span></a></li>
                        <li id="btn_google" style="display:none"><a href="#" class="btn_google"><span class="text">google</span></a></li>
                    </ul>
                </div>
                <div class="area_input">
                    <input name='cellPhone' type='text' style="ime-mode:disabled;" placeholder="'-'를 제외한 숫자만 입력하세요." onkeydown="return onlyNumber(event);" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"
		onblur="this.value=this.value.replace(/[^0-9]/g,'');"
		maxlength="11" class="inp_phone">
                </div>

                <div class="area_agreement">
                    <input name="Checkbox1" type="checkbox" class="chck_agreement" id="chck_1">
                    <label for="chck_1"><span class="blind">개인정보 수집 및 이용에 동의 합니다</span></label>
                    <button type="button" class="agreement_detail" onclick="$('#agreement_detail').show();">내용보기</button>
                </div>
                <div class="area_button">
                    <button type="submit"  onclick="EventTracking('신청하기', 'click');" class="btn_registration"><span class="blind">등록하기</span></button>
                    <a  target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?PHP echo $_Encoded_url ?>"
onclick="EventTracking('Facebook share', 'click');" class="sns_facebook"><span class="blind">facebook 공유하기</span></a>
                    <a target="_blank" href="http://twitter.com/intent/tweet?text=<?PHP echo $_Encoded_description ?>&url=<?PHP echo $_Encoded_url ?>"
onclick="EventTracking('Twitter share', 'click');" class="sns_twitter"><span class="blind">twitter 공유하기</span></a>
                </div>

            </form>

        </section>
        <!-- //사전 등록 section -->

        <section data-anchor="secondPage" class="section introduce_section">

            <div class="area_title">
                <h2 class="blind">마인히어로 게임소개</h2>
            </div>
            <div class="area_content">
                <ul>
                    <li class="info">
                        <p class="blind">동화 주인공부터 역사 속 인물까지~</p>
                        <p class="blind">고유 스토리를 지닌 180여 종의 영웅 등장!</p>
                    </li>
                    <li class="info2">
                        <p class="blind">파고 또 파고! 캐는 만큼 강해져!</p>
                        <p class="blind">채광을 방해하는 강력한 적을 처지하고 강화 재료 획득!</p>
                    </li>
                    <li class="info3">
                        <p class="blind">25명의 영웅으로 나만의 진영 구성!</p>
                        <p class="blind">합체 스킬 영웅들로 더욱 강력한 힘을 경험해 보세요!</p>
                    </li>
                </ul>
            </div>

        </section>

        <section data-anchor="thirdPage" class="section event_section">

            <div class="area_title">
                <h2 class="blind">마인히어로가 준비한 다양한 이벤트</h2>
            </div>
            <div class="area_content">
                <ul>
                    <li class="info">
                        <dl class="blind">
                            <dt>사전등록하신 용사님께만 드리는 특전보상!</dt>
                            <dd>최고 등급 금색 영웅-줄리어스 시저</dd>
                            <dd>고블린 가방 50개</dd>
                            <dd>300 다이아</dd>
                            <dd>초급 광석팩 30개</dd>
                            <dd>중급 광석팩 20개</dd>
                        </dl>
                    </li>
                    <li class="info2">
                        <dl class="blind">
                            <dt>공식 가페 가입 이벤트!</dt>
                            <dd>가입만 해도 100% 획득 황색 영웅 클레오파트라</dd>
                            <dd>사전등록 인증하면 문상 득템기회! 문화상품권 5,000원 권</dd>
                        </dl>
                    </li>
                </ul>
                <a target="_blank" href="http://cafe.naver.com/heroesadv" class="link_cafe">마인 히어로 공식카페 GO ~!</a>
            </div>

        </section>
        <section class="section fp-auto-height address_section">
            <address>Copyright ⓒ 2017 BIGBANG INTERACTIVE Ltd. All Right Reserved</address>
        </section>

        <!-- 사전등록 중복 레이어 팝업 -->
        <div id="agreement_detail" class="layer_pop" style="display:none">
            <div class="dimmed"></div>
            <div class="pop_content">
                <textarea style="background-color:white;width:600px;height:330px;">사전등록 정보 입력 시 ‘마인히어로’ 서비스 출시 등을 안내하기 위하여
『정보통신망법』 제22조, 제23조에 따라 개인정보를 수집, 이용함에 동의를 받고자 합니다.


■ 개인정보 수집 및 이용 동의

1. 개인정보 수집 및 이용 목적 : 마인히어로 출시 안내 및 고지사항 전달 등
2. 개인정보 수집 항목 : 휴대폰 번호
3. 개인정보 보유 및 이용 기간 : 마인히어로 서비스 시작 일자로부터 180일 보관 후 삭제

이용자는 개인정보 수집 및 이용에 동의하지 않으실 수 있으며,
동의 거부 시 서비스 오픈 안내 및 특전 쿠폰 등의 서비스를 받으실 수 없습니다.

개인정보 처리에 관한 자세한 사항은 마인히어로 공식 카페(http://cafe.naver.com/heroesadv)에서 공개하고 있는
[개인정보 취급 방침]을 참고하시기 바랍니다.
</textarea>
                <button type="button" class="btn_close"><span class="blind">레이어 팝업 닫기</span></button>
            </div>
        </div>

        <!-- 사전등록 중복 레이어 팝업 -->
        <div id="errormsg" class="layer_pop" style="display:none">
            <div class="dimmed"></div>
            <div class="pop_content type">
                <strong class="blind">마인 히어로</strong>
                <p class="blind">이미 사전등록이 완료된 번호입니다.</p>
                <button type="button" class="btn_close"><span class="blind">레이어 팝업 닫기</span></button>
            </div>
        </div>

        <!-- 사전등록 참여 레이어 팝업2 -->
        <div id="complete" class="layer_pop" style="display:none">
            <div class="dimmed"></div>
            <div class="pop_content type3">
                <strong class="blind">마인 히어로</strong>
                <p class="blind">참여해주셔서 고맙습니다.사전등록 특전 쿠폰은 정식 서비스 오픈 후 발송됩니다.</p>
                <em class="blind">공식 카페에 사전등록 인증하고 문화상품권의기회를 잡으세요</em>
                <a target="_blank" href="http://cafe.naver.com/heroesadv" class="link_cafe"><span class="blind">참여하기</span></a>
                <button type="button" class="btn_close"><span class="blind">레이어 팝업 닫기</span></button>
            </div>
        </div>
		<div style="display:none"><iframe width=0 height=0 frameborder="0" name="insertFrame"></iframe></div>


    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            if( (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) ) {
                $('.wrap').fullpage({
                    autoScrolling : false,
                    scrollingSpeed: 500,
                    scrollBar: true,
                    fitToSection :false,
                    menu: true,
                    anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'lastPage'],
    	            menu: '#fix_menu',
                    css3: true,
                    scrollOverflowReset:true,
                });
                $('section').addClass('fp-auto-height');
            } else{
                $('.wrap').fullpage({
                    autoScrolling: true,
                    scrollingSpeed: 500,
                    scrollBar: true,
                    fitToSection :false,
                    menu: true,
                    anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'lastPage'],
    	            menu: '#fix_menu',
                    css3: true,
                    scrollOverflowReset:true,
                });
            }
        });
        $('.btn_store').click(function() {
            $('.layer_select').toggle();
        });

        $('.btn_close').click(function() {
            $('.layer_pop').hide();
        });

		$('.link_cafe').click(function() {
            $('.layer_pop').hide();
        });

		$(".btn_ios").click(function(){
			$("#btn_ios").css({"display":"none"});
			$("#btn_google").css({"display":"block"});
			$("#btn_onestore").css({"display":"block"});
			$('.layer_select').hide();
			$('#btn_store').attr('class', 'btn_store ios');
			$("#form_store").val("iOS");
		});
		$(".btn_google").click(function(){
			$("#btn_ios").css({"display":"block"});
			$("#btn_google").css({"display":"none"});
			$("#btn_onestore").css({"display":"block"});
			$('.layer_select').hide();
			$('#btn_store').attr('class', 'btn_store google');
			$("#form_store").val("Google");
		});
		$(".btn_onestore").click(function(){
			$("#btn_ios").css({"display":"block"});
			$("#btn_google").css({"display":"block"});
			$("#btn_onestore").css({"display":"none"});
			$('.layer_select').hide();
			$('#btn_store').attr('class', 'btn_store onestore');
			$("#form_store").val("OneStore");
		});

    </script>

<script type="text/javascript">
function chkForm(f){
	try{
		if( !document.getElementById("chck_1").checked ) { alert("개인정보 활용에 동의해야만 신청하실 수 있습니다.\n감사합니다."); return false; };
		var regexMdn = /^((01[1|6|7|8|9])[1-9]+[0-9]{6,7})|(010[1-9][0-9]{7})$/;
		var mdn = f.cellPhone.value;
		if( !regexMdn.test(mdn) ){ alert("잘못된 형식의 전화번호 입니다.\n확인 후 다시 입력해주세요."); f.cellPhone.focus(); return false; };
	}catch(e){
		alert(e.message);
		return false;
	}
	return true;
}

function errorMessage(){
	document.getElementById("oform").reset();
	$("#btn_ios").css({"display":"block"});
	$("#btn_google").css({"display":"none"});
	$("#btn_onestore").css({"display":"block"});
	$('.layer_select').hide();
	$('#btn_store').attr('class', 'btn_store google');
	$("#form_store").val("Google");
	$('#errormsg').show();
}
function completeRegister(){
	fbq('track', 'CompleteRegistration', { value: 25.00, currency: 'USD' });
	ga('send', { hitType: 'event', eventCategory: 'reservation', eventAction: 'click', eventLabel: 'reservation complete'});
	$('#complete').show();
	document.getElementById("oform").reset();
	$("#btn_ios").css({"display":"block"});
	$("#btn_google").css({"display":"none"});
	$("#btn_onestore").css({"display":"block"});
	$('.layer_select').hide();
	$('#btn_store').attr('class', 'btn_store google');
	$("#form_store").val("Google");
}

function EventTracking(category, action){
	ga('send', 'event', category, action);
}

function onlyNumber(e){
    var key = (e.which)? event.which : e.keyCode;
    if( (key >= 48 && key <= 57) || (key >= 96 && key <= 105) || ( key >=37 && key <=40) || key==8 || key ==9 ) return true;
	else{ e.target.value.replace(/[^0-9]/g,''); return false; }
}
</script>
</body>
</html>
