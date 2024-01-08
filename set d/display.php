<!DOCTYPE html>
<html lang="en">
<head>
    <title>Display data</title>
</head>
<body>
    <table border="2">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>PhoneNumber</th>
        <th>Department</th>
        <th>Salary</th>
    </tr>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="webtechs";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}

$query="SELECT * from user";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if ($total!=0)
{
    $result=mysqli_fetch_assoc($data);
    while($result=mysqli_fetch_assoc($data)){
        echo " 
        <tr>
        <td>". $result['username']."</td>
        <td>". $result['address']."</td>
        <td>". $result['phonenumber']."</td>
        <td>". $result['department']."</td>
        <td>". $result['salary']."</td>
        </tr>
        ";
    }

}
else{
    echo "no record";
}
?>
</table>
</body>
</html>