<<<<<<< HEAD
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Request
            <small>pengajuan proposal</small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Log TU</li>
            <li>Request Pengajuan Proposal</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
                <div class="box-tools pull-right">
                    <div class="col-md-12"></div>
                    <div class="col-md-12"><h4>Tanggal aktivitas mahasiswa : <?php echo $p_proposal['tanggal_log'];?></h4></div>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" type="text" class="form-control" value="<?php echo $p_proposal['nama_mahasiswa'];?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Nim</label>
                    <input name="nim" type="text" class="form-control" value="<?php echo $p_proposal['nim'];?>" disabled>
                  </div>  
                    <div class="form-group">
                      <label>Judul Proposal</label>
                      <input name="nim" type="text" class="form-control" value="<?php echo $p_proposal['judul_proposal'];?>" disabled>
                    </div> 
                    <div class="form-group">
                      <label>Topik Proposal</label>
                      <select class="form-control select2" style="width: 100%;" disabled>
                      <option selected="selected"><?php echo $p_proposal['topik'];?></option>
                    </select>
                    </div>
                    
                        <div class="form-group">
                    <label>Dosen Wali</label>
                    <select class="form-control select2" style="width: 100%;" disabled>
                      <option selected="selected"><?php echo $p_proposal['dosen_wali'];?></option>
                    </select>
                  </div><!-- /.form-group --> 
                      <div class="form-group">
                    <label>Dosen Pembimbing 1</label>
                    <select class="form-control select2" style="width: 100%;" disabled>
                      <option selected="selected"><?php echo $p_proposal['pembimbing_1'];?></option>
                    </select>
                  </div><!-- /.form-group --> 
                    <div class="form-group">
                        <label>Dosen Pembimbing 2</label>
                        <select class="form-control select2" style="width: 100%;" disabled>
                        <option selected="selected"><?php echo $p_proposal['pembimbing_2'];?></option>
                        </select>
                    </div><!-- /.form-group --> 
                  </div>
                  <div class="col-md-8">
                     <div class="form-group">
                     <label>Respon to Mahasiswa</label>
                  </div>
                  <div class="box box-primary">
                <form action="<?php echo base_url()."tatausaha/sendmail" ?>" method="post" onsubmit="return confirm('Anda yakin untuk mengirim respon ke mahasiswa?');">
                <div class="box-header with-border">
                  <h3 class="box-title">Tulis Pesan Baru</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="form-group">
                      <input name="to" class="form-control" placeholder="To:" value="<?php echo $p_proposal['email'];?>">
                  </div>
                  <div class="form-group">
                    <input name="subjek" class="form-control" placeholder="Subject:" value="<?php echo "Respon TU kategori pengajuan proposal NO ID #".$p_proposal['id_log_tu'];?>">
                  </div>
                  <div class="form-group">
                    <textarea name="isi" id="compose-textarea" class="form-control" style="height: 300px">
                      <h4>Status request ganti jadwal dengan NO ID #<?php echo $p_proposal['id_log_tu']; ?> diterima</h4>
                      <p>Selamat Pagi <?php echo $p_proposal['nama_mahasiswa'];?></p>
                      <p>Anda sudah melakukan pengajuan proposal pada tanggal <?php echo $p_proposal['tanggal_log'];?></p>
                      <p>Status pengajuan skripsi anda : diterima</p>
                      <p>Jadi berikut disampaikan</p>
                      <p>Kepada</p>
                      <p>Ybs <?php echo $p_proposal['nama_mahasiswa'];?></p>
                      <br>
                      <p>Assalamualaikum Wr Wb</p>
                      <p>Dengan ini kami sampaikan bahwa sidang proposal saudara <?php echo $p_proposal['nama_mahasiswa'];?> dilaksanakan pada tanggal ( TGL/BULAN/TAHUN) di Labkom 4 pukul (WAKTU).</p>
                      <p>Diharap kedatangannya 30 Menit sebelum ujian tersebut dimulai.</p>
                      <p>Demikian, atas perhatiannya kami ucapkan terimakasih.</p>
                      <p>Wassalamualaikum Wr. Wb</p>
                      <p>Terima kasih</p>
                      <p>Petugas TU</p>
                    </textarea>
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="pull-right">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                  </div>
                </div><!-- /.box-footer -->
                </form>
                </div><!-- /. box -->
                  </div>
              </div>
            <div class="box-footer">
              Note : Selalu pastikan komputer TU terhubung dengan internet saat akan merespon Mahasiswa.
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
            <small>pengajuan proposal</small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Log TU</li>
            <li>Request Pengajuan Proposal</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

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
                      <label>Judul Proposal</label>
                      <textarea class="form-control" rows="3" placeholder="Text here ..."></textarea>
                    </div> 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Topik Proposal</label>
                      <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">--Pilih--</option>
                      <option>Data Mining</option>
                      <option>Penelitian Dosen</option>
                      <option>Rekayasan Sistem Informasi</option>
                      <option>Sistem Pendukung Keputusan</option>
                    </select>
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
                        <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">--Pilih--</option>
                        <?php                      
                        for($i=0; $i<$jumlah; $i++){
                            echo "<option value='".$dosen[$i]['id_dosen']."'>".$dosen[$i]['nama_dosen']."</option>";
                        }
                        ?>
                        </select>
                        </p>
                         <p>Syarat pengajuan sidang proposal :</p>
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
                         <div class="form-group">
        <a href="#"><input class="btn btn-info pulll-right" value="Jadwal Dosen" /></a>
        <a href="#"><input class="btn btn-info pulll-right" value="Jadwal Ruangan" /></a>
    </div>
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