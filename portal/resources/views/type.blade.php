<?php include 'header.blade.php';?>
<div class="wrapper">

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
    
    <?php include 'lte/nav.blade.php';?>
    
    <section class="content-header">
			<ol class="breadcrumb">
				<li><a href="home"><i class="fa fa-home"></i>Home</a></li>
				<li class="active">Type</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content container">
			<br> <br>
			<div class="box"
				style="width: 70%; display: block; margin-left: 15%;">
				<div class="box-header">
					<h3 class="box-title"></h3>
					<div class="box-tools">
						<div class="input-group input-group-sm" style="width: 150px;">
							<!-- <input type="text" name="table_search"
								class="form-control pull-right" placeholder="Search"> 

							<div class="input-group-btn">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-search"></i>
								</button>
							</div>
							-->
						</div>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tbody>
							<tr>
								<th>Тип</th>
								<th>Статус</th>
								<th>Disable/Enable</th>
							</tr>
							<?php
							$count = 0;
							foreach ( $types as $type ) {
								$status = '<span class="label label-danger">Disabled</span>';
								$toggle = '<span class="label label-success">Enable</span>';
								if ($type->status == 1) {
									$status = '<span class="label label-success">Enabled</span>';
									$toggle = '<span class="label label-danger">Disable</span>';
								}
								echo '<tr><td>' . $type->type . '</td>';
								echo '<td><span id="status-' . $count . '">' . $status . '</span></td>';
								echo '<td><a href="javascript:void(0);" id="' . $count . '" onclick="toggle(this.id, \'' . $type->id . '\')">' . $toggle . '</a></td></tr>';
								echo '<input type="hidden" id="' . $count . '-status" value="' . $type->status . '"/>';  
								$count ++;
							}
							?>
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>

			<br>
			<form method="post" id="save_type" action="save_type">
				<div class="row container">
					<div class="col-xs-3"></div>
					<div class="col-xs-6">
						@if($errors->has('type')) <span
							class="help-block alert alert-warning"> <strong>{{
								$errors->first('type') }}</strong>
						</span> @endif <label>Тип</label> <input type="text" name="type"
							class="form-control" id="type" required="required">
					</div>
					<div class="col-xs-3"></div>
				</div>
				<br>
				<div class="row container">
					<div class="col-xs-8"></div>
					<div class="col-xs-1">
						<button type="submit" class="btn btn-block btn-primary">Save</button>
					</div>
					<div class="col-xs-3"></div>
				</div>
			</form>
			<br>
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
</div>

<div id="snackbar"></div>

<script>
function toggle(id, type_id){
	var status = 0;
	if($('#' + id + '-status').val() == 0){
		status = 1;
	}

var formData = {
        'status' : status,
        'type_id' : type_id
            };

$.ajax({
    type: "POST",
    url: "/toggle_type",
    data: formData,
    dataType : 'json',
    success: function(data) {
    	var stat = '<span class="label label-danger">Disabled</span>';
    	var toggle = '<span class="label label-success">Enable</span>';
		if (data == 1) {
			stat = '<span class="label label-success">Enabled</span>';
			toggle = '<span class="label label-danger">Disable</span>';
		} 
		
        $('#status-' + id).html(stat);
        $('#' + id).html(toggle);
    	
        $('#' + id + '-status').val(data);
        
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
<!-- ./wrapper -->
<form id="logout-form" action="{{ url('/logout') }}" method="POST"
	style="display: none;">{{ csrf_field() }}</form>
<?php include 'lte/footer.blade.php';?>