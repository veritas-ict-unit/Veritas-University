<?php
   
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
    <link rel="stylesheet"  href="css/manage_users_style.css"> 
</head>

<body>
    <div class="flex-container">
        <?php
            $sql0 = "SELECT id, title, body, image created FROM feactured_news ORDER BY created DESC";
            $result = $conn->query($sql0);
            if ($result->num_rows > 0) {
                // output data of each row
                $i = 0;
                while($imgData = $result->fetch_assoc()) {
                    $i--; ?>
    
                    <div class="flex-item">
                       
                                    <!-- <div class="">
                                        <p id="id"><?php echo $i . "."; ?></p>
                                    </div> -->
                                    <div class="flex-item-2">
                                        <p id="Headline"><?php echo   $imgData["title"] . "<br>" ?></p>
                                        <p id="Headline"><?php echo  $imgData["body"] . "<br>" ?></p>
                                       
                                        <p id="Headline"><?php echo " <img data-u='image' style='width:800px;height:500px; margin-left:20px;' src='display2.php?id=". $imgData['id'] . "' > </a>" ?>;</p>
                                       
                                        <div class="flex-container-title">
                                            <p id="date"><?php echo "Date : " .
                                                date("d/m/Y", strtotime($imgData["created"])); ?></p>
                                         </div>
                            
                         
             
                                     </div>
                    <div class="flex-item-1">
                        <div class="dropdown">
                            <!--i'm dynamically naming each dropdown for every entry in the loop and
                                passing the respective integer value in the dropdown_func().
                                This creates adynamic anchor for each button-->
                          
                            <!--Pass the user trans_id as a get variable in the link-->
                          
                            <a href="./#.php?id=<?php echo $imgData["id"] ?>">Edit</a> <br>
                         <hr>
                            <a href="./delete_featurednews.php?id=<?php echo $imgData["id"] ?>"
                                 onclick="return confirm('Are you sure?')">Delete</a>
                        </div>
                    
                    </div>
                </div>

              
                <?php }
                } else {  ?>
                    <p id="none"> No results found :(</p>
                <?php }
         
                 
                
          
        ?>
    </div>
    

</body>
</html>
