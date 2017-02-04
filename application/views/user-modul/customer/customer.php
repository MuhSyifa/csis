    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h3 class="animated fadeInLeft">Data Customer</h3>
                        <p class="animated fadeInDown">
                            <a href="<?= base_url('dashboard');?>">CSIS</a> <span class="fa-angle-right fa"></span> <a href="<?= base_url('customer/cutomer_list');?>">Customer</a> <span class="fa-angle-right fa"></span> Data Customer
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
                    <div class="panel-body">
                        <div class="responsive-table">
                            <table id="datatables-example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th style="width: 10px;" align="center" >No.</th>
                                    <th>Customer Code</th>
                                    <!--<th>Company Id</th>
                                    <th>Personal Id</th>-->
                                    <th>Type</th>
                                    <th>Start Contract</th>
                                    <th>End Contract</th>
                                    <th>Maintenance Contract</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                        foreach ($customer as $v):
                                ?>
                                <tr>
                                    <td align="center"><?= $no; ?></td>
                                    <td><?php echo $v->cust_code; ?></td>
                                    <!--<td><?php echo $v->cust_company_detail_id; ?></td>
                                    <td><?php echo $v->cust_personal_detail_id; ?></td>-->
                                    <td><?php //$v->emp_position; 
                                            $pesan = pg_query("SELECT * FROM customer where cust_type_id='$v->cust_type_id' ");
                                            $j = pg_fetch_array($pesan);
                                                        
                                            $query_tahun = "SELECT * FROM customer_type";
                                            $tahun = pg_query($query_tahun);
                                            while ($row_tahun = pg_fetch_array($tahun)){
                                                if($row_tahun[0] == $j[2]) {
                                                echo $row_tahun[1];
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td><?php echo $v->cust_start_date_contract; ?></td>
                                    <td><?php echo $v->cust_end_date_contract; ?></td>
                                    <td><?php echo $v->cust_maintenance_contract; ?></td>
                                    <td>
                                        <a href="javascript:void(0)" onclick="detail_cust('<?php echo $v->cust_id; ?>','<?php echo $v->cust_type_id; ?>')" class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="right" title="Detail Data"><span ><i class="glyphicon glyphicon-list-alt"></i></span> </a>
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

<!---########################################################### Modal Jquery Detail Customer ################################################################## -->
<div class="modal fade" id="modal_detail" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Detail Customer Personal</h3>
            </div>
                <div class="modal-body form">
                    <div class="row">
                        <input type="hidden" value="" name="id"/>
                        <div class="col-md-4">
                          <span><b>Customer Code</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_code"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Customer Full Name</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_full_name"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Customer Short Name</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_short_name"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Gender</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_gender"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Religion</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_religion_id"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Email Address</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_personal_email"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Phone</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_personal_phone"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Mobile Phone</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_personal_mobile_phone"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Address</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_personal_address"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Start Date Contract</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_start_date_contract"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>End Date Contract</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_end_date_contract"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Maintenance Contract</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_maintenance_contract"></div>
                        </div>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
        </div>
    </div>
</div>
<!---########################################################### End Modal Jquery Detail Customer ################################################################## -->

<!---########################################################### Modal Jquery Detail Customer ################################################################## -->
<div class="modal fade" id="modal_detail_company" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Detail Customer Company</h3>
            </div>
                <div class="modal-body form">
                    <div class="row">
                        <input type="hidden" value="" name="id"/>
                        <div class="col-md-4">
                          <span><b>Customer Code</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_code"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Company Name</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_company_name"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Company Business Type</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_business_type"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Address 1</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_company_address"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Address 2</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_company_address2"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Address 3</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_company_address3"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Zip Code</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_company_codepos"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>City</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_company_city"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Phone</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_company_phone"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Email</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_company_email"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Start Date Contract</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_start_date_contract"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>End Date Contract</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_end_date_contract"></div>
                        </div>

                        <div class="col-md-4">
                          <span><b>Maintenance Contract</b></span>
                        </div>
                        <div class="col-md-8">
                          <div class="detail_cust_maintenance_contract"></div>
                        </div>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
        </div>
    </div>
</div>
<!---########################################################### End Modal Jquery Detail Customer ################################################################## -->

<script type="text/javascript">
    /////////////////////////////////////////////// Start Modal Jquery Proses Delet Department ///////////////////////////////////////////////////////
    /*function delete_cust(id)
    {
        if(confirm('Are you sure delete this data?'))
        {
            // ajax delete data to database
            $.ajax({
                url : "<?php echo site_url('customer/ajax_delete')?>/" + id,
                type: "POST",
                dataType: "JSON",
                success: function(data)
                {                    
                    $(".confirm-div").html("<p class='alert alert-success'> Success Deleting Data !!</p>");
                    window.setTimeout(function(){location.reload()},1000)                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });
        }
    }*/
    /////////////////////////////////////////////// End Modal Jquery Proses Delet Department ///////////////////////////////////////////////////////

    /////////////////////////////////////////////// Modal Jquery Edit Customer Personal ///////////////////////////////////////////////////////
    /*function edit_cust(id,type)
    {
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('customer/ajax_edit/')?>/" + id + '/' + type,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                if(type==1)
                {
                    $('[name="id"]').val(data.cust_id);
                    $('[name="type"]').val(data.cust_type_id);
                    $('[name="detail_id"]').val(data.cust_personal_detail_id);

                    $('[name="cust_code_edit"]').val(data.cust_code);
                    $('[name="cust_full_name_edit"]').val(data.cust_full_name);
                    $('[name="cust_short_name_edit"]').val(data.cust_short_name);

                    if (data.cust_gender == 'Laki-laki')
                      $('#editGender').find(':radio[name=cust_gender_edit][value="Laki-laki"]').prop('checked', true);
                    else
                      $('#editGender').find(':radio[name=cust_gender_edit][value="Perempuan"]').prop('checked', true);

                    $('[name="cust_personal_email_edit"]').val(data.cust_personal_email);
                    $('[name="cust_personal_phone_edit"]').val(data.cust_personal_phone);
                    $('[name="cust_personal_mobile_phone_edit"]').val(data.cust_personal_mobile_phone);
                    $("textarea#address").val(data.cust_personal_address);
                    
                    $('[name="cust_start_date_contract_edit"]').val(data.cust_start_date_contract);
                    $('[name="cust_end_date_contract_edit"]').val(data.cust_end_date_contract);
                    $('[name="cust_maintenance_contract_edit"]').val(data.cust_maintenance_contract);
                    
                    $('#modal_edit').modal('show'); // show bootstrap modal when complete loaded
                }
                else if(type==2)
                {
                    $('[name="id"]').val(data.cust_id);
                    $('[name="type"]').val(data.cust_type_id);
                    $('[name="detail_company_id"]').val(data.cust_company_detail_id);

                    $('[name="cust_code_edit"]').val(data.cust_code);
                    $('[name="cust_company_name_edit"]').val(data.cust_company_name);
                    $('[name="cust_business_type_edit"]').val(data.cust_business_type);
                    $("textarea#address").val(data.cust_company_address);
                    $("textarea#address2").val(data.cust_company_address2);
                    $("textarea#address3").val(data.cust_company_address3);
                    $('[name="cust_company_codepos_edit"]').val(data.cust_company_codepos);
                    $('[name="cust_company_city_edit"]').val(data.cust_company_city);
                    $('[name="cust_company_phone_edit"]').val(data.cust_company_phone);
                    $('[name="cust_company_email_edit"]').val(data.cust_company_email);
                    
                    $('[name="cust_start_date_contract_edit"]').val(data.cust_start_date_contract);
                    $('[name="cust_end_date_contract_edit"]').val(data.cust_end_date_contract);
                    $('[name="cust_maintenance_contract_edit"]').val(data.cust_maintenance_contract);
                    
                    $('#modal_edit_company').modal('show'); // show bootstrap modal when complete loaded
                }
                  
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }*/
    /////////////////////////////////////////////// End Modal Jquery Edit Customer ///////////////////////////////////////////////////////

    /////////////////////////////////////////////// Modal Jquery Detail Customer ///////////////////////////////////////////////////////
    function detail_cust(id,type)
    {
        $('.help-block').empty(); 
            //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('customer/ajax_detail/')?>/" + id + '/' + type,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                if(type==1)
                {
                    $('[name="id"]').val(data.cust_id);
                    $('[name="type"]').val(data.cust_type_id);
                    $('[name="detail_id"]').val(data.cust_personal_detail_id);

                    $('.detail_cust_code').html(data.cust_code);
                    $('.detail_cust_full_name').html(data.cust_full_name);
                    $('.detail_cust_short_name').html(data.cust_short_name);
                    $('.detail_cust_gender').html(data.cust_gender);
                    $('.detail_cust_religion_id').html(data.cust_religion_id);
                    $('.detail_cust_personal_email').html(data.cust_personal_email);
                    $('.detail_cust_personal_phone').html(data.cust_personal_phone);
                    $('.detail_cust_personal_mobile_phone').html(data.cust_personal_mobile_phone);
                    $('.detail_cust_personal_address').html(data.cust_personal_address);

                    $('.detail_cust_start_date_contract').html(data.cust_start_date_contract);
                    $('.detail_cust_end_date_contract').html(data.cust_end_date_contract);
                    $('.detail_cust_maintenance_contract').html(data.cust_maintenance_contract);
                    
                    $('#modal_detail').modal('show'); // show bootstrap modal when complete loaded
                }
                else if(type==2)
                {
                    $('[name="id"]').val(data.cust_id);
                    $('[name="type"]').val(data.cust_type_id);
                    $('[name="detail_id"]').val(data.cust_personal_detail_id);

                    $('.detail_cust_code').html(data.cust_code);
                    $('.detail_cust_company_name').html(data.cust_company_name);
                    $('.detail_cust_business_type').html(data.is_business);
                    $('.detail_cust_company_address').html(data.cust_company_address);
                    $('.detail_cust_company_address2').html(data.cust_company_address2);
                    $('.detail_cust_company_address3').html(data.cust_company_address3);
                    $('.detail_cust_company_codepos').html(data.cust_company_codepos);
                    $('.detail_cust_company_city').html(data.cust_company_city);
                    $('.detail_cust_company_phone').html(data.cust_company_phone);
                    $('.detail_cust_company_email').html(data.cust_company_email);
                    
                    $('.detail_cust_start_date_contract').html(data.cust_start_date_contract);
                    $('.detail_cust_end_date_contract').html(data.cust_end_date_contract);
                    $('.detail_cust_maintenance_contract').html(data.cust_maintenance_contract);
                    
                    $('#modal_detail_company').modal('show'); // show bootstrap modal when complete loaded
                }        
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    /////////////////////////////////////////////// End Modal Jquery Detail Customer ///////////////////////////////////////////////////////
</script>