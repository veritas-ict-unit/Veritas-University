<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin_sidebar_style.css">
   <style> 
    body {
    margin: 0;
    padding: 0;
    background-color:  white;
}
</style>
</head>

<body>
    <div class="sidenav" id="theSideNav">
        <a href="javascript:void(0)" id="closebtn" onclick="closeNav()">&times;</a>
        <a href="admin_home">Home</a>
        <!-- <a href="book_ride">Book Ride</a> 
        <a href="./view_booked_ride">View Booked Ride</a>  -->
        <!-- <a href="./Readmsg">View Masseges </a> -->
        <a href="./upload.php">Upload Slider Image </a>
          <a href="./slider.php">View Uploaded Images </a>
          <a href="./post_featurednews">Post Events </a>
        <a href="./view_featurednews">View Event </a>
        <!-- <a href="./post_news.php">Post What's New </a>
        <a href="./view_news.php">View Whats's New </a> -->

          
    <div class="copyright_section" style="margin-top: 280px;" >
    <hr>
    <!-- <div class="container">
      <p class="copyright" style="border-buttom-left-radius: 3px;" >  EASY, AFFORDABLE AND COMFORTABLE RIDE @2021 <a href="www.staunchgrin"> <strong>STAUNCHGRIN</strong></a> All Rights Reserved.   <strong>Version 1.0</strong></p> 
    </div> -->
    
<div class="custom"  >
	<p><span style="color: white; font-family: Arial, Helvetica, sans-serif; font-size: 12.1440000534058px; line-height: 18.2159996032715px; background-color: #00664c;">Copyright © 2018<!--?php echo date("Y");?-->&nbsp;Veritas University Abuja . All Rights Reserved.&nbsp;</span></p>
</div>
  </div>
    </div>

<script>
// For-Loop below is used to create active links and accordingly color them.
// Helps in recognizing which tab is selected.
for (var i = 0; i < document.links.length; i++) {
    if (document.URL.indexOf('?') > 0) {
        sanitizedURL = document.URL.substring(0, document.URL.indexOf('?'));
    }
    else {
        sanitizedURL = document.URL;
    }
    if (document.links[i].href == sanitizedURL) {
        document.links[i].className = 'active';
    }
}

function openNav() {
    document.getElementById("theSideNav").style.width = "256px";
    var x = document.getElementById("theSideNav");
    if (x.className === "sidenav sidenav-fixed") {
        x.className += " responsive";
    }
}

// Never use get window size of jquery, in javascript, they dont work !
// lesson learnt !!!
function closeNav() {
    if (document.documentElement.clientWidth < 856) {
        document.getElementById("theSideNav").style.width = "0";
    }
}

$(document).ready(function() {
    $(window).resize(function () {
        if ($(window).width() > 855)
            document.getElementById("theSideNav").style.width = "256px";

        if (($(window).width()) < 856){
            $('#closebtn').trigger('click');
        }
    });
});

// Function below is jquery-3 function used for making the navbar sticky
$(document).ready(function() {
    $(window).scroll(function () {
        var x1 = document.getElementById("theSideNav").style.width;

        if ($(window).scrollTop() > 120) {
          $("#theSideNav").addClass('sidenav-fixed');

            if (($(window).width()) < 856 && x1 == "256px") {
                $('#hamburger').trigger('click');
            }
        }

        if ($(window).scrollTop() < 121) {
          $("#theSideNav").removeClass('sidenav-fixed');
        }
    });
});
</script>

</body>
</html>
