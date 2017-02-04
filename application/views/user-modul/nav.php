<!-- start: Header -->
  <div class="col-md-12 nav-wrapper">
    <div class="navbar-header" style="width:100%;">
      <a href="<?php echo base_url('dashboard');?>" class="navbar-brand"> 
        <b>CSIS</b>
      </a>

      <ul class="nav navbar-nav search-nav">
        <!--<li><a href="<?php echo base_url('dashboard');?>"><i class="fa-home fa"></i> Dashboard</a></li>-->
        <li><a href="<?php echo base_url('vendor/vendor_dashboard');?>"><i class="glyphicon glyphicon-list-alt"></i> Vendor</a></li>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt"></i> Master Data <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('vendor/vendor_list');?>">Vendor</a></li>
            <li><a href="<?php echo base_url('customer/customer_list');?>">Customer</a></li>
            <li><a href="<?php echo base_url('employee/employee_list');?>">Employee</a></li>
          </ul>
        </li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-signal"></i> GSM <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('gsm/gsm_dashboard');?>">Received</a></li>
            <li><a href="<?php echo base_url('gsm/gsm_active_dashboard');?>">Activated</a></li>
            <li><a href="<?php echo base_url('gsm/gsm_disable_dashboard');?>">Disabled</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-scale"></i> GPS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('gps/gps_dashboard');?>">Received</a></li>
            <!--<li><a href="<?php echo base_url('gpstype/gps_type_list');?>">Type</a></li>-->
          </ul>
        </li>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i> Order <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('order/order_list');?>">Install</a></li>
            <li><a href="<?php echo base_url('order/uninstall_list');?>">Uninstall</a></li>
          </ul>
        </li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i> Customer <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('customer/customer_personal_dashboard');?>">Personal</a></li>
            <li><a href="<?php echo base_url('customer/customer_company_dashboard');?>">Company</a></li>
          </ul>
        </li>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs"></i> Maintenance <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('reinstall/reinstall_list');?>">Reinstall</a></li>
          </ul>
        </li>-->
      </ul>

      <ul class="nav navbar-nav navbar-right user-nav">
        <li class="user-name"><span>Welcome, <?php echo $_SESSION['name'];?></span></li>
        <li class="dropdown avatar-dropdown">
          <img src="<?php echo base_url('assets/img/avatar.jpg');  ?>" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
          <ul class="dropdown-menu user-dropdown">
            <li style="margin-bottom: 12px;"><a href="<?php echo base_url('dashboard/changepwd');?>"><span class="fa fa-user"></span> Change Password</a></li>
            <li class="more">
              <ul>
                <li>
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-12"><a href="<?php echo base_url('dashboard/logout');?>"><span class="fa fa-power-off "></span> Logout</a></div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
<!-- end: Header -->