<?php
// start the session and get the data

// session_start(); function must be written at top always
session_start();
if(isset($_SESSION ['username'])){
    echo "Welcome <br>". $_SESSION['username'];
    echo "<br> Your favorite category is ". $_SESSION['favCat'];
    echo "<br>";
}

else{
    echo "Please login to continue";
}


?>