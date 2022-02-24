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
    <style>
      ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    #909;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:    #909;
   opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:    #909;
   opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color:    #909;
}
::-ms-input-placeholder { /* Microsoft Edge */
   color:    #909;
}

::placeholder { /* Most modern browsers support this now. */
   color:    #909;
}
</style>
</head>

<body Style="background: url(images/Login_back.jpg); background-position: center fixed; background-size:cover; background-repeat: no-repeat;">

    <div>
       
        <div class="content-login" style="position:absolute; top:20%; left:25%;">
            <div style="background:url(images/Login_2.jpg); background-position:center fixed; background-repeat: no-repeat; background-size:cover; text-align: right; height: 500px; width: 750px; margin: 0 auto;">
                <div style="text-align: center;">
                    
                <h1 style="padding-top:1rem;font-family: 'Open Sans', sans-serif; color: #000;">CTS</h1>
                <h4 style="font-family: 'Open Sans', sans-serif;">A COVID-19 TRACKING SYSTEM</h4>
                </div>

                <h2 style="padding-top: 20px; padding-right: 80px; font-family: 'Open Sans', sans-serif; color:#000;">Admin Login</h2>
                <form action="index.php" method="post">
                    </br>
                    <img src="https://img.icons8.com/nolan/64/gmail.png"/ style="width:34px;"/>
                    <input type="email" name="mail" placeholder="Email" style="border-radius: 20px; height: 40px; width:35%; margin-right: 30px;"/>
                    </br></br>
                    <img src="https://img.icons8.com/ultraviolet/40/000000/forgot-password.png" style="width:34px;"/>
                    <input type="password" name="userPassword" placeholder="password" style="border-radius:20px; height: 40px; width:35%; margin-right: 30px; "/>
                    </br></br>
                    <input type="submit" name="login" value="LOGIN" style="margin-right: 45px; width: 30%; height: 40px; border-radius: 20px;background:#77fc03">
                   
               </form>
               <br>
               <a href="Forget.php" style="text-decoration: none; margin-right: 60px;"> Forget password ?</a>
               <?php 
               $conn = mysqli_connect("localhost", "id16263941_cts_track", "u*/15t>4L\!)EFJK","id16263941_cts") or die(mysqli_error());
               
               $em = $_POST['mail'];
               $pa = $_POST['userPassword'];
               
               
               $sql = "SELECT * FROM Login WHERE Email = '$em' and password='$pa'";
               
               $result = mysqli_query($conn, $sql);
               $count = mysqli_num_rows($result);
               
               if($count>0){
                   
                  $msg =  "Login Successfull";
                  echo $msg;
                   
                  echo '<script>

                          window.location="Home.php";

                      </script>';
                   
               }
               else {
                   
                   //echo "Login Failed";
               }
               
          ?>  
                
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

</html>