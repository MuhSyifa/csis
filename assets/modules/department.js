/////////////////////////////////////////////// Modal Jquery Edit Department ///////////////////////////////////////////////////////
      function edit_department(id)
      {
          $('.help-block').empty(); // clear error string

          //Ajax Load data from ajax
          $.ajax({
              url : "<?php echo site_url('department/ajax_edit/')?>/" + id,
              type: "GET",
              dataType: "JSON",
              success: function(data)
              {
                  $('[name="id"]').val(data.dep_id);
                  $('[name="emp_dep_name"]').val(data.dep_name);
                  
                  $('#modal_edit_dep').modal('show'); // show bootstrap modal when complete loaded
              },
              error: function (jqXHR, textStatus, errorThrown)
              {
                  alert('Error get data from ajax');
              }
          });
      }
/////////////////////////////////////////////// End Modal Jquery Edit Department ///////////////////////////////////////////////////////

/////////////////////////////////////////////// Start Modal Jquery Proses Delet Department ///////////////////////////////////////////////////////
      function delete_department(id)
      {
          if(confirm('Are you sure delete this data?'))
          {
              // ajax delete data to database
              $.ajax({
                  url : "<?php echo site_url('department/ajax_delete')?>/" + id,
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
        }
/////////////////////////////////////////////// End Modal Jquery Proses Delet Department ///////////////////////////////////////////////////////