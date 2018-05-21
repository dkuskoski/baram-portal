<?php include 'header.blade.php';?>
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <?php include 'lte/nav.blade.php';?>
    
    <section class="content-header">
      <h1>
        Здраво <?php echo '  ' . Auth::user()->f_name . ' ' . Auth::user()->l_name;?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
                <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<form id="logout-form" action="{{ url('/logout') }}" method="POST"
							style="display: none;">{{ csrf_field() }}</form>
							
<?php include 'lte/footer.blade.php';?>