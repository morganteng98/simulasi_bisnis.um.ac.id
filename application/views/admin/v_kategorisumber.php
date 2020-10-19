 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kategori sumber</h1> <br/>
            <a class="btn btn-primary" href="<?php echo base_url('admin/product/category_sb_add') ?>">Tambah Data</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/analysis/Product') ?>">Master Analisis</a></li>
              <li class="breadcrumb-item active">Produk</li>
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
                      <th>No</th>
                      <th>Sumber Bahan</th>
                    
                      
                      
                    </tr>
                  </thead>
                  <tbody>
             
             <!-- pembuka -->
             <?php $nomor=1 ?>
             <?php foreach($tbl_sumber_bahan as $row):?>
            
            <tr>
              <th><?php echo $nomor; ?></th>
              <td><?php echo $row->nama_sumber; ?></td>
              
              <td><a class="btn btn-success" href="<?php echo base_url('Admin/Analysis/EditSB/'.$row->id_sumber) ?>">Edit</a>
                            <a class="btn btn-danger" href="<?php echo base_url('Admin/Analysis/delete_SB/'.$row->id_sumber) ?>">Hapus</a></td>   
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

