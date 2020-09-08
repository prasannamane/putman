<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>Verify</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>

                         <li class="breadcrumb-item">
                            <a>User</a>
                        </li>
                        
                        <li class="breadcrumb-item active">
                            <strong>Verify</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4">
                    <h2></h2>
                  <!--   <a class="btn btn-primary btn-sm" href="<?=base_url()?>index.php/admin/AdminController/add_category">Add Category</a> -->
                    <a class="btn btn-primary btn-sm" href="<?=base_url()?>index.php/admin/AdminController/user">Display Verify</a>
                </div>
            </div>

            <br>
            <div class="flash-message">
                <?php foreach (['danger', 'warning', 'success', 'info'] as $msg){ ?>
                    <?php if($this->session->flashdata($msg)){ ?>
                        <p class="alert alert-<?php echo $msg;?>"><?php echo $this->session->flashdata($msg);?> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    
                <?php } } ?>
            </div>



<?php //print_r($details); 
foreach ($details as $row) { ?>
    

<div class="row">
        <div class="offset-md-2 col-lg-8">
            <div class="ibox ">
                <div class="ibox-content text-center p-md">

                    <h3><span class="text-navy"><?=$row['name']?></span></h3>

                    <p><?=$row['answer']?></p>


                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <br>