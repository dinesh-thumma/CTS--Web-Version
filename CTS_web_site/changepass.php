<?php 	
        error_reporting(0);

	  $conn = mysqli_connect("localhost", "id16263941_cts_track", "u*/15t>4L\!)EFJK","id16263941_cts") or die(mysqli_error());
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

    <link href="css/style1.css" rel="stylesheet">

    <title>CTS</title>
</head>

<body
    style="background-image: url('images/Login_back.jpg'); background-position: center fixed; background-repeat: no-repeat; background-size: cover;">
    

    <div class="title">
        
        <div class="sub-name text-center" style="justify-content:space-between;">
            <h2><span>Enter the required details to change the password</span></h2>
        </div>
    </div>
      <div class="container" style="display: inline-block;">
        <div class="row">
            <div class="col-md-offset-5 col-md-4 text-center">
                  <div class="form-login"></br>
                  <form action="changepass.php" method="post">
                      
                       <h4>Change Password</h4>
                       </br>
                       <input type="password" name="password" class="form-control input-sm chat-input" placeholder="Enter new password"/>
                       </br></br>
                       <input type="password" name="newpassword" class="form-control input-sm chat-input" placeholder="Confirm password"/>
                       </br></br>
                       <div class="wrapper">
                            <span class="group-btn">
                                <input class="btn btn-danger btn-md" type="submit" name="submit" value="Submit"><i class="fa fa-sign-in">
                            </span>
                       </div>
                      
                  </form>
                  
                  <?php 
                  
                        if($_POST['submit']){
                            
                            $pas1 = $_POST['password'];
                            $pas2 = $_POST['newpassword'];
                            
                            echo $pas1;
                            
                            if($pass1 != $pass2){
                                
                                echo "Password Doesnot match";
                            }else if($pas1 == $pas2){
                                
                                $sqlt = "UPDATE Login SET password = '$pas1' WHERE code='1'";
                                
                                $res = mysqli_query($conn, $sqlt);
                                
                                if($res){
                                    echo '<script>

                                              window.location="Profile.php";

                                         </script>';
                                    
                                }
                                else{
                                    echo "Failed to change";
                                }
                            }
                        }
                  ?>
                  
                    <div>
                      <a href="Home.php" style="text-decoration:none; color:#fff;">Got to Home Page</a>
                    </div>
                </div>
            </div>
        </div>
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