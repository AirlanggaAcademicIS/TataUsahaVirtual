<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Detail
            <small>absensi mahasiswa</small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Log TU</li>
            <li>Detail Absensi</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
                <div class="box-tools pull-right">
                    <div class="col-md-12"></div>
                    <div class="col-md-12"><h4>Tanggal aktivitas mahasiswa : <?php echo $absensi['tanggal_log'];?></h4></div>
                    
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" type="text" class="form-control" value="<?php echo $absensi['nama_mahasiswa'];?>" disabled>
                  </div> 
                   <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label>Tanggal absen</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                        <input name="hari_absen" type="text" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask value="<?php echo $absensi['hari_absen']?>" disabled>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  <div class="form-group">
                    <label>Nim</label>
                    <input id="nim" name="nim" type="text" class="form-control" value="<?php echo $absensi['nim'];?>" disabled>
                  </div> 
                  <!-- textarea -->
                    <div class="form-group">
                      <label>Keterangan Absen</label>
                      <textarea name="keterangan_absen" class="form-control" disabled rows="13"><?php echo $absensi['keterangan_absen']?></textarea>
                    </div>
                </div><!-- /.col -->
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
                      <input name="to" class="form-control" placeholder="To:" value="<?php echo $absensi['email'];?>">
                  </div>
                  <div class="form-group">
                    <input name="subjek" class="form-control" placeholder="Subject:" value="<?php echo "Respon TU kategori absensi NO ID #".$absensi['id_log_tu'];?>">
                  </div>
                  <div class="form-group">
                    <textarea name="isi" id="compose-textarea" class="form-control" style="height: 300px">
                      <h4>Status request ganti jadwal dengan NO ID #<?php echo $absensi['id_log_tu']; ?> diterima</h4>
                      <p>Selamat Pagi <?php echo $absensi['nama_mahasiswa'];?></p>
                      <p>Anda sudah melakukan request pengajuan surat izin pada tanggal <?php echo $absensi['tanggal_log'];?></p>
                      <p>Status request pengajuan anda : diterima dan sedang diproses.</p>
                      <p>Terima kasih dan selamat menikmati hari anda.</p>
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
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.box-body -->
            <div class="box-footer">
              Note : Selalu pastikan komputer TU terhubung dengan internet saat akan merespon Mahasiswa.
            </div>
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->