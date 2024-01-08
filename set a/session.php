<?php
// what is a session?
// session is used to manage information across different pages
// used to verify the login information

// verify the user login info
session_start();
$_SESSION['username']="Sagar";
$_SESSION['favCat']="Books";
echo "We have saved your session";

?>