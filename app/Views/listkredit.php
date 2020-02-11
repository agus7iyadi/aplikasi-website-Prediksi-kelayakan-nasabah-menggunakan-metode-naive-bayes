<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>List Kredit</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <link href="assets/css/table-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Koperasi Makmur Jaya</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
            	</ul>
            </div>
        </header>
      
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">aplikasi kredit koperasi</h5>
              	  	
                  <li class="mt">
                      <a href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Data Training</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="#" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Data Nasabah</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="#" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Data Testing</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> List data</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                        <!-- <h4><i class="right"></i><button type="button" class="btn btn-primary"> Tambah Data Training</button></h2> -->
                      <h4><i class="fa fa-angle-right"></i> List Data Training</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>No.</th>
                                  <th>Nama</th>
                                  <th>gaji</th>
                                  <th>Jenis Kelamin</th>
                                  <th>Status</th>
                                  <th>Pinjaman</th>
                                  <th>Jangka Waktu</th>
                                  <th>Agunan</th>
                                  <th>Kolektabilitas</th>
                              </tr>
                              </thead>
                              <tbody>
                      <?php 
                      $no =1;
                      foreach ($listtraining as $list):?>
                              <tr>
                                  <td><?=$no++; ?></td>
                                  <td><?= $list['nama']?></td>
                                  <td><?= $list['gaji']?></td>
                                  <td><?= $list['jenis_kelamin']?></td>
                                  <td><?= $list['status']?></td>
                                  <td><?= $list['pinjaman']?></td>
                                  <td><?= $list['jangka_waktu']?></td>
                                  <td><?= $list['agunan']?></td>
                                  <td><?= $list['kolektabilitas']?></td>
                              </tr>
                              <?php endforeach;?>
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
		  	
		  	<div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">
                        <h4><i class="right"></i><a href="<?php echo base_url('kredit/tambahtesting'); ?>" class="btn btn-success"> Tambah Data Testing</a></h2>
                        <h4><i class="fa fa-angle-right"></i> List Data Testing</h4>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                      <th>No.</th>
                                      <th>Nama</th>
                                      <th>gaji</th>
                                      <th>Jenis Kelamin</th>
                                      <th>Status</th>
                                      <th>Pinjaman</th>
                                      <th>Jangka Waktu</th>
                                      <th>Agunan</th>
                                      <th>Prediksi</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <?php 
                      $no =1;
                      foreach ($listtest as $list2):?>
                              <tr>
                                  <td><?=$no++; ?></td>
                                  <td><?= $list2['nama']?></td>
                                  <td><?= $list2['gaji']?></td>
                                  <td><?= $list2['jenis_kelamin']?></td>
                                  <td><?= $list2['status']?></td>
                                  <td><?= $list2['pinjaman']?></td>
                                  <td><?= $list2['jangka_waktu']?></td>
                                  <td><?= $list2['agunan']?></td>
                                  <td><?= $list2['prediksi']?></td>
                              </tr>
                              <?php endforeach;?>
                                  </tbody>
                              </table>
                          </section>
                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->

		</section>
          </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="responsive_table.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    

  </body>
</html>
