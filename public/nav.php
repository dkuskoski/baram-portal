<div class="column column_1_3">
	<h4 class="box_header">Препорачуваме</h4>
	<ul class="blog small_margin clearfix">

	<?php 
	for($i = 25; $i < 28; $i ++) {
		echo '<li class="post"><a href="?page=post&title=' . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '" ';
		echo 'title="' . $activePosts [$i]->title . '"> <span class="icon gallery"></span> <img style="height: 142px; width: 100%; object-fit: cover;"';
		if($activePosts[$i]->section == "18+")
		{
			echo ' class="erotic-foggy" onmouseover="disableFoggy(this);" onmouseout="enableFoggy(this);" ';
		}
		echo 'src="' . $activePosts [$i]->path . '" alt="img"> </a> <div class="post_content"><h5> ';
		echo '<a href="?page=post&title=' . $activePosts [$i]->id . '-' . str_replace ( ' ', '_', $activePosts [$i]->title ) . '" ';
		echo 'title="' . $activePosts [$i]->title . '">' . $activePosts [$i]->title . '</a></h5> ';
		echo '<ul class="post_details simple"><li class="category"><a href="?page=category&amp;cat=' . $activePosts [$i]->section . '" ';
		echo 'title="' . $activePosts [$i]->section . '">' . $activePosts [$i]->section . '</a></li>';
		echo '<li class="date">' . date ( 'Y-m-d', strtotime ( $activePosts [$i]->created_at ) ) . '</li></ul></div></li>';
	}
?>
	</ul>
	<?php
	// <h4 class="box_header page_margin_top_section">Latest Posts</h4>
	// 																	<div class="vertical_carousel_container clearfix">
	// 																	<ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
	// 																	<li class="post">
	// 																	<a href="?page=post_gallery" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
	// 																	<span class="icon small gallery"></span>
	// 																	<img src='images/samples/100x100/image_06.jpg' alt='img'>
	// 																	</a>
	// 																	<div class="post_content">
	// 																	<h5>
	// 																	<a href="?page=post_gallery" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
	// 																	</h5>
	// 																	<ul class="post_details simple">
	// 																	<li class="category"><a href="?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
	// 																	<li class="date">
	// 																	10:11 PM, Feb 02
	// 																	</li>
	// 																	</ul>
	// 																	</div>
	// 																	</li>
	// 																	<li class="post">
	// 																	<a href="?page=post" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
	// 																	<img src='images/samples/100x100/image_12.jpg' alt='img'>
	// 																	</a>
	// 																	<div class="post_content">
	// 																	<h5>
	// 																	<a href="?page=post" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
	// 																	</h5>
	// 																	<ul class="post_details simple">
	// 																	<li class="category"><a href="?page=category&amp;cat=world" title="WORLD">WORLD</a></li>
	// 																	<li class="date">
	// 																	10:11 PM, Feb 02
	// 																	</li>
	// 																	</ul>
	// 																	</div>
	// 																	</li>
	// 																	<li class="post">
	// 																	<a href="?page=post_small_image" title="Built on Brotherhood, Club Lives Up to Name">
	// 																	<img src='images/samples/100x100/image_02.jpg' alt='img'>
	// 																	</a>
	// 																	<div class="post_content">
	// 																	<h5>
	// 																	<a href="?page=post_small_image" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
	// 																	</h5>
	// 																	<ul class="post_details simple">
	// 																	<li class="category"><a href="?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
	// 																	<li class="date">
	// 																	10:11 PM, Feb 02
	// 																	</li>
	// 																	</ul>
	// 																	</div>
	// 																	</li>
	// 																	<li class="post">
	// 																	<a href="?page=post_quote" title="Nuclear Fusion Closer to Becoming a Reality">
	// 																	<img src='images/samples/100x100/image_13.jpg' alt='img'>
	// 																	</a>
	// 																	<div class="post_content">
	// 																	<h5>
	// 																	<a href="?page=post_quote" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>
	// 																	</h5>
	// 																	<ul class="post_details simple">
	// 																	<li class="category"><a href="?page=category&amp;cat=science" title="SCIENCE">SCIENCE</a></li>
	// 																	<li class="date">
	// 																	10:11 PM, Feb 02
	// 																	</li>
	// 																	</ul>
	// 																	</div>
	// 																	</li>
	// 																	</ul>
	// 																	</div> 
																		?>
	<div class="tabs no_scroll page_margin_top_section clearfix">
		<ul class="tabs_navigation clearfix" style="display: none!important;">
			<?php 
			// <li><a href="#sidebar-most-read" title="Most Read"> Most Read </a> <span></span>
			// </li>
			// <li><a href="#sidebar-most-commented" title="Commented"> Commented </a>
			// 	<span></span></li>
			?>
		</ul>
		<h4 class="box_header">Најгледано</h4>
		<div id="sidebar-most-read">
			<ul class="blog rating page_margin_top clearfix">
				<li class="post"><a href="<?php echo '?page=post&title=' . $mostViewed [0]->id . '-' . str_replace ( ' ', '_', $mostViewed [0]->title ); ?>"
					title="<?php echo $mostViewed [0]->title;?>"> <img
						src='<?php echo $mostViewed [0]->path;?>' style="height: 152px; width: 100%; object-fit: cover;"
						<?php 
						if($mostViewed[0]->section == "18+")
						{
							echo ' class="erotic-foggy" onmouseover="disableFoggy(this);" onmouseout="enableFoggy(this);" ';
						}
						?>
						 alt='img'>
				</a>
					<div class="post_content">
						<span class="number animated_element" data-value="<?php echo $mostViewed [0]->views;?>"></span>
						<h5>
							<a href="<?php echo '?page=post&title=' . $mostViewed [0]->id . '-' . str_replace ( ' ', '_', $mostViewed [0]->title ); ?>"
								title="<?php echo $mostViewed [0]->title;?>"><?php echo $mostViewed [0]->title;?></a>
						</h5>
						<ul class="post_details simple">
							<li class="category"><a href="?page=category&amp;cat=<?php echo $mostViewed [0]->section;?>"
								title="<?php echo $mostViewed [0]->section;?>"><?php echo $mostViewed [0]->section;?></a></li>
						</ul>
					</div></li>

					<?php
					for ($i = 1; $i < 5; $i++){
				echo '<li class="post">	<div class="post_content">';
				echo '<span class="number animated_element" data-value="' . $mostViewed[$i]->views . '"></span><h5>';
				echo '<a href="?page=post&title=' . $mostViewed [$i]->id . '-' . str_replace ( ' ', '_', $mostViewed [$i]->title) . '" ';
				echo 'title="' . $mostViewed[$i]->title . '">' . $mostViewed[$i]->title . '</a></h5>';
			    echo '<ul class="post_details simple">';
				echo '<li class="category"><a href="?page=category&amp;cat=' . $mostViewed[$i]->section . '" ';
				echo 'title="' . $mostViewed[$i]->section . '">' . $mostViewed[$i]->section . '</a></li></ul></div></li>';
					}
					?>
				
			</ul>
		</div>
		<div id="sidebar-most-commented">
		<?php
			// <ul class="blog rating page_margin_top clearfix">
			// 	<li class="post"><a href="?page=post_small_image"
			// 		title="Nuclear Fusion Closer to Becoming a Reality"> <img
			// 			src='images/samples/510x187/image_02.jpg' alt='img'>
			// 	</a>
			// 		<div class="post_content">
			// 			<span class="number animated_element" data-value="70"></span>
			// 			<h5>
			// 				<a href="?page=post_small_image"
			// 					title="New Painkiller Rekindles Addiction Concerns">New
			// 					Painkiller Rekindles Addiction Concerns</a>
			// 			</h5>
			// 			<ul class="post_details simple">
			// 				<li class="category"><a href="?page=category&amp;cat=health"
			// 					title="HEALTH">HEALTH</a></li>
			// 			</ul>
			// 		</div></li>
			// 	<li class="post">
			// 		<div class="post_content">
			// 			<span class="number animated_element" data-value="62"></span>
			// 			<h5>
			// 				<a href="?page=post"
			// 					title="New Painkiller Rekindles Addiction Concerns">New
			// 					Painkiller Rekindles Addiction Concerns</a>
			// 			</h5>
			// 			<ul class="post_details simple">
			// 				<li class="category"><a href="?page=category&amp;cat=world"
			// 					title="WORLD">WORLD</a></li>
			// 			</ul>
			// 		</div>
			// 	</li>
			// 	<li class="post">
			// 		<div class="post_content">
			// 			<span class="number animated_element" data-value="30"></span>
			// 			<h5>
			// 				<a href="?page=post_quote"
			// 					title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking
			// 					the Right Chemistry, Drug Makers Hunt for Mergers</a>
			// 			</h5>
			// 			<ul class="post_details simple">
			// 				<li class="category"><a href="?page=category&amp;cat=sports"
			// 					title="SPORTS">SPORTS</a></li>
			// 			</ul>
			// 		</div>
			// 	</li>
			// 	<li class="post">
			// 		<div class="post_content">
			// 			<span class="number animated_element" data-value="25"></span>
			// 			<h5>
			// 				<a href="?page=post_small_image"
			// 					title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study
			// 					Linking Illnes and Salt Leaves Researchers Doubtful</a>
			// 			</h5>
			// 			<ul class="post_details simple">
			// 				<li class="category"><a href="?page=category&amp;cat=science"
			// 					title="SCIENCE">SCIENCE</a></li>
			// 			</ul>
			// 		</div>
			// 	</li>
			// 	<li class="post">
			// 		<div class="post_content">
			// 			<span class="number animated_element" data-value="4"></span>
			// 			<h5>
			// 				<a href="?page=post"
			// 					title="Syrian Civilians Trapped for Months Continue to be Evacuated">Syrian
			// 					Civilians Trapped for Months Continue to be Evacuated</a>
			// 			</h5>
			// 			<ul class="post_details simple">
			// 				<li class="category"><a href="?page=category&amp;cat=science"
			// 					title="SCIENCE">SCIENCE</a></li>
			// 			</ul>
			// 		</div>
			// 	</li>
			// </ul>
			// <a class="more page_margin_top" href="#">SHOW MORE</a>
			?>
		</div>
	</div>
</div>