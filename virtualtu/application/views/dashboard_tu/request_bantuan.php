<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Detail
            <small>bantuan dana dan fasilitas</small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Log TU</li>
            <li>Detail Bantuan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
                <div class="box-tools pull-right">
                    <div class="col-md-12"></div>
                    <div class="col-md-12"><h4>Tanggal aktivitas mahasiswa : <?php echo $bantuan['tanggal_log'];?></h4></div>
                    
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                  <!--<form action="<?php echo base_url(); ?>mahasiswa/log_tu_bantuan/081311633027" method="post">-->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" type="text" class="form-control" value="<?php echo $bantuan['nama_mahasiswa'];?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Nim</label>
                    <input id="nim" name="nim" type="text" class="form-control" value="<?php echo $bantuan['nim'];?>" disabled>
                  </div>  
                  <div class="form-group">
                    <label>Kepada Bagian</label>
                    <select name="kepada_bagian" class="form-control select2" style="width: 100%;" disabled>
                      <option selected="selected"><?php echo $bantuan['kepada_bagian'];?></option>
                    </select>
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Dosen Wali</label>
                    <select name="dosen_wali" class="form-control select2" style="width: 100%;" disabled="">
                      <option selected="selected"><?php echo $bantuan['nama_dosen'];?></option>
                    </select>
                  </div><!-- /.form-group -->
                  <!-- textarea -->
                    <div class="form-group">
                      <label>Deskripsi</label>
                      <textarea name="deskripsi" class="form-control" rows="3" disabled><?php echo $bantuan['deskripsi'];?></textarea>
                    </div>
                  <div class="form-group">
                  <button type="submit" class="btn btn-info pull-right">Submit</button>
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