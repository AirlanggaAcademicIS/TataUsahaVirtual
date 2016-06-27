<<<<<<< HEAD
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Request
            <small>pengajuan skripsi</small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Log TU</li>
            <li>Request Pengajuan Skripsi</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <?php 
          if(isset($ket)){
              if($ket=="success-input"){
                  echo "
                  <div class='alert alert-success alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <h4>  <i class='icon fa fa-check'></i> Input Success</h4>
                            Data sudah terinput dalam database. Silakan lanjutkan pekerjaan anda.
                          </div>";
              }
              else if($ket=="not-checked"){
                  echo "
                <div class='alert alert-warning alert-dismissable'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h4><i class='icon fa fa-warning'></i> Warning!</h4>
                    List yang disediakan perlu dilengkapi terlebih dahulu.
                  </div>
                ";
              }
              else if($ket=="not-full"){
                  echo "
                <div class='alert alert-warning alert-dismissable'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h4><i class='icon fa fa-warning'></i> Warning!</h4>
                    Isi lengkap form yang disediakan.
                  </div>
                ";
              }
          }
                  ?>
          <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
                <div class="box-tools pull-right">
                    <div class="col-md-12"></div>
                    <div class="col-md-12"><h4>Today : <?php echo date('Y-m-d H:i:s');?></h4></div>
                    
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
            <form action="<?php echo base_url()."mahasiswa/log_tu_skripsi/".$nim; ?>" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" type="text" class="form-control" value="<?php echo $nama_mahasiswa;?>" disabled>
                  </div>  
                </div><!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nim</label>
                    <input name="nim" type="text" class="form-control" value="<?php echo $nim;?>" disabled>
                  </div>                 
                </div><!-- /.col -->
              </div><!-- /.row -->
              
              <div class="row">
                  <div class="col-md-6">
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Judul Skripsi</label>
                      <select name="judul" class="form-control select2" style="width: 100%;">
                      <option selected="selected">--Pilih--</option>
                      <?php                      
                        for($i=0; $i<$jumlah_proposal; $i++){
                            echo "<option value='".$proposal[$i]['id_proposal_skripsi']."'>".$proposal[$i]['judul_proposal']."</option>";
                        }
                      ?>
                    </select>
                    </div> 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nilai toefl</label>
                      <input name="nilai_toefl" type="number" class="form-control">
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-10">
                      <div class="form-group">
                          <label>Sertakan kelengkapan berkas berikut saat mengumpulkan proposal!</label>
                      </div>
                      <div class="col-md-5">
                          <div class="form-group">
                     <label>
                      <input name="s1" type="checkbox" class="flat-red"> Pengajuan Usulan topik skripsi
                     </label>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                     <label>
                      <input name="s2" type="checkbox" class="flat-red"> Pengajuan dosen pembimbing
                     </label>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                     <label>
                      <input name="s3" type="checkbox" class="flat-red"> Bukti acc Dosen KBK
                     </label>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                     <label>
                      <input name="s4" type="checkbox" class="flat-red"> Bukti form konsultasi kedua dosbing (min. 12 ttd)
                     </label>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                     <label>
                      <input name="s5" type="checkbox" class="flat-red"> Bukti form pengajuan proposal skripsi (Ter acc)
                     </label>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                     <label>
                      <input name="s6" type="checkbox" class="flat-red"> Surat bukti pembayaran SOP
                     </label>
                  </div><!-- /.form-group -->
                      </div>
                      <div class="col-md-5">
                      <div class="form-group">
                     <label>
                      <input name="s7" type="checkbox" class="flat-red"> Tiga exemplar proposal skripsi (Setelah revisi dosbing)
                     </label>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                     <label>
                      <input name="s8" type="checkbox" class="flat-red"> KHS semester 1 - semester terakhir pengajuan
                     </label>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                     <label>
                      <input name="s9" type="checkbox" class="flat-red"> KRS yang memprogram skripsi
                     </label>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                     <label>
                      <input name="s10" type="checkbox" class="flat-red"> Sudah mengikuti mata kuliah Metode Penelitian
                     </label>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                     <label>
                      <input name="s11" type="checkbox" class="flat-red"> Sertifikat ELPT (450)
                     </label>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                     <label>
                      <input name="s12" type="checkbox" class="flat-red"> Minimal sudah menempuh 110 SKS
                     </label>
                  </div><!-- /.form-group -->
                  </div>
                  </div>
                  <div class="col-md-2">
                      <div class="form-group">
                          <button type="submit" class="btn btn-info pull-right">Submit</button>
                      </div>
                  </div>
              </div>
              </form>
            </div><!-- /.box-body -->
            <div class="box-footer">
              Note : Jika ada yang kurang jelas silakan menghubungi TU yang sedang bertugas berjaga.
            </div>
          </div><!-- /.box -->

        </section><!-- /.content -->
=======
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Request
            <small>pengajuan skripsi</small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Log TU</li>
            <li>Request Pengajuan Skripsi</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
                <div class="box-tools pull-right">
                    <div class="col-md-12"></div>
                    <div class="col-md-12"><h4>Today : <?php echo date('Y-m-d H:i:s');?></h4></div>
                    
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" type="text" class="form-control" value="Rio Ramadhan Dharmawan" disabled>
                  </div>
                  <div class="form-group">
                    <label>Nim</label>
                    <input name="nim" type="text" class="form-control" value="081311633027" disabled>
                  </div>  
                </div><!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Telepon</label>
                    <input name="telp" type="text" class="form-control" value="089678482575" disabled>
                  </div>                  
                </div><!-- /.col -->
              </div><!-- /.row -->
              
              <div class="row">
                  <div class="col-md-6">
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Judul Skripsi</label>
                      <textarea class="form-control" rows="3" placeholder="Text here ..."></textarea>
                    </div> 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nilai toefl</label>
                      <input type="number" class="form-control">
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                        <div class="form-group">
                    <label>Dosen Wali</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">--Pilih--</option>
                      <?php                      
                        for($i=0; $i<$jumlah; $i++){
                            echo "<option value='".$dosen[$i]['id_dosen']."'>".$dosen[$i]['nama_dosen']."</option>";
                        }
                      ?>
                    </select>
                  </div><!-- /.form-group --> 
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                    <label>Dosen Pembimbing 1</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">--Pilih--</option>
                      <?php                      
                        for($i=0; $i<$jumlah; $i++){
                            echo "<option value='".$dosen[$i]['id_dosen']."'>".$dosen[$i]['nama_dosen']."</option>";
                        }
                      ?>
                    </select>
                  </div><!-- /.form-group --> 
                    <div class="form-group">
                        <label>Dosen Pembimbing 2</label>
                        <p>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">--Pilih--</option>
                            <?php                      
                        for($i=0; $i<$jumlah; $i++){
                            echo "<option value='".$dosen[$i]['id_dosen']."'>".$dosen[$i]['nama_dosen']."</option>";
                        }
                        ?>
                          </select>
                        </p>
                        <p>Syarat pengajuan sidang skripsi :</p>
                        <p>
                          <input type="checkbox" name="Hard copy proposal" id="Hard copy proposal" />
                          <label for="Hard copy proposal">Hard copy proposal</label>
                        </p>
                        <p>
                          <input type="checkbox" name="Kartu konsultasi proposal skripsi" id="Kartu konsultasi proposal skripsi" />
                          <label for="Kartu konsultasi proposal skripsi">Kartu konsultasi proposal skripsi</label>
                        </p>
                        <p>
                          <input type="checkbox" name="Surat persetujuan dosen wali penyusunan proposal skripsi" id="Surat persetujuan dosen wali penyusunan proposal skripsi" />
                          <label for="Surat persetujuan dosen wali penyusunan proposal skripsi">Surat persetujuan dosen wali penyusunan proposal skripsi</label>
                        </p>
                        <form id="form1" name="form1" method="post" action="">
                          <input type="checkbox" name="sertifikat toefl" id="sertifikat toefl" />
                          <label for="sertifikat toefl">Sertifikat toefl</label>
                        </form>
                        <p>&nbsp;</p>
                    </div><!-- /.form-group --> 
                    <div class="form-group">
                  <button type="submit" class="btn btn-info pull-right">Submit</button>
                  </div>
                  </div>
              </div><!-- /.row -->
            </div><!-- /.box-body -->
            <div class="box-footer">
              Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about the plugin.
            </div>
          </div><!-- /.box -->

        </section><!-- /.content -->
>>>>>>> origin/master
      </div><!-- /.content-wrapper -->