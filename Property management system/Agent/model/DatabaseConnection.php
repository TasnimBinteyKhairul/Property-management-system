<?php
class DatabaseConnection{
 
function OpenCon()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pms";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
}
 function CheckUser($conn,$table,$username,$password)
 {
   $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
  
   if($result-> num_rows > 0)
  {
      echo "Log in Done";
  }
  else
  {
      echo "Log in failed "; 
  }
  
  
  
   return $result;
 }

 function InsertData($conn,$table,$Name,$email,$username,$Password,$Phone,$Address,$Date,$validateradio,$validcheckbox,$target_File)
 {
     $stmt = $conn-> prepare("INSERT INTO agent_reg (Name, Email, Username, Password, Phone, Address, DOB, Gender,Agent_Type, File_Path) VALUES (?,?,?,?,?,?,?,?,?,?)"); 
     $stmt -> bind_param("ssssssssss",$Name,$email,$username,$Password,$Phone,$Address,$Date,$validateradio,$validcheckbox,$target_File); 
    
     if($stmt->execute())
    {
        echo "Agent Data Saved In Database"; 
    }
    else
    {
        echo "Already Account exixt <br>" ; 
        echo $stmt->error; 
    }
     $stmt->Close(); 
     
 }

 function ShowAll($conn,$table)
 {
  $result = $conn->query("SELECT * FROM  $table");
  return $result;
 }

 function UpdateUser($conn,$table,$username,$firstname,$email)
 {
     $sql = "UPDATE $table SET firstname='$firstname', email='$email' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>