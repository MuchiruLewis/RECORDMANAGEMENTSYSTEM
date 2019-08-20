@extends('layouts.police')
@section('content')

<div class="content mt-3">


    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-archive text-warning border-warning"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">TOTAL OB RECORDS</div>
                        <div class="stat-digit">7</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-bell text-alert border-alert"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">TOTAL SOS ALERTS</div>
                        <div class="stat-digit">8</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">SUSPICIOUS ACTIVITY ALERTS</div>
                        <div class="stat-digit">4</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">TOTAL ARREST RECORDS</div>
                        <div class="stat-digit">5</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">TOTAL CASES</div>
                        <div class="stat-digit">3</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">TOTAL UPLOADED FILES</div>
                        <div class="stat-digit">4</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">OPEN CASES</div>
                        <div class="stat-digit">2</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">CLOSED CASES</div>
                        <div class="stat-digit">0</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-6">
        <div class="card">
                <div class="stat-widget-one">

                        <?php  
                        $connect = mysqli_connect("localhost", "root", "", "crimesystem");  
                        $query = "SELECT gender, count(*) as number FROM arrestrecord GROUP BY gender";  
                        $result = mysqli_query($connect, $query);  
                        ?>  
                        <!DOCTYPE html>  
                        <html>  
                             <head>  
                                  
                                  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
                                  <script type="text/javascript">  
                                  google.charts.load('current', {'packages':['corechart']});  
                                  google.charts.setOnLoadCallback(drawChart);  
                                  function drawChart()  
                                  {  
                                       var data = google.visualization.arrayToDataTable([  
                                                 ['Gender', 'Number'],  
                                                 <?php  
                                                 while($row = mysqli_fetch_array($result))  
                                                 {  
                                                      echo "['".$row["gender"]."', ".$row["number"]."],";  
                                                 }  
                                                 ?>  
                                            ]);  
                                       var options = {  
                                             title: 'Percentage of Male and Female Convicts',  
                                             //is3D:true,  
                                             pieHole: 0.4  
                                            };  
                                       var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                                       chart.draw(data, options);  
                                  }  
                                  </script>
                                   </head>  
                             <body>  
                                  <br /><br />  
                                  <div style="width:500px;">  
                                       
                                       <br />  
                                       <div id="piechart" style="width: 350px; height: 200px;"></div>  
                                  </div>  
                             </body>  
                        </html>  
                        
            


        </div>
        </div>
    </div>

   
    </div>

    <div class="">
        <div class="card">
            <div class="card-body">
                    <?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "crimesystem");
$query = "SELECT * FROM account";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ year:'".$row["year"]."', homicide:".$row["homicide"].", armedrobbery:".$row["armedrobbery"].", roadaccidents:".$row["roadaccidents"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>


<!DOCTYPE html>
<html>
 <head>
  
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
   </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center"> SOS STATISTICS CHART</h2>
   <h3 align="center"> GREEN-HOMICIDE,GREY-ARMEDROBBERY,BLUE-ROADACCIDENT</h3>   
   <br /><br />
   <div id="chart"></div>
  </div>
 </body>
</html>

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['homicide', 'armedrobbery', 'roadaccidents'],
 labels:['homicide', 'armedrobbery', 'roadaccidents'],
 hideHover:'auto',
 stacked:true
});
</script>

            </div>
        </div>
    </div>

    













@endsection