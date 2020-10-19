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
               <?php foreach($tbl_sasaran as $row){ ?>
             <form action="<?php echo base_url(). 'Admin/Analysis/EditTargetAction'; ?>" method="POST" enctype="multipart/form-data">
               
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Media Promosi</label>
                    <input type="text" class="form-control"  name="nama_ssrn"  value="<?php echo $row->nama_ssrn ?>" placeholder="Nama Media Promosi" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Strenght</label>
                    <input type="text" class="form-control"  name="str_ssrn"  value="<?php echo $row->str_ssrn ?>" placeholder="Strenght" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Weakness</label>
                    <input type="text" class="form-control"  name="wks_ssrn"  value="<?php echo $row->wks_ssrn ?>" placeholder="Weakness" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Opportunity</label>
                    <input type="text" class="form-control"  name="oprt_ssrn"  value="<?php echo $row->oprt_ssrn ?>" placeholder="Opportunity" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Threat</label>
                    <input type="text" class="form-control"  name="thrt_ssrn"  value="<?php echo $row->thrt_ssrn ?>" placeholder="Threat" required="required">
                  </div>
                 
                  <?php } ?>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a class="btn btn-success" href="<?php echo base_url('Admin/Analysis/Promotion'); ?>">Kembali</a>
                  <button type="submit" class="btn btn-primary" value="simpan" name="save">Simpan</button>

                </div>
              </form>
            </div>
    </section>
    <!-- /.content -->

  </div>

