<!-- start: Content -->
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                  <div class="col-md-6">
                    <h3 class="animated fadeInLeft">Form Edit Employee</h3>
                      <p class="animated fadeInDown">
                        <a href="<?php echo base_url('dashboard'); ?>">CSIS</a> <span class="fa-angle-right fa"></span> <a href="<?php echo base_url('customer/customer_list'); ?>">Customer</a> <span class="fa-angle-right fa"></span> Form Edit Customer
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
                        <!-- <form action="<?php echo base_url();?>gps_type/edit" role="form" method="post" accept-charset="utf-8"> -->
                          
                        <?php echo form_open('employee/process_update'); ?>
                        <?php echo validation_errors(); ?>

                          <div class="form-group">
                            <label class="">Employee Code</label>
                            <input name="emp_code"  value="<?= $data->emp_code; ?>" placeholder="Code" class="form-control" type="text" required>
                          </div>

                          <div class="form-group">
                            <label for="">Employee Name</label>
                            <input name="emp_name" value="<?= $data->emp_name; ?>" placeholder="Name" class="form-control" type="text" required>
                          </div>

                          <div class="form-group">
                            <label for="">Employee Birthdate</label>
                            <input type="text" name="emp_birthdate" value="<?= $data->emp_birthdate; ?>" placeholder="Position" class="form-control" id="datepicker">
                          </div>

                          <div class="form-group">
                            <label for="">Employee Position</label>
                            <input name="emp_position" value="<?= $data->emp_position; ?>" placeholder="Name" class="form-control" type="text" required>
                          </div>

                          <div class="form-group">
                            <label for="">Employee Position</label>
                            <input name="emp_department" value="<?= $data->emp_department; ?>" placeholder="Name" class="form-control" type="text" required>
                          </div>

                          <div class="form-group">
                            <label for="">Keterangan</label>
                            <textarea name="emp_note" value="<?= $data->emp_note; ?>" placeholder="Address: Ex: Plaza 5 Pondok Indah Block D-9 Jalan Margaguna Raya, Jakarta Selatan 12140. Indonesia"class="form-control" required><?= $data->emp_note; ?></textarea>
                          </div>

                          <div class="form-controll">
                            <input type="hidden" name="emp_id" value="<?= $data->emp_id; ?>" class="form-control" id="" placeholder="">
                          </div>

                          <div class="form-group" style="float:right;">
                                <input type="submit" name="submit" class="btn btn-primary" value="Update"/>
                                <a href="<?php echo base_url('employee/employee_list'); ?>">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                </a>
                          </div>
                        <?php echo form_close(); ?>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- end: content -->