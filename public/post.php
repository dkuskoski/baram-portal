<div class="page">
	<div class="page_layout page_margin_top clearfix">
		<div class="row page_margin_top">
			<div class="column column_1_1">
				<div class="horizontal_carousel_container small">
					<ul
						class="blog horizontal_carousel autoplay-1 scroll-1 visible-3 navigation-1 easing-easeInOutQuint duration-750">
							<?php
							for($i = 0; $i < 8; $i ++) {
								echo '<li class="post"> ';
								echo '<a href="?page=post" title="' . $activePosts [$i]->title . '"> '; // TODO
								echo '<img style="height: 150px; object-fit: cover;" src="' . $activePosts [$i]->path . '" alt="img"> ';
								echo '</a> ';
								echo '<h5><a href="?page=post" title="' . $activePosts [$i]->title . '">' . $activePosts [$i]->title . '</a></h5> '; // TODO
								echo '<ul class="post_details simple"> ';
								echo '<li class="category"><a href="?page=category&amp;cat=' . $activePosts [$i]->section . '" title="' . $activePosts [$i]->section . '">' . $activePosts [$i]->section . '</a></li> ';
								echo '<li class="date"> ';
								echo date ( 'Y-m-d', strtotime ( $activePosts [$i]->created_at ) );
								echo '</li> ';
								echo '</ul> ';
								echo '</li> ';
							}
							?>
					</ul>
				</div>
			</div>
		</div>
		<hr class="divider page_margin_top">
		<div class="row page_margin_top">
			<div class="column column_2_3">
				<div class="row">
					<div class="post single">
						<h1 class="post_title"><?php echo $post->title;?>
						</h1>
						<ul class="post_details clearfix">
							<li class="detail category">Во <a
								href="?page=category&amp;cat=<?php echo $post->section;?>" title="<?php echo $post->section;?>"><?php echo $post->section;?></a></li>
							<li class="detail date"><?php echo date('Y-m-d', strtotime($post->created_at));?></li>
							<li class="detail author">Од <a href="?page=home"
								title="Baram.be">Baram.be</a></li>
							<li class="detail views"><?php echo $post->views;?></li>
							<!-- <li class="detail comments"><a href="#comments_list"
								class="scroll_to_comments" title="6 Comments">6 Comments</a></li> -->
						</ul>
						<a href="javascript:void(0);"
							class="post_image page_margin_top prettyPhoto"
							title="<?php echo $post->title;?>">
							<img src='<?php echo $post->path;?>' alt='img'>
						</a>
						<div class="sentence">
							<span class="text"><?php echo $post->title?></span>
						</div>
						<div class="post_content page_margin_top_section clearfix">
							<div class="content_box">
								<?php echo $post->content;?>
					<a href="javascript:shareFB();"><img style="width: 150px; margin-top: 20px;" class="social_icon" src="/img/share-on-facebook.png"/></a>
					</div>
						</div>
					</div>
				</div>
			</div>
			
			<script>
				function shareFB(){
FB.ui({
  method: 'share',
  href: window.location.href
}, function(response){});
				}
				</script>
			<?php
			// 	<div class="row page_margin_top">
			// 		<div class="share_box clearfix">
			// 			<label>Share:</label>
			// 			<ul class="social_icons clearfix">
			// 				<li><a target="_blank" title=""
			// 					href="http://facebook.com/QuanticaLabs"
			// 					class="social_icon facebook"> &nbsp; </a></li>
			// 				<li><a target="_blank" title=""
			// 					href="https://twitter.com/QuanticaLabs"
			// 					class="social_icon twitter"> &nbsp; </a></li>
			// 				<li><a title="" href="mailto:contact@pressroom.com"
			// 					class="social_icon mail"> &nbsp; </a></li>
			// 				<li><a title="" href="#" class="social_icon skype"> &nbsp; </a></li>
			// 				<li><a title=""
			// 					href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs"
			// 					class="social_icon envato"> &nbsp; </a></li>
			// 				<li><a title="" href="#" class="social_icon instagram"> &nbsp; </a>
			// 				</li>
			// 				<li><a title="" href="#" class="social_icon pinterest"> &nbsp; </a>
			// 				</li>
			// 			</ul>
			// 		</div>
			// 	</div>
			// 	<div class="row page_margin_top">
			// 		<ul class="taxonomies tags left clearfix">
			// 			<li><a href="#" title="People">PEOPLE</a></li>
			// 			<li><a href="#" title="Sport">SPORT</a></li>
			// 		</ul>
			// 		<ul class="taxonomies categories right clearfix">
			// 			<li><a href="?page=category&amp;cat=health" title="HEALTH">HEALTH</a>
			// 			</li>
			// 		</ul>
			// 	</div>
			// 	<div class="row page_margin_top_section">
			// 		<h4 class="box_header">Posts Carousel</h4>
			// 		<div class="horizontal_carousel_container page_margin_top">
			// 			<ul
			// 				class="blog horizontal_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
			// 				<li class="post"><a href="?page=post"
			// 					title="New Painkiller Rekindles Addiction Concerns"> <img
			// 						src='images/samples/330x242/image_08.jpg' alt='img'>
			// 				</a>
			// 					<h5>
			// 						<a href="?page=post"
			// 							title="New Painkiller Rekindles Addiction Concerns">New
			// 							Painkiller Rekindles Addiction Concerns</a>
			// 					</h5>
			// 					<ul class="post_details simple">
			// 						<li class="category"><a href="?page=category&amp;cat=health"
			// 							title="HEALTH">HEALTH</a></li>
			// 						<li class="date">10:11 PM, Feb 02</li>
			// 					</ul></li>
			// 				<li class="post"><a href="?page=post_small_image"
			// 					title="High Altitudes May Aid Weight Control"> <img
			// 						src='images/samples/330x242/image_01.jpg' alt='img'>
			// 				</a>
			// 					<h5>
			// 						<a href="?page=post_small_image"
			// 							title="High Altitudes May Aid Weight Control">High Altitudes
			// 							May Aid Weight Control</a>
			// 					</h5>
			// 					<ul class="post_details simple">
			// 						<li class="category"><a href="?page=category&amp;cat=health"
			// 							title="HEALTH">HEALTH</a></li>
			// 						<li class="date">10:11 PM, Feb 02</li>
			// 					</ul></li>
			// 				<li class="post"><a href="?page=post_gallery"
			// 					title="Built on Brotherhood, Club Lives Up to Name"> <span
			// 						class="icon gallery">
			// 							<!--<span class="info">999</span>-->
			// 					</span> <img src='images/samples/330x242/image_03.jpg' alt='img'>
			// 				</a>
			// 					<h5>
			// 						<a href="?page=post_gallery"
			// 							title="Built on Brotherhood, Club Lives Up to Name">Built on
			// 							Brotherhood, Club Lives Up to Name</a>
			// 					</h5>
			// 					<ul class="post_details simple">
			// 						<li class="category"><a href="?page=category&amp;cat=health"
			// 							title="HEALTH">HEALTH</a></li>
			// 						<li class="date">10:11 PM, Feb 02</li>
			// 					</ul></li>
			// 				<li class="post first"><a href="?page=post"
			// 					title="Built on Brotherhood, Club Lives Up to Name"> <img
			// 						src='images/samples/330x242/image_09.jpg' alt='img'>
			// 				</a>
			// 					<h5>
			// 						<a href="?page=post"
			// 							title="Built on Brotherhood, Club Lives Up to Name">Built on
			// 							Brotherhood, Club Lives Up to Name</a>
			// 					</h5>
			// 					<ul class="post_details simple">
			// 						<li class="category"><a href="?page=category&amp;cat=health"
			// 							title="HEALTH">HEALTH</a></li>
			// 						<li class="date">10:11 PM, Feb 02</li>
			// 					</ul></li>
			// 			</ul>
			// 		</div>
			// 	</div>
			// 	<div class="row page_margin_top_section">
			// 		<h4 class="box_header">Leave a Comment</h4>
			// 		<p class="padding_top_30">Your email address will not be published.
			// 			Required fields are marked with *</p>
			// 		<form class="comment_form margin_top_15" id="comment_form"
			// 			method="post" action="#">
			// 			<fieldset class="column column_1_3">
			// 				<input class="text_input" name="name" type="text"
			// 					value="Your Name *" placeholder="Your Name *">
			// 			</fieldset>
			// 			<fieldset class="column column_1_3">
			// 				<input class="text_input" name="email" type="text"
			// 					value="Your Email *" placeholder="Your Email *">
			// 			</fieldset>
			// 			<fieldset class="column column_1_3">
			// 				<input class="text_input" name="website" type="text"
			// 					value="Website" placeholder="Website">
			// 			</fieldset>
			// 			<fieldset>
			// 				<textarea name="message" placeholder="Comment *">Comment *</textarea>
			// 			</fieldset>
			// 			<fieldset>
			// 				<input type="submit" value="POST COMMENT" class="more active"> <a
			// 					href="#cancel" id="cancel_comment" title="Cancel reply">Cancel
			// 					reply</a>
			// 			</fieldset>
			// 		</form>
			// 	</div>
			// 	<div class="row page_margin_top_section">
			// 		<h4 class="box_header">6 Comments</h4>
			// 		<ul id="comments_list">
			// 			<li class="comment clearfix" id="comment-1">
			// 				<div class="comment_author_avatar">&nbsp;</div>
			// 				<div class="comment_details">
			// 					<div class="posted_by clearfix">
			// 						<h5>
			// 							<a class="author" href="#" title="Kevin Nomad">Kevin Nomad</a>
			// 						</h5>
			// 						<abbr title="22 July 2014" class="timeago">22 July 2014</abbr>
			// 					</div>
			// 					<p>Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun
			// 						pulvinar at interdum eget, suscipit eget felis. Pellentesque
			// 						est faucibus tincidunt risus id interdum primis orci cubilla
			// 						gravida id interdum eget.</p>
			// 					<a class="read_more" href="#comment_form" title="Reply"> <span
			// 						class="arrow"></span><span>REPLY</span>
			// 					</a>
			// 				</div>
			// 			</li>
			// 			<li class="comment clearfix" id="comment-2">
			// 				<div class="comment_author_avatar">&nbsp;</div>
			// 				<div class="comment_details">
			// 					<div class="posted_by clearfix">
			// 						<h5>
			// 							<a class="author" href="#" title="Kevin Nomad">Kevin Nomad</a>
			// 						</h5>
			// 						<abbr title="22 July 2014" class="timeago">22 July 2014</abbr>
			// 					</div>
			// 					<p>Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun
			// 						pulvinar at interdum eget, suscipit eget felis. Pellentesque
			// 						est faucibus tincidunt risus id interdum primis orci cubilla
			// 						gravida id interdum eget.</p>
			// 					<a class="read_more" href="#comment_form" title="Reply"> <span
			// 						class="arrow"></span><span>REPLY</span>
			// 					</a>
			// 				</div>
			// 				<ul class="children">
			// 					<li class="comment clearfix"><a href="#comment-2"
			// 						class="parent_arrow"></a>
			// 						<div class="comment_author_avatar">&nbsp;</div>
			// 						<div class="comment_details">
			// 							<div class="posted_by clearfix">
			// 								<h5>
			// 									<a class="author" href="#" title="Keith Douglas">Keith
			// 										Douglas</a><a href="#comment-2" class="in_reply">@Kevin
			// 										Nomad</a>
			// 								</h5>
			// 								<abbr title="22 July 2014" class="timeago">22 July 2014</abbr>
			// 							</div>
			// 							<p>Donec ipsum diam, pretium mollis dapibus risus. Nullam
			// 								tindun pulvinar at interdum eget, suscipit eget felis.
			// 								Pellentesque est faucibus tincidunt risus id interdum primis
			// 								orci cubilla gravida id interdum eget.</p>
			// 							<a class="read_more" href="#comment_form" title="Reply"> <span
			// 								class="arrow"></span><span>REPLY</span>
			// 							</a>
			// 						</div></li>
			// 					<li class="comment clearfix"><a href="#comment-2"
			// 						class="parent_arrow"></a>
			// 						<div class="comment_author_avatar">&nbsp;</div>
			// 						<div class="comment_details">
			// 							<div class="posted_by clearfix">
			// 								<h5>
			// 									<a class="author" href="#" title="Keith Douglas">Keith
			// 										Douglas</a><a href="#comment-2" class="in_reply">@Kevin
			// 										Nomad</a>
			// 								</h5>
			// 								<abbr title="22 July 2014" class="timeago">22 July 2014</abbr>
			// 							</div>
			// 							<p>Donec ipsum diam, pretium mollis dapibus risus. Nullam
			// 								tindun pulvinar at interdum eget, suscipit eget felis.
			// 								Pellentesque est faucibus tincidunt risus id interdum primis
			// 								orci cubilla gravida id interdum eget.</p>
			// 							<a class="read_more" href="#comment_form" title="Reply"> <span
			// 								class="arrow"></span><span>REPLY</span>
			// 							</a>
			// 						</div></li>
			// 				</ul>
			// 			</li>
			// 		</ul>
			// 		<ul class="pagination page_margin_top_section">
			// 			<li class="left"><a href="#" title="">&nbsp;</a></li>
			// 			<li class="selected"><a href="#" title=""> 1 </a></li>
			// 			<li><a href="#" title=""> 2 </a></li>
			// 			<li><a href="#" title=""> 3 </a></li>
			// 			<li class="right"><a href="#" title="">&nbsp;</a></li>
			// 		</ul>
			// 	</div>
			// </div>
			
				// 
				// 	<ul class="tabs_navigation clearfix">
				// 		<li><a href="#sidebar-most-read" title="Most Read"> Most Read </a>
				// 			<span></span></li>
				// 		<li><a href="#sidebar-most-commented" title="Commented"> Commented
				// 		</a> <span></span></li>
				// 	</ul>
				// 	<div id="sidebar-most-read">
				// 		<ul class="blog rating page_margin_top clearfix">
				// 			<li class="post"><a href="?page=post"
				// 				title="Nuclear Fusion Closer to Becoming a Reality"> <img
				// 					src='images/samples/510x187/image_12.jpg' alt='img'>
				// 			</a>
				// 				<div class="post_content">
				// 					<span class="number animated_element" data-value="6 257"></span>
				// 					<h5>
				// 						<a href="?page=post"
				// 							title="New Painkiller Rekindles Addiction Concerns">New
				// 							Painkiller Rekindles Addiction Concerns</a>
				// 					</h5>
				// 					<ul class="post_details simple">
				// 						<li class="category"><a href="?page=category&amp;cat=health"
				// 							title="HEALTH">HEALTH</a></li>
				// 					</ul>
				// 				</div></li>
				// 			<li class="post">
				// 				<div class="post_content">
				// 					<span class="number animated_element" data-value="5 062"></span>
				// 					<h5>
				// 						<a href="?page=post_soundcloud"
				// 							title="New Painkiller Rekindles Addiction Concerns">New
				// 							Painkiller Rekindles Addiction Concerns</a>
				// 					</h5>
				// 					<ul class="post_details simple">
				// 						<li class="category"><a href="?page=category&amp;cat=world"
				// 							title="WORLD">WORLD</a></li>
				// 					</ul>
				// 				</div>
				// 			</li>
				// 			<li class="post">
				// 				<div class="post_content">
				// 					<span class="number animated_element" data-value="4 778"></span>
				// 					<h5>
				// 						<a href="?page=post_quote"
				// 							title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking
				// 							the Right Chemistry, Drug Makers Hunt for Mergers</a>
				// 					</h5>
				// 					<ul class="post_details simple">
				// 						<li class="category"><a href="?page=category&amp;cat=sports"
				// 							title="SPORTS">SPORTS</a></li>
				// 					</ul>
				// 				</div>
				// 			</li>
				// 			<li class="post">
				// 				<div class="post_content">
				// 					<span class="number animated_element" data-value="754"></span>
				// 					<h5>
				// 						<a href="?page=post_small_image"
				// 							title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study
				// 							Linking Illnes and Salt Leaves Researchers Doubtful</a>
				// 					</h5>
				// 					<ul class="post_details simple">
				// 						<li class="category"><a href="?page=category&amp;cat=science"
				// 							title="SCIENCE">SCIENCE</a></li>
				// 					</ul>
				// 				</div>
				// 			</li>
				// 			<li class="post">
				// 				<div class="post_content">
				// 					<span class="number animated_element" data-value="52"></span>
				// 					<h5>
				// 						<a href="?page=post"
				// 							title="Syrian Civilians Trapped for Months Continue to be Evacuated">Syrian
				// 							Civilians Trapped for Months Continue to be Evacuated</a>
				// 					</h5>
				// 					<ul class="post_details simple">
				// 						<li class="category"><a href="?page=category&amp;cat=science"
				// 							title="SCIENCE">SCIENCE</a></li>
				// 					</ul>
				// 				</div>
				// 			</li>
				// 		</ul>
				// 		<a class="more page_margin_top" href="#">SHOW MORE</a>
				// 	</div>
				// 	<div id="sidebar-most-commented">
				// 		<ul class="blog rating page_margin_top clearfix">
				// 			<li class="post"><a href="?page=post"
				// 				title="Nuclear Fusion Closer to Becoming a Reality"> <img
				// 					src='images/samples/510x187/image_02.jpg' alt='img'>
				// 			</a>
				// 				<div class="post_content">
				// 					<span class="number animated_element" data-value="70"></span>
				// 					<h5>
				// 						<a href="?page=post"
				// 							title="New Painkiller Rekindles Addiction Concerns">New
				// 							Painkiller Rekindles Addiction Concerns</a>
				// 					</h5>
				// 					<ul class="post_details simple">
				// 						<li class="category"><a href="?page=category&amp;cat=health"
				// 							title="HEALTH">HEALTH</a></li>
				// 					</ul>
				// 				</div></li>
				// 			<li class="post">
				// 				<div class="post_content">
				// 					<span class="number animated_element" data-value="62"></span>
				// 					<h5>
				// 						<a href="?page=post"
				// 							title="New Painkiller Rekindles Addiction Concerns">New
				// 							Painkiller Rekindles Addiction Concerns</a>
				// 					</h5>
				// 					<ul class="post_details simple">
				// 						<li class="category"><a href="?page=category&amp;cat=world"
				// 							title="WORLD">WORLD</a></li>
				// 					</ul>
				// 				</div>
				// 			</li>
				// 			<li class="post">
				// 				<div class="post_content">
				// 					<span class="number animated_element" data-value="30"></span>
				// 					<h5>
				// 						<a href="?page=post"
				// 							title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking
				// 							the Right Chemistry, Drug Makers Hunt for Mergers</a>
				// 					</h5>
				// 					<ul class="post_details simple">
				// 						<li class="category"><a href="?page=category&amp;cat=sports"
				// 							title="SPORTS">SPORTS</a></li>
				// 					</ul>
				// 				</div>
				// 			</li>
				// 			<li class="post">
				// 				<div class="post_content">
				// 					<span class="number animated_element" data-value="25"></span>
				// 					<h5>
				// 						<a href="?page=post_quote_2"
				// 							title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study
				// 							Linking Illnes and Salt Leaves Researchers Doubtful</a>
				// 					</h5>
				// 					<ul class="post_details simple">
				// 						<li class="category"><a href="?page=category&amp;cat=science"
				// 							title="SCIENCE">SCIENCE</a></li>
				// 					</ul>
				// 				</div>
				// 			</li>
				// 			<li class="post">
				// 				<div class="post_content">
				// 					<span class="number animated_element" data-value="4"></span>
				// 					<h5>
				// 						<a href="?page=post"
				// 							title="Syrian Civilians Trapped for Months Continue to be Evacuated">Syrian
				// 							Civilians Trapped for Months Continue to be Evacuated</a>
				// 					</h5>
				// 					<ul class="post_details simple">
				// 						<li class="category"><a href="?page=category&amp;cat=science"
				// 							title="SCIENCE">SCIENCE</a></li>
				// 					</ul>
				// 				</div>
				// 			</li>
				// 		</ul>
				// 		<a class="more page_margin_top" href="#">SHOW MORE</a>
				// 	</div>
				// </div>
				// <h4 class="box_header page_margin_top_section">Latest Posts</h4>
				// <div class="vertical_carousel_container clearfix">
				// 	<ul
				// 		class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
				// 		<li class="post"><a href="?page=post_gallery"
				// 			title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
				// 				<span class="icon small gallery"></span> <img
				// 				src='images/samples/100x100/image_06.jpg' alt='img'>
				// 		</a>
				// 			<div class="post_content">
				// 				<h5>
				// 					<a href="?page=post_gallery"
				// 						title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study
				// 						Linking Illnes and Salt Leaves Researchers Doubtful</a>
				// 				</h5>
				// 				<ul class="post_details simple">
				// 					<li class="category"><a href="?page=category&amp;cat=health"
				// 						title="HEALTH">HEALTH</a></li>
				// 					<li class="date">10:11 PM, Feb 02</li>
				// 				</ul>
				// 			</div></li>
				// 		<li class="post"><a href="?page=post"
				// 			title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
				// 				<img src='images/samples/100x100/image_12.jpg' alt='img'>
				// 		</a>
				// 			<div class="post_content">
				// 				<h5>
				// 					<a href="?page=post"
				// 						title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian
				// 						Civilians Trapped For Months Continue To Be Evacuated</a>
				// 				</h5>
				// 				<ul class="post_details simple">
				// 					<li class="category"><a href="?page=category&amp;cat=world"
				// 						title="WORLD">WORLD</a></li>
				// 					<li class="date">10:11 PM, Feb 02</li>
				// 				</ul>
				// 			</div></li>
				// 		<li class="post"><a href="?page=post"
				// 			title="Built on Brotherhood, Club Lives Up to Name"> <img
				// 				src='images/samples/100x100/image_02.jpg' alt='img'>
				// 		</a>
				// 			<div class="post_content">
				// 				<h5>
				// 					<a href="?page=post"
				// 						title="Built on Brotherhood, Club Lives Up to Name">Built on
				// 						Brotherhood, Club Lives Up to Name</a>
				// 				</h5>
				// 				<ul class="post_details simple">
				// 					<li class="category"><a href="?page=category&amp;cat=sports"
				// 						title="SPORTS">SPORTS</a></li>
				// 					<li class="date">10:11 PM, Feb 02</li>
				// 				</ul>
				// 			</div></li>
				// 		<li class="post"><a href="?page=post_soundcloud"
				// 			title="Nuclear Fusion Closer to Becoming a Reality"> <img
				// 				src='images/samples/100x100/image_13.jpg' alt='img'>
				// 		</a>
				// 			<div class="post_content">
				// 				<h5>
				// 					<a href="?page=post_soundcloud"
				// 						title="Nuclear Fusion Closer to Becoming a Reality">Nuclear
				// 						Fusion Closer to Becoming a Reality</a>
				// 				</h5>
				// 				<ul class="post_details simple">
				// 					<li class="category"><a href="?page=category&amp;cat=science"
				// 						title="SCIENCE">SCIENCE</a></li>
				// 					<li class="date">10:11 PM, Feb 02</li>
				// 				</ul>
				// 			</div></li>
				// 	</ul>
				// </div>
				// <h4 class="box_header page_margin_top_section">Top Authors</h4>
				// <ul class="authors rating clearfix">
				// 	<li class="author"><a class="thumb" href="?page=author"
				// 		title="Debora Hilton"> <img
				// 			src='images/samples/Team_100x100/image_01.jpg' alt='img'> <span
				// 			class="number animated_element" data-value="34"></span>
				// 	</a>
				// 		<div class="details">
				// 			<h5>
				// 				<a href="?page=author" title="Debora Hilton">Debora Hilton</a>
				// 			</h5>
				// 			<h6>EDITOR</h6>
				// 		</div></li>
				// 	<li class="author"><a class="thumb" href="?page=author"
				// 		title="Anna Shubina"> <img
				// 			src='images/samples/Team_100x100/image_02.jpg' alt='img'> <span
				// 			class="number animated_element" data-value="25"></span>
				// 	</a>
				// 		<div class="details">
				// 			<h5>
				// 				<a href="?page=author" title="Anna Shubina">Anna Shubina</a>
				// 			</h5>
				// 			<h6>EDITOR</h6>
				// 		</div></li>
				// 	<li class="author"><a class="thumb" href="?page=author"
				// 		title="Liam Holden"> <img
				// 			src='images/samples/Team_100x100/image_03.jpg' alt='img'> <span
				// 			class="number animated_element" data-value="9"></span>
				// 	</a>
				// 		<div class="details">
				// 			<h5>
				// 				<a href="?page=author" title="Liam Holden">Liam Holden</a>
				// 			</h5>
				// 			<h6>PUBLISHER</h6>
				// 		</div></li>
				// 	<li class="author"><a class="thumb" href="?page=author"
				// 		title="Heather Dale"> <img
				// 			src='images/samples/Team_100x100/image_04.jpg' alt='img'> <span
				// 			class="number animated_element" data-value="2"></span>
				// 	</a>
				// 		<div class="details">
				// 			<h5>
				// 				<a href="?page=author" title="Heather Dale">Heather Dale</a>
				// 			</h5>
				// 			<h6>ILLUSTRATOR</h6>
				// 		</div></li>
				// </ul>
				// <h4 class="box_header page_margin_top_section">Most Commented</h4>
				// <div class="vertical_carousel_container clearfix">
				// 	<ul
				// 		class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
				// 		<li class="post"><a href="?page=post_gallery"
				// 			title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
				// 				<span class="icon small gallery"></span> <img
				// 				src='images/samples/100x100/image_06.jpg' alt='img'>
				// 		</a>
				// 			<div class="post_content">
				// 				<h5>
				// 					<a href="?page=post_gallery"
				// 						title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study
				// 						Linking Illnes and Salt Leaves Researchers Doubtful</a>
				// 				</h5>
				// 				<ul class="post_details simple">
				// 					<li class="category"><a href="?page=category&amp;cat=health"
				// 						title="HEALTH">HEALTH</a></li>
				// 					<li class="date">10:11 PM, Feb 02</li>
				// 				</ul>
				// 			</div></li>
				// 		<li class="post"><a href="?page=post_quote"
				// 			title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
				// 				<img src='images/samples/100x100/image_12.jpg' alt='img'>
				// 		</a>
				// 			<div class="post_content">
				// 				<h5>
				// 					<a href="?page=post_quote"
				// 						title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian
				// 						Civilians Trapped For Months Continue To Be Evacuated</a>
				// 				</h5>
				// 				<ul class="post_details simple">
				// 					<li class="category"><a href="?page=category&amp;cat=world"
				// 						title="WORLD">WORLD</a></li>
				// 					<li class="date">10:11 PM, Feb 02</li>
				// 				</ul>
				// 			</div></li>
				// 		<li class="post"><a href="?page=post_small_image"
				// 			title="Built on Brotherhood, Club Lives Up to Name"> <img
				// 				src='images/samples/100x100/image_02.jpg' alt='img'>
				// 		</a>
				// 			<div class="post_content">
				// 				<h5>
				// 					<a href="?page=post_small_image"
				// 						title="Built on Brotherhood, Club Lives Up to Name">Built on
				// 						Brotherhood, Club Lives Up to Name</a>
				// 				</h5>
				// 				<ul class="post_details simple">
				// 					<li class="category"><a href="?page=category&amp;cat=sports"
				// 						title="SPORTS">SPORTS</a></li>
				// 					<li class="date">10:11 PM, Feb 02</li>
				// 				</ul>
				// 			</div></li>
				// 		<li class="post"><a href="?page=post"
				// 			title="Nuclear Fusion Closer to Becoming a Reality"> <img
				// 				src='images/samples/100x100/image_13.jpg' alt='img'>
				// 		</a>
				// 			<div class="post_content">
				// 				<h5>
				// 					<a href="?page=post"
				// 						title="Nuclear Fusion Closer to Becoming a Reality">Nuclear
				// 						Fusion Closer to Becoming a Reality</a>
				// 				</h5>
				// 				<ul class="post_details simple">
				// 					<li class="category"><a href="?page=category&amp;cat=science"
				// 						title="SCIENCE">SCIENCE</a></li>
				// 					<li class="date">10:11 PM, Feb 02</li>
				// 				</ul>
				// 			</div></li>
				// 	</ul>
				// </div>
				// <h4 class="box_header page_margin_top_section">Featured Videos</h4>
				// <div class="horizontal_carousel_container big page_margin_top">
				// 	<ul
				// 		class="blog horizontal_carousel visible-1 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
				// 		<li class="post"><a href="?page=post_video"
				// 			title="Struggling Nuremberg Sack Coach Verbeek"> <span
				// 				class="icon video"></span> <img
				// 				src='images/samples/330x242/image_03.jpg' alt='img'>
				// 		</a>
				// 			<h5 class="with_number">
				// 				<a href="?page=post_video"
				// 					title="Struggling Nuremberg Sack Coach Verbeek">Struggling
				// 					Nuremberg Sack Coach Verbeek</a> <a class="comments_number"
				// 					href="?page=post_video#comments_list" title="2 comments">2<span
				// 					class="arrow_comments"></span></a>
				// 			</h5>
				// 			<ul class="post_details simple">
				// 				<li class="category"><a href="?page=category&amp;cat=sports"
				// 					title="SPORTS">SPORTS</a></li>
				// 				<li class="date">10:11 PM, Feb 02</li>
				// 			</ul></li>
				// 		<li class="post"><a href="?page=post_video_2"
				// 			title="Built on Brotherhood, Club Lives Up to Name"> <span
				// 				class="icon video"></span> <img
				// 				src='images/samples/330x242/image_14.jpg' alt='img'>
				// 		</a>
				// 			<h5 class="with_number">
				// 				<a href="?page=post_video_2"
				// 					title="Built on Brotherhood, Club Lives Up to Name">Built on
				// 					Brotherhood, Club Lives Up to Name</a> <a
				// 					class="comments_number" href="?page=post_video_2#comments_list"
				// 					title="2 comments">2<span class="arrow_comments"></span></a>
				// 			</h5>
				// 			<ul class="post_details simple">
				// 				<li class="category"><a href="?page=category&amp;cat=sports"
				// 					title="SPORTS">SPORTS</a></li>
				// 				<li class="date">10:11 PM, Feb 02</li>
				// 			</ul></li>
				// 		<li class="post"><a href="?page=post_video"
				// 			title="New Painkiller Rekindles Addiction Concerns"> <span
				// 				class="icon video"></span> <img
				// 				src='images/samples/330x242/image_04.jpg' alt='img'>
				// 		</a>
				// 			<h5 class="with_number">
				// 				<a href="?page=post_video"
				// 					title="New Painkiller Rekindles Addiction Concerns">New
				// 					Painkiller Rekindles Addiction Concerns</a> <a
				// 					class="comments_number" href="?page=post_video#comments_list"
				// 					title="2 comments">2<span class="arrow_comments"></span></a>
				// 			</h5>
				// 			<ul class="post_details simple">
				// 				<li class="category"><a href="?page=category&amp;cat=sports"
				// 					title="SPORTS">SPORTS</a></li>
				// 				<li class="date">10:11 PM, Feb 02</li>
				// 			</ul></li>
				// 	</ul>
				// </div>
				// 
				// <h4 class="box_header page_margin_top_section">Categories</h4>
				// <ul class="taxonomies columns clearfix page_margin_top">
				// 	<li><a href="?page=category&amp;cat=world" title="WORLD">WORLD</a>
				// 	</li>
				// 	<li><a href="?page=category&amp;cat=health" title="HEALTH">HEALTH</a>
				// 	</li>
				// 	<li><a href="?page=category&amp;cat=sports" title="SPORTS">SPORTS</a>
				// 	</li>
				// 	<li><a href="?page=category&amp;cat=science" title="SCIENCE">SCIENCE</a>
				// 	</li>
				// 	<li><a href="?page=category&amp;cat=lifestyle" title="LIFESTYLE">LIFESTYLE</a>
				// 	</li>
				// </ul>
				include_once('nav.php');
				?>
				<!--<div class="column column_1_3">
				<h4 class="box_header page_margin_top_section">Tags</h4>
				<ul class="taxonomies clearfix page_margin_top">
					<li><a href="#" title="Business">BUSINESS</a></li>
					<li><a href="#" title="Education">EDUCATION</a></li>
					<li><a href="#" title="Family">FAMILY</a></li>
					<li><a href="#" title="Film">FILM</a></li>
					<li><a href="#" title="Food">FOOD</a></li>
					<li><a href="#" title="Garden">GARDEN</a></li>
					<li><a href="#" title="People">PEOPLE</a></li>
					<li><a href="#" title="Sport">SPORT</a></li>
				</ul>
			</div>-->
		</div>
	</div>
</div>