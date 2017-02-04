
    <!-- start: Javascript -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.ui.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
	
	<!-- Data Table -->
    <script src="<?php echo base_url('assets/js/datatables/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/datatables/js/dataTables.bootstrap.js'); ?>"></script>
	<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <!-- Data Table -->
	<script src="http://code.highcharts.com/highcharts.js"></script>

    <!-- plugins -->
    <script src="<?php echo base_url('assets/js/plugins/moment.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/icheck.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/fullcalendar.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/jquery.nicescroll.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/summernote.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/jquery.vmap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/maps/jquery.vmap.world.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/jquery.vmap.sampledata.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/chart.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/raphael.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/jquery.knob.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/ion.rangeSlider.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/jquery.mask.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/select2.full.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/nouislider.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/jquery.validate.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/tinymce/tinymce.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

    <script src="<?php echo base_url('assets/jquery-bootstrap-modal-steps.js'); ?>"></script>
    
    <!-- Custom Modules -->
    <script>
      $(document).ready(function () 
      {
        $("#showHide").click(function () 
        {
          if ($(".password").attr("type")=="password") 
          {
            $(".password").attr("type", "text");
          }
          else
          {
            $(".password").attr("type", "password");
          }
        });

        $("#newPassword").click(function () 
        {
          if ($(".newPassword").attr("type")=="password") 
          {
            $(".newPassword").attr("type", "text");
          }
          else
          {
            $(".newPassword").attr("type", "password");
          }
        });

        $("#confirmPassword").click(function () 
        {
          if ($(".confirmPassword").attr("type")=="password") 
          {
            $(".confirmPassword").attr("type", "text");
          }
          else
          {
            $(".confirmPassword").attr("type", "password");
          }
        });
      });

      $('#stepModal').modalSteps();

      $("#btnAdd").on("click", function(){
        $('#modal_form').modal({backdrop: 'static',show:true});
        resetForm();
      });

      ////////////////////////////////////////////////////// Start Modul PO Install ////////////////////////////////////////////////////////////////////
      $('#sbtSave').on("click", function() { 
        var url;
        url = "<?php echo site_url('order/process_order_install')?>";
        
        $.ajax({
            url: "<?=base_url('order/process_order_install')?>",
            type: 'POST',
            data: $('#form').serialize(),
            dataType: "JSON",
            //data: {'submit':true}, 
            success: function (data) 
            {
              $('#myModal').modal('hide');
              window.location.reload();
              //$("div#view").html(data);
            }
        });  
      });

      $('#sbtSave2').on("click", function() { 
        var url;
        url = "<?php echo site_url('order/process_order_ajax')?>";
        
        $.ajax({
            url: "<?=base_url('order/process_order_ajax')?>",
            type: 'POST',
            data: $('#form').serialize(),
            dataType: "JSON",
            //data: {'submit':true}, 
            success: function (data) 
            {
              $('#myModal').modal('hide');
                //reload_table();
              $('#youModal').modal('toggle');
            }
        });  
      });
///////////////////////////////////////////////////// End Modul PO Install ////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////// Start Modul Trial Install ////////////////////////////////////////////////////////////////////
      $('#trialSave').on("click", function() { 
        var url;
        url = "<?php echo site_url('order/process_order_install_trial')?>";
        
        $.ajax({
            url: "<?=base_url('order/process_order_install_trial')?>",
            type: 'POST',
            data: $('#form').serialize(),
            dataType: "JSON",
            //data: {'submit':true}, 
            success: function (data) 
            {
              $('#myModal').modal('hide');
              window.location.reload();
              //$("div#view").html(data);
            }
        });  
      });

      $('#trialSave2').on("click", function() { 
        var url;
        url = "<?php echo site_url('order/process_order_ajax_trial')?>";
        
        $.ajax({
            url: "<?=base_url('order/process_order_ajax_trial')?>",
            type: 'POST',
            data: $('#form_trial').serialize(),
            dataType: "JSON",
            //data: {'submit':true}, 
            success: function (data) 
            {
              $('#myModal').modal('hide');
              reload();
              $('#youModal').modal('toggle');
            }
        });  
      });
///////////////////////////////////////////////////// End Modul Trial Install ////////////////////////////////////////////////////////////////////////

      /*$('#btnSave').on("click", function() { 
        var url;
        url = "<?php echo site_url('vendor/ajax_add')?>";
        
        $.ajax({
            url: "<?=base_url('vendor/ajax_add')?>",
            type: 'POST',
            data: $('#form').serialize(),
            dataType: "JSON",
            //data: {'submit':true}, // An object with the key 'submit' and value 'true;
            success: function (data) 
            {
              $('#modal_form').modal('hide');
              window.location.reload();
              //$("div#view").html(data);
            }
        });  
      });*/

      $('#btnSave2').on("click", function() { 
        var url;
        url = "<?php echo site_url('vendor/ajax_add')?>";
        
        $.ajax({
            url: "<?=base_url('vendor/ajax_add')?>",
            type: 'POST',
            data: $('#form').serialize(),
            dataType: "JSON",
            //data: {'submit':true}, // An object with the key 'submit' and value 'true;
            success: function (data) 
            {
              $('#modal_form').modal('hide');
              //  reload();
              //   window.location.reload();
              $('#your_modal').modal('toggle');
            }
        });  
      });

    </script>

    <script>
      $(function () {
        $('#chartgps').highcharts({
          chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
          },
          title: {
            text: '<span class="fa fa-pie-chart"></span> Data GPS'
          },
          tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
          },
          plotOptions: {
            pie: {
              allowPointSelect: true,
              cursor: 'pointer',
              dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                style: {
                  color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
              }
            }
          },
          series: [{
            type: 'pie',
            name: 'Persentase Gps',
            data: [
                <?php 
                // data yang diambil dari database
                if(count($gps)>0)
                {
                   foreach ($gps as $v) {
                   echo "['" .$v->gps_type_name . "'," . $v->gps_type_qty ."],\n";
                   }
                }
                ?>
            ]
          }]
        });
      });
    </script>

    <!-- GPS Pie -->
    <script>
      $(function () {
        $('#chartgpspie').highcharts({
          chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
          },
          title: {
            text: '<span class="fa fa-pie-chart"></span> '
          },
          tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
          },
          plotOptions: {
            pie: {
              allowPointSelect: true,
              cursor: 'pointer',
              dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                style: {
                  color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
              }
            }
          },
          series: [{
            type: 'pie',
            name: 'Persentase Gps',
            data: [
                <?php 
                // data yang diambil dari database
                if(count($gpsStock)>0)
                {
                   foreach ($gpsStock as $v) {
                   echo "['" .$v->gps_type_name ."<br>". $v->gps_cond_name ."<br>". $v->gps_stat_name . "<br>Quantity" ."', " . $v->gps_qty ."],\n";
                   }
                }
                ?>
            ]
          }]
        });
      });
    </script>

    <script>
      $(function () {
        $('#chartgsmpie').highcharts({
          chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
          },
          title: {
            text: '<span class="fa fa-pie-chart"></span> '
          },
          tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
          },
          plotOptions: {
            pie: {
              allowPointSelect: true,
              cursor: 'pointer',
              dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                style: {
                  color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
              }
            }
          },
          series: [{
            type: 'pie',
            name: 'Persentase Gps',
            data: [
                <?php 
                // data yang diambil dari database
                if(count($gsmStock)>0)
                {
                   foreach ($gsmStock as $v) {
                   echo "['" .$v->gsm_number ."<br>". $v->gsm_cond_name ."<br>". $v->gps_stat_name . "<br>Quantity" ."', " . $v->gps_qty ."],\n";
                   }
                }
                ?>
            ]
          }]
        });
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('.radio-inline').change(function() {
            if ($('#radio1').attr('checked')) {
                $('#show-me').show();
            } else {
                $('#show-me').hide();
            }
        });

        $('#chartgpspieinstalled').highcharts({
          chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
          },
          title: {
            text: '<span class="fa fa-pie-chart"></span> '
          },
          tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
          },
          plotOptions: {
            pie: {
              allowPointSelect: true,
              cursor: 'pointer',
              dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                style: {
                  color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
              }
            }
          },
          series: [{
            type: 'pie',
            name: 'Persentase Gps',
            data: [
                <?php 
                // data yang diambil dari database
                if(count($gpsInstalled)>0)
                {
                   foreach ($gpsInstalled as $v) {
                   echo "['" .$v->gps_type_name ."<br>". $v->gps_cond_name ."<br>". $v->gps_stat_name . "<br>Quantity" ."', " . $v->gps_qty ."],\n";
                   }
                }
                ?>
            ]
          }]
        });
      });
    </script>
    
    <!-- End -->
    
    <script>
      $(function() {
        $( ".datepicker" ).datepicker({
          dateFormat: "yy-mm-dd"
        });
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function(){

        $('.next').attr('disabled',true);
        $('.form-group input').keyup(function(){
            if($(this).val().length !=0)
                $('.next').attr('disabled', false);            
            else
                $('.next').attr('disabled',true);
        });

        $('#activateBtn').attr("disabled", true);
        $('#sendBtn').attr("disabled", true);
        $('.checkthis').click(function(){
          var countCheck = $('input.checkthis:checkbox:checked').length;  
          if(countCheck>0){
            $('#activateBtn').attr("disabled", false);
            $('#sendBtn').attr("disabled", false);
          }else{
            $('#activateBtn').attr("disabled", true);
            $('#sendBtn').attr("disabled", true);
          }
        });

        $('#checkAll').click(function(){
          var countCheck1 = $('input.checkthis:checkbox:checked').length;  
          if(countCheck1>0){
            $('#activateBtn').attr("disabled", true);
            $('#sendBtn').attr("disabled", true);
          }else{
            $('#activateBtn').attr("disabled", false);
            $('#sendBtn').attr("disabled", false);
          }
        });

        //////////////////////// DataTables ///////////////////////
		$('#datatables-example').DataTable();
		// Export List Vendor
		$('#datatables-example-vendor').DataTable(
		{
			dom: 'Bfrtip',
			buttons: [
				//'copy', 'csv', 'excel', 'pdf', 'print'
				{
					title: 'List Vendor',
					extend: 'pdf',
					exportOptions: {
						columns: [0,1,2,3,4,5]
					}
				},
				{
					title: 'List Vendor',
					extend: 'excel',
					exportOptions: {
						columns: [0,1,2,3,4,5]
					}
				}
			]
		});
		// Export List GSM 
		$('#datatables-example-gsm').DataTable(
		{
			dom: 'Bfrtip',
			buttons: [
				//'copy', 'csv', 'excel', 'pdf', 'print'
				{
					title: 'List GSM Received',
					extend: 'pdf',
					exportOptions: {
						columns: [1,2,3,4,5,6]
					}
				},
				{
					title: 'List GSM Received',
					extend: 'excel',
					exportOptions: {
						columns: [1,2,3,4,5,6]
					}
				}
			]
		});
		$('#datatables-example-gsm-active').DataTable(
		{
			dom: 'Bfrtip',
			buttons: [
				//'copy', 'csv', 'excel', 'pdf', 'print'
				{
					title: 'List GSM Activated',
					extend: 'pdf',
					exportOptions: {
						columns: [0,1,2,3,4,5,6]
					}
				},
				{
					title: 'List GSM Activated',
					extend: 'excel',
					exportOptions: {
						columns: [0,1,2,3,4,5,6]
					}
				}
			]
		});
		$('#datatables-example-gsm-disable').DataTable(
		{
			dom: 'Bfrtip',
			buttons: [
				//'copy', 'csv', 'excel', 'pdf', 'print'
				{
					title: 'List GSM Disable',
					extend: 'pdf',
					exportOptions: {
						columns: [0,1,2,3,4,5,6]
					}
				},
				{
					title: 'List GSM Disable',
					extend: 'excel',
					exportOptions: {
						columns: [0,1,2,3,4,5,6]
					}
				}
			]
		});
		// Export List GPS
        $('#datatables-example-gps').DataTable(
		{
			dom: 'Bfrtip',
			buttons: [
				//'copy', 'csv', 'excel', 'pdf', 'print'
				{
					title: 'List GPS',
					extend: 'pdf',
					exportOptions: {
						columns: [0,1,2,3,4,5,6]
					}
				},
				{
					title: 'List GPS',
					extend: 'excel',
					exportOptions: {
						columns: [0,1,2,3,4,5,6]
					}
				}
			]
		});
		// Export List Install
		$('#datatables-example-install').DataTable(
		{
			dom: 'Bfrtip',
			buttons: [
				//'copy', 'csv', 'excel', 'pdf', 'print'
				{
					title: 'List Installation',
					extend: 'pdf',
					exportOptions: {
						columns: [0,1,2,3,4,5,6,7]
					}
				},
				{
					title: 'List Installation',
					extend: 'excel',
					exportOptions: {
						columns: [0,1,2,3,4,5,6,7]
					}
				}
			]
		});
		// Export List Uninstall
		$('#datatables-example-uninstall').DataTable(
		{
			dom: 'Bfrtip',
			buttons: [
				//'copy', 'csv', 'excel', 'pdf', 'print'
				{
					title: 'List Uninstallation',
					extend: 'pdf',
					exportOptions: {
						columns: [0,1,2,3,4,5,6]
					}
				},
				{
					title: 'List Uninstallation',
					extend: 'excel',
					exportOptions: {
						columns: [0,1,2,3,4,5,6]
					}
				}
			]
		});
		// Export List Customer Personal
		$('#datatables-example-cust-personal').DataTable(
		{
			dom: 'Bfrtip',
			buttons: [
				//'copy', 'csv', 'excel', 'pdf', 'print'
				{
					title: 'List Customer Personal',
					extend: 'pdf',
					exportOptions: {
						columns: [0,1,2,3,4,5,6]
					}
				},
				{
					title: 'List Customer Personal',
					extend: 'excel',
					exportOptions: {
						columns: [0,1,2,3,4,5,6]
					}
				}
			]
		});
		// Export List Customer Company
		$('#datatables-example-cust-company').DataTable(
		{
			dom: 'Bfrtip',
			buttons: [
				//'copy', 'csv', 'excel', 'pdf', 'print'
				{
					title: 'List Customer Company',
					extend: 'pdf',
					exportOptions: {
						columns: [0,1,2,3,4,5,6]
					}
				},
				{
					title: 'List Customer Company',
					extend: 'excel',
					exportOptions: {
						columns: [0,1,2,3,4,5,6]
					}
				}
			]
		});
		$('.datatables').DataTable();
		//////////////////////// DataTables ///////////////////////

        $(function() {
          $('#checkAll').click(function() {
            $('.checkthis').prop('checked', this.checked);
          });
        });

        $(function() {
          $('.dtype').change(function() {
            $('.toHide').hide();
              if($(this).val() == '1') {$('#div1').show('500');}
              if($(this).val() == '2') {$('#div2').show('500');}
          });

          /*var rates = document.getElementById('.dtype').value;

          if (document.getElementById('#div1').checked) {
            rate_value = document.getElementById('#div1').value;
          }else if(document.getElementById('#div2').checked){
            rate_value = document.getElementById('#div2').value;
          }*/
        });

        tinymce.init({
              selector: 'textarea#emailText',
              height: 350,
              plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code'
              ],
              toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
              content_css: [
                '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                '//www.tinymce.com/css/codepen.min.css'
              ]
            });

      });
    </script>

    <script type="text/javascript">
      (function(jQuery){
        $('.summernote').summernote({
          height: 300
        });
      })(jQuery);
    </script>

    <script type="text/javascript">

      <?php if(isset($_POST['save_next'])) { ?> /* Your (php) way of checking that the form has been submitted */

        $(function() {                       // On DOM ready
          $('#stepModal').modal('show');     // Show the modal
        });

      <?php } ?>                                    /* /form has been submitted */
    
    </script>
    
  </body>
</html>