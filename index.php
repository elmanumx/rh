<?php 
  include 'config/config.php';
  include ROOT.'web/static/header.php'
 ?>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

<?php 
  include ROOT.'web/static/navbar.php';
 ?>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <?php 
    include ROOT.'web/static/aside.php';
   ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php 
  include ROOT.'web/static/footer.php';
 ?>