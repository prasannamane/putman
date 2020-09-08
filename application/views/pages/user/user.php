<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>User</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>

            <li class="breadcrumb-item">
                <a>User</a>
            </li>
            
            <!-- <li class="breadcrumb-item active">
                <strong>Add User</strong>
            </li> -->
        </ol>
    </div>
    <div class="col-lg-4">
        <h2></h2>
      <!--   <a class="btn btn-primary btn-sm" href="<?=base_url()?>index.php/admin/AdminController/add_category">Add Category</a> -->
        <a class="btn btn-primary btn-sm" href="<?=base_url()?>index.php/admin/AdminController/user">Display Category</a>
    </div>
</div>
<br>

<div class="">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>User List</h5>
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

<!-- SELECT `id`, `stud_id`, `name`, `email`, `password`, `conf_pass`, `gender`, `profile_img`, `age`, `pin_code`, `phone`, `dob`, `city`, `state`, `country`, `hobies`, `qualification`, `identity`, `course`, `address`, `enrolled`, `subject`, `join_date` FROM `student` WHERE 1 -->


                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date of Register</th>
                        <th>DoB</th>
                        <th>Payment</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $i = 1;
                    foreach($details as $row){
//SELECT `id`, `full_name`, `email`, `phone`, `password`, `address`, `notification_receive`, `created_at`, `updated_at`, `status` FROM `register` WHERE 1
                        ?>
                            <tr class="gradeX">
                        <td><?=$row['id']?></td>
                        <td><?=$row['name']?></td>
                        <td><?=$row['email']?></td>
                        <td class="center"><?$row['phone']?></td>
                        <td><?=$row['join_date']?></td>
                        <td><?=$row['dob']?></td>
                        <td></td>
                        <th>
                            <a href="<?=base_url()?>index.php/admin/AdminController/edit_user/<?=$row['id']?>">
                                <i class=" btn btn-w-m btn-info fa fa-eye"></i>
                            </a>

                            <a href="<?=base_url()?>index.php/admin/AdminController/user/<?=$row['id']?>">
                                <i class="btn btn-w-m btn-danger fa fa-minus-square"></i>
                            </a>

                            <a href="<?=base_url()?>index.php/admin/AdminController/verify/<?=$row['id']?>">
                                <i class="btn btn-w-m btn-primary fa fa-check"></i>
                            </a>


                            </th>
                    </tr>
                        <?php

                    } ?>

                    
                  
                   
                    
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
                        </div>

                    </div>
                </div>
            </div>
            </div>