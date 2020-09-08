<div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
              

               <img src="<?=base_url()?>assets/image/trucksflow.png">

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <p style="color: red;"><?=$message?></p>
                    <form class="m-t" role="form" method="post" action="<?=base_url('index.php/Home/dashbard')?>">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Username" name="email" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required="">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                          <?php if($this->session->flashdata('success')){?>
                <div class="alert alert-success">      
                <?php echo $this->session->flashdata('success')?>
                </div>
                <?php }  
                if($this->session->flashdata('danger')){?>
                <div class="alert alert-danger">      
                <?php echo $this->session->flashdata('danger')?>
                </div>
                <?php } ?>

                        <a href="<?=base_url('index.php/Home/forgotpass')?>">
                            <small>Forgot password?</small>
                        </a>

                        <p class="text-muted text-center">
                            <small>Do not have an account?</small>
                        </p>
                       
                    </form>
                    <p class="m-t">
                       <!--  <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> -->
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
          <!--   <div class="col-md-6">
                Copyright Example Company
            </div>
            <div class="col-md-6 text-right">
               <small>© 2014-2015</small>
            </div> -->
        </div>
    </div>