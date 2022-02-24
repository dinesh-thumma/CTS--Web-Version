<?php
    
       error_reporting(0);

	$conn = mysqli_connect("localhost", "id16263941_cts_track", "u*/15t>4L\!)EFJK","id16263941_cts") or die(mysqli_error());
	
	
	$sql = "SELECT COUNT(*) As COUNT FROM User_Details WHERE Status = 'Suspected'";
	    
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
	        
	   $output1 = $row['COUNT'];
	   
	}
	
	$sql1 = "SELECT COUNT(*) AS COUNT1 FROM User_Details WHERE Status = 'Infected'";
	
	$result1 = mysqli_query($conn, $sql1);
	while($row1 = mysqli_fetch_assoc($result1)){
	    
	    $output2 = $row1['COUNT1'];
	}
	
	$sql2 = "SELECT COUNT(*) AS COUNT2 FROM User_Details WHERE Status = 'Recovered'";
	
	$result2 = mysqli_query($conn, $sql2);
	while($row2 = mysqli_fetch_assoc($result2)){
	    
	    $output3 = $row2['COUNT2'];
	}
	
	$sql3 = "SELECT COUNT(*) AS COUNT3 FROM User_Details WHERE Status = 'Normal'";
	
	$result3 = mysqli_query($conn, $sql3);
	while($row3 = mysqli_fetch_assoc($result3)){
	    
	    $output4 = $row3['COUNT3'];
	}
	
	$sqldate = "SELECT COUNT(*) AS COUNTa FROM User_Details WHERE MONTH(created_at)=5 AND Status = 'Suspected'";
	
	$rest1 = mysqli_query($conn, $sqldate);
	while($rowa = mysqli_fetch_assoc($rest1)){
	    
	    $out1 = $rowa['COUNTa'];
	}
	
	 $sqldate1 = "SELECT COUNT(*) AS COUNTa FROM User_Details WHERE MONTH(created_at)=5 AND Status = 'Infected'";
	
	$rest2 = mysqli_query($conn, $sqldate1);
	while($rowb = mysqli_fetch_assoc($rest2)){
	    
	    $out2 = $rowb['COUNTa'];
	}
	
	 $sqldate2 = "SELECT COUNT(*) AS COUNTa FROM User_Details WHERE MONTH(created_at)=5 AND Status = 'Recovered'";
	
	$rest3 = mysqli_query($conn, $sqldate2);
	while($rowc = mysqli_fetch_assoc($rest3)){
	    
	    $out3 = $rowc['COUNTa'];
	}
	
	 $sqldate3 = "SELECT COUNT(*) AS COUNTa FROM User_Details WHERE MONTH(created_at)=5 AND Status = 'Normal'";
	
	$rest4 = mysqli_query($conn, $sqldate3);
	while($rowd = mysqli_fetch_assoc($rest4)){
	    
	    $out4 = $rowd['COUNTa'];
	}
	
	$result1 =(($output1)/( $output1 + $output2 + $output3 + $output4) )*100;
	$resulta = round($result1, 2);
	
	$result2 =(($output2)/( $output1 + $output2 + $output3 + $output4) )*100;
	$resultb = round($result2, 2);
	
	$result3 =(($output3)/( $output1 + $output2 + $output3 + $output4) )*100;
	$resultc = round($result3, 2);
	
	$result4 =(($output4)/( $output1 + $output2 + $output3 + $output4) )*100;
	$resultd = round($result4, 2);
	
   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>CTS</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Suspected', 'Infected', 'Recovered', 'Normal',  'Cumulative'],
          ['2021/02',  20,      19,         20,             36,          19],
          ['2021/03',  21,      21,        20,             43,               40],
          ['2021/04',  1,      3,        1,             3,               44],
          ['2021/05',  0,      0,        0,             0,                0]
        ]);

        var options = {
          title : 'Monthly data of covid Transmission',
          vAxis: {title: 'Cases'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
  
        function drawChart() {
  
          var data = google.visualization.arrayToDataTable([
            ['Task', 'Hour per Day'],
            ['Recovered',     <?php echo $out3 ?>],
            ['Infected',      <?php echo $out2 ?>],
            ['Suspected',  <?php echo $out1 ?>],
            ['Normal', <?php echo $out4 ?>],
          ]);
  
          var options = {
            title: 'New Registrations This month'
          };
  
          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  
          chart.draw(data, options);
        }
      </script>
   

</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-color:#ffffff;">
        <div class="sidebar-brand">
            <h2><span style="font-size:1.5rem;"><i class="fas fa-shield-alt"></i></span><span class="title-name">Covid
                    Tracker</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="Home.php" class="active">
                        <span style="font-size:2rem;"><i class="fa fa-home"></i></span>
                        <span class="name">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="admin.php">
                        <span style="font-size:2rem;"><i class="fa fa-user"></i></span>
                        <span class="name">Admin Panel</span>
                    </a>
                </li>
                <li>
                    <a href="Profile.php">
                        <span style="font-size:2rem;"><i class="fa fa-id-badge"></i></span>
                        <span class="name">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <span style="font-size:2rem;"><i class="fa fa-sign-out-alt"></i></span>
                        <span class="name">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header style="margin-top: -1.2rem;">
            <h2>
                <label for="nav-toggle">
                    <span style="margin-right:1rem;"><i class="fas fa-align-justify"></i></span>
                </label>
                CTS
            </h2>
            <div class="user-wrapper">
                 <?php
                        
                        $sql="SELECT Image FROM Login Where code = 1";
                        
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            
                     echo "<img src=data:image/jpeg/jpg/png;base64," . (base64_encode(($row['Image']))) . " width='30px' height='30px' >";
                        }
                    
                    ?>
                <div>
                     <?php
                        
                        $sql="SELECT * FROM Login";
                        
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            
                            $out = $row['Email'];
                        }
                    ?>
                    <h4 style="font-family: 'Playfair Display', serif;"><?php echo $out ?></h4>
                </div>
            </div>

        </header>
        <main>
            <div class="title_style">
                <div class="top-image">
                    <img src="images/panel.jpg" alt="image not found" style="width:100%; height:500px;">
                </div>
            
             </div>
            <div class="cards" style="margin-top:0rem;">
                <div class="card-single card1 img-fluid">
                    <div class="one">
                        <?php

                            echo "<h1>{$output1}</h1>";
                        ?>
                        <span>Suspected</span>
                    </div>
                    <div class="icons">
                        <span><i class="fas fa-mask"></i></span>
                    </div>
                </div>
                <div class="card-single card2 img-fluid">
                    <div class="two">
                         <?php

                            echo "<h1>{$output2}</h1>";
                        ?>
                        <span>Infected</span>
                    </div>
                    <div>
                        <span class="icons"><i class="fas fa-diagnoses"></i></span>
                    </div>
                </div>
                <div class="card-single card3 img-fluid">
                    <div class="three">
                         <?php

                            echo "<h1>{$output3}</h1>";
                        ?>
                        
                        <span>Recovered</span>
                    </div>
                    <div>
                        <span class="icons"><i class="fas fa-award"></i></span>
                    </div>
                </div>
                <div class="card-single card4 img-fluid">
                    <div class="four">
                         <?php

                            echo "<h1>{$output4}</h1>";
                        ?>
                        
                        <span>Normal</span>
                    </div>
                    <div>
                        <span class="icons"><i class="fas fa-hard-hat"></i></span>
                    </div>
                </div>

            </div>

        </main>
        <div class="display-content container-fluid" style="margin-top:2%;">
            <div class="display-content1">
                <img src="images/graph.jpg" alt="image not found" style="width:700px;">
            <!--<div id="chart_div" style="width: 800px; height: 350px;"></div>-->
            </div>

            <div class="display-content2">
                <div class="bar_name text-center">
                    <label>
                        <h1 style="font-size:25px; color: #000;">Present<span style="color:coral"> Status</span></h1>
                    </label>
                </div>
                <hr>
                <div class="status_name">
                    <h4><span>Suspected</span><span style="float:right; margin-right:1rem;"><?php echo $resulta ?>%</span></h4>
                </div>
                <div class="progress">
                    <?php echo '<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"
                        style="width:'.$resulta.'%; background-color: chocolate;"></div>'; ?>
                </div>
                <br>
                <div class="status_name">
                    <h4><span>Infected</span><span style="float:right; margin-right:1rem;"><?php echo $resultb ?>%</span></h4>
                </div>
                <div class="progress">
                    <?php echo '<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuenow="$output2" aria-valuemin="0" aria-valuemax="100"
                        style="width: '.$resultb.'%; background-color: crimson;"></div>'; ?>
                </div>
                <br>
                <div class="status_name">
                    <h4><span>Recovered</span><span style="float:right; margin-right:1rem;"><?php echo $resultc ?>%</span></h4>
                </div>
                <div class="progress">
                    <?php echo '<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                        style="width: '.$resultc.'%; background-color: darkgreen;"></div>'; ?>
                </div>
                <br>
                <div class="status_name">
                    <h4><span>Normal</span><span style="float:right; margin-right:1rem;"><?php echo $resultd ?>%</span></h4>
                </div>
                <div class="progress" style="margin-bottom: 2%;">
                    <?php echo '<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                        style="width: '.$resultd.'%; background-color: darkkhaki;"></div>'; ?>
                </div>
            </div>
        </div>
    
      <div class="display-content container-fluid" style="margin-top:2%;">
            <div class="display-content1">
                <div id="chart_div" style="height:350px; width:100%;"></div>
            </div>

            <div class="display-content2">
                
                <div id="piechart" style="width: 100%; height: 350px;"></div>
                
            </div>
        </div>
        
          <div class="container-fluid" style="display: grid; grid-template-columns:repeat(2, 1fr); grid-gap:1rem;">
            <div style="margin-left: 0rem;">
                <div>
                   <div><img src="images/Article1.jpg" width="100%" height="400px"></div>
                   <br>
                    <h4>Source: <span style="color:chocolate;">  WHO</span>  Official</h4>
                    <br>
                    <p>It has been 13 months since the World Health Organisation (WHO) declared
                        
                        It has been 13 months since the World Health Organization (WHO) declared Covid-19 a pandemic.
                         Since then, the world has got several vaccines against it - a record for fastest vaccine development. An Indian pharmaceutical company has announced a drug that can potentially treat Covid-19 giving hope that doctors will now actually be able to control the disease rather than just manage symptoms while the virus runs through its course in a patient's body. 
                        <br>
                        <br>
Yet, Covid-19 and SARS-CoV-2, the pathogen, are far from being completely understood by the scientific community.Covid-19 is still an invisible enemy. It is highly contagious. Every new strain or mutant variant of SARS-CoV-2 appears to be more infectious than the previous one. What the doctors know for sure is that the coronavirus infection spreads fastest during pre-symptomatic and asymptomatic phases of Covid-19. This is the time when even the patient does not know that she is carrying and transmitting the virus.
               
            </div>
            </div>
            <div style="margin-left: 0rem;">
                <div>
                    <div><img src="images/Article2.jpg" width="100%" height="400px"></div>
                    <br>
                    <h4>Saftey measures by WHO<span style="color:chocolate;"> :</spa></h4>
                    <br>
                    <p>1. Always check local regulations before attending an event.<br>
                    <br>
                        2. Stay at home if you are feeling unwell.<br>
                        <br>
                        3. Always comply with the following 3 basic preventive measures:<br>
                        <br>
                        4. Maintain at least 1 metre distance from others, and wear a mask if you cannot
                        guarantee this distance.<br>
                        <br>
                        5. Cover a sneeze or cough with a tissue or bent elbow, and immediately
                        dispose of tissue in a closed-lid bin. Avoid touching eyes, nose and mouth.<br>
                        <br>
                        6. Wash your hands frequently with soap and water, or with a hand sanitizer. </p>
                </div>
            </div>
        </div>

        
    <footer style="text-align:center;">
        <div>
            <span>For more Information Visit   </span><a href="https://www.who.int/" style="text-decoration:none;">WHO OFFICIAL</a>
        </div>
        <br>
        <hr>
        <div>
            <h1>Stay <span style="color:chocolate;">Home</span>  Stay <span style="color:chocolate;"> Safe</span></h1>
        </div>
        <br>
        <br>
    </footer>
  
    </div>

    <!--  -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>