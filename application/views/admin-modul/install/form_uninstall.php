<!-- start: Content -->
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <h3 class="animated fadeInLeft">Form Uninstallation</h3>
                        <p class="animated fadeInDown">
                            <a href="<?php echo base_url('install/install_form'); ?>">Installation</a> <span class="fa-angle-right fa"></span> Form Uninstallation
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
                        
                        <?php echo form_open('install/process_uninstall'); ?>
                        <?php echo validation_errors(); ?>

                            <div class="form-group">
                              <div class="col-md-2">
                                <dt>Vehicle</dt>
                              </div>
                              <div class="col-md-10">   
                                  <dd>:
                                    <?php
                                          $vehicles = pg_query("SELECT vehicles.veh_name
                                                            FROM installs JOIN vehicles ON vehicles.veh_id=installs.veh_id
                                                            WHERE ins_id ='$data->ins_id'");
                                          while ($row=pg_fetch_array($vehicles)) {
                                            echo "$row[0]";
                                          }
                                        ?>
                                  </dd>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-2">
                                <dt>GPS Imei</dt>
                              </div>
                              <div class="col-md-10">   
                                  <dd>:
                                    <?php
                                      $imei = pg_query("SELECT gps.gps_imei_number
                                                        FROM installs JOIN gps ON gps.gps_id=installs.gps_id
                                                        WHERE ins_id ='$data->ins_id'");
                                      while ($row=pg_fetch_array($imei)) {
                                        echo "$row[0]";
                                      }
                                    ?>
                                  </dd>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-2">
                                <dt>Gsm Number</dt>
                              </div>
                              <div class="col-md-10">   
                                  <dd>:
                                    <?php
                                      $number = pg_query("SELECT gsm.gsm_number
                                                        FROM installs JOIN gsm ON gsm.gsm_id=installs.gsm_id
                                                        WHERE ins_id ='$data->ins_id'");
                                      while ($row=pg_fetch_array($number)) {
                                        echo "$row[0]";
                                      }
                                    ?>
                                  </dd>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-2">
                                <label class=""><b>Date Uninstallation</b><font color="red"><b>*</b></font></label>
                              </div>
                              <div class="col-md-10">
                                    <input type="text" name="uninstall_date" value="" placeholder="17, August 1945"  class="form-control datepicker" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-2">
                                <label><b>Uninstalled By</b><font color="red"><b>*</b></font></label>
                              </div>
                              <div class="col-md-10">
                                <input type="text" name="uninstall_by" class="form-control" value="<?php echo $_SESSION['name']; ?>">
                              </div>
                            </div>

                            <input type="hidden" name="ins_id" value="<?= $data->ins_id; ?>" class="form-control" id="" placeholder="">

                            <input type="hidden" name="gsm_id" value="<?= $data->gsm_id; ?>" class="form-control" id="" placeholder="">

                            <input type="hidden" name="gps_id" value="<?= $data->gps_id; ?>" class="form-control" id="" placeholder="">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary" >Uninstall</button>
                        <a href="<?= base_url('install/install_form');?>" class="btn btn-default" type="button">Cancel</a>
                    </div>
                <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- end: content -->