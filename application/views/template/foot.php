 <!-- Mainly scripts -->

    <script src="<?php echo base_url('assets/');?>js/jquery-3.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    

    <script src="<?php echo base_url('assets/');?>js/plugins/dataTables/datatables.min.js"></script>
    <script src="<?php echo base_url('assets/');?>js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

    <!-- Custom and plugin javascript -->
   
    
    <script src="<?php echo base_url('assets/');?>js/popper.min.js"></script>
    <script src="<?php echo base_url('assets/');?>js/bootstrap.js"></script>
    <script src="<?php echo base_url('assets/');?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url('assets/');?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="<?php echo base_url('assets/');?>js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url('assets/');?>js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url('assets/');?>js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url('assets/');?>js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url('assets/');?>js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="<?php echo base_url('assets/');?>js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url('assets/');?>js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url('assets/');?>js/inspinia.js"></script>
    <script src="<?php echo base_url('assets/');?>js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?php echo base_url('assets/');?>js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="<?php echo base_url('assets/');?>js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url('assets/');?>js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo base_url('assets/');?>js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="<?php echo base_url('assets/');?>js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="<?php echo base_url('assets/');?>js/plugins/toastr/toastr.min.js"></script>

        <!-- iCheck -->
    <script src="<?=base_url('assets/')?>js/plugins/iCheck/icheck.min.js"></script>

    <!-- Peity -->
    <script src="<?=base_url('assets/')?>js/demo/peity-demo.js"></script>

<script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>

    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

            }, 1300);


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [300,50,100],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [70,27,85],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        });
    </script>

     <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

    <script type="text/javascript">
            
        function checkAll(ele) 
        {
            var checkboxes = document.getElementsByTagName('input');
            if (ele.checked) 
            {
                for (var i = 0; i < checkboxes.length; i++) 
                {
                    if (checkboxes[i].type == 'checkbox') 
                    {
                        checkboxes[i].checked = true;
                    }
                }
            } 
            else 
            {
                for (var i = 0; i < checkboxes.length; i++) 
                {
                    console.log(i)
                    if (checkboxes[i].type == 'checkbox') 
                    {
                        checkboxes[i].checked = false;
                    }
                }
            }
        }
    </script>

        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDA80hHp9DEODelmrPW973Lxy3coRgsIMg&sensor=false&amp;libraries=places"></script>
<!--     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 -->
    <script src="http://job1800.com/johnpra/trucksflow/mapapi/map/jquery.geocomplete.js"></script>
    <script src="http://job1800.com/johnpra/trucksflow/mapapi/map/examples/logger.js"></script>
  

    <script>
        function myloc(lat, log)
        {
            var center = new google.maps.LatLng(lat,log),
            defaultBounds = new google.maps.LatLngBounds(
                new google.maps.LatLng(lat, log),
                new google.maps.LatLng(lat, log)
            );

            $("#geocomplete").geocomplete({
                map: ".map_canvas",
                types: ['establishment'],
                bounds: defaultBounds
            });

            var map =  $("#geocomplete").geocomplete("map")
            map.setCenter(center);
            map.setZoom(11);

            var myLatLng = { lat: lat, lng: log };

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: ""
            });
        }
    </script>

<!--     <script>
      $(function(){
        
        $("#geocomplete").geocomplete()
          .bind("geocode:result", function(event, result){
            $.log("Result: " + result.formatted_address);
          })
          .bind("geocode:error", function(event, status){
            $.log("ERROR: " + status);
          })
          .bind("geocode:multiple", function(event, results){
            $.log("Multiple: " + results.length + " results found");
          });
        
        $("#find").click(function(){
          $("#geocomplete").trigger("geocode");
        });
        
        
        $("#examples a").click(function(){
          $("#geocomplete").val($(this).text()).trigger("geocode");
          return false;
        });
        
      });
    </script> -->

<!--     <script>
      $(function(){
        
        var options = {
          map: ".map_canvas",
          location: "NYC"
        };
        
        $("#geocomplete1").geocomplete(options);
        
      });
    </script> -->
</body>
</html>
