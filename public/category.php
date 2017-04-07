<div class="page">
	<div class="page_header clearfix page_margin_top">
		<div class="page_header_left">
			<h1 class="page_title"><?php echo ucfirst($_GET["cat"]); ?></h1>
		</div>
	</div>
	<div class="page_layout clearfix">
		<div class="divider_block clearfix">
			<hr class="divider first">
			<hr class="divider subheader_arrow">
			<hr class="divider last">
		</div>
		<div class="row">
			<div class="column column_2_3">
				<div class="row">
					<ul class="blog big">
										<?php
					foreach ($categoryPosts as $post){
						echo '<li class="post">';
						echo '<a href="?page=post&title=' . rand ( 10000, 99999 ) . $post->id . '-' . str_replace ( ' ', '_', $post->title ) . '" title="' . $post->title . '"> ';
						echo '<img src="' . $post->path . '" style="height: 242px; width: 330px; object-fit: cover;" alt="img"> ';
						echo '</a><div class="post_content"><h2 class="with_number"> ';
						echo '<a style="width: 100%;" href="?page=post&title=' . rand ( 10000, 99999 ) . $post->id . '-' . str_replace ( ' ', '_', $post->title ) . '" title="' . $post->title . '">' . $post->title . '</a> ';
						// echo '<a class="comments_number" href="?page=post#comments_list" title="2 comments">2<span class="arrow_comments"></span></a> ';
						echo '</h2><ul class="post_details"> ';
						echo '<li class="category"><a href="?page=category&amp;cat=' . $post->section . '" title="' . $post->section . '">' . $post->section . '</a></li> ';
						echo '<li class="date">' . date ( 'Y-m-d', strtotime ( $post->created_at ) ) . '</li></ul><br> ';
						echo '<p>' . mb_substr ( $post->content, 0, 150 ) . '...</p> ';
						echo '<a class="read_more" href="?page=post&title=' . rand ( 10000, 99999 ) . $post->id . '-' . str_replace ( ' ', '_', $post->title ) . '"><span class="arrow"></span><span>Повеке</span></a> ';
						echo '</div></li> ';
					}
					?>
						
					</ul>
				</div>
				<ul class="pagination clearfix page_margin_top_section">
					<li class="left">
						<a href="#" title="">&nbsp;</a>
					</li>
					<li class="selected">
						<a href="#" title="">
							1
						</a>
					</li>
					<li>
						<a href="#" title="">
							2
						</a>
					</li>
					<li>
						<a href="#" title="">
							3
						</a>
					</li>
					<li class="right">
						<a href="#" title="">&nbsp;</a>
					</li>
				</ul>
			</div>
		<?php include_once('nav.php'); ?>
		</div>
	</div>
</div>