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
                    <a href="admin.php" class="active">
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
                    <h4 style="font-family: 'Playfair Display', serif;"><?php echo $out; ?></h4>
                </div>
            </div>

        </header>
        <main>
            Note: <h4 style="color:red; padding-left:10px;">Due to the recent deoloyment of our project we have the data entries since 1st February 2021</h4>
            <div class="query" style="display:grid; grid-template-columns: repeat(3, 1fr); grid-gap: 2rem; margin-top:1rem; margin-left:1rem; margin-right:1rem;background-image: url('images/12.jpg'); background-position: center fixed; background-repeat: no-repeat; background-size: cover;">
                <div class="text-center" style="margin-top:1rem;">
                    
                     <form action="admin.php" method="post">
                 <div class="row mb-3">
                    <div class="col-sm-3" style="margin-left:5rem;">
                        <h6>Search by Name</h6>
                        <input type="text" class="form-control" name="user" placeholder="Name" style="width:250%;">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
  
                </form>
                    
                </div>
               
               <div class="text-center" style="margin-top:1rem;">
                    <form action="admin.php" method="post">
                        <div class="row mb-3">
                            <div class="col-sm-3" style="margin-left:5rem;">
                                <h6>Search by Email</h6>
                                <input type="email" class="form-control" name="email" placeholder="Email" style="width:250%;">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">submit</button>
  
                    </form>
                   
                </div>
                
                <div class="text-center" style="margin-top:1rem;">
                    
                     <form action="admin.php" method="post">
                        <div class="row mb-3">
                            <div class="col-sm-3" style="margin-left:5rem;">
                                <h6>Search by Start and End Date</h6>
                                <input type="date" class="form-control" name="fdate" style="width:250%;">
                                <input type="date" class="form-control" name="edate" style="width:250%;">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">submit</button>
  
                    </form>
                    
                </div>
            
            <div class="text-center">
                <form action="admin.php" method="post">
                     <input type="submit" class="btn btn-primary" name="Data" value="Display all data" style="margin-bottom:0.5rem;">
                    
                </form>
               
            </div>
            
         
        </div>
        
        <div style="margin-left:2rem; margin-right:2rem; margin-top:1rem; height:200px;">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">SI</th>
                  <th scope="col">EMAIL</th>
                  <th scope="col">NAME</th>
                  <th scope="col">AGE</th>
                  <th scope="col">GENDER</th>
                  <th scope="col">STATUS</th>
                  <th scope="col">JOIN_DATE</th>
                </tr>
              </thead>
              <tbody>
                  
                     <?php
                     
                        $user = $_POST['user'];
                        
                        $sql = "SELECT * FROM User_Details WHERE Name = '$user'";
                        
                        
                        $out = mysqli_query($conn, $sql);
                    
                        $condition = mysqli_num_rows($out);
                    
                        while($row = mysqli_fetch_assoc($out)){
                            ?>
                            
                            <tr>
                                <th scope="row"><?php echo $row['SI_No'] ?></th>
                                <td><?php echo $row['Email_Address'] ?></td>
                                <td><?php echo $row['Name'] ?></td>
                                <td><?php echo $row['Gender'] ?></td>
                                <td><?php echo $row['Age'] ?></td>
                                <td><?php echo $row['Status'] ?></td>
                                <td><?php echo $row['created_at'] ?></td>
                            </tr>
                        
                    <?php
                        }
                  
                    ?>
                    
                    <?php
                     
                        $email = $_POST['email'];
                        
                        $sql = "SELECT * FROM User_Details WHERE Email_Address = '$email'";
                        
                        
                        $out = mysqli_query($conn, $sql);
                    
                        $condition = mysqli_num_rows($out);
                    
                        while($row = mysqli_fetch_assoc($out)){
                            ?>
                            
                            <tr>
                                <th scope="row"><?php echo $row['SI_No'] ?></th>
                                <td><?php echo $row['Email_Address'] ?></td>
                                <td><?php echo $row['Name'] ?></td>
                                <td><?php echo $row['Gender'] ?></td>
                                <td><?php echo $row['Age'] ?></td>
                                <td><?php echo $row['Status'] ?></td>
                                <td><?php echo $row['created_at'] ?></td>
                            </tr>
                        
                    <?php
                        }
                  
                    ?>
                    
                     <?php
                     
                        $email = $_POST['email'];
                        
                        $sql = "SELECT * FROM User_Details WHERE Email_Address = '$email'";
                        
                        
                        $out = mysqli_query($conn, $sql);
                    
                        $condition = mysqli_num_rows($out);
                    
                        while($row = mysqli_fetch_assoc($out)){
                            ?>
                            
                            <tr>
                                <th scope="row"><?php echo $row['SI_No'] ?></th>
                                <td><?php echo $row['Email_Address'] ?></td>
                                <td><?php echo $row['Name'] ?></td>
                                <td><?php echo $row['Gender'] ?></td>
                                <td><?php echo $row['Age'] ?></td>
                                <td><?php echo $row['Status'] ?></td>
                                <td><?php echo $row['created_at'] ?></td>
                            </tr>
                        
                    <?php
                        }
                  
                    ?>
                    
                    <?php
                     
                        $date1 = $_POST['fdate'];
                        $date2 = $_POST['edate'];
                        
                        $sql = "SELECT * FROM User_Details WHERE created_at BETWEEN '$date1' and '$date2'";
                        
                        
                        $out = mysqli_query($conn, $sql);
                    
                        $condition = mysqli_num_rows($out);
                    
                        while($row = mysqli_fetch_assoc($out)){
                            ?>
                            
                            <tr>
                                <th scope="row"><?php echo $row['SI_No'] ?></th>
                                <td><?php echo $row['Email_Address'] ?></td>
                                <td><?php echo $row['Name'] ?></td>
                                <td><?php echo $row['Gender'] ?></td>
                                <td><?php echo $row['Age'] ?></td>
                                <td><?php echo $row['Status'] ?></td>
                                <td><?php echo $row['created_at'] ?></td>
                            </tr>
                        
                    <?php
                        }
                  
                    ?>
                     <?php
                     
                        if(isset($_POST['Data'])){
                            
                            $sqlu = "SELECT * FROM User_Details";
                            
                             $out = mysqli_query($conn, $sqlu);
                    
                            $condition = mysqli_num_rows($out);
                    
                            while($row = mysqli_fetch_assoc($out)){
                                ?>
                            
                            <tr>
                                <th scope="row"><?php echo $row['SI_No'] ?></th>
                                <td><?php echo $row['Email_Address'] ?></td>
                                <td><?php echo $row['Name'] ?></td>
                                <td><?php echo $row['Gender'] ?></td>
                                <td><?php echo $row['Age'] ?></td>
                                <td><?php echo $row['Status'] ?></td>
                                <td><?php echo $row['created_at'] ?></td>
                            </tr>
                        
                    <?php
                        }
                        }
                            
                       
                  
                    ?>
                
              </tbody>
            </table>        
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