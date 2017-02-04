<!-- start: Content -->
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h3 class="animated fadeInLeft">Form Edit User</h3>
                            <p class="animated fadeInDown">
                                <a href="<?php echo base_url('dashboard'); ?>">CSIS</a> <span class="fa-angle-right fa"></span> <a href="<?php echo base_url('users/user_list'); ?>">Data User</a> <span class="fa-angle-right fa"></span> Form Edit User
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
                        <!-- <form action="<?php// echo base_url();?>gps_type/edit" role="form" method="post" accept-charset="utf-8"> -->
                          
                        <?php echo form_open('users/process_update'); ?>
                        <?php echo validation_errors(); ?>

                            <div class="form-group">
                                <label class="">Username</label>
                                    <input type="text" name="user_username" value="<?= $data->user_username; ?>" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="">Password</label>
                                    <input type="password" name="user_password" value="<?= $data->user_password; ?>" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="">Name</label>
                                    <input type="text" name="user_name" value="<?= $data->user_name; ?>" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Level User</label>
                                <select class="form-control" name="user_level" required>
                                    <?php 
                                        if($data->user_level==1){
                                            //echo "Super Admin";
                                            echo '<option value="1" selected="selected">Super Admin</option>';
                                        }elseif($data->user_level==2){
                                            //echo "Administrator";
                                            echo '<option value="2" selected="selected">Administrator</option>';
                                        }else{
                                            //echo "User";
                                            echo '<option value="3" selected="selected">User</option>';
                                        }
                                    ?>
                                    <option value="1">Super Admin</option>
                                    <option value="2">Administrator</option>
                                    <option value="3">User</option>                           
                                </select>
                            </div>

                            <div class="form-controll">
                              <input type="hidden" name="user_id" value="<?php echo $data->user_id; ?>" class="form-control" id="" placeholder="">
                            </div>

                            <div class="form-group" style="float:right;">
                                <input type="submit" name="submit" class="btn btn-primary" value="Update"/>
                                <a href="<?php echo base_url('users/user_list'); ?>">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                </a>
                            </div>
                        <?php echo form_close(); ?>
                        <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- end: content -->