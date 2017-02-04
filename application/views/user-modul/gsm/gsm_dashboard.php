            <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-9">
                        <h3 class="animated fadeInLeft">Data All GSM Received</h3>
                        <p class="animated fadeInDown">
                            <a href="<?php echo base_url('dashboard'); ?>">CSIS</a> <span class="fa-angle-right fa"></span> GSM Received
                        </p>
                    </div>
                    <div class="col-md-3" align="center">
                      <ul>
                        <li class="time">
                          <h3 class="animated fadeInLeft">21:00</h3>
                          <p class="animated fadeInRight">Sat,October 1st 2029</p>
                        </li>    
                      </ul>
                    </div>

                  </div>
              </div>

              <?php echo $this->session->flashdata('info'); ?>

            <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="col-md-6">
                    <div class="panel">
                      <div class="panel-heading-white panel-heading">
                        <h4>Chart Stock GSM Received</h4>
                      </div>
                      <div class="panel-body">
                        <div class="col-md-12">
                          <div id="chartGsmReceived"></div>                            
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="panel">
                      <div class="panel-heading-white panel-heading">
                        <h4>Table Stock GSM Received</h4>
                      </div>
                      
                      <div class="panel-body">
                        <div class="responsive-table">
                          <table id="datatables-example" class="table table-bordred table-striped datatables-example" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>GSM Number </th>
                                <th>IMSI Number </th>
                                <th>ICCID Number </th>
                              </tr>
                            </thead>
                            
                            <tbody>
                              <?php 
                                  $no = 1;
                                  foreach ($data as $v):
                              ?>
                              <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $v->gsm_number; ?> </td>
                                <td><?php echo $v->gsm_imsi_number; ?></td>
                                <td><?php echo $v->gsm_iccid_number; ?></td>
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
          <!-- end: content --> 