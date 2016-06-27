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
                  <form action="<?php echo base_url()."mahasiswa/log_tu_phl/".$nim; ?>" method="post">
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input name="nama" type="text" class="form-control" value="<?php echo $nama_mahasiswa;?>" disabled>
                    </div>
                    <div class="form-group">
                        <label>Mata Kuliah</label>
                        <select name="mata_kuliah" class="form-control select2" style="width: 100%;">
                            <option selected="selected">--Pilih--</option>
                            <option>Sitem Pendukung Keputusan</option>
                            <option>Rekayasa Perangkat Lunak</option>
                            <option>Audit</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jumlah SKS</label>
                        <select name="jumlah_sks" class="form-control select2" style="width: 100%;">
                            <option selected="selected">--Pilih--</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div> 
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label>Nim</label>
                          <input name="nim" type="text" class="form-control" value="<?php echo $nim;?>" disabled="disabled" />
                      </div> 
                      <div class="form-group">
                          <label>Jumlah Mahasiswa</label>
                          <input name="jumlah_mahasiswa" type="number" class="form-control"/>
                      </div>
                  </div><!-- /.col -->
                  </div><!-- /.row -->
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>Ruang Sebelum</label>
                              <input name="ruang_sebelumnya" type="text" class="form-control"/>
                          </div>
                          <div class="form-group">
                               <label>Jadwal Sebelum</label>
                               <input name="jadwal_sebelumnya" type="text" class="form-control" />
                           </div>
                      </div><!-- /.col -->
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>Ruang Request</label>
                              <input name="ruang_request" type="text" class="form-control" />
                          </div>
                            <div class="form-group">
                                <label>Jadwal Request</label> 
                                <input name="jadwal_request" type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <a href="<?php echo base_url()."pages/jadwalruang"; ?>"><input class="btn btn-info pulll-right" value="Jadwal Ruangan" /></a>
                                <a href="<?php echo base_url()."pages/jadwaldosen"; ?>"><input class="btn btn-info pulll-right" value="Jadwal Dosen" /></a>
                                <button type="submit" class="btn btn-info pull-right">Submit</button>
                            </div>
                            <div class="form-group">
                                
                            </div>
                      </div><!-- /.col -->
                  </div><!-- /.row -->
                    </form>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                 Note : Jika ada yang kurang jelas silakan menghubungi TU yang sedang bertugas berjaga.
                  </div>
                  </div><!-- /.box -->

                  </section><!-- /.content -->
                  </div><!-- /.content-wrapper -->