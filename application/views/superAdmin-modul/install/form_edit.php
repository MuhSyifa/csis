<!-- start: Content -->
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <h3 class="animated fadeInLeft">Form Edit Installation</h3>
                        <p class="animated fadeInDown">
                            <a href="<?php echo base_url('install/installation'); ?>">Installation</a> <span class="fa-angle-right fa"></span> Form Edit Installation
                        </p>
                </div>
            </div>
        </div>
        <div class="form-element">
            <div class="col-md-12 padding-0">
                <div class="col-md-12">
                    <div class="panel form-element-padding">
                        <div class="panel-heading">
                          <h4> </h4>
                        </div>
                        <div class="panel-body" style="padding-bottom:30px;">
                        <!-- <form action="<?php echo base_url();?>gsm_type/edit" role="form" method="post" accept-charset="utf-8"> -->
                          
                        <?php echo form_open('install/process_update'); ?>
                        <?php echo validation_errors(); ?>

                            <div class="form-group">
                                <label class=""><b>Number BAST/SPK</b><font color="red"><b>*</b></font></label>
                                    <div class="radio">
                                        <label class="radio-inline">
                                          <input type="radio" name="ins_type_number" value="BAST" <?php echo ($data->ins_type_number=='BAST')?'checked':'' ?> > BAST
                                        <font color="red"><b>*</b></font></label>
                                        <label class="radio-inline">
                                          <input type="radio" name="ins_type_number" value="SPK" <?php echo ($data->ins_type_number=='SPK')?'checked':'' ?> > SPK
                                        <font color="red"><b>*</b></font></label>
                                    </div>
                                    <input type="text" name="ins_number" value="<?php echo $data->ins_number;?>" placeholder="Type here for number of BAST or SPK" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class=""><b>Customer</b><font color="red"><b>*</b></font></label>
                                <select class="form-control" name="cust_id" required>
                                    <?php
                                          $a = pg_query("SELECT * FROM installs where ins_id='$data->ins_id' ");
                                          $b = pg_fetch_array($a);
                                                    
                                          $c = "SELECT * FROM customer ";
                                          $d = pg_query($c);
                                          while ($row_d = pg_fetch_array($d)){
                                            if($row_d[cust_id] == $b[cust_id]) {
                                            echo "<option value=$row_d[cust_id] selected>$row_d[cust_name]</option>";
                                            }else {
                                                echo "<option value=$row_d[cust_id]>$row_d[cust_name]</option>";
                                                }
                                            }
                                    ?>
                              </select>
                            </div>
                            
                            <div class="form-group">
                                <label class=""><b>PIC Technicion</b><font color="red"><b>*</b></font></label>
                                <select class="form-control" name="emp_id" required>
                                    <?php
                                          $a = pg_query("SELECT * FROM installs where ins_id='$data->ins_id' ");
                                          $b = pg_fetch_array($a);
                                                    
                                          $c = "SELECT * FROM employees WHERE emp_department = 'Technicion'";
                                          $d = pg_query($c);
                                          while ($row_d = pg_fetch_array($d)){
                                            if($row_d[emp_id] == $b[emp_id]) {
                                            echo "<option value=$row_d[emp_id] selected>$row_d[emp_name]</option>";
                                            }else {
                                                echo "<option value=$row_d[emp_id]>$row_d[emp_name]</option>";
                                                }
                                            }
                                    ?>
                              </select>
                            </div>

                            <div class="form-group">
                                <label class=""><b>Location</b><font color="red"><b>*</b></font></label>
                                    <input type="text" name="ins_location" value="<?= $data->ins_location; ?>" placeholder="Location installation"  class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for=""><b>Vehicle</b><font color="red"><b>*</b></font></label>
                                <select class="form-control" name="veh_id" required>
                                    <?php
                                          $a = pg_query("SELECT * FROM installs where ins_id='$data->ins_id' ");
                                          $b = pg_fetch_array($a);
                                                    
                                          $c = "SELECT * FROM vehicles";
                                          $d = pg_query($c);
                                          while ($row_d = pg_fetch_array($d)){
                                            if($row_d[veh_id] == $b[veh_id]) {
                                            echo "<option value=$row_d[veh_id] selected>$row_d[veh_name]</option>";
                                            }else {
                                                echo "<option value=$row_d[veh_id]>$row_d[veh_name]</option>";
                                                }
                                            }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for=""><b>GPS Imei</b><font color="red"><b>*</b></font></label>
                                <select class="form-control" name="gps_id" required>
                                    <?php
                                          $a = pg_query("SELECT * FROM installs where ins_id='$data->ins_id' ");
                                          $b = pg_fetch_array($a);
                                                    
                                          $c = "SELECT * FROM gps";
                                          $d = pg_query($c);
                                          while ($row_d = pg_fetch_array($d)){
                                            if($row_d[gps_id] == $b[gps_id]) {
                                            echo "<option value=$row_d[gps_id] selected>$row_d[gps_imei_number] ($row_d[status])</option>";
                                            }else {
                                                echo "<option value=$row_d[gps_id]>$row_d[gps_imei_number] ($row_d[status])</option>";
                                                }
                                            }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for=""><b>Gsm Number</b><font color="red"><b>*</b></font></label>
                                <select class="form-control" name="gsm_id" required>
                                    <?php
                                          $a = pg_query("SELECT * FROM installs where ins_id='$data->ins_id' ");
                                          $b = pg_fetch_array($a);
                                                    
                                          $c = "SELECT * FROM gsm where status='Installed' OR status='Activated'";
                                          $d = pg_query($c);
                                          while ($row_d = pg_fetch_array($d)){
                                            if($row_d[gsm_id] == $b[gsm_id]) {
                                            echo "<option value=$row_d[gsm_id] selected>$row_d[gsm_number] ($row_d[status])</option>";
                                            }else {
                                                echo "<option value=$row_d[gsm_id]>$row_d[gsm_number] ($row_d[status])</option>";
                                                }
                                            }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class=""><b>Date Installation</b><font color="red"><b>*</b></font></label>
                                    <input type="text" name="ins_date" value="<?= $data->ins_date; ?>" placeholder="17, August 1945"  class="form-control date" id="datepicker" required>
                            </div>

                            <input type="hidden" name="ins_id" value="<?= $data->ins_id; ?>" class="form-control" id="" placeholder="">
                </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary" >Update</button>
                        <a href="<?= base_url('install/installation');?>" class="btn btn-default" type="button">Cancel</a>
                    </div>
                <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- end: content -->