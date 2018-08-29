<?php
$a=$_POST["name"];
$b=$_POST["email"];
$c=$_POST["password"];
$conn=mysqli_connect('localhost','root','','student');/* I made the database with name student in my db */

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

  $sql = "insert into student( Name, email, password) values('$a','$b','$c')";


 if($conn->query($sql) === TRUE) {
    echo "New records created successfully";
 } 
 
 else {

    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>