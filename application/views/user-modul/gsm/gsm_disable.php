<!-- start: Content -->
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h3 class="animated fadeInLeft">Data GSM Card Disable</h3>
                        <p class="animated fadeInDown">
                            <a href="<?php echo base_url('dashboard'); ?>">CSIS</a> <span class="fa-angle-right fa"></span> <a href="<?php echo base_url('gsm/gsm_list'); ?>">GSM</a> <span class="fa-angle-right fa"></span> Data GSM Card Disable
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
                    <!--<div class="panel-heading">
                    <a href="<?php //echo base_url('gsm/excel_disable'); ?>">
                        <button type="button" class="btn  btn-sm btn-raised btn-primary" data-toggle="modal" data-target="#login-modal">
                          <i class="fa fa-file-excel-o"> Export</i>
                        </button>
                    </a>
                    </div>-->
                        <div class="panel-body">
                        <div class="responsive-table">
                            <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>GSM Number</th>
                                <th>GSM IMSI Number</th>
                                <th>GSM ICCID Number</th>
                                <th>GSM Disabled Date</th>
                                <th>GSM Disabled By</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no = 1;
                                    foreach ($data as $v):
                                ?>
                              <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $v->gsm_number; ?></td>
                                <td><?php echo $v->gsm_imsi_number; ?></td>
                                <td><?php echo $v->gsm_iccid_number; ?></td>
                                <td><?php echo $v->gsm_disable_date; ?></td>
                                <td><?php echo $v->gsm_disable_by; ?></td>
                                <td><?php echo $v->status; ?></td>
                                <td>
                                    <a href="javascript:void(0)" onclick="detail_gsm_disable('<?php echo $v->gsm_id ?>')" class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="right" title="Detail"><i class="glyphicon glyphicon-list-alt"></i></a>
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

<!---########################################################### Modal Jquery Detail GSM Disable ################################################################## -->
<div class="modal fade" id="modal_detail_disable" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Detail GSM Disable</h3>
            </div>
                <div class="modal-body form">
                    <div class="row">
                        <input type="hidden" value="" name="id"/>
                        <div class="col-md-4">
                          <span><b>GSM Number</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>GSM IMSI Number</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_imsi"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>GSM ICCID Number</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_iccid"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Vendor</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_vendor"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Condition</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cond"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>GSM Received By</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_by"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>GSM Received Date</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_date"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Status</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_status"></div>
                        </div>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
        </div>
    </div>
</div>
<!---########################################################### End Modal Jquery Detail GSM Disable ################################################################## -->

<script type="text/javascript">
    /////////////////////////////////////////////// Modal Jquery Detail GSM Disable ///////////////////////////////////////////////////////
    function detail_gsm_disable(id)
    {
        $('.help-block').empty(); 

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('gsm/ajax_detail_disable/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                $('[name="id"]').val(data.gsm_id);
                $('.detail').html(data.gsm_number);
                $('.detail_imsi').html(data.gsm_imsi_number);
                $('.detail_iccid').html(data.gsm_iccid_number);
                $('.detail_vendor').html(data.vendor_name);
                //$('.detail_cond').html(data.gsm_cond_id);

                if (data.gsm_cond_id == '2')
                    $('.detail_cond').html('Active');
                else
                    $('.detail_cond').html('Not Active');

                $('.detail_by').html(data.gsm_received_by);
                $('.detail_date').html(data.gsm_received_date);
                $('.detail_status').html(data.status);
                    
                $('#modal_detail_disable').modal('show'); // show bootstrap modal when complete loaded
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    /////////////////////////////////////////////// End Modal Jquery Detail GSM Disable ///////////////////////////////////////////////////////
</script>