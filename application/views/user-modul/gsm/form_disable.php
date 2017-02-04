<!-- start: Content -->
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h3 class="animated fadeInLeft">Form Disabled GSM Card</h3>
                            <p class="animated fadeInDown">
                              	<a href="<?php echo base_url('dashboard'); ?>">CSIS</a> <span class="fa-angle-right fa"></span> <a href="<?php echo base_url('gsm/gsm_active_list'); ?>">Data GSM Active</a> <span class="fa-angle-right fa"></span> Form Disabled GSM Card
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
        <div class="form-element">
            <div class="col-md-12 padding-0">
                <div class="col-md-12">
                    <div class="panel form-element-padding">
                        <div class="panel-body" style="padding-bottom:30px;">
                        <?php echo form_open(); ?>
						<?php echo validation_errors(); ?>

                          	<div class="col-md-12">
                            <div class="form-group"><label class="col-sm-2 control-label text-right">GSM Disabled Date</label>
                              	<div class="col-sm-10"><input type="text" style="width:31%" name="gsm_disable_date" value="<?php echo set_value('gsm_disable_date'); ?>" id="datepicker"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">GSM Disabled By</label>
                              	<div class="col-sm-10"><input type="text" style="width:31%" name="gsm_disable_by" value="<?php echo $_SESSION['name']; ?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right"></label>
                              	<div class="col-sm-10"><input type="hidden" name="id" value="<?php echo $editdata->gsm_id ?>"></div>
                            </div>
                        	</div>
                        	<br>
							<br>
							<div class="form-group">
								<div class="col-sm-10"><input type="submit" class="btn" name="submit" value="Disable"></div>
							</div>

                        <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Date Picker -->  
    <script>
        $(function() {
            $( "#datepicker" ).datepicker({
            dateFormat: "yy-mm-dd"
            });
        });
    </script>
    <!-- End Date Picker -->
    
<!-- end: content -->