
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h3 class="animated fadeInLeft">Data All Vendor</h3>
                        <p class="animated fadeInDown">
                            <a href="<?php echo base_url('dashboard'); ?>">CSIS</a> <span class="fa-angle-right fa"></span> Data All Vendor
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
        
        <?php echo $this->session->flashdata('info'); ?>

        <div class="col-md-12 top-20 padding-0">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-body">
                        <div class="responsive-table">
                            <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Birtdate</th>
                                <th>Position</th>
                                <th>Department</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no = 1;
                                    foreach ($employee as $v):
                                ?>
                              <tr>
                                <td><?php echo $no; ?></td>
                                <td><?= $v->emp_code; ?></td>
                                    <td><?= $v->emp_name; ?></td>
                                    <td><?= $v->emp_birthdate; ?></td>
                                    <td><?php echo $v->pos_name; 
                                            /*$pesan = pg_query("SELECT * FROM employees where emp_position='$v->emp_position' ");
                                            $j = pg_fetch_array($pesan);
                                                        
                                            $query_tahun = "SELECT * FROM position";
                                            $tahun = pg_query($query_tahun);
                                            while ($row_tahun = pg_fetch_array($tahun)){
                                                if($row_tahun[0] == $j[5]) {
                                                echo $row_tahun[1];
                                                }
                                            }*/
                                        ?>
                                    </td>
                                    <td><?php echo $v->dep_name; 
                                            /*$pesan = pg_query("SELECT * FROM employees where emp_department='$v->emp_department' ");
                                            $j = pg_fetch_array($pesan);
                                                        
                                            $query_tahun = "SELECT * FROM department";
                                            $tahun = pg_query($query_tahun);
                                            while ($row_tahun = pg_fetch_array($tahun)){
                                                if($row_tahun[0] == $j[6]) {
                                                echo $row_tahun[1];
                                                }
                                            }*/
                                        ?>
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
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Form Input Vendor</h4>
                </div>
                <div class="modal-body">

                    <?= form_open('vendor/process_insert'); ?>
                    <?= validation_errors(); ?>
                        <div class="form-group">
                            <label class="">Vendor Name</label>
                                <input type="text" name="vendor_name" value="" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Vendor Type</label>
                                <select class="form-control" name="vendor_type">
                                    <option value="" disabled selected="selected">--- Choose Vendor Type---</option>
                                    <option value="GSM">GSM</option>
                                    <option value="GPS">GPS</option>
                                </select>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" >Save</button>
                        </div>
                    <?= form_close(); ?>
                
                </div>
            </div>
        </div>
    </div>
    <!-- End Add Data Vendor -->
    
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>Import File Excel</h1><br>

                <?php  echo form_open_multipart('vendor/do_upload') . "\n"; ?>
                    <input type="file" id="file_upload" name="userfile" /><br>
                    <input type="submit" name="login" class="login loginmodal-submit" value="Upload">
                <?php echo form_close(); ?>
                
            </div>
        </div>
    </div>