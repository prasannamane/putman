
<h1 class="adddata"> </h1>

<div class="ibox-content">
    
        
        <div class="form-group  row">
            <label class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" required class="form-control f_name" name="name" >
                </div>
        </div>

         <div class="form-group  row">
            <label class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" required class="form-control l_name" name="name" >
                </div>
        </div>


          <div class="form-group  row">
            <label class="col-sm-2 col-form-label">Department</label>
                <div class="col-sm-10">
                    
                    <select name="dept" class="form-control dept">
                        <option>Choose</option>
                        <?php 

                          $this->db->select('*');
            $this->db->from('department');
            $query = $this->db->get();
            $details = $query->result_array(); 
                    foreach($details as $row) {
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

console.log(f_name);
console.log(l_name);
console.log(dept);

    $.ajax({
        type: "POST",
        url: "<?=base_url('index.php/home/adddata')?>",
            data: { f_name : f_name, l_name : l_name, dept : dept },
            dataType:"html",
            beforeSend: function() {
                // setting a timeout
                // $('.fadeMe').show();

            },
            success: function(data)
            {
                $('.f_name').val();
                $('.l_name').val();
                $('.dept').val();
                $('.adddata').html(data);
                

            }
        });



}   
</script>