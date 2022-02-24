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
    
  
    
     <div class="text-center">
          <div class="text-center;" style="padding-top: 2rem;">
            <h2 style="color:#fff;">Enter the Name You want to change</h2>
          </div>
     </div>
    
    
      

     <div class="text-center">
         
         <div class="container" style="display: inline-block; margin-left:0; margin-right:0;">
        <div class="row">
            <div class="col-md-offset-5 col-md-4 text-center">
                  <div class="form-login"></br>
                  <form action="changename.php" method="post">
                      
                       <h4>Change Username</h4>
                       </br>
                       <input type="text" name="name" class="form-control input-sm chat-input" placeholder="Username"/>
                       </br></br>
                       <div class="wrapper">
                            <span class="group-btn">
                                <input class="btn btn-danger btn-md" type="submit" name="send" value="Submit"><i class="fa fa-sign-in">
                            </span>
                       </div>
                      
                  </form>
                  
                  <?php 
                    
	                   if($_POST['send']){
	                        
	                        $username = $_POST['name'];
	                        
                    	    $sql = "SELECT * FROM Login WHERE code = '1'";
                            
                            $res = mysqli_query($conn, $sql);
                            
                            while($row = mysqli_fetch_assoc($res)){
                                
                                $useremail = $row['Email'];
                                
                                
                            }
                    	                        
	                        
	                        $sql1 = "UPDATE Login SET Username = '$username' WHERE Email = '$useremail'";
	                        
	                        $result = mysqli_query($conn, $sql1);
	                       
	                       if($result){
	                           echo '<script>

                                window.location="Profile.php";

                            </script>';
	                           
	                       }
	                       else{
	                           echo "Failed to update the details!!!";
	                       }
	                    }

                    
                  ?>
                  
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