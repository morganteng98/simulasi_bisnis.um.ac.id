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
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/analysis/Target'); ?>">Sasaran</a></li>
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
                <h3 class="card-title">Sasaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- --------------- Form action , Name ------------------------------------ -->
              <form action="<?php echo base_url('Admin/Analysis/AddTargetAction'); ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Sasaran</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_ssrn" placeholder="Nama Sasaran" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Strenght</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="str_ssrn" placeholder="Strenght" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Weakness</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="wks_ssrn" placeholder="Weakness" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Opportunity</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="oprt_ssrn" placeholder="Opportunity" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Threat</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="thrt_ssrn" placeholder="Threat" required="required">
                  </div>
                 
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a class="btn btn-success" href="<?php echo base_url('Admin/Analysis/Target'); ?>">Kembali</a>
                  <button type="submit" class="btn btn-primary" name="save">Tambah</button>
                  
                </div>
              </form>
            </div>
    </section>
    <!-- /.content -->

  </div>

