 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Master User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Master User</a></li>
              <li class="breadcrumb-item active">Admin</li>
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
            <a class="btn btn-success" style="float: right" href="<?php echo base_url('Admin/Profile/add') ?>">Tambah</a>
              <!-- /.card-header -->
            
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  
                  <tr>
                   <th>No</th>
                    <th>Username</th>
                    <th>Nama Lengkap</th>
                    <th>Aksi</th>
                
                  </tr>

                  </thead>
                  <tbody>
                    <?php $nomor=1 ?>
                    <?php foreach($tbl_admin as $row){ ?>
                      <tr>
                        <td><?php echo $nomor ?></td>
                        <td><?php echo $row->username_admin ?></td>
                        <td><?php echo $row->nama_admin ?></td>
                        <td><a class="btn btn-success" href="<?php echo base_url('Admin/Profile/edit') ?>">Edit</a></td>   
                      </tr>
                      <?php $nomor++ ?>
                    <?php } ?>                
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            
            </div>
            <!-- /.card -->
       
    </section>
    <!-- /.content -->

  </div>

