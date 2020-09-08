
<h1 class="adddata"> </h1>

<div class="ibox-content">
    
        
        <div class="form-group  row">
            <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" required class="form-control f_name" name="name" >
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
    $.ajax({
        type: "POST",
        url: "<?=base_url('index.php/home/adddatadept')?>",
            data: { f_name : f_name},
            dataType:"html",
            beforeSend: function() {
                // setting a timeout
                // $('.fadeMe').show();

            },
            success: function(data)
            {
                $('.f_name').val();
                $('.adddata').html(data);               
            }
        });
}   
</script>