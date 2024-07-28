<?php
session_start();
$Name="";
$email="";
$Password="";
$validatepassword="";
$validateemail="";
$Var_Email="";
$Var_Password="";
$hasError=false;
$count=0;
$loginError=true;
$Photo="";
$loginInfo="";

if(isset($_POST["Login"]))	{

$email=$_REQUEST["email"]; 
$Password=$_REQUEST["password"];


if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $hasError=true;
    $validateemail="You Must Enter Valid Email";
}
else{
    $Var_Email=$email;
}


if(strlen($Password)<8 || empty($Password))
{
    $hasError=true;
    $validatepassword=" Password Must Contain 8 character!!";
}
else if(ctype_lower($Password ))
		{
			if(ctype_upper($Password))
			{

			}
			else 
			{
                $hasError=true;
				$validatepassword= "Password Must contain upper case and lower case";
			}

		}

        else if(is_numeric($Password))
        {
            $hasError=true;
            $validatepassword= "Password Must contain number-letter-special Character";
        }
        else if (!str_contains($Password,'?')) {
			$hasError = true;
			$validatepassword= "Password Must contain ? and #";
			
		}
        else if (!str_contains($Password,'#')) {
			$hasError = true;
			$validatepassword= "Password Must contain ? and #";
			
		}
else{
    $Var_Password=$Password;
}


if($hasError==false)
{
    
    
    $data = file_get_contents("../File/data.json");
    $mydata = json_decode($data);
    //$count=count($mydata);
    //echo $count;
	 //echo "my value: ".$mydata[1]->lastName;
  

    foreach($mydata as $myobject)
    {
        $count++;
    }

    for($i=0;$i<$count;$i++)
    {
        if($mydata[$i]->Email==$email && $mydata[$i]->Password==$Password) 
        {
            $Name=$mydata[$i]->Name;
            $Photo=$mydata[$i]->File_Path;
            $loginError=false;
           // break;
        
        }
    }

    if($loginError==false)
    {
        $loginInfo="Login Success !";
        $_SESSION["Email"]=$_REQUEST["email"];
        $_SESSION["Name"]=$Name;
        //header("location: Admin.php");

       
    }
    else 
    {
        $loginInfo="Login Failed !!";
    }

     
}

}

?>