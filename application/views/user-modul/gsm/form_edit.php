<!-- start: Content -->
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h3 class="animated fadeInLeft">Form Edit GSM Card</h3>
                            <p class="animated fadeInDown">
                              	<a href="<?php echo base_url('dashboard'); ?>">CSIS</a> <span class="fa-angle-right fa"></span> <a href="<?php echo base_url('gsm/gsm_list'); ?>">Data GSM</a> <span class="fa-angle-right fa"></span> Form Edit GSM Card
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
                            <div class="form-group"><label class="col-sm-2 control-label text-right">GSM Number</label>
                              	<div class="col-sm-10"><input type="text" name="gsm_number" style="width:31%" value="<?php echo $editdata->gsm_number; ?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">GSM IMSI Number</label>
                                <div class="col-sm-10"><input type="text" name="gsm_imsi_number" style="width:31%" value="<?php echo $editdata->gsm_imsi_number; ?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">GSM ICCID Number</label>
                                <div class="col-sm-10"><input type="text" name="gsm_iccid_number" style="width:31%" value="<?php echo $editdata->gsm_iccid_number; ?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Vendor Card GSM</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="vendor_id" style="width:31%">
                                        <?php
                                            $pesan = pg_query("SELECT gsm.gsm_id, gsm.gsm_number, gsm.gsm_imsi_number, gsm.gsm_iccid_number, vendor.vendor_name, 
                                                gsm.gsm_received_by, gsm.gsm_received_date, gsm.gsm_activated_date, gsm.gsm_activated_by, gsm.gsm_install_date,
                                                gsm.gsm_install_by, gsm.gsm_uninstall_date, gsm.gsm_uninstall_by, gsm.gsm_disable_date, gsm.gsm_disable_by, 
                                                gsm.status FROM gsm JOIN vendor ON gsm.vendor_id=vendor.vendor_id WHERE status = 'received' ");
                                            $j     = pg_fetch_array($pesan);
                                            
                                            $query_tahun = "SELECT * FROM vendor where vendor_type='GSM' ";
                                            $tahun = pg_query($query_tahun);
                                            while ($row_tahun = pg_fetch_array($tahun)){
                                                if($row_tahun[0] == $j[4]) {
                                                echo "<option value=$row_tahun[0] selected>$row_tahun[1]</option>";
                                                }else {
                                                echo "<option value=$row_tahun[0]>$row_tahun[1]</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right"></label>
                              	<div class="col-sm-10"><input type="hidden" name="id" value="<?php echo $editdata->gsm_id ?>"></div>
                            </div>
                        	</div>
                        	<br>
							<br>
							<div class="form-group">
								<div class="col-sm-10"><input type="submit" class="btn" name="submit" value="Update"></div>
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