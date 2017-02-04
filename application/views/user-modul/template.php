<!-- Start Header -->
  <?php $this->load->view('user-modul/header'); ?>
<!-- End Header -->

<!-- Start Navbar -->
  <body id="mimin" class="dashboard topnav">
    <nav class="navbar navbar-default header navbar-fixed-top">
      <?php $this->load->view('user-modul/nav'); ?>
    </nav>
<!-- End Navbar -->

<!-- Start Container -->
    <?php $this->load->view($content); ?>
<!-- End Container -->

<!-- start: Mobile -->
	<div id="mimin-mobile" class="reverse">
	    <div class="mimin-mobile-menu-list">
	        <?php $this->load->view('user-modul/responsive'); ?>
	    </div>       
    </div>
    <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
    </button>
<!-- end: Mobile -->

<!-- Start Footer -->
  <?php $this->load->view('user-modul/footer'); ?>
<!-- End Footer-->