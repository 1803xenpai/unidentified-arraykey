<?php

echo"<title>Delete USer</title>";
    $uname = $_GET['uname'];

    require 'success.php';

    $query = "DELETE FROM user_admin WHERE username='".$uname."'";
    mysqli_query($conn, $query);
    mysqli_close($conn);

    
    echo"<div class='bgreg'>";
        echo "User ".$uname." has successfully deleted from Database.";
        echo "<div>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "<a href='frontpage_admin.php' >Would you like to go back?</a>";
        echo"</div>";
        echo"</div>";
?>