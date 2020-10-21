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
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/analysis/Promotion'); ?>">Produk</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>


        </div>
      </div>
    </div>
    
    <!-- Main content -->
    <section class="content">
      <div class="card">
               <?php foreach($tbl_produk as $row){ ?>
             <form action="<?php echo base_url('index.php/Admin/Analysis/EditProductAction'); ?>" method="POST" enctype="multipart/form-data">
               
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Produk</label>
                    <input type="text" class="form-control"  name="nama_produk"  value="<?php echo $row->nama_produk ?>" placeholder="Nama Produk" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Strenght</label>
                    <input type="text" class="form-control"  name="str_produk"  value="<?php echo $row->str_produk ?>" placeholder="Strenght" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Weakness</label>
                    <input type="text" class="form-control"  name="wks_produk"  value="<?php echo $row->wks_produk ?>" placeholder="Weakness" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Opportunity</label>
                    <input type="text" class="form-control"  name="oprt_produk"  value="<?php echo $row->oprt_produk ?>" placeholder="Opportunity" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Threat</label>
                    <input type="text" class="form-control"  name="thrt_produk"  value="<?php echo $row->thrt_produk ?>" placeholder="Threat" required="required">
                  </div>
                 
                  <?php } ?>
                <div class="card-footer">
                  <!-- <a class="btn btn-success" href="<?php echo base_url('Admin/Analysis/Promotion'); ?>">Kembali</a> -->
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
    </section>
</div>

