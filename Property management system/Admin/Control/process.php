<?php   include "..\View\Registration.php" ; ?>
<?php   include "RegValidation.php" ; ?>
<?php 
$validateradio="";
$validatecheckbox="";
$Code="";
$Name=$_REQUEST["name"]; 
$Email=$_REQUEST["email"]; 
$Password=$_REQUEST["password"];
$Phone=$_REQUEST["phone"];
$Street=$_REQUEST["street"];
$City=$_REQUEST["city"];
$State=$_REQUEST["state"];
$Postal=$_REQUEST["postal"];
$Date = date('Y-m-d', strtotime($_POST['birthday']));
if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}

if(!empty($_POST['code']))///country code
 {
    $Code= $_POST['code'];
} else {
    $ValidCode="Country Code Must Required";
}



$target_File="../File/".$_FILES["fileupload"]["name"];

if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_File))
{
    echo "You have uploadede a new file";
    echo "<br>".$_FILES(["fileupload"]["type"]);
    echo "<img src='".$target_File."'>";
}
if($hasError==false)
{
  
    $formdata = array(
        'Name'=> "$Name",
        'Email'=> "$Email",
        'Password'=>"$Password",
        'Phone'=>"$Code-$Phone",
        'Address'=>"$Street , $City, $State ,$Postal",
        'Gender'=>"$validateradio",
        'DOB'=>"$Date",
        "File_Path"=>"$target_File",
       
    
     );
    
    
     $existingdata = file_get_contents('../File/data.json');
     $tempJSONdata = json_decode($existingdata);
     $tempJSONdata[] =$formdata;
     //Convert updated array to JSON
     $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
     
     //write json data into data.json file
     if(file_put_contents("../File/data.json", $jsondata)) {
          echo "Data successfully saved <br>";
      }
     else 
          echo "no data saved";
    
    $data = file_get_contents("../File/data.json");
    $mydata = json_decode($data);
    
    $count=0;
    foreach($mydata as $myobject)
    {
        $count++;
    }

    for($i=$count-1;$i<$count;$i++)
    {
        echo "Your Name : ".$mydata[$i]->Name."<br>";
        echo "Your Email : ".$mydata[$i]->Email."<br>";
        echo "Your Password : ".$mydata[$i]->Password."<br>";
        echo "Your Phone : ".$mydata[$i]->Phone."<br>";
        echo "Your Address : ".$mydata[$i]->Address."<br>";
        echo "Your Gender : ".$mydata[$i]->Gender."<br>";
        echo "Your DOB : ".$mydata[$i]->DOB."<br>";
        echo "Your File_Path : ".$mydata[$i]->File_Path."<br>";
    }
/*
    foreach($mydata as $myobject)
    {
    foreach($myobject as $key=>$value)
    {
      echo "your ".$key." is ".$value."<br>";
    } 
    echo "<br>";
    }
    */
    
    
}


?>
<td><h3> <a href="..\View\Login.php">Login</a></h3>
<h3><a href="..\View\MainPage.php">Home</a></h3></td>