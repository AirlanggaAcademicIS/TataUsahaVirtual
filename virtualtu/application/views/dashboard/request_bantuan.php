<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Request
            <small>bantuan dana dan fasilitas</small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Log TU</li>
            <li>Request Bantuan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <?php 

          if(isset($ket)){
          echo "
          <div class='alert alert-success alert-dismissable'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h4>  <i class='icon fa fa-check'></i> Input Success</h4>
                    Data sudah terinput dalam database. Silakan lanjutkan pekerjaan anda.
                  </div>";
                }
                  ?>

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
                <div class="box-tools pull-right">
                    <div class="col-md-12"></div>
                    <div class="col-md-12"><h4>Today : <?php echo date('d-m-Y');?></h4></div>
                    
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                  <form action="<?php echo base_url()."mahasiswa/log_tu_bantuan/".$nim; ?>" method="post">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" type="text" class="form-control" value="<?php echo $nama_mahasiswa;?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Nim</label>
                    <input name="nim" type="text" class="form-control" value="<?php echo $nim;?>" disabled>
                  </div>  
                  <div class="form-group">
                    <label>Kepada Bagian</label>
                    <select name="kepada_bagian" class="form-control select2" style="width: 100%;">
                      <option selected="selected">--Pilih--</option>
                      <option value="Admin Lab">Admin Lab</option>
                      <option value="Sarana Prasana">Sarana Prasana</option>
                      <option value="Sistem Informasi Fakultas">Sistem Informasi Fakultas</option>
                      <option value="Tata Usaha Pusat">Tata Usaha Pusat</option>
                    </select>
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Dosen Wali</label>
                    <select name="dosen_wali" class="form-control select2" style="width: 100%;">
                      <option selected="selected">--Pilih--</option>
                      <?php                      
                        for($i=0; $i<$jumlah; $i++){
                            echo "<option value='".$dosen[$i]['id_dosen']."'>".$dosen[$i]['nama_dosen']."</option>";
                        }
                      ?>
                    </select>
                  </div><!-- /.form-group -->
                  <!-- textarea -->
                    <div class="form-group">
                      <label>Deskripsi</label>
                      <textarea name="deskripsi" class="form-control" rows="3" placeholder="Text here ..."></textarea>
                    </div>
                  <div class="form-group">
                  <button type="submit" class="btn btn-info pull-right">Submit</button>
                  </div>
                </div><!-- /.col -->
                 </form>
              </div><!-- /.row -->
            </div><!-- /.box-body -->
            <div class="box-footer">
              Note : Jika ada yang kurang jelas silakan menghubungi TU yang sedang bertugas berjaga.
            </div>
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->