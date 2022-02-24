<?php 
    
     $conn = mysqli_connect("localhost", "id16263941_cts_track", "u*/15t>4L\!)EFJK","id16263941_cts") or die(mysqli_error());
     
      
            
                        $usermail = $_POST['mail'];
            
                        if (filter_var($usermail, FILTER_VALIDATE_EMAIL)) {
                               
                               $sql = "SELECT * FROM Login WHERE Email = '$usermail' ";
                               
                               $result = mysqli_query($conn, $sql);
                               
                               while($row = mysqli_fetch_assoc($result)){
                                   
                                   $out = $row['password'];
                                   
                                   echo $out;
                               }
                               
                                $to = "$usermail";
                                $subject = "Password recovery";
                                $txt = "$out";
                                $headers = "From: cts@health.com" . "\r\n" .
                                "CC: somebodyelse@example.com";
                                
                                mail($to, $subject, $txt, $headers);
                                
                              
                                
                                if(mail($to,$subject,$txt,$headers)){
                                    
                                    echo 'mail sent';
                                    
                                    echo '<script>

                                            window.location="reset.php";

                                    </script>';
                                    
                                }
                                else {
                                    
                                    echo 'failed';
                                }
                        }
                        
             
                
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
            <h2 style="color:#fff;">password reset details will be sent to mail</h2>
          </div>
     </div>
    
    
      
    
     <div class="text-center">
         
         <div class="container" style="display: inline-block; margin-left:0; margin-right:0;">
        <div class="row">
            <div class="col-md-offset-5 col-md-4 text-center">
                  <div class="form-login"></br>
                  <form action="Forget.php" method="post">
                      
                       <h4>Forget Password</h4>
                       </br>
                       <input type="email" name="mail" class="form-control input-sm chat-input" placeholder="Email"/>
                       </br></br>
                       <div class="wrapper">
                            <span class="group-btn">
                                <input class="btn btn-danger btn-md" type="submit" name="send" value="Send"><i class="fa fa-sign-in">
                            </span>
                       </div>
                      
                  </form>
                  
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