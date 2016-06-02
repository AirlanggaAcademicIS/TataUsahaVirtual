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
                  <!--<form action="<?php echo base_url(); ?>mahasiswa/log_tu_absensi/081311633027" method="post">-->
                <div class="col-md-6">
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
                </div><!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nim</label>
                    <input id="nim" name="nim" type="text" class="form-control" value="<?php echo $absensi['nim'];?>" disabled>
                  </div> 
                  <!-- textarea -->
                    <div class="form-group">
                      <label>Keterangan Absen</label>
                      <textarea name="keterangan_absen" class="form-control" disabled rows="3"><?php echo $absensi['keterangan_absen']?></textarea>
                    </div>
                  <div class="form-group">
                  <button class="btn btn-info pull-right">Respon</button>
                  </div>
                </div><!-- /.col -->
                <!--</form>-->
              </div><!-- /.row -->
            </div><!-- /.box-body -->
            <div class="box-footer">
              Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about the plugin.
            </div>
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->