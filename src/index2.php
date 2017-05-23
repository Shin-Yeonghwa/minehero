<?php
/*
error_reporting(E_ALL);
ini_set("display_errors", 1);
*/

$_URL = "http://event.smartbrz.com/heroesadv/";
$_Description = "사전 등록으로 든든하게 시작하는 모험, 우리 함께 해요!";
$_Title = "마인히어로 사전예약";
$_FB_AppID = "184348358656701";
$_GA_TrackingID = "UA-99660479-1";
$_ImageURL = "http://event.smartbrz.com/heroesadv/images/1.png";
$_Encoded_url = urlencode( $_URL );
$_Encoded_description =  urlencode( $_Description );
?>
<html lang="ko">
<head>
	<title><?PHP echo $_Title?></title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
<script type="text/javascript">
function chkForm(f){
	try{
		if( !document.getElementById("Checkbox1").checked ) { alert("개인정보 활용에 동의해야만 신청하실 수 있습니다.\n감사합니다."); return false; };
		var regexMdn = /^((01[1|6|7|8|9])[1-9]+[0-9]{6,7})|(010[1-9][0-9]{7})$/;
		var mdn = f.cellPhone1.value + f.cellPhone2.value;
		if( !regexMdn.test(mdn) ){ alert("잘못된 형식의 전화번호 입니다.\n확인 후 다시 입력해주세요."); return false; };
	}catch(e){
		alert(e.message);
		return false;
	}
	return true;	
}

function completeRegister(){
	fbq('track', 'CompleteRegistration', { value: 25.00, currency: 'USD' });
	ga('send', { hitType: 'event', eventCategory: 'reservation', eventAction: 'click', eventLabel: 'reservation complete'});
	document.getElementById("oform").reset();
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
</head>
<body>
<form id="oform" name="oform" action="insert.php" method="POST" target="insertFrame" onsubmit="return chkForm(this);">
<input type="hidden" name="referer" value="<?PHP echo $_SERVER['HTTP_REFERER']; ?>">
<table style="width: 750px; height: 36px" class="style3">
	<tr>
		<td style="padding-top:5px;">
		<select name='store'>
		<option>iOS</option>
		<option>Google</option>
		<option>OneStore</option>
		</select>
		</td>
		<td style="padding-top:5px;">
			<select name='cellPhone1' style="font-size:15px; width:94px; height:31px">
			<option value='010'>010</option>
			<option value='011'>011</option>
			<option value='016'>016</option>
			<option value='017'>017</option>
			<option value='018'>018</option>
			<option value='019'>019</option>
			</select></td>
		<td style="padding-top:5px;">
			<input name='cellPhone2' type='text' style="ime-mode:disabled;" placeholder="'-'를 제외한 숫자만 입력하세요." onkeydown="return onlyNumber(event);" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"
			onblur="this.value=this.value.replace(/[^0-9]/g,'');" 
			maxlength="8"/>
			</td>
		<td style="width: 107px; height: 35px" class="style17"><button type="submit" onclick="EventTracking('신청하기', 'click');">신청하기</button></td>
	</tr>
	<tr><td colspan=4><input type="checkbox" id="Checkbox1" value=1 >개인정보 활용 동의</td></tr>
</table></form><iframe width=0 height=0 frameborder="0" name="insertFrame"></iframe>

<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?PHP echo $_Encoded_url ?>"
	onclick="EventTracking('Facebook share', 'click');" >Facebook 공유하기</a>
<a target="_blank" href="http://twitter.com/intent/tweet?text=<?PHP echo $_Encoded_description ?>&url=<?PHP echo $_Encoded_url ?>"
	onclick="EventTracking('Twitter share', 'click');" >Twitter 공유하기</a>
<button onclick="chkForm(this);">전환테스트</button>
</body>
</html>