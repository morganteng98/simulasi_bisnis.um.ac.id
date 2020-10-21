<!-- fix -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/Analysis/Promotion'); ?>">Media Sasaran</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

<section class="content">
 
    <div class="card">
              <div class="card-body">
      
        <?php foreach($tbl_sasaran as $row){ ?>
        <form action="<?php echo base_url(). 'Admin/Analysis/EditPromotionAction'; ?>" method="POST" enctype="multipart/form-data">
      <div class="card-body">
        <div class="form-group" hidden>
            <input type="text" class="form-control" placeholder="" name="id_mp" value="<?php echo $row->id_mp ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Media Sasaran</label>
            <input type="text" class="form-control" placeholder="Media Sasaran" name="nama_ssrn" value="<?php echo $row->nama_ssrn ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Strenght Sasaran</label>
            <input type="text" class="form-control" placeholder="Strenght Sasaran" name="str_ssrn" value="<?php echo $row->str_ssrn ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Weakness Sasaran</label>
            <input type="text" class="form-control" placeholder="Weakness Sasaran" name="wks_ssrn" value="<?php echo $row->wks_ssrn ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Opportunty Sasaran</label>
            <input type="text" class="form-control" placeholder="Opportunty Sasaran" name="oprt_ssrn" value="<?php echo $row->oprt_ssrn ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Threat Sasaran</label>
            <input type="text" class="form-control" placeholder="Threat Sasaran" name="thrt_ssrn" value="<?php echo $row->thrt_ssrn ?>">
        </div>
    <div class="card-footer">
      <a  class="btn btn-success" href="<?php echo base_url('Admin/Analysis/Promotion'); ?>" role="button">Kembali</a>
      <button type="reset" class="btn btn-danger">Reset</button>
      <button type="submit" class="btn btn-primary">Simpan</button>    
    </div>
        </form>
        </div>
    </div>
        <?php } ?>
      
    </section>
  </div>