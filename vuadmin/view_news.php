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
            $sql0 = "SELECT id, title, created FROM news ORDER BY created DESC";
            $result = $conn->query($sql0);
            if ($result->num_rows > 0) {
                // output data of each row
                $i = 0;
                while($row = $result->fetch_assoc()) {
                    $i++; ?>
    
                    <div class="flex-item">
                       
                                    <div class="">
                                        <p id="id"><?php echo $i . "."; ?></p>
                                    </div>
                                    <div class="flex-item-2">
                                        <p id="Headline"><?php echo  $row["title"] . "<br>" ?></p>
                                        <div class="flex-container-title">
                                            <p id="date"><?php echo "Date : " .
                                                date("d/m/Y", strtotime($row["created"])); ?></p>
                                         </div>
                            
                         
             
                                     </div>
                    <div class="flex-item-1">
                        <div class="dropdown">
                            <!--i'm dynamically naming each dropdown for every entry in the loop and
                                passing the respective integer value in the dropdown_func().
                                This creates adynamic anchor for each button-->
                          
                            <!--Pass the user trans_id as a get variable in the link-->
                          
                            <a href="./edit_news.php?id=<?php echo $row["id"] ?>">Edit</a> <br>
                         <hr>
                            <a href="./delete_news.php?id=<?php echo $row["id"] ?>"
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
