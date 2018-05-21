<html>
<head>
<meta charset="utf-8">
<title>Editor</title>
<script src="{{ URL::asset('ckeditor/ckeditor.js') }}"></script>
<script src="{{ URL::asset('ckeditor/samples/js/sample.js') }}"></script>

<link rel="stylesheet"
	href="{{ URL::asset('ckeditor/samples/css/samples.css') }}">
<link rel="stylesheet"
	href="{{ URL::asset('ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css') }}">
</head>
<body id="main">

	<nav class="navigation-a">
		<div class="grid-container">
			<ul class="navigation-a-left grid-width-70">
				<li><a href="http://localhost:8000/home">Project Homepage</a></li>
				<li><a href="#" onclick="save()">Save</a></li>
			</ul>
			<ul class="navigation-a-right grid-width-30">
				<li><a href="#">Logout</a></li>
			</ul>
		</div>
	</nav>

	<main>
	<div class="adjoined-top">
		<div class="grid-container">
			<div class="content grid-width-100"></div>
		</div>
	</div>
	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<div id="editor">
				</div>
				<br>
			</div>
		</div>
	</div>
	<form method="post" id="save_form" action="save_content">
	<label for="type">Тип</label>
			<select name="type" id="type" required="required">
				<option selected="selected">Бизнис вести</option>
				<option>Посетивме</option>
				<option>Занимливости</option>
				<option>Интервју</option>
				<option>Музика</option>
				<option>Бавча</option>
			</select>
			<select name="type2" id="type2">
				<option selected="selected"></option>
				<option>Бизнис Вести</option>
				<option>Посетивме</option>
				<option>Занимливости</option>
				<option>Интервју</option>
				<option>Музика</option>
				<option>Бавча</option>
			</select>
			<select name="type3" id="type3">
				<option selected="selected"></option>
				<option>Бизнис Вести</option>
				<option>Посетивме</option>
				<option>Занимливости</option>
				<option>Интервју</option>
				<option>Музика</option>
				<option>Бавча</option>
			</select>
			<label for="title">Наслов</label>
	<input type="text" name="title" id="title"><br>
	<label for="thumbnail">Слика</label>
	<input type="text" name="thumbnail" id="thumbnail"><br>
	<label for="date">Дата</label>
	<input type="date" name="date" id="date"><br>
	<input type="hidden" name="username" id="username"><br>
	
		<input id="hidden_content" name="hidden_content" type="hidden"/>
		{{ csrf_field() }}
	</form>
	<script>
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
	</script> <script>
	initSample();
</script>

</body>
</html>
