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
    <link href="<?php echo base_url('/'); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('/'); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('/'); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('/'); ?>assets/css/style-responsive.css" rel="stylesheet">

    <link href="<?php echo base_url('/'); ?>assets/css/table-responsive.css" rel="stylesheet">

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
              
              	  <p class="centered"><a href="profile.html"><img src="<?php echo base_url('/'); ?>assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
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
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<!-- <h3><i class="fa fa-angle-right"></i> List data</h3> -->
		  		<div class="row mt">
			  		<div class="col-lg-6">
                      <div class="content-panel">
                     <!--    <h4><i class="right"></i><button type="button" class="btn btn-primary"> Tambah Data Training</button></h2> -->
        <div class="row" >
        	<div class="container">
        	<div class="col-md-5">
        <form action="<?php echo base_url('kredit/store'); ?>" method="post">

            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Produk">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Gaji</label>
            <select class="form-control" id="exampleFormControlSelect1" name="gaji">
                <option value="Kecil">kecil</option>
                <option value="Sedang">sedang</option>
                <option value="Besar">besar</option>
            </select>
            </div>
            <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select class="form-control" id="exampleFormControlSelect1" name="jenis">
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
            </div>
            <div class="form-group">
               <label for="exampleFormControlSelect1">status</label>
            <select class="form-control" id="exampleFormControlSelect1" name="status">
                <option value="Sudah Menikah">sudah menikah</option>
                <option value="Belum Menikah">belum menikah</option>
            </select>
            </div>
            <div class="form-group">
               <label for="exampleFormControlSelect1">pinjaman</label>
            <select class="form-control" id="exampleFormControlSelect1" name="pinjaman">
                <option value="Kecil">kecil</option>
                <option value="Sedang">sedang</option>
                <option value="Besar">besar</option>
            </select>
            </div>
            <div class="form-group">
             <label for="exampleFormControlSelect1">jangka waktu</label>
            <select class="form-control" id="exampleFormControlSelect1" name="jwaktu">
                <option value="Jangka Pendek">jangka pendek</option>
                <option value="Jangka Menengah">jangka menengah</option>
                <option value="Jangka Panjang">jangka panjang</option>
            </select>
            </div>
            <div class="form-group">
                   <label for="exampleFormControlSelect1">agunan</label>
            <select class="form-control" id="exampleFormControlSelect1" name="agunan">
                <option value="BPKB SPM">BPKB SPM</option>
                <option value="SRTFKT RMH">SRTFKT RMH</option>
                <option value="BPKB MBL">BPKB MBL</option>
            </select>

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
        </div>
        </div>
        </div>
    


                          
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
               <div class="col-lg-6">
                      <div class="content-panel">
                     <!--    <h4><i class="right"></i><button type="button" class="btn btn-primary"> Tambah Data Training</button></h2> -->
                      <h4><i class="fa fa-angle-right"></i> List Data Training</h4>

                          
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
		  </section>
		  </section>
		  	
		  	
      

 
  

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('/'); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url('/'); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url('/'); ?>assets/js/common-scripts.js"></script>
    <!-- <script type="text/javascript">
            $(document).ready(function(){

                // Format mata uang.
                $( '.uang' ).mask('000.000.000', {reverse: true});

            })
    </script> -->

    <!--script for this page-->
    

  </body>
</html>
