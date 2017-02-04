
    <!-- start: Javascript -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.ui.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>

    <script src="<?php echo base_url('assets/js/datatables/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/datatables/js/dataTables.bootstrap.js'); ?>"></script>

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

    <!-- Chart Dashboard -->
    <script type="text/javascript">
      $(document).ready(function() {
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

    <script type="text/javascript">
    $(document).ready(function() {
      $('#chartGsmDisable').highcharts({
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
              name: 'Persentase GSM Disable',
              data: [
                {
                    name: 'GSM Active',
                    y: <?php echo count($disableActiveStock); ?>,
                    drilldown: 'GSM Active'
                }, 
                {
                    name: 'GSM Non Active',
                    y: <?php echo count($disableNonactiveStock); ?>,
                    drilldown: 'GSM Non Active'
                }

              ]
            }],
            drilldown: {
                series: [{
                    name: 'GSM Active',
                    id: 'GSM Active',
                    data: [
                        <?php 
                        // data yang diambil dari database
                        if(count($disableActiveStock)>0)
                        {
                           foreach ($disableActiveStock as $v) {
                           echo "[' GSM Number : " .$v->gsm_number . "<br> GSM IMSI Number : " . $v->gsm_imsi_number . "<br> GSM ICCID Number : " . $v->gsm_iccid_number . "<br> GSM Date Received : " . $v->gsm_received_date . "<br> Quantity" ."', " . $v->stock ."],\n";
                           }
                        }
                        ?>
                    ]
                }, {
                    name: 'GSM Non Active',
                    id: 'GSM Non Active',
                    data: [
                        <?php 
                        // data yang diambil dari database
                        if(count($disableNonactiveStock)>0)
                        {
                           foreach ($disableNonactiveStock as $v) {
                           echo "[' GSM Number : " .$v->gsm_number . "<br> GSM IMSI Number : " . $v->gsm_imsi_number . "<br> GSM ICCID Number : " . $v->gsm_iccid_number . "<br> GSM Date Received : " . $v->gsm_received_date . "<br> Quantity" ."', " . $v->stock ."],\n";
                           }
                        }
                        ?>
                    ]
                }]
            }
      });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
      $('#chartGsmActivated').highcharts({
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
              name: 'Persentase GSM Activated',
              data: [
                {
                    name: 'GSM Active',
                    y: <?php echo count($gsmActiveStock); ?>,
                    drilldown: 'GSM Active'
                }, 
                {
                    name: 'GSM Non Active',
                    y: <?php echo count($gsmNonactiveStock); ?>,
                    drilldown: 'GSM Non Active'
                }

              ]
            }],
            drilldown: {
                series: [{
                    name: 'GSM Active',
                    id: 'GSM Active',
                    data: [
                        <?php 
                        // data yang diambil dari database
                        if(count($gsmActiveStock)>0)
                        {
                           foreach ($gsmActiveStock as $v) {
                           echo "[' GSM Number : " .$v->gsm_number . "<br> GSM IMSI Number : " . $v->gsm_imsi_number . "<br> GSM ICCID Number : " . $v->gsm_iccid_number . "<br> GSM Date Received : " . $v->gsm_received_date . "<br> Quantity" ."', " . $v->stock ."],\n";
                           }
                        }
                        ?>
                    ]
                }, {
                    name: 'GSM Non Active',
                    id: 'GSM Non Active',
                    data: [
                        <?php 
                        // data yang diambil dari database
                        if(count($gsmNonactiveStock)>0)
                        {
                           foreach ($gsmNonactiveStock as $v) {
                           echo "[' GSM Number : " .$v->gsm_number . "<br> GSM IMSI Number : " . $v->gsm_imsi_number . "<br> GSM ICCID Number : " . $v->gsm_iccid_number . "<br> GSM Date Received : " . $v->gsm_received_date . "<br> Quantity" ."', " . $v->stock ."],\n";
                           }
                        }
                        ?>
                    ]
                }]
            }
      });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
      $('#chartGsmReceived').highcharts({
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
              name: 'Persentase GSM Received',
              data: [
                {
                    name: 'GSM Active',
                    y: <?php echo count($activeStock); ?>,
                    drilldown: 'GSM Active'
                }, 
                {
                    name: 'GSM Non Active',
                    y: <?php echo count($nonactiveStock); ?>,
                    drilldown: 'GSM Non Active'
                }

              ]
            }],
            drilldown: {
                series: [{
                    name: 'GSM Active',
                    id: 'GSM Active',
                    data: [
                        <?php 
                        // data yang diambil dari database
                        if(count($activeStock)>0)
                        {
                           foreach ($activeStock as $v) {
                           echo "[' GSM Number : " .$v->gsm_number . "<br> GSM IMSI Number : " . $v->gsm_imsi_number . "<br> GSM ICCID Number : " . $v->gsm_iccid_number . "<br> GSM Date Received : " . $v->gsm_received_date . "<br> Quantity" ."', " . $v->stock ."],\n";
                           }
                        }
                        ?>
                    ]
                }, {
                    name: 'GSM Non Active',
                    id: 'GSM Non Active',
                    data: [
                        <?php 
                        // data yang diambil dari database
                        if(count($nonactiveStock)>0)
                        {
                           foreach ($nonactiveStock as $v) {
                           echo "[' GSM Number : " .$v->gsm_number . "<br> GSM IMSI Number : " . $v->gsm_imsi_number . "<br> GSM ICCID Number : " . $v->gsm_iccid_number . "<br> GSM Date Received : " . $v->gsm_received_date . "<br> Quantity" ."', " . $v->stock ."],\n";
                           }
                        }
                        ?>
                    ]
                }]
            }
      });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
      $('#chartGpsReceived').highcharts({
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
              name: 'Persentase GPS Received',
              data: [
                {
                    name: 'GPS Serviceable',
                    y: <?php echo count($serviceableStock); ?>,
                    drilldown: 'GPS Serviceable'
                }, 
                {
                    name: 'GPS Unserviceable',
                    y: <?php echo count($unserviceableStock); ?>,
                    drilldown: 'GPS Unserviceable'
                }

              ]
            }],
            drilldown: {
                series: [{
                    name: 'GPS Serviceable',
                    id: 'GPS Serviceable',
                    data: [
                        <?php 
                        // data yang diambil dari database
                        if(count($serviceableStock)>0)
                        {
                           foreach ($serviceableStock as $v) {
                           echo "[' GPS IMEI Number : " .$v->gps_imei_number . "<br> Serial Number : " . $v->gps_sn . "<br> GPS Type : " . $v->gps_type_name . "<br> GPS Date Received : " . $v->gps_received_date . "<br> Quantity" ."', " . $v->stock ."],\n";
                           }
                        }
                        ?>
                    ]
                }, {
                    name: 'GPS Unserviceable',
                    id: 'GPS Unserviceable',
                    data: [
                        <?php 
                        // data yang diambil dari database
                        if(count($unserviceableStock)>0)
                        {
                           foreach ($unserviceableStock as $v) {
                           echo "[' GPS IMEI Number : " .$v->gps_imei_number . "<br> Serial Number : " . $v->gps_sn . "<br> GPS Type : " . $v->gps_type_name . "<br> GPS Date Received : " . $v->gps_received_date . "<br> Quantity" ."', " . $v->stock ."],\n";
                           }
                        }
                        ?>
                    ]
                }]
            }
      });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
      $('#chartCustList').highcharts({
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
              name: 'Persentase List Customer',
              data: [
                {
                    name: 'Active',
                    y: <?php echo count($activeList); ?>,
                    drilldown: 'Active'
                }, 
                {
                    name: 'Not Active',
                    y: <?php echo count($notActiveList); ?>,
                    drilldown: 'Not Active'
                }

              ]
            }],
            drilldown: {
                series: [{
                    name: 'Active',
                    id: 'Active',
                    data: [
                        <?php 
                        // data yang diambil dari database
                        if(count($activeList)>0)
                        {
                           foreach ($activeList as $v) {
                           echo "[' Customer Code : " .$v->cust_code . "<br> Customer Name : " . $v->cust_name . "<br> Status : " . $v->status . "<br> Final Contract : " . $v->cust_end_date_contract . "<br> Quantity" ."', " . $v->stock ."],\n";
                           }
                        }
                        ?>
                    ]
                }, {
                    name: 'Not Active',
                    id: 'Not Active',
                    data: [
                        <?php 
                        // data yang diambil dari database
                        if(count($notActiveList)>0)
                        {
                           foreach ($notActiveList as $v) {
                           echo "[' GPS IMEI Number : " .$v->cust_code . "<br> Serial Number : " . $v->cust_name . "<br> GPS Type : " . $v->status . "<br> GPS Date Received : " . $v->cust_end_date_contract . "<br> Quantity" ."', " . $v->stock ."],\n";
                           }
                        }
                        ?>
                    ]
                }]
            }
      });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
      $('#chartCustCompList').highcharts({
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
              name: 'Persentase List Customer',
              data: [
                {
                    name: 'Active',
                    y: <?php echo count($activeCompList); ?>,
                    drilldown: 'Active'
                }, 
                {
                    name: 'Not Active',
                    y: <?php echo count($notActiveCompList); ?>,
                    drilldown: 'Not Active'
                }

              ]
            }],
            drilldown: {
                series: [{
                    name: 'Active',
                    id: 'Active',
                    data: [
                        <?php 
                        // data yang diambil dari database
                        if(count($activeCompList)>0)
                        {
                           foreach ($activeCompList as $v) {
                           echo "[' Customer Code : " .$v->cust_code . "<br> Customer Name : " . $v->cust_name . "<br> Status : " . $v->status . "<br> Final Contract : " . $v->cust_end_date_contract . "<br> Quantity" ."', " . $v->stock ."],\n";
                           }
                        }
                        ?>
                    ]
                }, {
                    name: 'Not Active',
                    id: 'Not Active',
                    data: [
                        <?php 
                        // data yang diambil dari database
                        if(count($notActiveCompList)>0)
                        {
                           foreach ($notActiveCompList as $v) {
                           echo "[' GPS IMEI Number : " .$v->cust_code . "<br> Serial Number : " . $v->cust_name . "<br> GPS Type : " . $v->status . "<br> GPS Date Received : " . $v->cust_end_date_contract . "<br> Quantity" ."', " . $v->stock ."],\n";
                           }
                        }
                        ?>
                    ]
                }]
            }
      });
    });
    </script>

    <!-- vendor -->
    <script type="text/javascript">
      $(document).ready(function() {
        $('#chartvendor').highcharts({
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
                if(count($vendorStock)>0)
                {
                   foreach ($vendorStock as $v) {
                   echo "['" .$v->vendor_name ."<br>". $v->vendor_type . "<br>Quantity" ."', " . $v->stock ."],\n";
                   }
                }
                ?>
            ]
          }]

        });

        $('#containerTest').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Total Vendor'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Total percent market share'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [{
                name: 'Vendor',
                colorByPoint: true,
                data: [
                {
                    name: 'GSM',
                    y: <?php echo count($gsmStock); ?>,
                    drilldown: 'GSM'
                }, 
                {
                    name: 'GPS',
                    y: <?php echo count($gpsStock); ?>,
                    drilldown: 'GPS'
                }

                ]
            }],
            drilldown: {
                series: [{
                    name: 'GSM',
                    id: 'GSM',
                    data: [
                        <?php 
                        // data yang diambil dari database
                        if(count($gsmStock)>0)
                        {
                           foreach ($gsmStock as $v) {
                           echo "['" .$v->vendor_name ."<br>Quantity" ."', " . $v->stock ."],\n";
                           }
                        }
                        ?>
                    ]
                }, {
                    name: 'GPS',
                    id: 'GPS',
                    data: [
                        <?php 
                        // data yang diambil dari database
                        if(count($gpsStock)>0)
                        {
                           foreach ($gpsStock as $v) {
                           echo "['" .$v->vendor_name ."<br>Quantity" ."', " . $v->stock ."],\n";
                           }
                        }
                        ?>
                    ]
                }]
            }
        });

        

        /*$('#chartGsmReceived').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Total GSM Received'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Total percent market share'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [{
                name: 'Vendor',
                colorByPoint: true,
                data: [
                {
                    name: 'GSM',
                    y: <?php echo count($activeStock); ?>,
                    drilldown: 'Active'
                }, 
                {
                    name: 'GPS',
                    y: <?php echo count($nonactiveStock); ?>,
                    drilldown: 'Non Active'
                }

                ]
            }],
            drilldown: {
                series: [{
                    name: 'GSM',
                    id: 'Active',
                    data: [
                        <?php 
                        // data yang diambil dari database
                        if(count($activeStock)>0)
                        {
                           foreach ($activeStock as $v) {
                           echo "['" .$v->gsm_number ."<br>Quantity" ."', " . $v->stock ."],\n";
                           }
                        }
                        ?>
                    ]
                }, {
                    name: 'GPS',
                    id: 'Non Active',
                    data: [
                        <?php 
                        // data yang diambil dari database
                        if(count($nonactiveStock)>0)
                        {
                           foreach ($nonactiveStock as $v) {
                           echo "['" .$v->vendor_name ."<br>Quantity" ."', " . $v->stock ."],\n";
                           }
                        }
                        ?>
                    ]
                }]
            }
        });*/
      });
    </script>

    <script>
      $(function() {
        $( "#datepicker" ).datepicker({
          dateFormat: "yy-mm-dd"
        });
      });
    </script>
 
    <script type="text/javascript">
      $(document).ready(function(){
        $('.datatables-example').DataTable();
        
        $(function() {
          $('#checkAll').click(function() {
            $('.checkthis').prop('checked', this.checked);
            });
         });
      });
    </script>
    
    <script type="text/javascript">
      $(function(jQuery){
        $('.summernote').summernote({
          height: 300
          });
        }); 
    </script>
        
    <script>
    $(document).ready(function(){
        $('#show').click(function(){
            if (this.checked) {
                $('#password').attr("type", "text");
            } else {
                $('#password').attr("type", "password");
            }
        }); 
    });
    </script>

  <!-- end: Javascript -->
  </body>
</html>