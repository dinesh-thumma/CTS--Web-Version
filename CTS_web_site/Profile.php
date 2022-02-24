<?php
     $conn = mysqli_connect("localhost", "id16263941_cts_track", "u*/15t>4L\!)EFJK","id16263941_cts") or die(mysqli_error());

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
    
   

</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-color:#ffffff;">
        <div class="sidebar-brand">
            <h2><span style="font-size:2rem;"><i class="fas fa-shield-alt"></i></span><span class="title-name">Covid
                    Tracker</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="Home.php">
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
                    <a href="Profile.php" class="active">
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
                        
                        $sql="SELECT * FROM Login WHERE code = 1 ";
                        
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            
                            $out = $row['Email'];
                            $name = $row['Username'];
                        }
                    ?>
                    <h4 style="font-family: 'Playfair Display', serif;"><?php echo $out; ?></h4>
                </div>
            </div>

        </header>
        <main>
            <div>
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-10 mt-5 pt-5">
                            <div class="row z-depth-3" style="box-shadow: 5px 10px 8px 10px #888888; height:400px;">
                                <div class="col-sm-4 bg-dark rounded-left">
                                    <div class="card-block text-center text-white">
                                           <?php
                        
                                                  $sql="SELECT Image FROM Login Where code = 1";
                        
                                                  $result = mysqli_query($conn, $sql);
                                                  while($row = mysqli_fetch_assoc($result)){
                            
                                                         echo "<img src=data:image/jpeg/jpg/png;base64," . (base64_encode(($row['Image']))) . " width='220px' height='220px' class='mt-5' style='border-radius:40%;'>";
                                                   }
                    
                                             ?>
                                      
                                        <figcaption><?php echo $name; ?></figcaption>

                                    </div>

                                </div>
                                <div class="col-sm-8 bg-white rounded-right">
                                    <h3 class="mt-3 text-center">Information</h3>
                                    <hr class="badge-primary mt-0">
                                    <div class="row" style="margin:2rem;">
                                        <h5 class="font-weight-bold"><i class="fas fa-envelope fa-lg" style="color:red; margin-right:0.5rem;"></i>Email<h5>
                                        <h6 class="text-muted"><?php echo $out; ?></h6>
                                    </div>
                                    <div class="row" style="margin:2rem;">
                                        <h5 class="font-weight-bold"><i class="fas fa-user fa-lg" style="color:red; margin-right:0.5rem;"></i>User Name</h5>
                                        <h6 class="text-muted"><?php echo $name; ?></h6>
                                    </div>
                                    <div class="row" style="margin:2rem;">
                                        <a href="changename.php" class="font-weight-bold">Change UserName</a>
                                    </div>
                                    
                                    <div class="row" style="margin:2rem;">
                                        <a href="changepass.php" class="font-weight-bold">Change Password</a>
                                    </div>

                            </div>

                        </div>

                    </div>

                </div>

                </div>

            </div>

    </main>
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