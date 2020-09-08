

<div class="">
            <div class="row">
                <div class="col-lg-12">
                    <input  type="text" name="" class="Firstname" placeholder="First Name search" >
                    <input type="text" name="" class="Lastname"  placeholder="Last Name search" >
                    <input type="text" name="" class="Deptname"  placeholder="Department Name search" >
                    <button type="button" name="" class=""   onclick="showpage(1)">Filter</button>

                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Employee List</h5>
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
                            <form action="<?=base_url('index.php/home')?>/delete_<?=$title_dynamic?>" method="post">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>

                    <tr>
                        <th>#</th>
                        <th>First Name </th>
                        <th>Last Name </th>
                        <th>Dept </th>
                      
                       
                        <th>Action</th> 
                    </tr>
             
                    </thead>
                    <tbody>
                    <?php 
                        $i = 1;

                        $ename = $this->input->post('Firstname');
                        $last_name = $this->input->post('Lastname');
                        $dname = $this->input->post('Deptname');
                        $data_array =array('employee.name' => $ename, 'last_name' => $last_name, 'department.name' => $dname ); 
                        $this->db->like($data_array);
                        $this->db->select('employee.name as ename, employee.last_name as last_name, employee.id as id, department.name as dname');
            $this->db->from('employee');

            $this->db->join('department', 'employee.dept_id=department.id', 'left');
            $query = $this->db->get();
            $details = $query->result_array(); 
                    foreach($details as $row) {
                        ?>
                            <tr class="gradeX myremove<?=$row['id']?>">
                        <td><?=$i++?></td>
                        <td><?=$row['ename']?> </td>
                        <td><?=$row['last_name']?> </td>
                         <td><?=$row['dname']?> </td>
                                             
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
        url: "<?=base_url('index.php/home/editdata')?>",
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
        url: "<?=base_url('index.php/home/deleterow')?>",
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