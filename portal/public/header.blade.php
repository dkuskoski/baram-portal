<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Baram.be</title>
<!-- Tell the browser to be responsive to screen width -->
<meta
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
	name="viewport">
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="lte/bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="lte/dist/css/AdminLTE.min.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet"
	href="lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="lte/dist/css/skins/skin-blue.min.css">

<!-- jQuery 2.2.3 -->
<script src="lte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<?php
$url = 'http://' . $_SERVER ['SERVER_NAME'] . $_SERVER ['REQUEST_URI'];

if (strpos ( $url, 'editor' ) !== false) {
	echo "<script src=\"ckeditor/ckeditor.js\"></script>";
	echo "<script src=\"ckeditor/samples/js/sample.js\"></script>";
	echo "<script src=\"ckeditor/ckeditor.js\"></script>";
	echo "<script src=\"ckeditor/samples/js/sample.js\"></script>";
}
?>

<!-- <link rel="stylesheet" -->
<!-- 	href="{{ URL::asset('ckeditor/samples/css/samples.css') }}"> -->
<!-- <link rel="stylesheet" -->
<!-- 	href="{{ URL::asset('ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css') }}"> -->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<?php
// BODY TAG OPTIONS:
// =================
// Apply one or more of the following classes to get the
// desired effect
// |---------------------------------------------------------|
// | SKINS | skin-blue |
// | | skin-black |
// | | skin-purple |
// | | skin-yellow |
// | | skin-red |
// | | skin-green |
// |---------------------------------------------------------|
// |LAYOUT OPTIONS | fixed |
// | | layout-boxed |
// | | layout-top-nav |
// | | sidebar-collapse |
// | | sidebar-mini |
// |---------------------------------------------------------|
?>
<body class="hold-transition skin-blue sidebar-mini">

	<div class="wrapper"
		style="background-color: rgba(131, 39, 150, 0.0) !important;">

		<header class="main-header"
			style="background-color: rgba(131, 39, 150, 0.7) !important;">
			<!-- Logo -->
			<a href="javascript:void(0)" class="logo"
				style="background-color: rgba(131, 39, 150, 0.7) !important;"> <!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>B</b></span> <!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Baram.</b>be</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top"
				style="background-color: rgba(131, 39, 150, 0.7) !important;">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas"
					role="button"> <span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li><a href="#" onclick="toggleFullScreen();"><i
								id="full-screen-btn" class="fa fa-expand"></i></a></li>
						<li><a href="#"
							onclick="document.getElementById('logout-form').submit();"><i
								class="fa fa-sign-out"></i></a></li>

					</ul>
				</div>
			</nav>
		</header>
	</div>