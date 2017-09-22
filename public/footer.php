
</div>
</div>
</div>
<div class="footer_container">
	<div class="footer clearfix">
		<div class="row">
			<div class="column column_1_3">
				<h4 class="box_header">За нас</h4>
				<p class="padding_top_bottom_25">Поинаков пристап на информации, медиумски портал со најнови вести од светот на технологијата, економијата, политиката и забавниот живот. Кога бараш нешто, барај на Барам.бе</p>
				<div class="row">
					<div class="column column_1_2">
						<!--<h5>MKadvertising</h5>
						<p>
							contact@baram.be
						</p>-->
					</div>
					<div class="column column_1_2">
						
						<p>
							
						</p>
					</div>
				</div>
				<h4 class="box_header page_margin_top">Следете не на</h4>
				<ul class="social_icons dark page_margin_top clearfix">
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
					<li>
						<div class="fb-like" data-href="https://www.facebook.com/baram.be/?fref=ts" data-width="100" style="margin-top: 5px; margin-left: 10px;" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
					</li>
				</ul>
			</div>
			<div class="column column_1_3">
				<h4 class="box_header">Последно</h4>
				<div class="vertical_carousel_container clearfix">
					<ul
						class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
												<?php
			for($i = 0; $i < 10; $i ++) {
				echo '<li class="post"><a href="?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '" ';
				echo 'title="' . $activePosts [$i]->title . '"> ';
				echo '<img '; 
				if($activePosts[$i]->section == "18+")
				{
					echo 'class="erotic-foggy" onmouseover="disableFoggy(this);" onmouseout="enableFoggy(this);" ';
				}
				echo 'src="' . $activePosts [$i]->path . '"  style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); height: 100px; width: 100px; object-fit: cover;" alt="img"></a>' ;
				echo '<div class="post_content"><h5> ';
				echo '<a href="?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '"  ';
				echo 'title="' . $activePosts [$i]->title . '">' . $activePosts [$i]->title . '</a> </h5> ';
				echo '<ul class="post_details simple"> ';
				echo '<li class="category"><a href="?page=category&amp;cat=' . $activePosts [$i]->section . '" ';
				echo 'title="' . $activePosts [$i]->section . '">' . $activePosts [$i]->section . '</a></li> ';
				echo '<li class="date">' . date ( 'Y-m-d', strtotime ( $activePosts [$i]->created_at ) ) . '</li></ul></div></li> ';
			}
							?>
					</ul>
				</div>
			</div>
			<div class="column column_1_3">
				<h4 class="box_header">18+</h4>
				<div class="horizontal_carousel_container big page_margin_top">
					<ul
						class="blog horizontal_carousel visible-1 autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
						<?php
						$no = 0;
						for($i = 0; $i < count($activePosts); $i ++) {
							if($no == 10){
								break;
							}
							if( mb_strtolower($activePosts [$i]->section) == mb_strtolower('18+')){
						echo '<li class="post"><a href="?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '" ';
						echo 'title="' . $activePosts [$i]->title . '"><img class="erotic-foggy" onmouseover="disableFoggy(this);" onmouseout="enableFoggy(this);"';
						echo 'src="' . $activePosts [$i]->path . '" style="height: 242px; width: 330px; object-fit: cover;" alt="img"> </a> '; //330 x 242
						echo '<h5 class="with_number"><a href="?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '" ';
						echo 'title="' . $activePosts [$i]->title . '">' . $activePosts [$i]->title . '</a> ';
						//echo '<a class="comments_number" href="?page=post_gallery#comments_list" title="2 comments">2<span	class="arrow_comments"></span></a> ';
						echo '</h5><ul class="post_details simple"> ';
						echo '<li class="category"><a href="?page=category&amp;cat=' . $activePosts [$i]->section . '" ';
						echo 'title="' . $activePosts [$i]->section . '">' . $activePosts [$i]->section . '</a></li>';
						echo '<li class="date">' . date ( 'Y-m-d', strtotime ( $activePosts [$i]->created_at ) ) . '</li></ul></li>';
						$no++;
							}
						}
							?>
					</ul>
				</div>
			</div>
		</div>
		<div class="row page_margin_top_section">
			<div class="column column_3_4">
				<ul class="footer_menu">
					<h4><li class="menu"><a href="?page=home" title="Дома"> Дома </a></li></h5>
		<h5><li class="menu"><a href="?page=category&amp;cat=Македонија" title="Македонија"> Македонија </a></li></h5>
		<h5><li class="menu"><a href="?page=category&amp;cat=Економија" title="Економија"> Економија </a></li></h5>
		<h5><li class="menu"><a href="?page=category&amp;cat=Свет" title="Свет"> Свет </a></li></h5>
		<h5><li class="menu"><a href="?page=category&amp;cat=Хроника" title="Хроника"> Хроника </a></li></h5>
		<h5><li class="menu"><a href="?page=category&amp;cat=Спорт" title="Спорт"> Спорт </a></li></h5>
		<h5><li class="menu"><a href="?page=category&amp;cat=Забава" title="Забава"> Забава </a></li></h5>
		<h5><li class="menu"><a href="?page=category&amp;cat=Култура" title="Култура"> Култура </a></li></h5>
		<h5><li class="menu"><a href="?page=category&amp;cat=18+" title="18+"> 18+ </a></li></h5>
				</ul>
			</div>
			<div class="column column_1_4">
				<h5><a class="scroll_top" href="#top" title="Scroll to top">Назад</a></h5>
			</div>
		</div>
		<div class="row copyright_row">
			<div class="column column_2_3">© Copyright MKadvertising</div>
			<?php
			// <div class="column column_1_3">
			// 	<ul class="footer_menu">
			// 		<li>
			// 			<h6>
			// 				<a href="?page=about" title="About">About</a>
			// 			</h6>
			// 		</li>
			// 		<li>
			// 			<h6>
			// 				<a href="?page=authors" title="Authors">Authors</a>
			// 			</h6>
			// 		</li>
			// 		<li>
			// 			<h6>
			// 				<a href="?page=contact" title="Contact Us">Contact Us</a>
			// 			</h6>
			// 		</li>
			// 	</ul>
			// </div>
			?>
		</div>
	</div>
</div>
</div>
<div class="background_overlay"></div>

<!--js-->
<script src="/js/app.js"></script>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery.ba-bbq.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.11.1.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript"
	src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src="js/jquery.transit.min.js"></script>
<script type="text/javascript" src="js/jquery.sliderControl.js"></script>
<script type="text/javascript" src="js/jquery.timeago.js"></script>
<script type="text/javascript" src="js/jquery.hint.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.qtip.min.js"></script>
<script type="text/javascript" src="js/jquery.blockUI.js"></script>
<script type="text/javascript"
	src="//maps.google.com/maps/api/js?key=AIzaSyAkz5u_makSifl6b-bmjiMVyAGcUwRRy60"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/odometer.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/jquery.foggy.min.js"></script>
<script type="text/javascript" src="js/jquery.twbsPagination.min.js"></script>

<script>
var over = false;
var blurDensity = 7;
$('.erotic-foggy').foggy({
   blurRadius: blurDensity,          // In pixels.
   opacity: 1,           // Falls back to a filter for IE.
   cssFilterSupport: true  // Use "-webkit-filter" where available.
 }); 
function disableFoggy(elem){
	over = true;
	var counter = 0;
	 for (var i = 0; i < blurDensity; i++){
		 var milliseconds = i * 100;
		setTimeout(function(){
			if(!over){
				return;
			}
			$(elem).foggy({
				blurRadius: (blurDensity - counter),          // In pixels.
				opacity: 1,           // Falls back to a filter for IE.
				cssFilterSupport: true  // Use "-webkit-filter" where available.
 			});
			counter++;
			if(counter == blurDensity){
				$(elem).foggy(false);
			}
		}, milliseconds);
	 }
 }
 
 function enableFoggy(elem){
	over = false;
	var counter = 1;
	for (var i = 0; i < blurDensity; i++){
		var milliseconds = i * 100;
	   setTimeout(function(){
		if(over){
			return;
		}
		   $(elem).foggy({
			   blurRadius: counter,          // In pixels.
			   opacity: 1,           // Falls back to a filter for IE.
			   cssFilterSupport: true  // Use "-webkit-filter" where available.
			});
		   counter++;
	   }, milliseconds);
	}
 }

function shareFB(){
	FB.ui({
  		method: 'share',
  		href: window.location.href
	}, function(response){});
}

FB.Event.subscribe('xfbml.render', function(){
	$(".fb-comments").children().css('width', $('#post_img').width());
	$(".fb-comments").children().children().css('width', $('#post_img').width());
});
				</script>
<br>
<br>
<br>
</body>
</html>