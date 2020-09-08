

<div class="">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Department List</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#" class="dropdown-item">Config option 1</a>
                                </li>
                                <li><a href="#" class="dropdown-item">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">


                        <div class="table-responsive">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>

                    <tr>
                        <th>#</th>
                        <th>Name </th>
                        <th>Action</th> 
                    </tr>
             
                    </thead>
                    <tbody>
                    <?php 
                        $i = 1;
                        $this->db->select('*');
            $this->db->from('department');
            $query = $this->db->get();
            $details = $query->result_array(); 
                    foreach($details as $row) {
                        ?>
                            <tr class="gradeX myremove<?=$row['id']?>">
                        <td><?=$i++?></td>
                        <td><?=$row['name']?> </td>
                      
                                             
                        <td><a href="#" onclick="editdata(<?=$row['id']?>)" > Edit</a> /
                        <a href="#" onclick="deletedata(<?=$row['id']?>)" > Delete</a>                                                                         

                        </td>
                    </tr>
               <?php } ?>
                    
                    </tbody>
            <!--         <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                    </tfoot> -->
                    </table>
                </form>
                        </div>

                    </div>
                </div>
            </div>
            </div>

<script type="text/javascript">
function editdata(id)
{
    $.ajax({
        type: "POST",
        url: "<?=base_url('index.php/home/editdatadept')?>",
            data: { id : id },
            dataType:"html",
            beforeSend: function() {
                // setting a timeout
                // $('.fadeMe').show();

            },
            success: function(data)
            {
               $('.mypages').html(data);

            }
        });
}   
</script>

<script type="text/javascript">
function deletedata(id)
{
       
       var convar = window.confirm("Would you like to delete");
    if(convar){
    $.ajax({
        type: "POST",
        url: "<?=base_url('index.php/home/deleterowdept')?>",
            data: { id : id },
            dataType:"html",
            beforeSend: function() {
                // setting a timeout
                // $('.fadeMe').show();

            },
            success: function(data)
            {
                $('.myremove'+id).remove();
               //$('.mypages').html(data);

            }
        });
}
}   
</script>