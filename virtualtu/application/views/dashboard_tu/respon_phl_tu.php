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
                    <label>No Telp</label>
                    <input name="nomor" type="text" class="form-control" value="08131678999" disabled>
			      </div>
                  <div class="form-group">
                    <label>Nim</label>
                    <input name="nim" type="text" class="form-control" value="081311633027" disabled="disabled" />
                    <form id="form3" name="form3" method="post" action="../../../../../../hmmmm">
                      <label for="MATA KULIAH">MATA KULIAH </label>
                      <select name="MATA KULIAH" id="MATA KULIAH">
                        <option> </option>
                        <option value="PSI" selected="selected">PSI</option>
                        <option value="SPK">SPK</option>
                        <option value="RPL">RPL</option>
                      </select>
                      </select>
                      <label for="JUMLAH SKS">JUMLAH SKS </label>
                      <select name="select2" id="select2">
                        <option> </option>
                        <option value="2" selected="selected">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                      <label for="JUMLAH MAHASISWA">JUMLAH MAHASISWA</label>
                      <input name="JUMLAH MAHASISWA" type="text" id="JUMLAH MAHASISWA" value="50" />
                    </form>
                    </p>
Hari

<select name="select" id="select">
  <option> </option>
  <option value="Senin" selected="selected">Senin</option>
  <option value="Selasa">Selasa</option>
  <option value="Rabu">Rabu</option>
  <option value="Kamis">Kamis</option>
  <option value="Jumat">Jumat</option>
  <option value="Sabtu">Sabtu</option>
</select>
<p>
  <label for="Ruang Sebelum">Ruang Sebelum
  <input name="nomor2" type="text" id="nomor" value="302" />
  </label>
  <label for="Ruang request"> Ruang Request</label>
  <input name="nomor2" type="text" id="nomor2" value="322A" />
  </form>
</p>
<p>Jadwal Sebelum
  <input name="nomor4" type="text" id="nomor4" value="Kamis 1-2" />
  Jadwal Request
  <input name="nomor5" type="text" id="nomor5" value="Sabtu 3-4" />
</p>
<p>
  <input type="submit" name="button2" id="button2" value="Jadwal Dosen" />
  <input type="submit" name="button22" id="button22" value="Jadwal Ruangan" />
</p>
<form id="form4" name="form4" method="post" action="">
  <label for="button"></label>
  <input type="submit" name="button" id="button" value="OK" />
</form>
</div>  
                  <div class="form-group">
                    <label></label>
                  </div>
                </div><div class="col-md-6"></div>
                <!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.box-body -->
            <div class="box-footer">
              Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about the plugin.
            </div>
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->