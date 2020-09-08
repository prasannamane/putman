<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/styles.css')?>" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



 <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDA80hHp9DEODelmrPW973Lxy3coRgsIMg&sensor=false&amp;libraries=places"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <script src="<?=base_url('assets/jquery.geocomplete.js')?>"></script>
    <script src="<?=base_url('assets/logger.js')?>"></script>
     
    <script>
      $(function(){
        $("#geocomplete").geocomplete({
          map: ".map_canvas"
        });
        
        $("#search").click(function(){
          $("#geocomplete").geocomplete("find", "NYC");
        });
        
        $("#center").click(function(){
          var map = $("#geocomplete").geocomplete("map"),
            center = new google.maps.LatLng(10, 0);
          
          map.setCenter(center);
          map.setZoom(3);
        });
      });
    </script>

</head>
<body>

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

<div class="container">
  <h2>Register form</h2>
  <form class="form-horizontal" method="post" action="<?=base_url('index.php/home/signin')?>">
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">First Name:</label>
      <div class="col-sm-10">
        <input type="text" required="" class="form-control" id="email" placeholder="Enter First name" name="fname">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Last Name:</label>
      <div class="col-sm-10">
        <input type="text" required="" class="form-control" id="email" placeholder="Enter last name" name="lname">
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" required="" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" required="" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Address:</label>
      <div class="col-sm-10">
              <input id="geocomplete" required="" class="form-control" name="address" type="text" placeholder="Type in an address" size="90" />
      <input id="find" type="button" value="find" />
        
    <div class="map_canvas"></div>
        <!-- <input type="text" required="" class="form-control" id="email" placeholder="Enter address" name="address"> -->
      </div>
    </div>

    <div class="form-group">
 <label class="control-label col-sm-2" for="email">User type:</label>
 <div class="col-sm-10">
  <select class="form-control" id="sel1" name="role_type" required="">
    <option value="">Choose</option>
    <option value="Admin">Admin</option>
    <option value="Member">Member</option>
    
  </select>
</div>
</div>


    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="register" value="register" class="btn btn-default">Register</button>
      </div>
    </div>
  </form>
</div>

<hr><hr>

<div class="container">
  <h2>Login form</h2>
  <form class="form-horizontal" method="post" action="<?=base_url('index.php/home/signin')?>">
    
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" required="" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" required="" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
    </div>

   

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="login" value="login" class="btn btn-default">Login</button>
      </div>
    </div>
  </form>
</div>
<hr>

