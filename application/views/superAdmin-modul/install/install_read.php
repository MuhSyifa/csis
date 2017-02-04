
<!-- start: Content -->
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <h3 class="animated fadeInLeft">Read Install GPS</h3>
                        <p class="animated fadeInDown">
                            <a href="<?= base_url('');?>">CSIS</a> <span class="fa-angle-right fa"> </span>
                            <a href="<?php echo base_url('install/installation'); ?>">Install</a> <span class="fa-angle-right fa"></span> Read Install
                        </p>
                </div>
            </div>
        </div>
        <div class="form-element">
            <div class="col-md-12 padding-0">
                <div class="col-md-12">
                    <div class="panel form-element-padding">
                        <div class="panel-heading">
                          <h4>Read Install</h4>
                        </div>
                        <div class="panel-body" style="padding-bottom:30px;">
                        <div class="container">
                        <dl class="dl-horizontal">
                          <dt>Type BAST/SPK</dt>
                          <dd><?php echo $data->ins_type_number; ?></dd>
                          <dt>Number BAST/SPK</dt>
                          <dd><?php echo $data->ins_number; ?></dd>
                          <dt>Customer</dt>
                          <dd>
                              <?php
                                  $customer = pg_query("SELECT customer.cust_code
                                                        FROM installs JOIN customer ON customer.cust_id=installs.cust_id 
                                                        WHERE ins_id ='$data->ins_id'");
                                  while ($row=pg_fetch_array($customer)) {
                                    echo "$row[0]";
                                  }
                                ?>
                          </dd>
                          <dt>Technicion</dt>
                          <dd><?php
                                  $employees = pg_query("SELECT employees.emp_name
                                                      FROM installs JOIN employees ON employees.emp_id=installs.emp_id 
                                                      WHERE ins_id ='$data->ins_id'");
                                  while ($row=pg_fetch_array($employees)) {
                                    echo "$row[0]";
                                  }
                                ?>
                          </dd>
                          <dt>Location Installation</dt>
                          <dd><?php  echo $data->ins_location; ?></dd>
                          <dt>Vehicle</dt>
                          <dd>
                            <?php
                                  $vehicles = pg_query("SELECT vehicles.veh_name
                                                    FROM installs JOIN vehicles ON vehicles.veh_id=installs.veh_id
                                                    WHERE ins_id ='$data->ins_id'");
                                  while ($row=pg_fetch_array($vehicles)) {
                                    echo "$row[0]";
                                  }
                                ?>
                          </dd>
                          <dt>GPS IMEI Number</dt>
                          <dd>
                            <?php
                                  $imei = pg_query("SELECT gps.gps_imei_number
                                                    FROM installs JOIN gps ON gps.gps_id=installs.gps_id
                                                    WHERE ins_id ='$data->ins_id'");
                                  while ($row=pg_fetch_array($imei)) {
                                    echo "$row[0]";
                                  }
                                ?>
                          </dd>
                          <dt>GSM Number</dt>
                          <dd>
                            <?php
                                  $number = pg_query("SELECT gsm.gsm_number
                                                    FROM installs JOIN gsm ON gsm.gsm_id=installs.gsm_id
                                                    WHERE ins_id ='$data->ins_id'");
                                  while ($row=pg_fetch_array($number)) {
                                    echo "$row[0]";
                                  }
                                ?>
                          </dd>
                          <dt>Date Installation</dt>
                          <dd><?php echo $data->ins_date; ?></dd>
                          <dt>Timestamp Insert</dt>
                          <dd><?php echo $data->ins_insert; ?></dd>
                          <dt>Timestamp Update</dt>
                          <dd><?php echo $data->ins_update; ?></dd>
                          <dt>Timestamp User</dt>
                          <dd><?php echo $data->ins_user; ?></dd>
                        </dl>
                      </div>
                      <div class="modal-footer">
                            <a href="<?= base_url('install/install_form');?>" type="button" class="btn btn-default" >Back</a>
                      </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<!-- end: content -->
