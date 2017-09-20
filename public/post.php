<div class="page">
	<div class="page_layout page_margin_top clearfix">
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
			<?php
				include_once('nav.php');
				?>
		</div>
		<div class="row page_margin_top">
			<div class="column column_1_1">
				<div class="horizontal_carousel_container small">
					<ul
						class="blog horizontal_carousel autoplay-1 scroll-1 visible-3 navigation-1 easing-easeInOutQuint duration-750">
							<?php
							for($i = 0; $i < 8; $i ++) {
								echo '<li class="post"> ';
								echo '<a href="?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '" title="' . $activePosts [$i]->title . '"> ';
								echo '<img style="height: 150px; object-fit: cover;" src="' . $activePosts [$i]->path . '" alt="img"> ';
								echo '</a> ';
								echo '<h5><a href="?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '" title="' . $activePosts [$i]->title . '">' . $activePosts [$i]->title . '</a></h5> ';
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
		<!-- <hr class="divider page_margin_top"> -->
	</div>
</div>