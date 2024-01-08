<?php
$servername="localhost";
$username="root";
$password="";
$dbname="webtechs";
$tablename="user";

$name=$_POST['username'];
$address=$_POST['address'];
$phonenumber=$_POST['phonenumber'];
$department=$_POST['department'];
$salary=$_POST['salary'];

// creating the connnection

$conn=mysqli_connect($servername,$username,$password,$dbname);

// checking the connection

if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}
else{
    echo "Connection successful";
}

// inserting values in the database

$sql="INSERT INTO $tablename(username,address,phonenumber,department,salary) VALUES('$name','$address','$phonenumber','$department','$salary')";

if(mysqli_query($conn,$sql)){
    echo "Registration Successful";
}
else{
    echo "Error" . mysqli_error($conn);
}
mysqli_close($conn);
?>