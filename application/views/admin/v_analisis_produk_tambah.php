  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/analysis/Product'); ?>">Media Promosi</a></li>
              <li class="breadcrumb-item active">Tambah</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    
    <section class="content">
      <div class="card">
          <form action="<?php echo base_url('Admin/Analysis/AddProductAction'); ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Media Promosi</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nama_produk" placeholder="Nama Media Promosi" required="required">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Strenght</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="str_produk" placeholder="Strenght" required="required">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Weakness</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="wks_produk" placeholder="Weakness" required="required">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Opportunity</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="oprt_produk" placeholder="Opportunity" required="required">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Threat</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="thrt_produk" placeholder="Threat" required="required">
              </div>             
              </div>
            <div class="card-footer">
         <!--    <a class="btn btn-success" href="<?php echo base_url('Admin/Analysis/Product'); ?>">Kembali</a> -->
              <button type="submit" class="btn btn-primary">Simpan</button>    
            </div>
         </form>
      </div>
    </section>
  </div>