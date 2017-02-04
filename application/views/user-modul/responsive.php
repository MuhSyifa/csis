<div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
  <ul class="nav nav-list">
    <!--<li class="active ripple">
      <a href="<?php echo base_url('dashboard'); ?>"><span class="fa-home fa"></span>Dashboard</a>
    </li>-->
    <li><a href="<?php echo base_url('vendor/vendor_dashboard');?>"><i class="glyphicon glyphicon-list-alt"></i> Vendor</a></li>
    <li class="ripple">
      <a class="tree-toggle nav-header">
        <span class="fa fa-pencil-square"></span>GSM
        <span class="fa-angle-right fa right-arrow text-right"></span>
      </a>
      <ul class="nav nav-list tree">
        <li><a href="<?php echo base_url('gsm/gsm_dashboard'); ?>">Received</a></li>
        <li><a href="<?php echo base_url('gsm/gsm_active_dashboard'); ?>">Activated</a></li>
        <li><a href="<?php echo base_url('gsm/gsm_disable_dashboard'); ?>">Disabled</a></li>
      </ul>
    </li>
    <li class="ripple">
      <a class="tree-toggle nav-header">
        <span class="fa fa-pencil-square"></span>GPS
        <span class="fa-angle-right fa right-arrow text-right"></span>
      </a>
      <ul class="nav nav-list tree">
        <li><a href="<?php echo base_url('gps/gps_dashboard'); ?>">Received</a></li>
      </ul>
    </li>
    <li class="ripple">
      <a class="tree-toggle nav-header">
        <span class="fa fa-pencil-square"></span>Customer
        <span class="fa-angle-right fa right-arrow text-right"></span>
      </a>
      <ul class="nav nav-list tree">
        <li><a href="<?php echo base_url('customer/customer_personal_dashboard'); ?>">Personal</a></li>
        <li><a href="<?php echo base_url('customer/customer_company_dashboard'); ?>">Company</a></li>
      </ul>
    </li>
    <!--<li class="ripple">
      <a class="tree-toggle nav-header">
        <span class="fa fa-pencil-square"></span>Maintenance
        <span class="fa-angle-right fa right-arrow text-right"></span>
      </a>
      <ul class="nav nav-list tree">
        <li><a href="<?php echo base_url('reinstall/reinstall_list'); ?>">Reinstall</a></li>
      </ul>
    </li>-->
  </ul>
</div>