
<h1 class="adddata"> </h1>
<?php
    $id = $this->input->post('id');        
    $tbl = "department";
    $cond = array('id' => $id);
    $this->db->select('*');
            $this->db->from($tbl);
            $this->db->where($cond);
            $query = $this->db->get();
            $details = $query->result_array();      

 ?>

<div class="ibox-content">
    
        
        <div class="form-group  row">
            <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                                        <input type="hidden"  class="form-control id" name="name" value="<?=$details[0]['id']?>">
                    <input type="text" required class="form-control f_name" name="name" value="<?=$details[0]['name']?>">
                </div>
        </div>

   


        

       

        
        <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        
                                        <button class="btn btn-primary btn-sm" onclick="addpage();" >Save</button>
                                    </div>
                                </div>
                            
                        </div>


                        <script type="text/javascript">
                            
                        </script>



                        <script type="text/javascript">
function addpage()
{
    var f_name = $('.f_name').val();
    var id = $('.id').val();

    $.ajax({
        type: "POST",
        url: "<?=base_url('index.php/home/updateddatadept')?>",
            data: { f_name : f_name, id : id },
            dataType:"html",
            beforeSend: function() {
                // setting a timeout
                // $('.fadeMe').show();

            },
            success: function(data)
            {
                $('.adddata').html(data);
            }
        });
}   
</script>
