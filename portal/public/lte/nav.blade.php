<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

<!-- Sidebar user panel (optional) -->
<div class="user-panel">
<div class="pull-left image">
<img src="lte/dist/img/user.png" class="img-circle" alt="User Image">
</div>
<div class="pull-left info">
<p><?php echo Auth::user()->f_name . ' ' . Auth::user()->l_name;?></p>
<!-- Status -->
</div>
</div>

<!-- Sidebar Menu -->
<ul class="sidebar-menu">
<!-- Optionally, you can add icons to the links -->
<li id="dashboard"><a href="dashboard"><i class="fa fa-bar-chart"></i> <span>Dashboard</span></a></li>
<li id="type-tab"><a href="type"><i class="fa fa-pencil"></i> <span>Type</span></a></li>
<li id="editor-tab"><a href="editor"><i class="fa fa-file-text"></i> <span>Editor</span></a></li>
<li id="posts-tab"><a href="posts"><i class="fa fa-table"></i> <span>Posts</span></a></li>
<?php 
// <li class="treeview">
// <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
// <span class="pull-right-container">
// <i class="fa fa-angle-left pull-right"></i>
// </span>
// </a>
// <ul class="treeview-menu">
// <li><a href="#">Link in level 2</a></li>
// <li><a href="#">Link in level 2</a></li>
// </ul>
// </li>
?>
</ul>
<script>
<?php 
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


if (strpos($url,'editor') !== false) {
	echo 'document.getElementById("editor-tab").className += " active";';
} else if (strpos($url,'dashboard') !== false) {
	echo 'document.getElementById("dashboard").className += " active";';
} else if (strpos($url,'type') !== false) {
	echo 'document.getElementById("type-tab").className += " active";';
} else if (strpos($url,'posts') !== false) {
	echo 'document.getElementById("posts-tab").className += " active";';
}
?>
</script>
<!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>