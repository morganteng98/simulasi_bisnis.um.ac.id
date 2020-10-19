 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Produk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama Produk</th>
                      <th>Analisis</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody>
             
             <!-- pembuka -->
             <?php foreach($tbl_produk as $row):?>
            
            <tr>
              <th><?php echo $row->id_produk; ?></th>
              <td><?php echo $row->nama_produk; ?></td>
              <td></td>
              
            </tr>
            
            <?php endforeach; ?>
          <!-- penutup -->
       
                    
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- table 1 -->

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Sasaran</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Sasaran Produk</th>
                      <th>Analisis</th>
                    </tr>
                  </thead>
                      <tbody>
             
             <!-- pembuka -->
             <?php foreach($tbl_sasaran as $row):?>
            
            <tr>
              <th><?php echo $row->id_ssrn; ?></th>
              <td><?php echo $row->nama_ssrn; ?></td>
              <td></td>
            </tr>   
            
            <?php endforeach; ?>
          <!-- penutup -->
       
                    
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                  </tbody>
            
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- table 2 -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Media Promosi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Media Promosi</th>
                      <th>Analisis</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                      <!-- pembuka -->
                         <?php foreach($tbl_media_promosi as $row):?>
                        
                        <tr>
                          <th><?php echo $row->id_mp; ?></th>
                          <td><?php echo $row->nama_mp; ?></td>
                        </tr>
                        
                        <?php endforeach; ?>
                      <!-- penutup -->
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- table 3 -->
          
          

        </div>
        <!-- /.row -->
        
  
    </section>
    <!-- /.content -->
  </div>