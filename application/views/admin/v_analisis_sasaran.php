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
              <td><a class="btn btn-success" href="<?php echo base_url('Admin/Analysis/EditTarget/'.$row->id_ssrn) ?>">Edit</a>
                         <a class="btn btn-danger" href="<?php echo base_url('Admin/Analysis/delete_target/'.$row->id_ssrn) ?>">Hapus</a></td>   
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

