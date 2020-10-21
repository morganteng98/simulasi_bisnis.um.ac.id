 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Analisis Sasaran</h1> <br/>
            <a class="btn btn-primary" href="<?php echo base_url('Admin/Analysis/AddTarget') ?>">Tambah Data</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/analysis/Target') ?>">Master Analisis</a></li>
              <li class="breadcrumb-item active">Sasaran</li>
            </ol>
          </div>


        </div>
      </div>
    </div>
    
    <!-- Main content -->
    <section class="content">
      <div class="card"></div>
            <!-- /.card -->
            <div class="card">                      
           
              <!-- /.card-header -->
            
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  
                  <tr>
                   <th style="width: 10px">No</th>
                    <th style="width: 100px">Sasaran</th>
                    <th style="width: 100px">Strenght</th>
                    <th style="width: 100px">Weakness</th>
                    <th style="width: 100px">Opportunity</th>
                    <th style="width: 100px">Threat</th>

                    <th style="width: 200px">Aksi</th>
                
                  </tr>

                  </thead>
                  <tbody>
                                      <!-- pembuka -->
             <?php $nomor=1; ?>
             <?php foreach($tbl_sasaran as $row):?>
            
            <tr>
              <th><?php echo $nomor; ?></th>
              <td><?php echo $row->nama_ssrn; ?></td>
              <td><?php echo $row->str_ssrn; ?></td>
              <td><?php echo $row->wks_ssrn; ?></td>
              <td><?php echo $row->oprt_ssrn; ?></td>
              <td><?php echo $row->thrt_ssrn; ?></td>
              <td><a class="btn btn-success" href="<?php echo base_url('Admin/Analysis/EditTarget/'.$row->id_ssrn) ?>"><i class="fas fa-edit"></i>Edit</a>
                         
<a onclick="deleteConfirm('<?php echo base_url('Admin/Analysis/delete_target/'.$row->id_ssrn) ?>')" href="#!" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a></td>
                       </td>   
                      </tr></td>    
             
              
            </tr>

            <?php $nomor++ ?>
            <?php endforeach; ?>
          <!-- penutup -->    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            
            </div>
            <!-- /.card -->
       
    </section>
    <!-- /.content -->

  </div>

<script>
  function deleteConfirm(url)
  {
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }

</script>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/admin//plugins/jquery/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/admin//plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/admin//plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/admin//plugins/chart.js/Chart.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/admin//plugins/sparklines/sparkline.js'); ?>"></script>
<!-- JQVMap -->
<script src="<?php echo base_url('assets/admin//plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin//plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/admin//plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/admin//plugins/moment/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin//plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('assets/admin//plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
<!-- Summernote -->
<script src="<?php echo base_url('assets/admin//plugins/summernote/summernote-bs4.min.js'); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('assets/admin//plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/admin//dist/js/adminlte.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/admin//dist/js/pages/dashboard.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->



<!-- DataTables -->
<script src="<?php echo base_url('assets/admin//plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin//plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin//plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin//plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/admin//dist/js/demo.js'); ?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


