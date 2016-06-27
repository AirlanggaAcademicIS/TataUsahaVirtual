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
                <div class="col-md-4">
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
                  <div class="form-group">
                    <label>Dosen Wali</label>
                    <select name="dosen_wali" class="form-control select2" style="width: 100%;" disabled="">
                      <option selected="selected"><?php echo $bantuan['nama_dosen'];?></option>
                    </select>
                  </div><!-- /.form-group -->
                  <!-- textarea -->
                    <div class="form-group">
                      <label>Deskripsi</label>
                      <textarea name="deskripsi" class="form-control" rows="10" disabled><?php echo $bantuan['deskripsi'];?></textarea>
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
                      <input name="to" class="form-control" placeholder="To:" value="<?php echo $bantuan['email'];?>">
                  </div>
                  <div class="form-group">
                    <input name="subjek" class="form-control" placeholder="Subject:" value="<?php echo "Respon TU kategori bantuan fasilitas NO ID #".$bantuan['id_log_tu'];?>">
                  </div>
                  <div class="form-group">
                    <textarea name="isi" id="compose-textarea" class="form-control" style="height: 300px">
                      <h1><u>Heading Of Message</u></h1>
                      <h4>Subheading</h4>
                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee</p>
                      <ul>
                        <li>List item one</li>
                        <li>List item two</li>
                        <li>List item three</li>
                        <li>List item four</li>
                      </ul>
                      <p>Thank you,</p>
                      <p>John Doe</p>
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
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.box-body -->
            <div class="box-footer">
              Note : Selalu pastikan komputer TU terhubung dengan internet saat akan merespon Mahasiswa.
            </div>
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->