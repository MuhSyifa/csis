<!-- Add Data -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Form Installation</h4>
                </div>
                <div class="modal-body">
                <?php echo form_open('install/process_install'); ?>
                        <?php echo validation_errors(); ?>

                            <div class="form-group">
                                <label class=""><b>Number BAST/SPK</b></label>
                                    <div class="radio">
                                        <label class="radio-inline">
                                          <input type="radio" checked="" name="ins_type_number" id="bs1" value="BAST"> BAST
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="ins_type_number" id="ba2" value="SPK"> SPK
                                        </label>
                                    </div>
                                    <input type="text" name="ins_number" placeholder="Type here for number of BAST or SPK" class="form-control" required>
                            </div>

                            <div class="form-group">
                            <div class="row">
                                <div class="col-md-10">
                                <label class=""><b>Customer</b></label>
                                    <select class="form-control" name="cust_id" required>
                                    <?php
                                      echo '<option value="" selected="selected" disabled="" required>--- Choose Customers ---</option>';
                                        $showcust=pg_query("SELECT * FROM customer Order By cust_code Desc");
                                        while ($cust=pg_fetch_array($showcust)) {
                                          echo "<option value=$cust[cust_id]>$cust[cust_code]</option>";
                                        }
                                    ?>
                                    </select>
                                </div>
                                <div class="col-md-2" style="margin-top: 25px;">
                                    <button type="button" class="btn  btn-sm btn-raised btn-primary" data-toggle="modal" data-target="#customerModal">
                                        <i class="fa fa-plus"> Add</i>
                                    </button>
                                </div>
                            </div>
                            </div>
                            
                            <div class="form-group">
                            <div class="row">
                                <div class="col-md-10">
                                <label class=""><b>PIC Technicion</b></label>
                                    <select class="form-control" name="emp_id" required>
                                        <?php
                                            echo '<option value="" selected="selected" disabled="" required>--- Choose Technicion ---</option>';
                                            $showemp=pg_query("SELECT * FROM employees WHERE emp_position = '4' Order By emp_name Desc");
                                            while ($emp=pg_fetch_array($showemp)) {
                                            echo "<option value=$emp[emp_id]>$emp[emp_name]</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-2" style="margin-top: 25px;">
                                    <button type="button" class="btn  btn-sm btn-raised btn-primary" data-toggle="modal" data-target="#employeeModal">
                                        <i class="fa fa-plus"> Add</i>
                                    </button>
                                </div>
                            </div>
                            </div>

                            <div class="form-group">
                                <label class=""><b>Location</b></label>
                                    <input type="text" name="ins_location" placeholder="Location installation"  class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class=""><b>Vehicle Name</b></label>
                                    <input type="text" name="ins_veh_name" placeholder="Vehicle Name"  class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class=""><b>Vehicle Number Police</b></label>
                                    <input type="text" name="ins_veh_num_police" placeholder="Vehicle Number Police"  class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class=""><b>Vehicle Number</b></label>
                                    <input type="text" name="ins_veh_number" placeholder="Vehicle Number"  class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for=""><b>Vehicle Type</b></label>
                                <select class="form-control" name="ins_veh_type">
                                    <option value="" disabled selected="selected" disabled="" required>--- Choose Vehicle Type ---</option>
                                    <option value="sedan">Sedan</option>
                                    <option value="truck">Truck</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for=""><b>GPS Imei</b></label>
                                <select class="form-control" name="gps_id">
                                    <?php
                                      echo '<option value="" selected="selected" disabled="" required>--- Choose GPS ---</option>';
                                        $showgps=pg_query("SELECT * FROM gps Where status = 'Received' Order By gps_imei_number Desc");
                                        while ($sg=pg_fetch_array($showgps)) {
                                          echo "<option value=$sg[gps_id]>$sg[gps_imei_number]</option>";
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for=""><b>Gsm</b></label>
                                <select class="form-control" name="gsm_id">
                                    <?php
                                        echo '<option value="" selected="selected" disabled="" required>--- Choose Number ---</option>';
                                            $showgsm=pg_query("SELECT * FROM gsm WHERE status = 'activated'");
                                            while ($sgsm=pg_fetch_array($showgsm)) {
                                                echo "<option value=$sgsm[gsm_id]>$sgsm[gsm_number]</option>";
                                            }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class=""><b>Date Installation</b></label>
                                    <input type="text" name="ins_date" placeholder="17, August 1945"  class="form-control datepicker" required>
                            </div>
                </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary" >Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <!-- End Add Data -->