
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Analisis Media Promosi</h1> <br/>
            <a class="btn btn-primary" href="<?php echo base_url('Admin/Analysis/AddPromotion') ?>">Tambah Data</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/analysis/Promotion') ?>">Master Analisis</a></li>
              <li class="breadcrumb-item active">Media Promosi</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    
    <section class="content">
      <div class="card"></div>
            <div class="card">                      
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>                  
                  <tr>
                   <th style="width: 10px">No</th>
                    <th style="width: 100px">Media Promosi</th>
                    <th style="width: 100px">Strenght</th>
                    <th style="width: 100px">Weakness</th>
                    <th style="width: 100px">Opportunity</th>
                    <th style="width: 100px">Threat</th>
                    <th style="width: 200px">Aksi</th>
                  </tr>

                  </thead>
                  <tbody>
                                      <!-- pembuka -->
             <?php $nomor=1; ?>
             <?php foreach($tbl_media_promosi as $row):?>
            
            <tr>
              <th><?php echo $nomor; ?></th>
              <td><?php echo $row->nama_mp; ?></td>
              <td><?php echo $row->str_mp; ?></td>
              <td><?php echo $row->wks_mp; ?></td>
              <td><?php echo $row->oprt_mp; ?></td>
              <td><?php echo $row->thrt_mp; ?></td>
              <td><a class="btn btn-success" href="<?php echo base_url('Admin/Analysis/EditPromotion/'.$row->id_mp) ?>">Edit</a>
                            <a class="btn btn-danger" href="<?php echo base_url('Admin/Analysis/DeleteMP/'.$row->id_mp) ?>">Hapus</a></td>   
                      </tr></td>    
             
              
            </tr>

            <?php $nomor++ ?>
            <?php endforeach; ?>
          <!-- penutup -->    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            
            </div>
            <!-- /.card -->
       
    </section>
    <!-- /.content -->

  </div>

