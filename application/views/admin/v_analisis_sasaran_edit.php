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
      <div class="card" style="width: 95%;">
            <div class="card-header">
              <h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-book" style="margin-right: 10px;"></i> Edit Artikel</h4>
            </div>
            <div class="card-body">

          <?php foreach($tbl_sasaran as $row){ ?>
          <form action="<?php echo base_url(). 'Admin/Analysis/EditTargetAction'; ?>" method="POST" enctype="multipart/form-data">

      <div class="form-group">
        <input type="text" class="form-control" placeholder="Id Artikel" name="id_ssrn" value="<?php echo $row->id_ssrn ?>">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Id Artikel" name="nama_ssrn" value="<?php echo $row->nama_ssrn ?>">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Id Artikel" name="str_ssrn" value="<?php echo $row->str_ssrn ?>">
      </div>
          <div class="form-group">
        <input type="text" class="form-control" placeholder="Id Artikel" name="wks_ssrn" value="<?php echo $row->wks_ssrn ?>">
      </div>
          <div class="form-group">
        <input type="text" class="form-control" placeholder="Id Artikel" name="oprt_ssrn" value="<?php echo $row->oprt_ssrn ?>">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Id Artikel" name="thrt_ssrn" value="<?php echo $row->thrt_ssrn ?>">
      </div>
          
          
          
        
          
          

          <div class="tombol" style="float: right;">
          <a style="width: 100px;" class="btn btn-danger" href="<?php echo base_url('index.php/admin/c_artikel'); ?>" role="button">Kembali</a>
          <button style="width: 100px;margin-left: 10px;" type="submit" class="btn btn-primary" value="simpan" name="save">Save</button>
        </div>
        </form>
        <?php } ?>

      </div>
    </div>
    </section>
    <!-- /.content -->

  </div>

