
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Installation</h3>
                        <p class="animated fadeInDown">
                            <a href="<?= base_url('');?>">CSIS</a> <span class="fa-angle-right fa"></span>
                            <a href="<?= base_url('install/install_form');?>">Install</a> <span class="fa-angle-right fa"></span>
                            Installation
                        </p>
                </div>
            </div>
        </div>
    <?php echo $this->session->flashdata('info'); ?>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                
                <button class="btn btn-primary btn-xs" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                      <span data-toggle="tooltip" data-placement="right" title="Collapse for Action">Show</span>
                    </button>
                    <div class="collapse" id="collapseExample">
                        <div class="well">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn  btn-sm btn-raised btn-primary" data-toggle="modal" data-target="#myModal">
                              <i class="fa fa-plus"> Add </i>
                            </button>
                        </div>
                    </div>
                </div>
                    <div class="panel-body">
                    <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th style="width: 10px;" align="center" >No.</th>
                            <th>No. BAST/SPK</th>
                            <th>Vehicle</th>
                            <th>Location</th>
                            <th>Technicion</th>
                            <th>Date Install</th>
                            <th>Customer</th>
                            <th><center>Action</center></th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1;
                            foreach ($install as $v):
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $v->ins_number; ?></td>
                                <td><?php echo $v->is_vehicles;?></td>
                                <td><?php echo $v->ins_location;?></td>
                                <td><?php echo $v->is_employees;?></td>
                                <td><?= $v->ins_date; ?></td>
                                <td><?php echo $v->is_customer;?></td>
                                <td>
                                    <center>
                                        <a href="<?php echo base_url(); ?>install/read/<?php echo $v->ins_id; ?>" class="btn btn-xs btn-default"data-toggle="tooltip" data-placement="right" title="Read Data"><span ><i class="glyphicon glyphicon-list-alt"></i></span> </a>

                                        <!--<a href="<?php //echo base_url(); ?>install/update/<?php //echo $v->ins_id; ?>" class="btn btn-xs btn-info"data-toggle="tooltip" data-placement="left" title="Update Data"><span ><i class="glyphicon glyphicon-pencil"></i></span> </a>--> 

                                        <a href="<?php echo base_url(); ?>install/uninstall/<?php echo $v->ins_id; ?>" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="left" title="Uninstall GPS"><span ><i class="fa fa-gear"></i></span> </a>
                                       
                                    </center>
                                </td>
                            </tr>
                        <?php
                            $no++; 
                            endforeach;
                        ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
            </div>
        </div>  
    </div>
    </div>

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

    <!-- Add Data Customer -->
    <!-- Modal -->
    <div class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Form Input Customer</h4>
                </div>
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#home" data-toggle="tab">Personal</a></li> 
                      <li><a href="#profile" data-toggle="tab">Company</a></li>
                    </ul>
                    <br>
                    <div class="tab-content">
                      <div class="tab-pane active" id="home">
                      
                      <?= form_open('customer/process_insert_personal'); ?>
                      <?= validation_errors(); ?>
                      
                      <div class="modal-body">  
                        <div class="form-group">
                            <label class="">Customer Code</label>
                                <input name="cust_code" placeholder="Code" class="form-control" type="text" required>
                        </div>

                        <div class="form-group">
                            <label class="">Customer Full Name</label>
                                <input name="cust_full_name" placeholder="Full Name" class="form-control" type="text" required>
                        </div>

                        <div class="form-group">
                            <label class="">Customer Short Name</label>
                                <input name="cust_short_name" placeholder="Short Name" class="form-control" type="text" required>
                        </div>

                        <div class="form-group">
                            <label class=""><b>Gender</b></label>
                                <div class="radio">
                                    <label class="radio-inline">
                                        <input type="radio" checked="" name="cust_gender" id="bs1" value="Laki-laki"> Laki-laki
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cust_gender" id="ba2" value="Perempuan"> Perempuan
                                    </label>
                                </div>
                        </div>

                        <div class="form-group"> 
                            <label class="">Religion</label>
                                <select class="form-control" style="" name="cust_religion_id">
                                    <?php
                                        echo '<option value="" selected="selected">--- Pilih Religion ---</option>';
                                                        
                                        $tampil=pg_query("SELECT * FROM customer_religion");
                                        while($w=pg_fetch_array($tampil)){
                                        echo "<option value=$w[cust_religion_id]>$w[cust_religion_name]</option>";
                                                        }
                                    ?> 
                                </select>
                        </div>

                        <div class="form-group">
                            <label class="">Email Address</label>
                                <input name="cust_personal_email" placeholder="Email Address" class="form-control" type="text" required>
                        </div>

                        <div class="form-group">
                            <label class="">Phone</label>
                                <input name="cust_personal_phone" placeholder="Phone" class="form-control" type="text" required>
                        </div>

                        <div class="form-group">
                            <label class="">Mobile Phone</label>
                                <input name="cust_personal_mobile_phone" placeholder="Mobile Phone" class="form-control" type="text" required>
                        </div>

                        <div class="form-group">
                            <label for="">Address</label>
                                <textarea name="cust_personal_address" placeholder="Address: Ex: Plaza 5 Pondok Indah Block D-9 Jalan Margaguna Raya, Jakarta Selatan 12140. Indonesia"class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                        <label class="">Start Date Contract</label>
                            <input name="cust_start_date_contract" placeholder="Start Contract" class="form-control datepicker" type="text">
                        </div>

                        <div class="form-group">
                            <label class="">End Date Contract</label>
                                <input name="cust_end_date_contract" placeholder="End Contract" class="form-control datepicker" type="text">
                        </div>

                        <div class="form-group">
                            <label class="">Maintenance Contract</label>
                                <input name="cust_maintenance_contract" placeholder="Maintenan Contract" class="form-control" type="text">
                        </div>
                      </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" >Save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>

                      <?= form_close(); ?>
                      </div>

                      <div class="tab-pane" id="profile">
                        <?= form_open('customer/process_insert_company'); ?>
                        <?= validation_errors(); ?>

                        <div class="modal-body">
                        <div class="form-group">
                            <label class="">Customer Code</label>
                                <input name="cust_code" placeholder="Code" class="form-control" type="text" required>
                        </div>

                        <div class="form-group">
                            <label class="">Company Name</label>
                                <input name="cust_company_name" placeholder="Company Name" class="form-control" type="text" required>
                        </div>

                        <!--<div class="form-group">
                            <label class="">Company Business Type</label>
                                <input name="cust_business_type" placeholder="Business Company Type" class="form-control" type="text" required>
                        </div>-->

                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-10"> 
                            <label class="">Company Business Type</label>
                                <select class="form-control" style="" name="cust_business_type">
                                    <?php
                                        echo '<option value="" selected="selected">--- Pilih Company Business Type ---</option>';
                                                        
                                        $tampil=pg_query("SELECT * FROM customer_business_type");
                                        while($w=pg_fetch_array($tampil)){
                                        echo "<option value=$w[cust_business_type_id]>$w[cust_business_type_name]</option>";
                                                        }
                                    ?> 
                                </select>
                            </div>
                            <div class="col-md-2" style="margin-top: 25px;">
                                <button type="button" class="btn  btn-sm btn-raised btn-primary" data-toggle="modal" data-target="#businessModal">
                                    <i class="fa fa-plus"> Add</i>
                                </button>
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                            <label for="">Address 1</label>
                                <textarea name="cust_company_address" placeholder="Address: Ex: Plaza 5 Pondok Indah Block D-9 Jalan Margaguna Raya, Jakarta Selatan 12140. Indonesia"class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Address 2</label>
                                <textarea name="cust_company_address2" placeholder="Address: Ex: Plaza 5 Pondok Indah Block D-9 Jalan Margaguna Raya, Jakarta Selatan 12140. Indonesia"class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Address 3</label>
                                <textarea name="cust_company_address3" placeholder="Address: Ex: Plaza 5 Pondok Indah Block D-9 Jalan Margaguna Raya, Jakarta Selatan 12140. Indonesia"class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="">Zip Code</label>
                                <input name="cust_company_codepos" placeholder="Code Pos" class="form-control" type="text" required>
                        </div>

                        <div class="form-group">
                            <label class="">City</label>
                                <input name="cust_company_city" placeholder="City" class="form-control" type="text" required>
                        </div>

                        <div class="form-group">
                            <label class="">Phone</label>
                                <input name="cust_company_phone" placeholder="Company Phone" class="form-control" type="text" required>
                        </div>

                        <div class="form-group">
                            <label class="">Email</label>
                                <input name="cust_company_email" placeholder="Company Email" class="form-control" type="text" required>
                        </div>

                        <div class="form-group">
                        <label class="">Start Date Contract</label>
                            <input name="cust_start_date_contract" placeholder="Start Contract" class="form-control datepicker" type="text">
                        </div>

                        <div class="form-group">
                            <label class="">End Date Contract</label>
                                <input name="cust_end_date_contract" placeholder="End Contract" class="form-control datepicker" type="text">
                        </div>

                        <div class="form-group">
                            <label class="">Maintenance Contract</label>
                                <input name="cust_maintenance_contract" placeholder="Maintenan Contract" class="form-control" type="text">
                        </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" >Save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>

                        <?= form_close(); ?>
                      </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- End Add Data Customer -->