<?php include 'header.blade.php';?>
<div class="wrapper">

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
    
    <?php include 'lte/nav.blade.php';?>
    
    <section class="content-header">
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<canvas id="myChart"></canvas>

		</section>
		<!-- /.content -->
	</div>
	<script src="js/chart.min.js"></script>
	<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
	labels: [<?php echo implode(", ", $dates);?>],
    datasets: [{
      label: 'Visitors',
	data: [<?php echo implode(", ", $visitors);?>],
      backgroundColor: "rgba(131, 39, 150, 0.7)"
    }
]
  }
});
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