 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/analysis/Promotion'); ?>">Media Promosi</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>


        </div>
      </div>
    </div>
    
    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Media Promosi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- --------------- Form action , Name ------------------------------------ -->
               <?php foreach($tbl_media_promosi as $row){ ?>
             <form action="<?php echo base_url(). 'Admin/Analysis/EditPromotion'; ?>" method="POST" enctype="multipart/form-data">
               
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Media Promosi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_mp"  value="<?php echo $row->nama_mp ?>" placeholder="Nama Media Promosi" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Strenght</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="str_mp"  value="<?php echo $row->str_mp ?>" placeholder="Strenght" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Weakness</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="wks_mp"  value="<?php echo $row->wks_mp ?>" placeholder="Weakness" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Opportunity</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="oprt_mp"  value="<?php echo $row->oprt_mp ?>" placeholder="Opportunity" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Threat</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="thrt_mp"  value="<?php echo $row->thrt_mp ?>" placeholder="Threat" required="required">
                  </div>
                 
                  <?php } ?>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="simpan" name="save">Simpan</button>
                  <a class="btn btn-success" href="<?php echo base_url('Admin/Analysis/Promotion'); ?>">Kembali</a>
                  
                </div>
              </form>
            </div>
    </section>
    <!-- /.content -->

  </div>

