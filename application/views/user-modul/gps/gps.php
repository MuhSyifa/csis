<!-- start: Content -->
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h3 class="animated fadeInLeft">Data GPS Device</h3>
                        <p class="animated fadeInDown">
                            <a href="<?php echo base_url('dashboard') ?>">CSIS</a> <span class="fa-angle-right fa"></span> Data GPS Device
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
                        <table id="datatables-example" class="table table-bordred table-striped" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>PO</th>
                            <th>IMEI</th>
                            <th>SN</th>
                            <th>Vendor</th>
                            <th>Type</th>
                            <th>Received By</th>
                            <th>Received Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 1;
                            foreach ($sql1 as $v):
                        ?>
                          <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $v->gps_purchase_order; ?></td>
                            <td><?php echo $v->gps_imei_number; ?> </td>
                            <td><?php echo $v->gps_sn; ?></td>
                            <td><input type="hidden" name="is_vendor[]" value="<?php echo $v->is_vendor;?>" /><?php echo $v->is_vendor;?></td>
                            <td><input type="hidden" name="is_gps_type[]" value="<?php echo $v->is_gps_type;?>" /><?php echo $v->is_gps_type;?></td>
                            <td><?php echo $v->gps_received_by; ?> </td>
                            <td><?php echo $v->gps_received_date; ?> </td>
                            <td>
                                <a href="javascript:void(0)" onclick="detail_gps('<?php echo $v->gps_id ?>')" class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="right" title="Detail Data"><i class="glyphicon glyphicon-list-alt"></i></a>
                            </td>
                          </tr>
                        <?php 
                            $no++; 
                            endforeach;
                        ?>
                        </tbody>
                        </table>
                        <div class="clearfix"></div>
                    </div>
                    </div>
            </div>
        </div>  
    </div>
</div>

<!---########################################################### Modal Jquery Detail GPS ################################################################## -->
<div class="modal fade" id="modal_detail" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Detail GPS Received</h3>
            </div>
                <div class="modal-body form">
                    <div class="row">
                        <input type="hidden" value="" name="id"/>
                        <div class="col-md-4">
                          <span><b>Purchase Order Number</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_po"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Purchase Order Date</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_po_date"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>GPS IMEI Number</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_imei"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Serial Number</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_sn"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Vendor</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_vendor"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Type</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_type"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Condition</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cond"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Status</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_stat"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Information</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_info"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Check Date</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cek_date"></div>
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
<!---########################################################### End Modal Jquery Detail GPS ################################################################## -->

<script type="text/javascript">
    /*function add_gps()
    {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#modal_gps').modal('show'); // show bootstrap modal
        $('.modal-title').text('Add GPS'); // Set Title to Bootstrap modal title
    }*/

    /*function save()
    {
        $('#btnSave').text('saving...'); //change button text
        $('#btnSave').attr('disabled',true); //set button disable 
        var url;

        if(save_method == 'add') 
        {
            url = "<?php echo site_url('gps/ajax_add')?>";
        } 
        else if(save_method == 'update') 
        {
            url = "<?php echo site_url('gps/ajax_update')?>";
        }

        // ajax adding data to database
        $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
                if(data.status) //if success close modal and reload ajax table
                {
                    $('#modal_gps').modal('hide');
                    $(".confirm-div").html("<p class='alert alert-success'> Success Saving Data !!</p>");
                    window.setTimeout(function(){location.reload()},1000)                
                }
                else if (data.validate_status)
                {
                    $('#modal_gps').modal('hide');
                    $(".confirm-div").html("<p class='alert alert-success'> Error Saving Data, This IMEI Number GPS is already inserted !!</p>");
                    window.setTimeout(function(){location.reload()},1000)    
                }
                else
                {
                    for (var i = 0; i < data.inputerror.length; i++) 
                    {
                        $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                        $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                    }
                }
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable 
            }
        });
    }*/

    /////////////////////////////////////////////// Modal Jquery Detail GPS ///////////////////////////////////////////////////////
    function detail_gps(id)
    {
        $('.help-block').empty(); 

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('gps/ajax_detail/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                $('[name="id"]').val(data.gps_id);
                $('.detail_po_date').html(data.gps_purchase_order);
                $('.detail_po').html(data.no_purchase_order);
                $('.detail_imei').html(data.gps_imei_number);
                $('.detail_sn').html(data.gps_sn);
                $('.detail_vendor').html(data.is_vendor);
                $('.detail_type').html(data.is_gps_type);
                    //$('.detail_cond').html(data.gps_cond_id);

                if (data.gps_cond_id == '1')
                {
                    $('.detail_cond').html('Serviceable');
                }
                else
                {
                    $('.detail_cond').html('Unserviceable');
                }

                //$('.detail_stat').html(data.gps_stat_id);

                if (data.gps_stat_id == '1')
                {
                    $('.detail_stat').html('New');
                }
                else
                {
                    $('.detail_stat').html('Ex Used');
                }

                $('.detail_date').html(data.gps_received_date);
                $('.detail_by').html(data.gps_received_by);
                $('.detail_info').html(data.gps_information);
                $('.detail_cek_date').html(data.gps_date_check);
                $('.detail_status').html(data.status);                
                    
                $('#modal_detail').modal('show'); // show bootstrap modal when complete loaded
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    /////////////////////////////////////////////// End Modal Jquery Detail GPS ///////////////////////////////////////////////////////

    /////////////////////////////////////////////// Modal Jquery Edit GPS ///////////////////////////////////////////////////////
    /*function edit_gps(id)
    {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('.modal-title').text('Edit GPS Received'); // Set Title to Bootstrap modal title

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('gps/ajax_edit/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                $('[name="id"]').val(data.gps_id);
                $('[name="gps_purchase_order"]').val(data.gps_purchase_order);
                $('[name="no_purchase_order"]').val(data.no_purchase_order);
                $('[name="gps_imei_number"]').val(data.gps_imei_number);
                $('[name="gps_sn"]').val(data.gps_sn);
                $('[name="vendor_id"]').val(data.vendor_id);
                $('[name="gps_cond_id"]').val(data.gps_cond_id);
                $('[name="gps_stat_id"]').val(data.gps_stat_id);
                $('[name="gps_type_id"]').val(data.gps_type_id);
                $('[name="gps_received_by"]').val(data.gps_received_by);
                $('[name="gps_received_date"]').val(data.gps_received_date);
                $('[name="gps_date_check"]').val(data.gps_date_check);
                $("textarea#info").val(data.gps_information);
                  
                $('#modal_gps').modal('show'); // show bootstrap modal when complete loaded
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }*/
    /////////////////////////////////////////////// End Modal Jquery Edit GPS ///////////////////////////////////////////////////////

    /////////////////////////////////////////////// Start Modal Jquery Proses Delet Department ///////////////////////////////////////////////////////
    /*function delete_gps(id)
    {
        if(confirm('Are you sure delete this data?'))
        {
            // ajax delete data to database
            $.ajax({
                url : "<?php echo site_url('gps/ajax_delete')?>/" + id,
                type: "POST",
                dataType: "JSON",
                success: function(data)
                {                    
                    $(".confirm-div").html("<p class='alert alert-success'> Success Deleting Data !!</p>");
                    window.setTimeout(function(){location.reload()},3000)                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });
        }
    }*/
    /////////////////////////////////////////////// End Modal Jquery Proses Delet Department ///////////////////////////////////////////////////////
</script>