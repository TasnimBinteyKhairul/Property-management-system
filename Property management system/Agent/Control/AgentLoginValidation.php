<?php   include "..\model\DatabaseConnection.php"; ?>
<?php
session_start(); 
$Name="";
$email="";
$Password="";
$validatepassword="";
$validateemail="";
$_Email="";
$_Password="";
$Error=false;
$count=0;
$login_Error=true;
$Photo="";
$loginInfo="";

if(isset($_POST["Login"]))	{

$user=$_REQUEST["user"]; 
$Password=$_REQUEST["password"];


if(empty($user))
{
    $Error=true;
    $validateemail="* You Enter Your Username";
}



if(strlen($Password)<6 || empty($Password))
{
    $Error=true;
    $validatepassword="* You Enter Your Password ";
}
else
{
    $_Password=$Password;
}


if($Error==false)
{
    
    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $result=$connection->CheckUser($conobj,"agent_reg",$user,$Password);
    $connection->CloseCon($conobj);
    if ($result->num_rows > 0)
     {
        while($row = $result->fetch_assoc())
        {
        echo "Name: " . $row["Name"]. " - Email: " . $row["Email"]."<br>";
        $_SESSION["Email"]=$row["Email"]; 
        $_SESSION['Name']= $row["Name"];
       
        }
        } else {
        echo "0 results";
        }



    
   /* 
    $data = file_get_contents("../File/data.json");
    $mydata = json_decode($data);
  

    foreach($mydata as $myobject)
    {
        $count++;
    }

    for($i=0;$i<$count;$i++)
    {
        if($mydata[$i]->Username==$user && $mydata[$i]->Password==$Password) 
        {
            $Name=$mydata[$i]->Name;
            $Photo=$mydata[$i]->File_Path;
            $login_Error=false;
            header("location: ..\View\Agent.php");
        
        }
    }
 */    
}

}

?>