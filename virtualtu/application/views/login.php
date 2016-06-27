<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tata Usaha Virtual | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
      <div class="modal-dialog">
                <div class="modal-content">
      <?php if(isset($ket)){
        echo "
                <div class='alert alert-warning alert-dismissable'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h4><i class='icon fa fa-warning'></i> Warning!</h4>
                    ".$ket."
                  </div>
                ";
        }
        ?>
      </div>
       </div>
          <div id="myModal1" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <div class="modal-content" style="margin : 30% 18% 0 18%;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Sign in as Mahasiswa</h4>
                  </div>
                  <div class="modal-body">
                    <form action="<?php echo base_url(); ?>account/sign_in" method="post">
                      <div class="form-group has-feedback">
                        <input type="text" name="nim" class="form-control" placeholder="NIM">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                      </div>
                      <div class="row">
                        <div class="col-xs-4">
                          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div><!-- /.col -->
                      </div>
                    </form>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            
          </div><!-- /.example-modal -->
          
          <div id="myModal2" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <div class="modal-content" style="margin : 30% 18% 0 18%;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Sign in as Petugas TU</h4>
                  </div>
                  <div class="modal-body">
                    <form action="<?php echo base_url(); ?>account/sign_in_tu" method="post">
                      <div class="form-group has-feedback">
                        <input type="text" name="nip" class="form-control" placeholder="NIP">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                      </div>
                      <div class="row">
                        <div class="col-xs-4">
                          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div><!-- /.col -->
                      </div>
                    </form>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            
          </div><!-- /.example-modal -->
    
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Tata Usaha Virtual</b></h3>
                  <button class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal1">Sign in as Mahasiswa</button>
                  <button class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal2" style="margin-right: 7px;">Sign in as Petugas TU</button>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="<?php echo base_url(); ?>assets/img/bg_unair_1.png">
                        <div class="carousel-caption">                          
                        </div>
                      </div>
                      <div class="item">
                        <img src="<?php echo base_url(); ?>assets/img/bg_unair_2.jpg">
                        <div class="carousel-caption">
                        </div>
                      </div>
                      <div class="item">
                        <img src="<?php echo base_url(); ?>assets/img/bg_unair_3.jpg">
                        <div class="carousel-caption">
                        </div>
                      </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                      <span class="fa fa-angle-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                      <span class="fa fa-angle-right"></span>
                    </a>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
