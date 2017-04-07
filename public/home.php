<div class="row page_margin_top">
	<div class="column column_2_3">
		<ul class="small_slider id-small_slider"
			style="display: inline-block;">
			<?php
			for($i = 0; $i < 3; $i ++) {
				
				echo '<li style="height: 470px; background: #000;" class="slide"><a href="?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '" ';
				echo 'title="' . $activePosts [$i]->title . '"> <img ';
				echo 'src="' . $activePosts [$i]->path . '" alt="img" style="height: 500px; width: 100%; object-fit: cover;"> ';
				echo '</a> ';
				echo '<div class="slider_content_box"> ';
				echo '<ul class="post_details simple"> ';
				echo '<li class="category"><a href="?page=category&amp;cat=' . $activePosts [$i]->section . '" ';
				echo 'title="' . $activePosts [$i]->section . '">' . $activePosts [$i]->section . '</a></li> ';
				echo '<li class="date">' . date ( 'Y-m-d', strtotime ( $activePosts [$i]->created_at ) ) . '</li> ';
				echo '</ul> ';
				echo '<h2> ';
				echo '<a href="?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '"';
				echo 'title="' . $activePosts [$i]->title . '">' . $activePosts [$i]->title . '</a> ';
				echo '</h2> ';
				echo '<p class="clearfix">' . mb_substr ( $activePosts [$i]->content, 0, 150 ) . '...</p> ';
				echo '</div></li> ';
			}
			?>
		</ul>
		<div id="small_slider" class='slider_posts_list_container small'></div>
		<div class="row">
		<?php
		for($i = 3; $i < 5; $i ++) {
			echo '<ul class="blog column column_1_2"> ';
			echo '<li class="post"><a href="?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '" ';
			echo 'title="' . $activePosts [$i]->title . '"> <img style="height: 220px; width: 100%; object-fit: cover;" ';
			echo 'src="' . $activePosts [$i]->path . '" alt="img"> ';
			echo '</a> ';
			echo '<h2 class="with_number"> ';
			echo '<a href="?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '" ';
			echo 'title="' . $activePosts [$i]->title . '">' . $activePosts [$i]->title . '</a> ';
			echo '</h2></li> ';
			echo '</ul> ';
		}
		?>
		</div>
		<div class="row">
			<ul class="blog medium">
			<?php
			for($i = 5; $i < 8; $i ++) {
				echo '<li class="post"><a href="?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '" ';
				echo 'title="' . $activePosts [$i]->title . '"> <img ';
				echo 'src="' . $activePosts [$i]->path . '" alt="img" style="height: 120px; width: 100%; object-fit: cover;"> ';
				echo '</a> ';
				echo '<h5> ';
				echo '<a href="?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '" title="' . $activePosts [$i]->title . '">' . $activePosts [$i]->title . '</a> ';
				echo '</h5> ';
				echo '<ul class="post_details simple"> ';
				echo '<li class="category"><a href="?page=category&amp;cat=' . $activePosts [$i]->section . '" ';
				echo 'title="' . $activePosts [$i]->section . '">' . $activePosts [$i]->section . '</a></li> ';
				echo '<li class="date">' . date ( 'Y-m-d', strtotime ( $activePosts [$i]->created_at ) ) . '</li> ';
				echo '</ul></li>';
			}
			?>
			</ul>
		</div>
		<div class="row page_margin_top_section">
			<div class="column column_1_2">
				<h4 class="box_header"><?php echo $activePosts [1]->section;?></h4>
				<ul class="blog small_margin clearfix">
					<li class="post"><a
						href="<?php '?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [1]->id . '-' . str_replace ( ' ', '_', $activePosts [1]->title );?>"
						title="<?php echo $activePosts [1]->title;?>"> <img
							src="<?php echo $activePosts [1]->path;?>"
							style="height: 150px; width: 100%; object-fit: cover;" alt='img'>
					</a>
						<div class="post_content">
							<h5>
								<a href="?page=post_soundcloud"
									title="<?php echo $activePosts [1]->title;?>"><?php echo $activePosts [1]->title;?></a>
							</h5>
							<ul class="post_details simple">
								<li class="category"><a href="?page=category&amp;cat=<?php echo $activePosts [1]->section; ?>"
									title="<?php echo $activePosts [1]->section;?>"><?php echo $activePosts [1]->section;?></a></li>
								<li class="date"><?php date ( 'Y-m-d', strtotime ( $activePosts [1]->created_at ) )?></li>
							</ul>
						</div></li>
				</ul>
				<ul class="list">
		<?php
		$counter = 0;
		for($i = 0; $i < count ( $activePosts ); $i ++) {
			if ($counter == 5) {
				break;
			}
			if ($activePosts [$i]->section == $activePosts [1]->section) {
				echo '<li class="bullet style_1"><a href="?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '" ';
				echo 'title="' . $activePosts [$i]->title . '">' . $activePosts [$i]->title . '</a></li> ';
				$counter ++;
			}
		}
		?>
		</ul>
			</div>
			<?php
			$no = 2;
			while ( $activePosts [$no]->section == $activePosts [1]->section ) {
				$no ++;
			}
			?>
			<div class="column column_1_2">
				<h4 class="box_header"><?php echo $activePosts [$no]->section;?></h4>
				<ul class="blog small_margin clearfix">
					<li class="post"><a
						href="<?php '?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [$no]->id . '-' . str_replace ( ' ', '_', $activePosts [$no]->title );?>"
						title="<?php echo $activePosts [$no]->title;?>"> <img
							style="height: 150px; width: 100%; object-fit: cover;"
							src="<?php echo $activePosts [$no]->path;?>" alt='img'>
					</a>
						<div class="post_content">
							<h5>
								<a href="?page=post"
									title="<?php echo $activePosts [$no]->title;?>"><?php echo $activePosts [$no]->title;?></a>
							</h5>
							<ul class="post_details simple">
								<li class="category"><a href="?page=category&amp;cat=<?php echo $activePosts [$no]->section;?>"
									title="<?php echo $activePosts [$no]->section;?>"><?php echo $activePosts [$no]->section;?></a></li>
								<li class="date"><?php date ( 'Y-m-d', strtotime ( $activePosts [$no]->created_at ) )?></li>
							</ul>
						</div></li>
				</ul>
				<ul class="list">
					<?php
					$counter = 0;
					for($i = 0; $i < count ( $activePosts ); $i ++) {
						if ($counter == 5) {
							break;
						}
						if ($activePosts [$i]->section == $activePosts [2]->section) {
							echo '<li class="bullet style_1"><a href="?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '" ';
							echo 'title="' . $activePosts [$i]->title . '">' . $activePosts [$i]->title . '</a></li> ';
							$counter ++;
						}
					}
					?>
				</ul>
			</div>
		</div>
	</div>
	
	<?php require_once ('nav.php'); ?>
	
</div>
<div class="row page_margin_top_section">
	<div class="column column_1_1">
		<!-- <h4 class="box_header">Posts Carousel</h4> -->
		<div class="horizontal_carousel_container page_margin_top">
			<ul
				class="blog horizontal_carousel autoplay-1 visible-4 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
				
				<?php
				for($i = 0; $i < 10; $i ++) { // TODO 10 - 20
					echo '<li class="post"><a href="?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '"
					title="' . $activePosts [$i]->title . '"> <img
						src="' . $activePosts [$i]->path . '" alt="img" style="height: 176px; width: 100%; object-fit: cover;">
				</a>
					<h5>
						<a href="?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '"
							title="' . $activePosts [$i]->title . '">' . $activePosts [$i]->title . '</a>
					</h5>
					<ul class="post_details simple">
						<li class="category"><a href="?page=category&amp;cat=' . $activePosts [$i]->section . '"
							title="' . $activePosts [$i]->section . '">' . $activePosts [$i]->section . '</a></li>
						<li class="date">' . date ( 'Y-m-d', strtotime ( $activePosts [$i]->created_at ) ) . '</li>
					</ul></li>';
				}
				?>
			</ul>
		</div>
	</div>
</div>
<div class="row page_margin_top_section">
	<div class="column column_1_3">
		<h4 class="box_header"><?php echo $activePosts[5]->section; // TODO 5 > 21 ?></h4>
		<ul class="blog">
			<li class="post"><a
				href="<?php echo '?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [5]->id . '-' . str_replace ( ' ', '_', $activePosts [5]->title ); //TODO 5 21?>"
				title="<?php echo $activePosts[5]->title; // TODO 5 > 21 ?>"> <img
					style="height: 250px; width: 100%; object-fit: cover;"
					src='<?php echo $activePosts[5]->path; // TODO 5 > 21 ?>' alt='img'>
			</a>
				<h2 class="with_number" style="width: 100% !important;">
					<a href="?page=post" style="width: 100% !important;"
						title="<?php echo $activePosts[5]->title; // TODO5 > 21 ?>">
						<?php echo $activePosts[5]->title; // TODO 5 > 21 ?></a>
					<?php
					// <a class="comments_number" href="?page=post#comments_list"
					// title="2 comments">2<span class="arrow_comments"></span></a>
					?>
				</h2>
				<ul class="post_details"
					style="margin-bottom: 10px; width: 100% !important;">
					<li class="category"><a href="?page=category&amp;cat=<?php echo $activePosts [5]->section; ?>"
						title="<?php echo $activePosts[5]->section; // TODO 5 > 21 ?>"><?php echo $activePosts[5]->section; // TODO 5 > 21 ?></a></li>
					<li class="date"><?php echo date('Y-m-d', strtotime($activePosts[5]->created_at)); // TODO 5 > 21 ?></li>
				</ul>
				<p><?php echo mb_substr($activePosts[5]->content, 0, 70); // TODO 5 > 21 ?></p>
				<a class="read_more"
				href="<?php echo '?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [5]->id . '-' . str_replace ( ' ', '_', $activePosts [5]->title ); //TODO 5 21?>"
				title="Read more"><span class="arrow"></span><span>Повеке</span></a></li>
		</ul>
		<?php
		// <ul class="blog small clearfix">
		// 	<li class="post"><a href="?page=post_small_image"
		// 		title="Bayern Says Ties With Rivals Dortmund Have Frozen"> <img
		// 			src='images/samples/100x100/image_14.jpg' alt='img'>
		// 	</a>
		// 		<div class="post_content">
		// 			<h5>
		// 				<a href="?page=post_small_image"
		// 					title="Bayern Says Ties With Rivals Dortmund Have Frozen">Bayern
		// 					Says Ties With Rivals Dortmund Have Frozen</a>
		// 			</h5>
		// 			<ul class="post_details simple">
		// 				<li class="category"><a href="?page=category&amp;cat=sports"
		// 					title="SPORTS">SPORTS</a></li>
		// 				<li class="date">10:11 PM, Feb 02</li>
		// 			</ul>
		// 		</div></li>
		// 	<li class="post"><a href="?page=post_soundcloud"
		// 		title="Built on Brotherhood, Club Lives Up to Name"> <img
		// 			src='images/samples/100x100/image_12.jpg' alt='img'>
		// 	</a>
		// 		<div class="post_content">
		// 			<h5>
		// 				<a href="?page=post_soundcloud"
		// 					title="Built on Brotherhood, Club Lives Up to Name">Built on
		// 					Brotherhood, Club Lives Up to Name</a>
		// 			</h5>
		// 			<ul class="post_details simple">
		// 				<li class="category"><a href="?page=category&amp;cat=sports"
		// 					title="SPORTS">SPORTS</a></li>
		// 				<li class="date">10:11 PM, Feb 02</li>
		// 			</ul>
		// 		</div></li>
		// </ul>
		?>
		<?php
		// <a class="more page_margin_top" href="#">READ MORE</a>
		?>
	</div>
	<div class="column column_1_3">
		<h4 class="box_header"><?php echo $activePosts[6]->section; // TODO 6 > 22 ?></h4>
		<ul class="blog">
			<li class="post"><a
				href="<?php echo '?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [6]->id . '-' . str_replace ( ' ', '_', $activePosts [6]->title ); // TODO 6 22?>"
				title="<?php echo $activePosts[6]->title; // TODO 6 > 22 ?>"> <img
					style="height: 250px; width: 100%; object-fit: cover;"
					src='<?php echo $activePosts[6]->path; // TODO 6 > 22 ?>' alt='img'>
			</a>
				<h2 class="with_number" style="width: 100% !important;">
					<a href="?page=post" style="width: 100% !important;"
						title="<?php echo $activePosts[6]->title; // TODO 6 > 21 ?>">
						<?php echo $activePosts[6]->title; // TODO 6 > 21 ?></a>
					<?php
					// <a class="comments_number" href="?page=post#comments_list"
					// title="2 comments">2<span class="arrow_comments"></span></a>
					?>
				</h2>
				<ul class="post_details"
					style="margin-bottom: 10px; width: 100% !important;">
					<li class="category"><a href="?page=category&amp;cat=<?php echo $activePosts [6]->section; ?>"
						title="<?php echo $activePosts[6]->section; // TODO 6 > 22 ?>"><?php echo $activePosts[6]->section; // TODO 6 > 21 ?></a></li>
					<li class="date"><?php echo date('Y-m-d', strtotime($activePosts[6]->created_at)); // TODO 6 > 21 ?></li>
				</ul>
				<p><?php echo mb_substr($activePosts[6]->content, 0, 70); // TODO 6 > 22 ?></p>
				<a class="read_more"
				href="<?php echo '?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [6]->id . '-' . str_replace ( ' ', '_', $activePosts [6]->title ); // TODO 6 22?>"
				title="Read more"><span class="arrow"></span><span>Повеке</span></a></li>
		</ul>
		<?php
		// <ul class="blog small clearfix">
		// 	<li class="post"><a href="?page=post"
		// 		title="Bayern Says Ties With Rivals Dortmund Have Frozen"> <img
		// 			src='images/samples/100x100/image_01.jpg' alt='img'>
		// 	</a>
		// 		<div class="post_content">
		// 			<h5>
		// 				<a href="?page=post"
		// 					title="Bayern Says Ties With Rivals Dortmund Have Frozen">Bayern
		// 					Says Ties With Rivals Dortmund Have Frozen</a>
		// 			</h5>
		// 			<ul class="post_details simple">
		// 				<li class="category"><a href="?page=category&amp;cat=lifestyle"
		// 					title="LIFESTYLE">LIFESTYLE</a></li>
		// 				<li class="date">10:11 PM, Feb 02</li>
		// 			</ul>
		// 		</div></li>
		// 	<li class="post"><a href="?page=post_video"
		// 		title="Built on Brotherhood, Club Lives Up to Name"> <span
		// 			class="icon small video"></span> <img
		// 			src='images/samples/100x100/image_03.jpg' alt='img'>
		// 	</a>
		// 		<div class="post_content">
		// 			<h5>
		// 				<a href="?page=post_video"
		// 					title="Built on Brotherhood, Club Lives Up to Name">Built on
		// 					Brotherhood, Club Lives Up to Name</a>
		// 			</h5>
		// 			<ul class="post_details simple">
		// 				<li class="category"><a href="?page=category&amp;cat=lifestyle"
		// 					title="LIFESTYLE">LIFESTYLE</a></li>
		// 				<li class="date">10:11 PM, Feb 02</li>
		// 			</ul>
		// 		</div></li>
		// </ul>
		?>
		<?php
		// <a class="more page_margin_top" href="#">READ MORE</a>
		?>
	</div>
	<div class="column column_1_3">
		<h4 class="box_header"><?php echo $activePosts [0]->section; ?></h4>
		<ul class="blog small clearfix">
		<?php
		$no = 0;
						for($i = 0; $i < count($activePosts); $i ++) {
							if($no == 4){
								break;
							}
							if( mb_strtolower($activePosts [$i]->section) == mb_strtolower($activePosts [0]->section)){
			echo '<li class="post"><a href="?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '" ';
			echo 'title="' . $activePosts [$i]->title . '"> <img ';
			echo 'src="' . $activePosts [$i]->path . '" style="height: 100px; width: 100px; object-fit: cover;" alt="img"></a> ';
			echo '<div class="post_content"><h5> ';
			echo '<a href="?page=post&title=' . rand ( 10000, 99999 ) . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '" ';
			echo 'title="' . $activePosts [$i]->title . '">' . $activePosts [$i]->title . '</a></h5><ul class="post_details simple"> ';
			echo '<li class="category"><a href="?page=category&amp;cat=' . $activePosts [$i]->section . '" ';
			echo 'title="' . $activePosts [$i]->section . '">' . $activePosts [$i]->section . '</a></li> ';
			echo '<li class="date">' . date ( 'Y-m-d', strtotime ( $activePosts [$i]->created_at ) ) . '</li></ul></div></li> ';
							$no++;
							}
						}
				?>
		</ul>
		<?php
		// <a class="more page_margin_top" href="#">MORE FROM SCIENCE</a>
		?>
	</div>
</div>