
<h1 class="adddata"> </h1>


<?php

  $id = $this->input->post('id');
            

            $tbl = "employee";
                $cond = array('id' => $id);

  $this->db->select('*');
            $this->db->from($tbl);
            $this->db->where($cond);
            $query = $this->db->get();
            $details = $query->result_array();      

 ?>

<div class="ibox-content">
    
        
        <div class="form-group  row">
            <label class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                                        <input type="hidden"  class="form-control id" name="name" value="<?=$details[0]['id']?>">
                    <input type="text" required class="form-control f_name" name="name" value="<?=$details[0]['name']?>">
                </div>
        </div>

         <div class="form-group  row">
            <label class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" required class="form-control l_name" name="name"  value="<?=$details[0]['last_name']?>">
                </div>
        </div>


          <div class="form-group  row">
            <label class="col-sm-2 col-form-label">Department</label>
                <div class="col-sm-10">
                    
                    <select name="dept" class="form-control dept">
                        <?php

                        $this->db->select('*');
            $this->db->from('department');
            $query = $this->db->get();
            $details3 = $query->result_array(); 
                    foreach($details3 as $row) {

                        if($row['id'] == $details[0]['dept_id'])
                        {
                                ?>

                         <option value="<?=$row['id']?>"><?=$row['name']?></option>

                    <?php

                        }
                    }

                        ?>

                      
                        <?php 

                          $this->db->select('*');
            $this->db->from('department');
            $query = $this->db->get();
            $details2 = $query->result_array(); 
                    foreach($details2 as $row) {
                        ?>

                         <option value="<?=$row['id']?>"><?=$row['name']?></option>

                    <?php

                    }

                        ?>
                    </select>
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
    var l_name = $('.l_name').val();
    var dept = $('.dept').val();
    var id = $('.id').val();

    $.ajax({
        type: "POST",
        url: "<?=base_url('index.php/home/updateddata')?>",
            data: { f_name : f_name, l_name : l_name, dept : dept, id : id },
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
