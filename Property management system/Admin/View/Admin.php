<?php
session_start();

$Cookie_name=$_SESSION['Email'];
$Cookie_value=$_SESSION['Name'];
//include "Control\LoginValidation.php" ; 
if(isset($_SESSION["Name"])) 
{
   
}

$name="Admin";
$value=$_SESSION['Name'];

if(!isset($_COOKIE[$name]))
{
    setcookie($name,$value,time()+(200),"/");
    
}


echo "<h1> Admin Profile </h1>";
echo "<h3> Name : ".$_SESSION['Name']." </h3>";
echo "<h3> Email :".$_SESSION['Email']."</h3>";


if(!isset($_COOKIE[$name]))
{
    echo "New User : ".$_SESSION['Name'];
}
else 
echo "Old User : ".$_COOKIE["Admin"];


?>

 <h3><a href="..\control\Logout.php">logout</a> </h3>

