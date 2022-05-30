<?php
    include "validate_admin.php";
    include "connection.php";
    include "header.php";
    include "admin_navbar.php";
    include "admin_sidebar.php";
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/action_style.css">
    <meta http-equiv="Refresh" content="3; url =./view_featurednews.php"/>
</head>


<body>
    <div class="flex-container">
        <div class="flex-item">
            <?php
               $headline = mysqli_real_escape_string($conn, $_POST["headline"]);
           
               $news_details = mysqli_real_escape_string($conn, $_POST["news_details"]);
            if(isset($_POST["submit"])){
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false){

            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
            $headline = mysqli_real_escape_string($conn, $_POST["headline"]);
           
            $news_details = mysqli_real_escape_string($conn, $_POST["news_details"]);

            // $sql0 = "INSERT INTO feactured_news (title, body, image, created)
            // VALUES('$headline', '$news_details', '$imgContent', NOW())";
 /*
         * Insert image data into database
         */
        
         //Create connection and select DB
         $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        
        
        
        //Insert image content into database
        $insert = $conn->query("INSERT into feactured_news (title, body, image,  created) VALUES ('$headline', '$news_details' ,'$imgContent', NOW())");
        if($insert){ ?>
            <p id="info"><?php echo "Events posted successfully !\n"; ?></p>
       <?php }else{
            echo "Events Fail to post, <a href='post_featurednews.php'>please try again</a>.";
        } 
    }else{
        echo "You have not selected any image and havn't . <a href='upload.php'>please try again</a>.";
    }
}
?>

          
 
        </div>

        <!-- <div class="flex-item">
            <a href="./post_featurednews.php" class="button">Post Again</a>
        </div> -->

    </div>

</body>
</html>
