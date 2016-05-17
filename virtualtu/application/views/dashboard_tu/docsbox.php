      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Documents 
            <small>Available</small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Documents Box</li>
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
                        <th>Nama Dokumen</th>
                        <th>Tanggal Upload</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $i = 0;
                                while($i<$jumlah){
                                    echo "<tr>";
                                    echo "<td>".($i+1)."</td>";
                                    echo "<td>".$documents[$i]['nama_dokumen']."</td>";
                                    echo "<td>".$documents[$i]['tanggal_upload']."</td>";
                                    echo "<td><a href='#'>Delete</a></td>";
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
          <div class="row">
              <div class="col-xs-12">
              <!--<div class="box">-->
              <div class="box">
                  <div class="box-body">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" id="exampleInputFile">
                  </div>
                  </div>
              <div class="col-md-3">
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Upload</button>
                  </div>
              </div>
                
              </div>
                  </div>
              </div>
              </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
