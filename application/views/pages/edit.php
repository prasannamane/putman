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
            <label class="col-sm-2 col-form-label">Old Password</label>
                <div class="col-sm-10">
                    <input type="text" required class="form-control" name="password" value="">
                </div>
        </div>


        <div class="form-group  row">
            <label class="col-sm-2 col-form-label">New Password</label>
                <div class="col-sm-10">
                    <input type="text" required class="form-control" name="password2" value="">
                </div>
        </div>

     


     
        <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="submit">Cancel</button>
                                        <button class="btn btn-primary btn-sm" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>


