<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2><?=$title_?></h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html"><?=$title_?></a>
            </li>

            <li class="breadcrumb-item">
                <a><?=$title_?></a>
            </li>
            
            <li class="breadcrumb-item active">
                <strong>Edit <?=$title_?></strong>
            </li> 
        </ol>
    </div>
    <div class="col-lg-4">
        <h2></h2>
        <a class="btn btn-primary btn-sm" href="<?=base_url('index.php/Home')?>/add_<?=$title_dynamic?>">Add <?=$title_?> </a>  
<!--         <a class="btn btn-primary btn-sm" href="<?=base_url()?>Panel/<?=$title_dynamic?>">Display <?=$title_?> </a> -->
    </div>
</div>
<br>


            <br>
            <div class="flash-message">
                <?php foreach (['danger', 'warning', 'success', 'info'] as $msg){ ?>
                    <?php if($this->session->flashdata($msg)){ ?>
                        <p class="alert alert-<?php echo $msg;?>"><?php echo $this->session->flashdata($msg);?> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    
                <?php } } ?>
            </div><br>


<div class="ibox-content">
    <form action="<?=base_url('index.php/Home')?>/edit_<?=$title_dynamic?>/<?=$details[0]['id']?>" method="post" enctype="multipart/form-data">

<!--         SELECT `id`, `stud_id`, `name`, `email`, `password`, `conf_pass`, `gender`, `profile_img`, `age`, `pin_code`, `phone`, `dob`, `city`, `state`, `country`, `hobies`, `qualification`, `identity`, `course`, `address`, `enrolled`, `subject`, `join_date` FROM `student` WHERE 1 -->
        
        <div class="form-group  row">
            <label class="col-sm-2 col-form-label">Employee ID</label>
                <div class="col-sm-10">
                    <input type="text" required class="form-control" name="" readonly="" value="<?=$details[0]['id']?>">
                </div>
        </div>

        <div class="form-group  row">
            <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input readonly="" type="text" required class="form-control" name="name" value="<?=$details[0]['name']?>">
                </div>
        </div>


        <div class="form-group  row">
            <label class="col-sm-2 col-form-label">Mobile</label>
                <div class="col-sm-10">
                    <input type="text" readonly="" required class="form-control" name="phone" value="<?=$details[0]['phone']?>">
                </div>
        </div>

        <div class="form-group  row">
            <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" required readonly="" class="form-control" name="email" value="<?=$details[0]['email']?>">
                </div>
        </div>



                            </form>
                        </div>


