<?php
// destroying the session

session_start();
session_unset();
session_destroy();
echo "<br> You have been logged";
?>