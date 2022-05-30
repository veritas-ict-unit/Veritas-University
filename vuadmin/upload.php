<!DOCTYPE html>
<?php
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }

    include "validate_admin.php";
    include "connection.php";
    include "header.php";
    include "admin_navbar.php";
    include "admin_sidebar.php";





 
?>
<html lang="en">
<body>
<br><br>
    <form action="store.php" method="post" enctype="multipart/form-data">
        Select image to upload:<br><br>
        <input type="file" name="image"/><br><br>
	    <input type="submit" name="submit" value="UPLOAD"/>
    </form>
</body>
</html>