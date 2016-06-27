<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Request
            <small>PHL</small>
          	</h1>
          	<ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Log TU</li>
            <li>Request PHL</li>
          </ol>
          </section>

        <!-- Main content -->
        <section class="content">
          <!-- SELECT2 EXAMPLE -->
          	<div class="box box-default">
            <div class="box-header with-border">
            <div class="box-tools pull-right">
            <div class="col-md-12"></div>
            <div class="col-md-12"><h4>Tanggal aktivitas mahasiswa : <?php echo $gantijadwal['tanggal_log'];?></h4></div>
            </div>
            </div><!-- /.box-header -->
            <div class="box-body">
             <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                       <label>Nama</label>
                       <input name="nama" type="text" class="form-control" value="<?php echo $gantijadwal['nama_mahasiswa'];?>" disabled>
                    </div>
                      <div class="form-group">
                          <label>Nim</label>
                          <input name="nim" type="text" class="form-control" value="<?php echo $gantijadwal['nim'];?>" disabled/>
                      </div>  
                      <div class="form-group">
                          <label>Mata Kuliah</label>
                          <select name="mata_kuliah" class="form-control select2" style="width: 100%;" disabled>
                              <option selected="selected"><?php echo $gantijadwal['mata_kuliah'];?></option>
                          </select>
                      </div>	
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Jumlah SKS</label>
                            <select name="jumlah_sks" class="form-control select2" style="width: 100%;" disabled>
                                <option selected="selected"><?php echo $gantijadwal['jumlah_sks'];?></option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label>Ruang Sebelum</label>
                          <input name="ruang_sebelumnya" type="text" class="form-control" value="<?php echo $gantijadwal['ruang_sebelumnya'];?>" disabled/>
                        </div>
                        <div class="form-group">
                           <label>Jadwal Sebelum</label>
                           <input name="jadwal_sebelumnya" type="text" class="form-control" value="<?php echo $gantijadwal['jadwal_sebelumnya'];?>" disabled/>
                       </div>
                    </div>    
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>Jumlah Mahasiswa</label>
                          <input name="jumlah_mahasiswa" type="number" class="form-control" value="<?php echo $gantijadwal['jumlah_mahasiswa'];?>" disabled />
                      </div>
                      <div class="form-group">
                          <label>Ruang Request</label>
                          <input name="ruang_request" type="text" class="form-control" value="<?php echo $gantijadwal['ruang_request'];?>" disabled/>
                      </div>
                      <div class="form-group">
                        <label>Jadwal Request</label> 
                        <input name="jadwal_request" type="text" class="form-control" value="<?php echo $gantijadwal['jadwal_request'];?>" disabled/>
                      </div>
                    </div>
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
                      <input name="to" class="form-control" placeholder="To:" value="<?php echo $gantijadwal['email'];?>">
                  </div>
                  <div class="form-group">
                    <input name="subjek" class="form-control" placeholder="Subject:" value="<?php echo "Respon TU kategori gantijadwal NO ID #".$gantijadwal['id_log_tu'];?>">
                  </div>
                  <div class="form-group">
                    <textarea name="isi" id="compose-textarea" class="form-control" style="height: 300px">
                      <h4>Status request ganti jadwal dengan NO ID #<?php echo $gantijadwal['id_log_tu']; ?> diterima</h4>
                      <p>Selamat Pagi <?php echo $gantijadwal['nama_mahasiswa'];?></p>
                      <p>Anda sudah melakukan request PHL pada tanggal <?php echo $gantijadwal['tanggal_log'];?></p>
                      <p>Status request phl anda : diterima</p>
                      <p>Untuk mata kuliah <?php echo $gantijadwal['mata_kuliah'];?> akan dilaksanakan pada <?php echo $gantijadwal['jadwal_request'];?> di ruang <?php echo $gantijadwal['ruang_request'];?></p>
                      <p>Mohon untuk tidak terlambat dalam menghadiri perkuliahan tersebut</p>
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
             </div><!-- /.col -->
           </div><!-- /.row -->
         </div><!-- /.box-body -->
        <div class="box-footer">
            Note : Selalu pastikan komputer TU terhubung dengan internet saat akan merespon Mahasiswa.
        </div>
        </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper