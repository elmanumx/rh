<?php 
  include '../../config/config.php';

  include ROOT.'web/static/header.php'
 ?>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

<?php 
  include ROOT.'web/static/navbar.php';
 ?>

 <script src="<?php echo URL; ?>web/assets/dist/js/ajax/ajaxSucursal.js"></script>
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <?php 
    include ROOT.'web/static/aside.php';
   ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
      
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Datos de Sucursales</h3>
               <button type="button" class="btn btn-app pull-right cleanForm" data-toggle="modal" data-target="#modal-1">
                <i class="fa  fa-plus-circle"></i> Agregar
              </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Logo</th>
                  <th>Nombre</th>
                  <th>Razon social</th>
                  <th>Registro Patronal</th>
                  <th>Direccion</th>
                  <th>Sitio Web</th>
                  <th>Telefono</th>
                  <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                  <td><img src="http://behoteles.com/assets/logo-footer.png" width="50px"></td>
                  <td>Be Tulum</td>
                  <td>Embedded devices</td>
                  <td>ia molestias similique totam, fuga nam iure, praesentium maxime nisi animi! Ex, culpa.</td>
                  <td>ia molestias similique totam, fuga nam iure,estias similique totam, fuga nam iure praesentium maxime nisi animi! Ex, culpa.</td>
                  <td>www.betulum.com</td>
                  <td>984 125 3694</td>
                  <td><button type="button" class="btn  btn-warning btn-xs"><span class="fa fa-edit"></span> Editar</button></td>
                  <td><button type="button" class="btn  btn-danger btn-xs"><span class="fa fa-remove"></span> Editar</button></td>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <div class="modal fade" id="modal-1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Sucursal</h4>
          </div>
          <div class="modal-body">
            <?php include ROOT."web/sucursal/form.php"; ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" onclick="sendForm('formSucursal')">Guardar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


<?php 
  include ROOT.'web/static/footer.php';
 ?>