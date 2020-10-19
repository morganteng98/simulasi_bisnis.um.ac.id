 <!-- Content Wrapper. Contains page content -->
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Master User</h1> <br/>
            <a class="btn btn-primary" href="<?php echo base_url('admin/user/add') ?>">Tambah Data</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/user') ?>">Master User</a></li>
              <li class="breadcrumb-item active">Produk</li>
            </ol>
          </div>


        </div>
      </div>
    </div>

<section class="content">
      <div class="card"></div>
            <!-- /.card -->
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  
                  <tr>
                   <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Aksi</th>
                
                  </tr>

                  </thead>
                  <tbody>
                  <?php $nomor=1 ?>
                  <?php foreach($tbl_user as $row){ ?>
                        <tr>
                          <td><?php echo $nomor ?></td>
                          <td><?php echo $row->username_user?></td>
                          <td><?php echo $row->email ?></td>
                          <td><a class="btn btn-danger" href="#">Hapus</a></td>   
                      </tr></td>    
                        </tr>
                  <?php $nomor++ ?>                 
                  <?php } ?>
                  </tbody>
                  <!-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot> -->
                </table>
              </div>
              <!-- /.card-body -->
            
            </div>
            <!-- /.card -->
    </section>
  </div>