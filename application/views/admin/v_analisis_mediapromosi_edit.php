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
              <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/Analysis/Promotion'); ?>">Media Promosi</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

<section class="content">
 <div class="card card-primary">
    <div class="card-header"><h4>Form Edit Media Promosi</h4></div>
      <div class="card-body"> 
        <?php foreach($tbl_media_promosi as $row){ ?>
        <form action="<?php echo base_url(). 'Admin/Analysis/EditPromotionAction'; ?>" method="POST" enctype="multipart/form-data">
      <div class="card-body">
        <div class="form-group" hidden>
            <input type="text" class="form-control" placeholder="" name="id_mp" value="<?php echo $row->id_mp ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Media Promosi</label>
            <input type="text" class="form-control" placeholder="Media Promosi" name="nama_mp" value="<?php echo $row->nama_mp ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Strenght Promosi</label>
            <input type="text" class="form-control" placeholder="Strenght Promosi" name="str_mp" value="<?php echo $row->str_mp ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Weakness Promosi</label>
            <input type="text" class="form-control" placeholder="Weakness Promosi" name="wks_mp" value="<?php echo $row->wks_mp ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Opportunty Promosi</label>
            <input type="text" class="form-control" placeholder="Opportunty Promosi" name="oprt_mp" value="<?php echo $row->oprt_mp ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Threat Promosi</label>
            <input type="text" class="form-control" placeholder="Threat Promosi" name="thrt_mp" value="<?php echo $row->thrt_mp ?>">
        </div>
        </div>
    </div>
    <div class="card-footer">
      <a  class="btn btn-success" href="<?php echo base_url('Admin/Analysis/Promotion'); ?>" role="button">Kembali</a>
      <button type="reset" class="btn btn-danger">Reset</button>
      <button type="submit" class="btn btn-primary">Simpan</button>    
    </div>
        </form>
        <?php } ?>
      </div>
    </section>
  </div>