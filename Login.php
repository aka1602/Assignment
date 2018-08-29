<?php


$email = $_POST["email"];
$pass = $_POST["password"];


$con = mysqli_connect('localhost','root','','student');

if(! $con)
{
    die('Connection Failed'.mysql_error());
}




$query = "select email, password from student where email = '".$email."' and password= '".$pass."' ";

$result=mysqli_query($con,$query); 


if(!$result)
    die("Query Failed: " .  mysqli_error($con));

    else{
        if(mysqli_num_rows($result)>0)
        {
          
           echo "welcome to php";
        }
       else
       {
          echo'You entered email or password is incorrect';
        }
    }
?>