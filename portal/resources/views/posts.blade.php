<?php include 'header.blade.php';?>
<div class="wrapper">

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
    
    <?php include 'lte/nav.blade.php';?>
    
    <section class="content-header">
			<ol class="breadcrumb">
				<li><a href="home"><i class="fa fa-home"></i>Home</a></li>
				<li class="active">Post</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content container">
			<br> <br>
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Data Table With Full Features</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="posts_table_wrapper"
						class="dataTables_wrapper form-inline dt-bootstrap">
						<div class="row">
							<div class="col-sm-12">
								<table id="posts_table"
									class="table table-bordered table-striped dataTable"
									role="grid" aria-describedby="posts_table_info">
									<thead>
										<tr role="row">
											<th class="sorting_asc" tabindex="0"
												aria-controls="posts_table" rowspan="1" colspan="1"
												aria-sort="ascending"
												aria-label="Rendering engine: activate to sort column descending"
												style="width: 454px;">Title</th>
											<th class="sorting" tabindex="0" aria-controls="posts_table"
												rowspan="1" colspan="1"
												aria-label="Platform(s): activate to sort column ascending"
												style="width: 190px;">Created at</th>
											<th class="sorting" tabindex="0" aria-controls="posts_table"
												rowspan="1" colspan="1"
												aria-label="Engine version: activate to sort column ascending"
												style="width: 75px;">Views</th>
											<th class="sorting" tabindex="0" aria-controls="posts_table"
												rowspan="1" colspan="1"
												aria-label="CSS grade: activate to sort column ascending"
												style="width: 74px;">Status</th>
											<th class="sorting" tabindex="0" aria-controls="posts_table"
												rowspan="1" colspan="1"
												aria-label="CSS grade: activate to sort column ascending"
												style="width: 74px;">Toggle</th>
										</tr>
									</thead>
									<tbody>
									<?php
									
									foreach ( $posts as $post ) {
										$status = '<span class="label label-danger">Disabled</span>';
										$toggle = '<span class="label label-success">Enable</span>';
										if ($post->status == 1) {
											$status = '<span class="label label-success">Enabled</span>';
											$toggle = '<span class="label label-danger">Disable</span>';
										}
										echo '<tr role="row" onclick="edit(\'' . $post->id . '\')" class="odd table-hover">';
										echo '<td>' . $post->title . '</td>';
										echo '<td class="sorting_1">' . date ( 'Y-m-d H:i', strtotime ( $post->created_at ) ) . '</td>';
										echo '<td>' . $post->views . '</td>';
										echo '<td id="status-' . $post->id . '">' . $status . '</td>';
										echo '<td data-val="' . $post->status . '" onclick="stop_event(); toggle(this, \'' . $post->id . '\');">' . $toggle . '</td>';
										echo '</tr>';
									}
									?>
									</tbody>
									<tfoot>
										<tr>
											<th rowspan="1" colspan="1">Title</th>
											<th rowspan="1" colspan="1">Created at</th>
											<th rowspan="1" colspan="1">Views</th>
											<th rowspan="1" colspan="1">Status</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<br>
		</section>
		<!-- /.content -->
	</div>
	<script>
		function edit(id){
			window.location.href = '<?php echo '/editor';?>' + id;
		}
	</script>

	<div id="snackbar"></div>

	<script>
function stop_event(e){
	if(!e){
		e = window.event;
	}
	
	e.stopPropagation();
	e.preventDefault();
}
function toggle(elem, post_id){
	var status = 0;
	if(parseInt($(elem).data('val')) == 0){
		status = 1;
	}

var formData = {
        'status' : status,
        'post_id' : post_id
            };

$.ajax({
    type: "POST",
    url: "/toggle_post",
    data: formData,
    dataType : 'json',
    success: function(data) {
    	var stat = '<span class="label label-danger">Disabled</span>';
    	var toggle = '<span class="label label-success">Enable</span>';
		if (data == 1) {
			stat = '<span class="label label-success">Enabled</span>';
			toggle = '<span class="label label-danger">Disable</span>';
		} 
		
        $(elem).html(toggle);
        $('#status-' + post_id).html(stat);
    	
        $(elem).data('val', data);
        
        var x = document.getElementById("snackbar");
		x.innerHTML = "Зачувано";
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    },
    error: function (xhr, ajaxOptions, thrownError) {
    	var x = document.getElementById("snackbar");
		x.innerHTML = thrownError;
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
  });
}
</script>
	<!-- /.content-wrapper -->
	<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
</div>

<!-- ./wrapper -->
<form id="logout-form" action="{{ url('/logout') }}" method="POST"
	style="display: none;">{{ csrf_field() }}</form>
<?php include 'lte/footer.blade.php';?>