<!-- start: Content -->
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h3 class="animated fadeInLeft">Change Password</h3>
                            <p class="animated fadeInDown">
                              	<a href="<?php echo base_url('dashboard'); ?>">CSIS</a> <span class="fa-angle-right fa"></span> Change Password
                            </p>
                    </div>
                    <div class="col-md-6">
                        <ul style="float:right;">
                          <li class="time">
                            <h1 class="animated fadeInLeft" align="center" style="font-size: 25px;">21:00</h1>
                            <p class="animated fadeInRight">Sat,October 1st 2029</p>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <?php echo $this->session->flashdata('info'); ?>

        <div class="form-element">
            <div class="col-md-12 padding-0">
                <div class="col-md-12">
                    <div class="panel form-element-padding">
                        <div class="panel-body" style="padding-bottom:30px;">
                        <?php echo form_open('dashboard/change'); ?>
						<?php echo validation_errors(); ?>

                          	<div class="col-md-12">
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-right">Old Password</label>
                              	<div class="col-sm-6"><input type="password" class="password" id="test1" style="width:100%;" name="opassword" value="<?php echo set_value('user_password'); ?>" required></div>
                                <div class="col-sm-1"><input type="checkbox" id="showHide"> Show</div>
                            </div><br>
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-right">New Password</label>
                              	<div class="col-sm-6"><input type="password" class="newPassword" style="width:100%;" name="npassword" value="<?php echo set_value('gsm_imsi_number'); ?>" class="form-control" required></div>
                                <div class="col-sm-1"><input type="checkbox" id="newPassword"> Show</div>
                            </div><br>
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-right">Confirm Password:</label>
                              	<div class="col-sm-6"><input type="password" class="confirmPassword" style="width:100%;" name="cpassword" value="<?php echo set_value('gsm_iccid_number'); ?>" class="form-control" required></div>
                                <div class="col-sm-1"><input type="checkbox" id="confirmPassword"> Show</div>
                            </div><br>

                            <div class="form-group">
                                <div class="col-sm-4">
                                </div>
                                
                                <div class="col-sm-5">
                                    <input style="margin-left:53%;" type="submit" name="submit" class="btn btn-primary" value="Change"/>
                                    <a href="<?php echo base_url('dashboard'); ?>">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    </a>
                                </div>
                                
                                <div class="col-sm-3">
                                </div>
                            </div>

                        	</div>

                        	<br>
							<br>
                        
                        <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<!-- end: content -->