<?php
    include "validate_admin.php";
    include "header.php";
    include "admin_navbar.php";
    include "admin_sidebar.php";
    include "connection.php"
   
?>
<?php
if (isset($_GET['id'])) {
        $_SESSION['id'] = $_GET['id'];
    }

    $sql0 = "SELECT * FROM news WHERE id=".$_SESSION['id'];
   

    $result0 = $conn->query($sql0);


    if ($result0->num_rows > 0) {
        // output data of each row
        while($row = $result0->fetch_assoc()) {
            $title = $row ["title"];
         

        }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user_add_style.css">
</head>

<body>
    <form class="news_form" action="edit_news_action.php" method="post">
        <div class="flex-container">
            <div class=container>
            <label>Headline :</label><br>
                <input name="headline" size="400" style="height: 200px; width: 60vw;" type="text" value="<?php echo $title ?>"  />    </div>
        </div>

        <!-- <div class="flex-container">
            <div class=container>
                <label>Details :</label><br>
                <textarea name="news_details" style="height: 200px; width: 60vw;"  value="<?php echo $title ?>" ></textarea>
            </div>
        </div> -->

        <div class="flex-container">
            <div class="container">
                <button type="submit">Update News</button>
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
