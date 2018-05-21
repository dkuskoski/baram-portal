<!-- REQUIRED JS SCRIPTS -->

<!-- DataTables -->
<script src="lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="lte/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Sparkline -->
<script src="lte/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="lte/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="lte/dist/js/app.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="lte/plugins/fastclick/fastclick.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="lte/dist/js/demo.js"></script>
<?php 
// Optionally, you can add Slimscroll and FastClick plugins.
// Both of these plugins are recommended to enhance the
// user experience. Slimscroll is required when using the
// fixed layout.
?>

<script src="js/fullscreen.js"></script>


<script>

  $(function () {
//     $("#example1").DataTable();
    $('#posts_table').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>

<style>
body:-webkit-full-screen {
  width: 100%;
}
</style>

<!-- Main Footer -->
<!--   <footer class="main-footer">
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer> -->
</body>
</html>
