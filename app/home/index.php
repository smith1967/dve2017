<?php
if (!defined('BASE_PATH'))
    exit('No direct script access allowed');
$active = 'home';
$subactive = 'index';
$title = 'หน้าหลัก';
?>
<?php require_once 'template/header.php'; ?>
<div class="wrapper">
    <?php require_once 'template/main-header.php'; ?>
    <?php require_once 'template/main-sidebar.php'; ?> 
    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
        <section class="content-header"><?php show_message() ?></section>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                ระบบงานทวิศีกษา
                <small>SMART DVE</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
<!--                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>-->
            </ol>
        </section>


        <!-- Main content -->
        <section class="content">
            <!--carousel start-->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                  <!--<li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>-->
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="upload/slides/slide-01.jpg" alt="it-Dev Staff">

                    <div class="carousel-caption">
                      ประชุมมอบหมายงาน
                    </div>
                  </div>
                  <div class="item">
                    <img src="upload/slides/slide-02.jpg" alt="Second slide">

                    <div class="carousel-caption">
                      ทีมงานพัฒนาโปรแกรม
                    </div>
                  </div>
                  <div class="item">
                    <img src="upload/slides/slide-03.jpg" alt="Third slide">
                    <div class="carousel-caption">
                      นำเสนอผลงานครั้งที่ 1
                    </div>
                  </div>
                </div>
                  <!--carousel end-->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          <!-- Box Comment -->
          <!-- /.box -->         
            <!-- Default box -->            
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Title</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    Start creating your amazing application!
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    Footer
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
            <!-- Default box -->
            <div class="box">
                
                <div class="box-header with-border">
                    <h3 class="box-title">Title</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    Start creating your amazing application!
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    Footer
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
            
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php require_once 'template/main-footer.php'; ?>    
</div>
<!--.wrapper-->
<?php require_once 'template/footer.php'; ?>
