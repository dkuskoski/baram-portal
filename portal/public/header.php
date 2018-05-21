<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#">
<head>
<?php 
$cyr = [
	'а','б','в','г','д','ѓ','е','ж','з','ѕ','и','j','к','л','љ','м','н','њ','о','п',
	'р','с','т','ќ','у','ф','х','ц','ч','ш','џ',
	'А','Б','В','Г','Д','Ѓ','Е','Ж','З','Ѕ','И','Ј','К','Л','Љ','М','Н','Њ','О','П',
	'Р','С','Т','Ќ','У','Ф','Х','Ц','Ч','Ш','Џ'
];
$lat = [
	'a','b','v','g','d','g','e','z','z','z','i','j','k','l','lj', 'm','n','nj','o','p',
	'r','s','t','k','u','f','h','c','c','sh','dz',
	'A','B','V','G','D','G','E','Z','Z','Z','I','J','K','L','LJ','M','N','NJ','O','P',
	'R','S','T','K','U','F','H','C','C','SH','DZ'
];

if(isset($post) && $post != null){
	echo '<title>' . str_replace($cyr, $lat, $post->title) . '</title>';
	echo '<meta name="description=" content="' . str_replace($cyr, $lat, $post->section) . ' ' . str_replace($cyr, $lat, $post->title) . ' baram be barambe baram.be baram mk baram com mk baram.com.mk">';
} else if (isset($_GET['cat']) && $_GET['cat'] != null) {
	echo '<title>' . str_replace($cyr, $lat, $_GET['cat']) . '</title>';
	echo '<meta name="description=" content="' . str_replace($cyr, $lat, $_GET['cat']) . ' baram be barambe baram.be baram mk baram com mk baram.com.mk">';
} else {
	echo '<title>baram</title>';
	echo '<meta name="description=" content="baram be barambe baram.be baram mk baram com mk baram.com.mk">';
}
?>

<!--meta-->
<meta property="fb:app_id" content="683421731799698" />
<?php 
if(isset($post)){
echo '<meta property="og:image" content="' . $post->path . '" />';
echo '<meta property="og:type" content="article" />';
echo '<meta property="og:description" content="&nbsp;" />';
echo '<meta property="og:locale" content="mk_MK" />';
echo '<meta property="og:title" content="' . $post->title . '" />';
echo '<meta property="og:url" content="http://' . $_SERVER["HTTP_HOST"]. '?' .$_SERVER['QUERY_STRING'] . '" />';
}
?>
<meta charset="UTF-8" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1.2" />
<meta name="format-detection" content="telephone=no" />
<meta name="keywords" content="Medic, Medical Center" />
<meta name="description" content="Responsive Medical Health Template" />
<!--style-->
<link href='//fonts.googleapis.com/css?family=Roboto:300,400,700'
	rel='stylesheet' type='text/css'>
<link
	href='//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700'
	rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style/reset.css">
<link rel="stylesheet" type="text/css" href="css/modal.css">
<link rel="stylesheet" type="text/css" href="style/superfish.css">
<link rel="stylesheet" type="text/css" href="style/prettyPhoto.css">
<link rel="stylesheet" type="text/css" href="style/jquery.qtip.css">
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" type="text/css" href="style/menu_styles.css">
<link rel="stylesheet" type="text/css" href="style/animations.css">
<link rel="stylesheet" type="text/css" href="style/responsive.css">
<link rel="stylesheet" type="text/css"
	href="style/odometer-theme-default.css">

	<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>

<!--<link rel="stylesheet" type="text/css" href="style/dark_skin.css">-->
<!--<link rel="stylesheet" type="text/css" href="style/high_contrast_skin.css">-->
<link rel="shortcut icon" href="images/favicon.ico">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89081951-1', 'auto');
  ga('send', 'pageview');
</script>


</head>
<body class="image_2">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/mk_MK/sdk.js#xfbml=1&version=v2.10&appId=683421731799698";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root2"></div>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89081951-1', 'auto');
  ga('send', 'pageview');

</script>
<script>
window.fbAsyncInit = function() {
FB.init({
appId : '683421731799698',
status : true, // check login status
cookie : true, // enable cookies to allow the server to access the session
xfbml : true, // parse XFBML
version : 'v2.10'
});
};

(function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
 
(function() {
var e = document.createElement('script');
e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
e.async = true;
document.getElementById('fb-root2').appendChild(e);
}());
</script>


	<br>
	<br>
	<br>
	<div class="site_container boxed">
		<div class="header_top_bar_container style_4 border clearfix">
			<div class="header_top_bar">
				<form class="search" id="search" method="get" action="/index.php">
					<input type="text" name="search" placeholder="Барам..." value=""
						class="search_input hint"> <input type="submit"
						class="search_submit" value="" onclick="javascript: document.getElementById('search').submit();"> <input type="hidden" name="page"
						value="category">
						<input type="hidden" name="cat"
						value="search">
				</form>
				<!-- <ul class="social_icons dark clearfix"> -->
				<ul class="social_icons colors clearfix">
					<li>
						<div class="fb-like" data-href="https://www.facebook.com/baram.be/?fref=ts" data-width="100" style="margin-top: 5px;" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
					</li>
					<li><a target="_blank" href="https://www.facebook.com/baram.be"
						class="social_icon facebook" title="facebook"> &nbsp; </a></li>
					<li><a target="_blank" href="https://twitter.com/baram_be"
						class="social_icon twitter" title="twitter"> &nbsp; </a></li>
					<li><a href="mailto:contact@baram.be" class="social_icon mail"
						title="mail"> &nbsp; </a></li>
					<li><a title="" href="https://www.pinterest.com/barambe"
						class="social_icon pinterest"> &nbsp; </a></li>
					<li><a title=""
						href="https://www.youtube.com/channel/UC7nhIyUFPOafr3sQtyQ6W3w"
						class="social_icon youtube"> &nbsp; </a></li>
				<?php 
// 					<!--<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon behance">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon bing">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon blogger">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon deezer">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon designfloat">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon deviantart">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon digg">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon dribbble">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon flickr">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon form">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon forrst">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon foursquare">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon friendfeed">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon googleplus">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon instagram">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon linkedin">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon mobile">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon myspace">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon picasa">
// 								&nbsp;
// 							</a>
// 						</li>
						
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon reddit">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon rss">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon skype">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon soundcloud">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon spotify">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon stumbleupon">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon technorati">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon tumblr">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon vimeo">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon wykop">
// 								&nbsp;
// 							</a>
// 						</li>
// 						<li>
// 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon xing">
// 								&nbsp;
// 							</a>
// 						</li>
// 						-->
						?>
				</ul>
				<div class="latest_news_scrolling_list_container">
					<ul>
						<li class="category">Последно</li>
						<li class="left"><a href="#"></a></li>
						<li class="right"><a href="#"></a></li>
						<li class="posts">
							<ul class="latest_news_scrolling_list">
							<?php
							for($i = 0; $i < 10; $i ++) {
								echo '<li><a href="?page=post&title=' . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '" title="">' . mb_substr($activePosts [$i]->title, 0, 50) . '...</a></li> ';
							}
							?>
							</ul>
						</li>
						<?php
						// <li class="date">
						// for($i = 0; $i < 10; $i ++) {
						//     echo '<abbr title="' . date ( 'Y M d', strtotime ( $activePosts [$i]->created_at ) ) . '" class="timeago current">' . date ( 'Y m d', strtotime ( $activePosts [$i]->created_at ) ) . '</abbr> ';
						// }
						// </li>
							?>
					</ul>
				</div>
			</div>
		</div>
		<div class="header_container small">
			<!-- <div class="header_container style_2"> -->
			<!-- <div class="header_container style_2 small"> -->
			<!-- <div class="header_container style_3"> -->
			<!-- <div class="header_container style_3 small"> -->
			<div class="header clearfix">
				<div class="logo">
					<h1>
						<a href="?page=home" title="Baram.be">Baram.be</a>
					</h1>
					<h4>Ако бараш нешто</h4>
				</div>
				<div class="placeholder">
					<a href="https://www.facebook.com/centerloungeandfreshbar/"><img width="100%" height="100%" src="/img/728x90.gif"
						alt="baram be" /></a>
				</div>
			</div>
		</div>
		<!-- <div class="menu_container style_2 clearfix"> -->
		<!-- <div class="menu_container style_3 clearfix"> -->
		<!-- <div class="menu_container style_... clearfix"> -->
		<div class="menu_container style_10 clearfix">
			<!-- <div class="menu_container sticky clearfix"> -->
				<?php
				require_once ('menu.php');
				?>
			</div>

		<div class="page">
			<div class="page_layout clearfix">
				<div class="row page_margin_top">

<?php 
// 					<!-- BEGIN # MODAL LOGIN -->
// 					<div class="modal fade" id="login-modal" tabindex="-1"
// 						role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
// 						style="display: none;">
// 						<div class="modal-dialog">
// 							<div class="modal-content">
// 								<div class="close-wrapper">
// 									<a href="javascript:void(0);" class="close"
// 										data-dismiss="modal" aria-label="Close">X</a>
// 								</div>
// 								<div class="modal-header" align="center">
// 									<img style="border-radius: 50%;" id="img_logo"
// 										src="http://bootsnipp.com/img/logo.jpg">
// 								</div>

// 								<!-- Begin # DIV Form -->
// 								<form class="login-form">
// 									<div class="login-page">
// 										<div class="modal-form">
// 											<input type="text" placeholder="username" /> <input
// 												type="password" placeholder="password" />
// 											<button>login</button>
// 											<p class="message">
// 												Заборавена лозинка? <a href="javascript:void(0);"
// 													id="login_lost_btn">Lost Password?</a> <br> <a
// 													href="javascript:void(0);" id="login_register_btn">Register
// 												</a>
// 											</p>
// 										</div>
// 									</div>
// 								</form>
// 								<!-- End # DIV Form -->
// 								<!-- Begin | Lost Password Form -->
// 								<form id="lost-form" style="display: none;">
// 									<div class="modal-body">
// 										<div id="div-lost-msg">
// 											<div id="icon-lost-msg"
// 												class="glyphicon glyphicon-chevron-right"></div>
// 											<span id="text-lost-msg">Type your e-mail.</span>
// 										</div>
// 										<input id="lost_email" class="form-control" type="text"
// 											placeholder="E-Mail (type ERROR for error effect)" required>
// 									</div>
// 									<div class="modal-footer">
// 										<div>
// 											<button type="submit"
// 												class="btn btn-primary btn-lg btn-block">Send</button>
// 										</div>
// 										<div>
// 											<button id="lost_login_btn" type="button"
// 												class="btn btn-link">Log In</button>
// 											<button id="lost_register_btn" type="button"
// 												class="btn btn-link">Register</button>
// 										</div>
// 									</div>
// 								</form>
// 								<!-- End | Lost Password Form -->

// 								<!-- Begin | Register Form -->
// 								<form id="register-form" style="display: none;">
// 									<div class="modal-form">
// 										<input type="text" placeholder="name" /> <input
// 											type="password" placeholder="password" /> <input type="text"
// 											placeholder="email address" />
// 										<button>create</button>
// 										<p class="message">
// 											Already registered? <a href="#">Sign In</a>
// 										</p>
// 									</div>
// 								</form>
// 								<!-- End | Register Form -->
// 							</div>
// 						</div>
// 					</div>
// 					<!-- END # MODAL LOGIN -->
					?>