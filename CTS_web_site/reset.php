

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
             <a href="index.php" style="color:#fff;">Back to login page</a>
            
            <?php

                $headers  = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
                $headers .= "From: ". $from. "\r\n";
                $headers .= "Reply-To: ". $from. "\r\n";
                $headers .= "X-Mailer: PHP/" . phpversion();
                $headers .= "X-Priority: 1" . "\r\n";
                
                $subject = 'password reset';
                
                $message = 'Hello pavan';
                
                $status = mail("pavankamera12@gmail.com", $subject, $message, $headers);
                
                if($status)
                {
                    echo '<p>Your mail has been sent!</p>';
                } else {
                    echo '<p style="color:#fff;">Something went wrong. Please try again!</p>';
                }



            ?>
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