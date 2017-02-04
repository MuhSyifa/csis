
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
                <!-- Button trigger modal -->

                    <button class="btn btn-primary btn-xs" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                      <span data-toggle="tooltip" data-placement="right" title="Collapse for Action">Show</span>
                    </button><hr>
                    <div class="collapse" id="collapseExample">
                        <div class="well">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn  btn-sm btn-raised btn-primary" data-toggle="modal" data-target="#myModal">
                              <i class="fa fa-plus"> Add </i>
                            </button>

                            <button type="button" class="btn  btn-sm btn-raised btn-primary" data-toggle="modal" data-target="#orderModal">
                              Order
                            </button>
                            <!--<button type="button" class="btn  btn-sm btn-raised btn-primary" data-toggle="modal" data-target="#stepModal">
                              <i class="fa fa-plus"> Launch </i>
                            </button>-->
                            
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
                            <th>GPS IMEI</th>
                            <th>GSM Number</th>
                            <th>Technicion</th>
                            <th>Date Install</th>
                            <th>Customer</th>
                            <th><center>Action</center></th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1;
                            foreach ($order as $v):
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $v->order_number; ?></td>
                                <td><?= $v->veh_number_police;?></td>
                                <td><?= $v->gps_imei_number;?></td>
                                <td><?= $v->gsm_number;?></td>
                                <td><?= $v->emp_name;?></td>
                                <td><?= $v->order_date; ?></td>
                                <td><?= $v->cust_code;?></td>
                                <td>
                                    <center>
                                        <a href="<?php echo base_url(); ?>order/add/<?php echo $v->odet_id; ?>/<?php echo $v->veh_install_type_business; ?>" class="btn btn-xs btn-info"data-toggle="tooltip" data-placement="right" title="Add Data"><span ><i class="fa fa-plus"></i></span> </a>

                                        <a href="<?php echo base_url(); ?>order/read/<?php echo $v->odet_id; ?>" class="btn btn-xs btn-default"data-toggle="tooltip" data-placement="right" title="Read Data"><span ><i class="glyphicon glyphicon-list-alt"></i></span> </a>

                                        <!--<a href="<?php //echo base_url(); ?>install/update/<?php //echo $v->ins_id; ?>" class="btn btn-xs btn-info"data-toggle="tooltip" data-placement="left" title="Update Data"><span ><i class="glyphicon glyphicon-pencil"></i></span> </a>--> 

                                        <a href="<?php echo base_url(); ?>order/uninstall/<?php echo $v->odet_id; ?>" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="left" title="Uninstall GPS"><span ><i class="fa fa-gear"></i></span> </a>
                                       
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
                        <h4 class="modal-title" id="myModalLabel">Form PO Installation</h4>
                </div>

                <div class="modal-body">
                <?php echo form_open('order/process_order_install'); ?>
                        <?php echo validation_errors(); ?>

                            <div class="form-group">
                            <label class=""><b>Number BAST/SPK</b></label>
                                <div class="radio">
                                    <label class="radio-inline">
                                        <input type="radio" checked="" name="order_type_number" id="bs1" value="BAST"> BAST
                                    </label>
                                    <label class="radio-inline">
                                          <input type="radio" name="order_type_number" id="ba2" value="SPK"> SPK
                                    </label>
                                </div>
                                <input type="text" name="order_number" placeholder="Type here for number of BAST or SPK" class="form-control" required>
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
                            <label class=""><b>Date Installation</b></label>
                                <input type="text" name="order_date" placeholder="17, August 1945"  class="form-control datepicker" required>
                        </div>

                        <div class="form-group">
                            <label class=""><b>Location</b></label>
                                <input type="text" name="order_location" placeholder="Location installation"  class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label class=""><b>Vehicle Name</b></label>
                                <input type="text" name="order_veh_name" placeholder="Vehicle Name"  class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label class=""><b>Vehicle Number Police</b></label>
                                <input type="text" name="order_veh_num_police" placeholder="Vehicle Number Police"  class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label class=""><b>Vehicle Number Lambung</b></label>
                                <input type="text" name="order_veh_num_flank" placeholder="Vehicle Number"  class="form-control" required>
                        </div>

                        <!--<div class="form-group">
                            <label class=""><b>Vehicle Install Type</b></label>
                                <input type="text" name="vehicle_install_type" placeholder="Vehicle Number" value="PO Installation"  class="form-control" required disabled>
                        </div>-->

                        <div class="form-group">
                            <label for=""><b>Vehicle Remarks</b></label>
                                <textarea name="order_veh_remarks" placeholder="Remarks"class="form-control" required></textarea>
                        </div>
                            
                        <div class="form-group">
                            <label for=""><b>GPS Imei</b></label>
                                <select class="form-control" name="gps_id">
                                    <?php
                                      echo '<option value="" selected="selected" disabled="" required>--- Choose GPS ---</option>';
                                        $showgps=pg_query("SELECT * FROM gps Where status = 'Received' and gps_cond_id = '1' Order By gps_imei_number Desc");
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
                                            $showgsm=pg_query("SELECT * FROM gsm WHERE status = 'Activated' and gsm_cond_id = '2' ");
                                            while ($sgsm=pg_fetch_array($showgsm)) {
                                                echo "<option value=$sgsm[gsm_id]>$sgsm[gsm_number]</option>";
                                            }
                                    ?>
                                </select>
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" name="save" class="btn btn-primary" >Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                <?php echo form_close(); ?>
                
                
        </div>
    </div>
    <!-- End Add Data -->


<!-- Modal -->
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Purchase Order Installation</h4>
      </div>
      <?php echo form_open('order/process_order_coba'); ?>
      
      <div class="modal-body">
            <div class="form-horizontal">
                <div class="row">
                    <div class="form-group col-md-5">
                            <div class="col-sm-10" >
                                <div class="radio">
                                    <label class="radio-inline">
                                        <input type="radio" checked="" name="order_type_number" id="bs1" value="BAST"> BAST
                                    </label>
                                    <label class="radio-inline">
                                          <input type="radio" name="order_type_number" id="ba2" value="SPK"> SPK
                                    </label>
                                </div>
                            </div>
                    </div>
                </div>
                <input type="text" name="order_number" placeholder="Type here for number of BAST or SPK" class="form-control" required>
                   
                        <hr>
                <div class="row">
                    <div class="form-group col-md-5">
                        <div class="col-sm-7">
                            <button class="btn btn-primary btn-xs " type="button" id="addRow" name="addRow"><i class="fa fa-plus"></i>  Add equipment </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                            <div class="table-responsive">
                                <table  class="table table-datatable table-custom" id="example">
                                        <thead>
                                            <tr>
                                                
                                                <th class="sort-alpha">Location</th>
                                            </tr>
                                        </thead>
                                </table>
                            </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"> -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var t = $('#example').DataTable({
            "bPaginate": false,
            "bFilter": false,
            "order":[]
        });
        // var counter = 1;
     
        $('#addRow').on( 'click', function () {
            t.row.add( [
                
                '<input type="text" placeholder="" id="fdriverLicense" name="order_location" class="form-control input-sm">'
            ] ).draw( false );
     
            // counter++;
        } );
     
        // Automatically add a first row of data
        $('#addRow').click();
    } );
</script>
