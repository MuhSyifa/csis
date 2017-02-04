
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h3 class="animated fadeInLeft">Data Users</h3>
                        <p class="animated fadeInDown">
                            <a href="<?= base_url('dashboard');?>">CSIS</a> <span class="fa-angle-right fa"></span> <a href="<?= base_url('users/user_list');?>">User's Management</a> <span class="fa-angle-right fa"></span> Data Users
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
        
        <?= $this->session->flashdata('info'); ?>

    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <button class="btn btn-primary btn-xs collapsed" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <span data-toggle="tooltip" data-placement="right" title="Collapse for Action">Show</span>
                    </button>
                    <div style="height: 0px;" aria-expanded="false" class="collapse" id="collapseExample">
                        <div class="well">
                            <div class="col-md-9">
                                <button type="button" class="btn btn-sm btn-raised btn-primary" data-toggle="modal" data-target="#modal_form">
                                  <i class="fa fa-plus"> Add</i>
                                </button>
                            </div>
                            <button type="button" class="btn  btn-sm btn-raised btn-primary" data-toggle="modal" data-target="#login-modal">
                                <i class="fa fa-file-excel-o"> Import</i>
                            </button>
                            <a href="<?php echo base_url('customer/excelfiles'); ?>">
                                <button type="button" class="btn  btn-sm btn-raised btn-primary">
                                    <i class="fa fa-file-excel-o"> Export</i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th style="width: 10px;" align="center" >No.</th>
                            <th>Username</th>
                            <th>Password</th>
                            <td>Name</td>
                            <td>Level</td>
                            <!--<th style="width: 160px;" align="center"><center>Action</center></th>-->
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 1;
                                foreach ($users as $v):
                                
                            ?>
                          <tr>
                            <td align="center" ><?= $no; ?></td>
                            <td><?= $v->user_username; ?></td>
                            <td><?= $v->user_password; ?></td>
                            <td><?= $v->user_name; ?></td>
                            <td>
                                <?php 

                                if($v->user_level==1){
                                    echo "Super Admin";
                                }elseif($v->user_level==2){
                                    echo "Administrator";
                                }else{
                                    echo "User";
                                }

                                ?>
                            </td>
                            <td align="center" >
                                <a href="<?= base_url()?>users/update/<?= $v->user_id ?>" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-pencil"></i></a> 
                                <a href="javascript:if(confirm('Are you sure to delete this data???')){document.location='<?= base_url();?>users/process_delete/<?= $v->user_id; ?>';}" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
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

    <!-- Add Data Vendor -->
    <!-- Modal -->
    <div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Form Input Users</h4>
                </div>
                
                <?= form_open('users/process_insert'); ?>
                <?= validation_errors(); ?>

                <div class="modal-body">
                    <div class="form-group">
                        <label class="">Username</label>
                            <input type="text" name="user_username" value="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="">Password</label>
                            <input type="password" name="user_password" value="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="">Name</label>
                            <input type="text" name="user_name" value="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Level User</label>
                        <select class="form-control" name="user_level">
                            <option value="" disabled selected="selected">--- Choose level---</option>
                            <option value="1">Super Admin</option>
                            <option value="2">Administrator</option>
                            <option value="3">User</option> 
                        </select>
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
    <!-- End Add Data Vendor -->

    <!-- Add Data Vendor -->
    <!-- Modal -->
    <div class="modal fade" id="<?= $v->user_id ?>" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="updateModalLabel">Form Update Users</h4>
                </div>
                <div class="modal-body">

                <?= form_open('users/process_update'); ?>
                <?= validation_errors(); ?>

                    <div class="form-group">
                        <label class=""></label>
                            <input type="hidden" name="user_id" value="<?= $v->user_id; ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="">Username</label>
                            <input type="text" name="user_username" value="<?= $v->user_username; ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="">Password</label>
                            <input type="password" name="user_password" value="<?= $v->user_password; ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="">Name</label>
                            <input type="text" name="user_name" value="<?= $v->user_name; ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Level User</label>
                        <select class="form-control" name="user_level">
                            <option value="" disabled selected="selected">--- Choose level---</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                        
                </div>
            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" >Save</button>
                <?= form_close(); ?>
            </div>
            </div>
        </div>
    </div>
    <!-- End Add Data Vendor -->

<!--  -->