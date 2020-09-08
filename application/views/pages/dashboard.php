<div class="mypages"> </div>

<script type="text/javascript">
function showpage(id)
{
	var urlline;
	var data = 1;

	var Firstname =  1;
	var Lastname = 1;
	var Deptname = 1;
	
	if(id == 1)
	{
		var Firstname =  $('.Firstname').val();
		var Lastname = $('.Lastname').val();
		var Deptname = $('.Deptname').val();

		urlline = "<?=base_url('index.php/home/user')?>";
	}
	else if(id == 2)
	{
		urlline = "<?=base_url('index.php/home/add_employees')?>";

	}
	else if(id == 3)
	{
		urlline = "<?=base_url('index.php/home/department')?>";
	}
	else if(id == 4)
	{
		urlline = "<?=base_url('index.php/home/add_department')?>";
		
	}

    $.ajax({
        type: "POST",
        url: urlline,
            data: {Firstname:Firstname, Lastname:Lastname, Deptname:Deptname},
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


