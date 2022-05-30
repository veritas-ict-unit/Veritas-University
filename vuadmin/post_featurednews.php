<?php
    include "validate_admin.php";
    include "header.php";
    include "admin_navbar.php";
    include "admin_sidebar.php";
   
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user_add_style.css">
</head>

<body>
    <form class="news_form" action="post_featurednews_action.php" method="post" enctype="multipart/form-data">
    <div class=container>
            Select image to upload:<br><br>
                <input type="file" name="image"/><br><br>
               
    </div>
        <div class="flex-container">
            <div class=container>
                <label> Events Headline :</label><br>
                <input name="headline" style="height: 50px; width: 33vw;" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Events Details :</label><br>
                <textarea name="news_details" style="height: 200px; width: 60vw;" required /></textarea>
            </div>
        </div>

        <div class="flex-container">
            <div class="container">
               	    <input type="submit" name="submit" style="height: 50px; width: auto; background-color: green; color: white; margin-top:7px; border:10px;" value="Post Events "/>
            </div>

            <div class="container">
                <button type="reset" class="reset" onclick="return confirmReset();">Reset</button>
            </div>
        </div>

    </form>

    <script>
    function confirmReset() {
        return confirm('Do you really want to reset?')
    }
    </script>

</body>
</html>
