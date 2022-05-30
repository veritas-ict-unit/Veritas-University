<?php
 
  
session_start();
//If your session isn't valid, it returns you to the login screen for protection

    
include "validate_admin.php";
include "header.php";
 include "admin_sidebar.php";
 include "admin_navbar.php";
include "connection.php";

?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="admin_home_style.css">
  
</head>

<body>
    <div class="flex-container">
        <div class="flex-item">
            <h1 id="customer">
                Welcome Admin !
            </h1>
            <p id="customer" style="max-width:1000px; margin-left:150px;">
                From here you can manage all of core  settings.
                You can update news, view posted news.
                You can also change the slider pictures on the website.
                <br>Please keep in mind that with big power comes big responsibility.
                Therefore please do not misuse your admin control to create trouble.
            </p>
        </div>
    </div>
<!--     
    <div class="copyright_section" style="margin-top: 400px;" >
    <hr>
    <div class="container">
      <p class="copyright" style="border-buttom-left-radius: 3px;" >  EASY, AFFORDABLE AND COMFORTABLE RIDE @2021 <a href="www.staunchgrin"> <strong>STAUNCHGRIN</strong></a> All Rights Reserved.   <strong>Version 1.0</strong></p> 
    </div>
  </div> -->

</body>
</html>

