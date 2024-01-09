<?php
// Start a session
session_start();

// Include the connection file
require 'connection.php';

// Check if the registration form is submitted
if (isset($_POST['registered'])) {
  
    $username = $_POST['dzName'];
    $useremail = $_POST['dzemail'];
    $userpassword = $_POST['dzpassword'];
    $userimage = $_FILES['dzimage'];

    // Check if the email is already registered
    $check_Email_present_or_not = "SELECT * FROM users WHERE email='$useremail'";
    $check_dboy = mysqli_query($connect, $check_Email_present_or_not);
    $cehck_email_present = mysqli_num_rows($check_dboy);

    if ($cehck_email_present == 0) {
        
        $actualaddress = $userimage['tmp_name'];
        $actualname = $userimage['name'];

       
        $mypath = 'profileimages/' . $actualname;
        move_uploaded_file($actualaddress,$mypath);

        
            
          

            $OTP = rand(100, 200);

         
            $to_email = $useremail;
            $subject = "OTP FOR ACCOUNT GENERATE";
            $body = "Your OTP FOR YOUR ACCOUNT VERIFICATION IS ".$OTP;
            $headers = "From: sender email";

            if (mail($to_email, $subject, $body, $headers)) {
                
                $_SESSION["username"] = $username;
                $_SESSION["useremail"] = $useremail;
                $_SESSION["userpassword"] = $userpassword;
                $_SESSION["userimage"] = $mypath;
                $_SESSION["OTP"] = $OTP;

               
                header('location:verify.php');
            } else {
                echo "Email sending failed...";
            }
      
    }  else{

        echo"
         <script>
         window.location.href='shop-registration.php';
         var error = document.getElementById('error');
         error.innerHTML ='emailaleradry registered';
         </script>";
     }
}
?>
