<?php 
$Val_Name=$Val_Email=$Val_Pass=$Val_ConfPass= $Val_Phone= $Val_Add=$Val_Gender="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{


    $Name=$_REQUEST["fname"]; 
    $email=$_REQUEST["email"]; 
    $Password=$_REQUEST["password"];
    $ConfirmPassword=$_REQUEST["ConfirmPassword"];
   $Phone=$_REQUEST["phone"];
    $Address=$_REQUEST["Address"];
    

if(empty($Name))
{
$Val_Name="Name must be 4 character";
}


if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $Val_Email="You Must Enter Valid Email";
}

if(strlen($Password)<6)
{
    $Val_Pass="Password Must Contain 6 character";
}

if(strlen($ConfirmPassword)<6)
{
    $Val_ConfPass="Confirm Password Must Contain 6 character";
}

else if($Password != $ConfirmPassword)
{
    $Val_ConfPass ="Password and Confirm password Must match";
}

}

if(empty($Phone))
{
    $Val_Phone="Phone can not be empty";
}

if(empty($Address))
{
    $Val_Add="Address can not be empty !!";
}

if(isset($_REQUEST["gender"]))
{
    $validateradio= "Gender - ".$_REQUEST["gender"];
}
else{
    $Val_Gender= "(Please Select Your Gender)";
}




?>