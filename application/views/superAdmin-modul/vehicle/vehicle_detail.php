
<!-- start: Content -->
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                  <div class="col-md-6">  
                      <h3 class="animated fadeInLeft">Detail Vehicle</h3>
                        <p class="animated fadeInDown">
                            <a href="<?= base_url('dashboard');?>">CSIS</a> <span class="fa-angle-right fa"> </span>
                            <a href="<?= base_url('vehicle/vehicle_list');?>">Vehicle</a> <span class="fa-angle-right fa"> </span>
                            Detail Vehicle
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
                        <div class="panel-heading">
                          <h4>Detail Vehicle</h4>
                        </div>
                        <div class="panel-body">
                        <div class="container">
                        <dl class="dl-horizontal">
                          <dt>Vehicle Name</dt>
                          <dd><?php echo $data->veh_name; ?></dd>
                          <dt>Vehicle Number Police</dt>
                          <dd><?php echo $data->veh_number_police; ?></dd>
                          <dt>Vehicle Number Flank</dt>
                          <dd>
                              <?php
                                  echo $data->veh_number_flank;
                              ?>
                          </dd>
                          <dt>Vehicle Status</dt>
                          <dd><?php
                                  echo $data->veh_status;
                              ?>
                          </dd>
                          <dt>Date Install</dt>
                          <dd><?php echo $data->veh_install_date; ?></dd>
                          <dt>Date Uninstall</dt>
                          <dd><?php echo $data->veh_uninstall_date; ?></dd>
                          <dt>Vehicle Created Date</dt>
                          <dd>
                            <?php
                                  echo $data->veh_insert;
                                ?>
                          </dd>
                          <dt>Vehicle Modified Date</dt>
                          <dd>
                            <?php
                                  echo $data->veh_update;
                                ?>
                          </dd>
                          <dt>Vehicle Created By</dt>
                          <dd>
                            <?php
                                  echo $data->veh_user;
                                ?>
                          </dd>
                        </dl>
                      </div>
                      <div class="modal-footer">
                            <a href="<?= base_url('vehicle/vehicle_list');?>" type="button" class="btn btn-default">Back</a>
                      </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<!-- end: content -->
