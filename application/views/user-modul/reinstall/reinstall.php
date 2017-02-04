
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h3 class="animated fadeInLeft">Data Reinstallation</h3>
                        <p class="animated fadeInDown">
                            <a href="<?php echo base_url('dashboard'); ?>">CSIS</a> <span class="fa-angle-right fa"></span> Data Reinstallation
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
                                <th>No. BAST/SPK</th>
                                <th>Vehicle</th>
                                <th>GPS IMEI</th>
                                <th>GSM Number</th>
                                <th>Technicion</th>
                                <th>Date Install</th>
                                <th>Customer</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no = 1;
                                    foreach ($reinstall as $v):
                                ?>
                              <tr>
                                <td><?php echo $no; ?></td>
                                <td><?= $v->order_number; ?></td>
                                <td><?= $v->veh_number_police;?></td>
                                <td><?= $v->gps_imei_number;?></td>
                                <td><?= $v->gsm_number;?></td>
                                <td><?= $v->emp_name;?></td>
                                <td><?= $v->order_date; ?></td>
                                <td><?= $v->cust_code;?></td>
                                <td>
                                    <a href="javascript:void(0)" onclick="detail_order('<?php echo $v->odet_id; ?>')" class="btn btn-xs btn-default"data-toggle="tooltip" data-placement="right" title="Detail"><span ><i class="glyphicon glyphicon-list-alt"></i></span></a>
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

<!---########################################################### Modal Jquery Detail Reinstall ################################################################## -->
<div class="modal fade" id="modal_detail" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Detail Reinstall</h3>
            </div>
                <div class="modal-body form">
                    <div class="row">
                        <input type="hidden" value="" name="id"/>
                        <div class="col-md-4">
                          <span><b>Type Number</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_order_type"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Number BAST/SPK</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_order_number"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Customer</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_code"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>PIC Technicion</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_emp_name"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Order Location</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_order_location"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Vehicle Name</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_veh_name"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Vehicle Type Order</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_veh_install_type_business"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>GPS IMEI Number</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_gps_imei_number"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>GSM Number</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_gsm_number"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Installated Date</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_order_date"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Expiry Date</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_veh_expiry_date"></div>
                        </div>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
        </div>
    </div>
</div>
<!---########################################################### End Modal Jquery Detail Reinstall ################################################################## -->

<script type="text/javascript">
    $(document).ready(function() {
        $("input").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });
        $("textarea").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });
        $("select").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });
    });
    
    /*function add()
    {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#modal_add').modal('show'); // show bootstrap modal
        $('.modal-title').text('Purchase Order Reinstallation'); // Set Title to Bootstrap modal title
        $('.modal-title-trial').text('Trial Reinstallation')
    }*/

    /////////////////////////////////////////////// Modal Jquery Add Reinstall In One BAST ///////////////////////////////////////////////////////
    /*function add_reinstall(id,type)
    {
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('reinstall/ajax_add/')?>/" + id + '/' + type,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                if(type==1)
                {
                    $('[name="id"]').val(data.odet_id);
                    $('[name="type"]').val(data.veh_install_type_business);

                    if (data.order_type_number == 'BAST')
                    {
                      $('#editTypeNumber').find(':radio[name=order_type_number_edit][value="BAST"]').prop('checked', true);
                    }
                    else
                    {
                      $('#editTypeNumber').find(':radio[name=order_type_number_edit][value="SPK"]').prop('checked', true);
                    }

                    $('[name="order_number_edit"]').val(data.order_number);
                    
                    $('#modal_reinstall_po').modal('show'); // show bootstrap modal when complete loaded
                }
                else if(type==2)
                {
                    $('[name="id"]').val(data.odet_id);
                    $('[name="type"]').val(data.veh_install_type_business);

                    if (data.order_type_number == 'BAST')
                    {
                      $('#editTypeNumber1').find(':radio[name=order_type_number_edit1][value="BAST"]').prop('checked', true);
                    }
                    else
                    {
                      $('#editTypeNumber1').find(':radio[name=order_type_number_edit1][value="SPK"]').prop('checked', true);
                    }

                    $('[name="order_number_edit1"]').val(data.order_number);
                    
                    $('#modal_reinstall_trial').modal('show'); // show bootstrap modal when complete loaded
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }*/
    /////////////////////////////////////////////// End Modal Jquery Add Reinstall In One BAST ///////////////////////////////////////////////////////

    /////////////////////////////////////////////// Modal Jquery Detail Reinstall ///////////////////////////////////////////////////////
    function detail_order(id)
    {
        $('.help-block').empty(); 

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('reinstall/ajax_detail/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                $('[name="id"]').val(data.odet_id);
                //$('[name="type"]').val(data.veh_install_type_business);

                $('.detail_order_type').html(data.order_type_number);
                $('.detail_order_number').html(data.order_number);
                $('.detail_cust_code').html(data.cust_code);
                $('.detail_emp_name').html(data.emp_name);
                $('.detail_order_location').html(data.order_location);
                $('.detail_veh_name').html(data.veh_name);

                if (data.veh_install_type_business == '1')
                {
                    $('.detail_veh_install_type_business').html('Purchase Order');
                }
                else
                {
                    $('.detail_veh_install_type_business').html('Trial Order');
                }
                    
                $('.detail_veh_expiry_date').html(data.veh_expiry_date);
                $('.detail_gps_imei_number').html(data.gps_imei_number);
                $('.detail_gsm_number').html(data.gsm_number);
                $('.detail_order_date').html(data.order_date);
                    
                $('#modal_detail').modal('show'); // show bootstrap modal when complete loaded
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    /////////////////////////////////////////////// End Modal Jquery Detail Reinstall ///////////////////////////////////////////////////////

    /////////////////////////////////////////////// Modal Jquery Uninstall ///////////////////////////////////////////////////////
    /*function uninstall_reinstall(id)
    {
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('reinstall/ajax_uninstall/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                $('[name="id"]').val(data.odet_id);
                $('[name="gsm_id"]').val(data.gsm_id);
                $('[name="gsm_cond_id"]').val(data.gsm_cond_id);
                $('[name="gps_id"]').val(data.gps_id);
                $('[name="gps_cond_id"]').val(data.gps_cond_id);
                $('[name="veh_id"]').val(data.veh_id);

                $('.uninstall_veh_name').html(data.veh_name);
                $('.uninstall_gps_imei_number').html(data.gps_imei_number);
                $('.uninstall_gsm_number').html(data.gsm_number);
                  
                $('#modal_uninstall').modal('show'); // show bootstrap modal when complete loaded
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }*/
    /////////////////////////////////////////////// End Modal Jquery Uninstall In Reinstall ///////////////////////////////////////////////////////
</script>