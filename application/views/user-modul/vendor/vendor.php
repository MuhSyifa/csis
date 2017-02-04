
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
                                <th>Nama Vendor</th>
                                <th>Type Vendor</th>
                                <th>Created</th>
                                <th>Modified</th>
                                <th>User By</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no = 1;
                                    foreach ($data as $v):
                                ?>
                              <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $v->vendor_name; ?></td>
                                <td><?php echo $v->vendor_type; ?></td>
                                <td><?php echo $v->vendor_insert; ?></td>
                                <td><?php echo $v->vendor_update; ?></td>
                                <td><?php echo $v->vendor_user; ?></td>
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