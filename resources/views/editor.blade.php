<?php include 'header.blade.php';?>
<div class="wrapper">

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
    
    <?php include 'lte/nav.blade.php';?>
    
    <section class="content-header">
			<h1>Editor</h1>
			<ol class="breadcrumb">
				<li><a href="home"><i class="fa fa-home"></i>Home</a></li>
				<li class="active">Editor</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">

			<div class="row">
				<div class="col-xs-6">
					<form method="post" id="ajax_save_type" action="ajax_save_type">
						@if($errors->has('type')) <span
							class="help-block alert alert-warning"> <strong>{{
								$errors->first('type') }}</strong>
						</span> @endif <label>Нов Тип</label> <input type="text"
							name="type" id="type" class="form-control" required="required"> <br>
						<a href="javascript:void(0);" style="float: right;"
							class="btn btn-primary" onclick="saveType();">Зачувај</a>
					</form>
				</div>
				<form method="post" id="save_form" action="save_content">
					<div class="col-xs-6">
						<label>Тип</label> <select class="form-control text-center"
							name="type1[]" id="type1" multiple="multiple" required="required">
							<?php
							$count = 0;
							foreach ( $types as $type ) {
								if ($count == 0) {
									echo '<option selected="selected" value="' . $type->id . '">' . $type->type . '</option>';
								} else {
									echo '<option value="' . $type->id . '">' . $type->type . '</option>';
								}
								$count ++;
							}
							?>
						</select>
					</div>

					<input type="hidden"
						value="<?php
						if (isset ( $post )) {
							echo $post->id;
						} else {
							echo 0;
						}
						?>"
						name="id" />
					<div class="col-xs-6">
						<label>Слика</label> <input type="text" name="thumbnail"
							class="form-control"
							value="<?php
							if (isset ( $post )) {
								echo $post->path;
							}
							?>"
							id="thumbnail" required="required">
					</div>
					<br>

					<div class="col-xs-6">
						<label>Секција</label> <select class="form-control" name="section"
							id="section" required="required">
							<option value="Македонија">Македонија</option>
							<option value="Економија">Економија</option>
							<option value="Свет">Свет</option>
							<option value="Хроника">Хроника</option>
							<option value="Забава">Забава</option>
							<option value="Спорт">Спорт</option>
							<option value="Култура">Култура</option>
							<option value="18+">18+</option>
						</select>
					</div>
					<div class="col-xs-12">
						<label>Наслов</label> <input type="text" name="title" id="title"
							class="form-control"
							value="<?php
							if (isset ( $post )) {
								echo $post->title;
							}
							?>"
							required="required" />
					</div>
					<br> <br> <input id="hidden_content" name="hidden_content"
						type="hidden" /> {{ csrf_field() }}
				</form>
			</div>
			<br>
			<div class="adjoined-bottom">
				<div class="grid-container">
					<div class="grid-width-100">
						<br> <label>Едитор</label>
						<div id="editor"></div>
						<br>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-11 text-center"></div>
				<div class="col-xs-1 text-center">
					<button onclick="save()" type="button"
						class="btn btn-block btn-primary">Save</button>
				</div>
			</div>
		</section>
	</div>
</div>
<div id="snackbar"></div>
<script>
initSample();

<?php if(isset($post)){
	
	echo '$(document).ready(function() {;';
	echo '$("#section option:selected").removeAttr("selected");';
	echo "$('#section option[value=\"" . $post->section . "\"]').attr('selected', 'selected');";
	echo '});';
}
		
if(isset($type_post)){
	echo '$(document).ready(function() {;';
		echo '$("#type1 option:selected").removeAttr(\'selected\');';
		echo 'var types = JSON.parse(`' . json_encode($type_post) . '`);';
		echo 'for(var i = 0; i < types.length; i++){';
		echo '$(\'#type1 option[value="\' + types[i].type_id + \'"]\').remove();';
		echo '}';
		echo '});';
}
?>

function save(){
	try{
	var data = CKEDITOR.instances.editor.getData();
	}catch(ex){
		alert(ex);
	}
	if(data.trim() < 1)
	{
		alert("Form is empty!");
	}
	else
	{
	document.getElementById("hidden_content").value = data;
	document.getElementById("save_form").submit();
	}
}

	function saveType(){

		fd = {
			'type' : $('#type').val()
		};
	$.ajax({
	    type: "POST",
	    url: "/ajax_save_type",
	    data: fd,
	    dataType : 'json',
	    success: function(data) {
		    if(data != null){
	        $('#type1').prepend('<option value="' + data.id + '">' + data.type + '</option>');
	        var x = document.getElementById("snackbar");
			x.innerHTML = "Зачувано";
	        x.className = "show";
	        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
		    }
		    else
		    {
		    	var x = document.getElementById("snackbar");
				x.innerHTML = "Грешка";
		        x.className = "show";
		        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
		    }
	    },
	    error: function (xhr, ajaxOptions, thrownError) {
	    	var x = document.getElementById("snackbar");
			x.innerHTML = thrownError;
	        x.className = "show";
	        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
	    }
	  });
	}

	<?php
	if (isset ( $post )) {
		echo 'CKEDITOR.instances.editor.setData(`' . trim ( $post->content ) . '`);';
	}
	?>

	</script>

<!-- /.content -->
<!-- /.content-wrapper -->
<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
<!-- ./wrapper -->
<form id="logout-form" action="{{ url('/logout') }}" method="POST"
	style="display: none;">{{ csrf_field() }}</form>
<?php include 'lte/footer.blade.php';?>