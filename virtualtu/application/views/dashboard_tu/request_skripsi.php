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
                    <div class="col-md-12"><h4>Tanggal aktivitas mahasiswa : <?php echo $p_skripsi['tanggal_log'];?></h4></div>
                    
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" type="text" class="form-control" value="<?php echo $p_skripsi['nama_mahasiswa'];?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Nim</label>
                    <input name="nim" type="text" class="form-control" value="<?php echo $p_skripsi['nim'];?>" disabled>
                  </div>  
                    <div class="form-group">
                      <label>Judul Proposal</label>
                      <input name="nim" type="text" class="form-control" value="<?php echo $p_skripsi['judul_proposal'];?>" disabled>
                    </div> 
                    <div class="form-group">
                      <label>Nilai TOEFL</label>
                      <input name="nilai_toefl" type="text" class="form-control" value="<?php echo $p_skripsi['nilai_toefl'];?>" disabled>
                    </div>
                    
                        <div class="form-group">
                    <label>Dosen Wali</label>
                    <select class="form-control select2" style="width: 100%;" disabled>
                      <option selected="selected"><?php echo $p_skripsi['dosen_wali'];?></option>
                    </select>
                  </div><!-- /.form-group --> 
                      <div class="form-group">
                    <label>Dosen Pembimbing 1</label>
                    <select class="form-control select2" style="width: 100%;" disabled>
                      <option selected="selected"><?php echo $p_skripsi['pembimbing_1'];?></option>
                    </select>
                  </div><!-- /.form-group --> 
                    <div class="form-group">
                        <label>Dosen Pembimbing 2</label>
                        <select class="form-control select2" style="width: 100%;" disabled>
                        <option selected="selected"><?php echo $p_skripsi['pembimbing_2'];?></option>
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
                      <input name="to" class="form-control" placeholder="To:" value="<?php echo $p_skripsi['email'];?>">
                  </div>
                  <div class="form-group">
                    <input name="subjek" class="form-control" placeholder="Subject:" value="<?php echo "Respon TU kategori pengajuan skripsi NO ID #".$p_skripsi['id_log_tu'];?>">
                  </div>
                  <div class="form-group">
                    <textarea name="isi" id="compose-textarea" class="form-control" style="height: 300px">
                      <h4>Status request ganti jadwal dengan NO ID #<?php echo $p_skripsi['id_log_tu']; ?> diterima</h4>
                      <p>Selamat Pagi <?php echo $p_skripsi['nama_mahasiswa'];?></p>
                      <p>Anda sudah melakukan pengajuan skripsi pada tanggal <?php echo $p_skripsi['tanggal_log'];?></p>
                      <p>Status pengajuan proposal anda : diterima</p>
                      <p>Jadi berikut disampaikan</p>
                      <p>Kepada</p>
                      <p>Ybs <?php echo $p_skripsi['nama_mahasiswa'];?></p>
                      <br>
                      <p>Assalamualaikum Wr Wb</p>
                      <p>Dengan ini kami sampaikan bahwa sidang skripsi saudara <?php echo $p_skripsi['nama_mahasiswa'];?> dilaksanakan pada tanggal ( TGL/BULAN/TAHUN) di Labkom 4 pukul (WAKTU).</p>
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
      </div><!-- /.content-wrapper -->