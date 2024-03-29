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
					<ul class="blog big" id="cat_wrapper">
										<?php
					foreach ($categoryPosts as $post){
						echo '<li class="post">';
						echo '<a href="?page=post&title=' . $post->id . '-' . str_replace ( ' ', '_', $post->title ) . '" title="' . $post->title . '"> ';
						echo '<img src="' . $post->path . '" style="height: 242px; width: 330px; object-fit: cover;" alt="img"> ';
						echo '</a><div class="post_content"><h2 class="with_number"> ';
						echo '<a style="width: 100%;" href="?page=post&title=' . $post->id . '-' . str_replace ( ' ', '_', $post->title ) . '" title="' . $post->title . '">' . $post->title . '</a> ';
						// echo '<a class="comments_number" href="?page=post#comments_list" title="2 comments">2<span class="arrow_comments"></span></a> ';
						echo '</h2><ul class="post_details"> ';
						echo '<li class="category"><a href="?page=category&amp;cat=' . $post->section . '" title="' . $post->section . '">' . $post->section . '</a></li> ';
						echo '<li class="date">' . date ( 'Y-m-d', strtotime ( $post->created_at ) ) . '</li></ul><br> ';
						if(mb_substr ( $post->content, 0, 4 ) != "<p><") {
							echo '<p>' . mb_substr ( $post->content, 0, 150 ) . '...</p> ';
						}
						echo '<a class="read_more" href="?page=post&title=' . $post->id . '-' . str_replace ( ' ', '_', $post->title ) . '"><span class="arrow"></span><span>Повеке</span></a> ';
						echo '</div></li> ';
					}
					?>
						
					</ul>
				</div>
				<br><br><br>
				
				<script>
				var _throttleTimer = null;
				var _throttleDelay = 100;
				var $window = $(window);
				var $document = $(document);
				var counter = 12;
				var loading = false;

$(document).ready(function() {
	  $window
        .off('scroll', scrollHandler)
        .on('scroll', scrollHandler);
	});


function scrollHandler(e) {
		if(loading){
			return;
		}
	clearTimeout(_throttleTimer);
    _throttleTimer = setTimeout(function () {
   if ($window.scrollTop() + $window.height() > $document.height() - $window.height() * 1.5) {
	   loading = true;
	   var pos = $document.height() - $window.height() * 1.5
	   $.ajax({
				url: "getPosts?cat=<?php echo $_GET['cat']; ?>&count=" + parseInt(counter) + "&search=<?php echo $_GET['search']; ?>",
				type: "get",
				success: function (posts) {
					var wrapper = $('#cat_wrapper');
					for (var i = 0; i < posts.length; i++){
						var $post = posts[i];
						var d = Date.parse($post.created_at);
						var date = new Date(d);

						var month;
						if((date.getMonth() + 1) < 10){
							month = "0" + (date.getMonth() + 1)
						} else {
							month = (date.getMonth() + 1);
						} 

						var day;
						if((date.getDate()) < 10){
							day = "0" + (date.getDate() + 1)
						} else {
							day = (date.getDate() + 1);
						} 
						var desc = "";

						if($post.content.substring(0, 4 ) != "<p><"){
							desc = $post.content.substring(0, 150 );
						}

						wrapper.append('<li class="post">'
						+ '<a href="?page=post&title=' + Math.floor((Math.random() * 90000) + 10000) + $post.id + '-' + $post.title.replace ( ' ', '_') + '" title="' + $post.title + '"> '
						+ '<img src="' + $post.path + '" style="height: 242px; width: 330px; object-fit: cover; display: block;" alt="img"/> '
						+ '</a><div class="post_content"><h2 class="with_number"> '
						+ '<a style="width: 100%;" href="?page=post&title=' + Math.floor((Math.random() * 90000) + 10000) + $post.id + '-' + $post.title.replace ( ' ', '_') + '" title="' + $post.title + '" title="' + $post.title + '">' + $post.title + '</a> '
						// + '<a class="comments_number" href="?page=post#comments_list" title="2 comments">2<span class="arrow_comments"></span></a> '
						+ '</h2><ul class="post_details"> '
						+ '<li class="category"><a href="?page=category&amp;cat=' + $post.section + '" title="' + $post.section + '">' + $post.section + '</a></li> '
						+ '<li class="date">' + date.getFullYear() + '-' + month + '-' + day + '</li></ul><br> '
						+ '<p>' + desc + '...</p> '
						+ '<a class="read_more" href="?page=post&title=' + Math.floor((Math.random() * 90000) + 10000) + $post.id + '-' + $post.title.replace ( ' ', '_') + '"><span class="arrow"></span><span>Повеке</span></a> '
						+ '</div></li> ');
						counter++;
					}
					window.scrollTo(0, pos);
					if(posts.length > 0){
						loading = false;
					}
				},
				error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
				loading = false;
				}
			});
   }
   }, _throttleDelay);
}
				</script>
			</div>
		<?php include_once('nav.php'); ?>
		</div>
	</div>
</div>