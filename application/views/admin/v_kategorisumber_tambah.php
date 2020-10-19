 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/product/category_sb'); ?>">Sumber Bahan</a></li>
              <li class="breadcrumb-item active">Tambah</li>
            </ol>
          </div>


        </div>
      </div>
    </div>
    
    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">sumber bahan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- --------------- Form action , Name ------------------------------------ -->
              <form action="<?php echo base_url('Admin/product/category_sb_addaction'); ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Sumber</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_sumber" placeholder="Nama sumber" required="required">
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a class="btn btn-success" href="<?php echo base_url('Admin/Product/category_sb'); ?>">Kembali</a>
                  <button type="submit" class="btn btn-primary" name="save">Tambah</button>
                  
                </div>
              </form>
            </div>
    </section>
    <!-- /.content -->

  </div>

