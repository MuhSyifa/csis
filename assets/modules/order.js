      $('#btnSave').on("click", function() { 
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
      });

      $('#sbtSave2').on("click", function() { 
        var url;
        url = "<?php echo site_url('order/process_order_ajax')?>";
        
        $.ajax({
            url: "<?=base_url('order/process_order_ajax')?>",
            type: 'POST',
            data: $('#form').serialize(),
            dataType: "JSON",
            //data: {'submit':true}, // An object with the key 'submit' and value 'true;
            success: function (data) 
            {
              $('#myModal').modal('hide');
                //reload_table();
              $('#youModal').modal('toggle');
            }
        });  
      });