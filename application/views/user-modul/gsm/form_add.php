<!-- start: Content -->
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <h3 class="animated fadeInLeft">Form Received GSM Card</h3>
                        <p class="animated fadeInDown">
                          	<a href="<?php echo base_url('gsm/gsm'); ?>">Data GSM</a> <span class="fa-angle-right fa"></span> Form Received GSM Card
                        </p>
                </div>
            </div>
        </div>
        <div class="form-element">
            <div class="col-md-12 padding-0">
                <div class="col-md-12">
                    <div class="panel form-element-padding">
                        <div class="panel-heading">
                         	<h4>GSM Card</h4>
                        </div>
                        <div class="panel-body" style="padding-bottom:30px;">
                        <?php echo form_open(); ?>
						<?php echo validation_errors(); ?>

                          	<div class="col-md-12">
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Number Card GSM</label>
                              	<div class="col-sm-10"><input type="text" style="width:31%" name="gsm_number" value="<?php echo set_value('gsm_number'); ?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Number IMSI GSM</label>
                              	<div class="col-sm-10"><input type="text" style="width:31%" name="gsm_imsi_number" value="<?php echo set_value('gsm_imsi_number'); ?>" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Number ICCID GSM</label>
                              	<div class="col-sm-10"><input type="text" style="width:31%" name="gsm_iccid_number" value="<?php echo set_value('gsm_iccid_number'); ?>" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Vendor Card GSM</label>
                              	<div class="col-sm-10">
                                    <select class="form-control" style="width:31%" name="vendor_id">
                                        <?php
                                            echo '<option value="" selected="selected">--- Pilih Vendor ---</option>';
                                            $tampil=pg_query("SELECT * FROM vendor where vendor_type='GSM'");
                                            while($w=pg_fetch_array($tampil)){
                                            echo "<option value=$w[vendor_id]>$w[vendor_name]</option>";
                                            }
                                        ?> 
                                    </select>
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">GSM Received Date</label>
                              	<div class="col-sm-10"><input type="text" style="width:31%" name="gsm_received_date" value="<?php echo set_value('gsm_received_date'); ?>" id="datepicker"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">GSM Received By</label>
                              	<div class="col-sm-10"><input type="text" style="width:31%" name="gsm_received_by" value="<?php echo $_SESSION['name']; ?>" class="form-control"></div>
                            </div>
                        	</div>
                        	<br>
							<br>
							<div class="form-group">
								<div class="col-sm-10"><input type="submit" class="btn" name="submit" value="Add"></div>
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