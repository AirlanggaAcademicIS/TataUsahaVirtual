      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Log 
            <small>Aktivitas Mahasiswa</small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Log Mahasiswa</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <!--<div class="box">-->
              <div class="box">
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>NIM Mahasiswa</th>
                        <th>Tanggal Aktivitas</th>
                        <th>Kategori</th>
                        <th>Isi Log</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $i = 0;
                                while($i<$jumlah){
                                    echo "<tr>";
                                    echo "<td>".($i+1)."</td>";
                                    echo "<td>".$log_tu[$i]['nim']."</td>";
                                    echo "<td>".$log_tu[$i]['tanggal_log']."</td>";
                                    echo "<td>".$log_tu[$i]['jenis_kategori']."</td>";
                                    echo "<td>".$log_tu[$i]['isi_log']."</td>";
                                    echo "<td><a href='#'>Detail</a></td>";
                                    echo "</tr>";
                                    $i++;
                                }
                      ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div> <!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
