    <?php foreach($result as $raw){ ?>
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

        $( document ).ready(function() {
            $("#geocomplete").geocomplete("find", "<?=$raw['address']?>");
        });
        
        $("#center").click(function(){
          var map = $("#geocomplete").geocomplete("map"),
            center = new google.maps.LatLng(10, 0);
          
          map.setCenter(center);
          map.setZoom(3);
        });
      });
    </script>
<body>

<!--      <button id="search">.geocomplete("find", "NYC")</button>
    <button id="center">.geocomplete("map").setCenter()</button>
 -->
<div class="container">
  <h2>Profile </h2>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input type="text" required="" class="form-control" id="email" name="fname" 
        value="<?=$raw['name']?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" value="<?=$raw['email']?>" required="" class="form-control" id="email" name="email">
      </div>
    </div>
    <?php } ?>
  </form>
</div>
<hr><hr>