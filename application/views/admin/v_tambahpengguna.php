<!-- --------------------------------- Fixx --------------------------------- -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/user/'); ?>">Master User</a></li>
              <li class="breadcrumb-item active">Tambah Data</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Tambah User</h3>
        </div>
        <form action="<?php echo base_url('Admin/user/addaction'); ?>" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" name="username_user" placeholder="Username" required="required">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Pendidikan</label>
              <input type="text" class="form-control" name="pendidikan" placeholder="Pendidikan" required="required">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Telepon</label>
              <input type="number" class="form-control" name="telepon" placeholder="Telepon" required="required">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Usaha</label>
              <input type="text" class="form-control" name="nama_usaha" placeholder="Nama Usaha" required="required">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Lokasi Usaha</label>
              <input type="text" class="form-control" name="lokasi_usaha" placeholder="Nama sumber" required="required">
            </div>  
          </div>
            <div class="card-footer">
              <a class="btn btn-success" href="<?php echo base_url('Admin/user/'); ?>">Kembali</a>
              <button type="submit" class="btn btn-primary" name="save">Tambah</button>
              </div>
          </form>
        </div>
    </section>
  </div>

