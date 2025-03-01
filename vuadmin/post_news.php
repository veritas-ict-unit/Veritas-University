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
    <form class="news_form" action="post_news_action.php" method="post">
        <div class="flex-container">
            <div class=container>
                <label>What's New :</label><br>
                <textarea name="headline" style="height: 200px; width: 60vw;" required /></textarea>
            </div>
        </div>

        <!-- <div class="flex-container">
            <div class=container>
                <label>Details :</label><br>
                <textarea name="news_details" style="height: 200px; width: 60vw;" required /></textarea>
            </div>
        </div> -->

        <div class="flex-container">
            <div class="container">
                <button type="submit">Post News</button>
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
