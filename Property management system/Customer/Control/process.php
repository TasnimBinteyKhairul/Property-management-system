<?php   include "..\View\Registration.php"; ?>
<?php   //include "CustomerRegValidation.php" ; ?>

<?php 
    $Name=$_REQUEST["fname"]; 
    $Email=$_REQUEST["email"]; 
    $Password=$_REQUEST["password"];
    $Phone=$_REQUEST["phone"];
    $Address=$_REQUEST["Address"];
    $Gender="";
if(isset($_REQUEST["gender"]))
{
    $Gender= $_REQUEST["gender"];
}




    $formdata = array(
        'Name'=> "$Name",
        'Email'=> "$Email",
        'Password'=>"$Password",
        'Phone'=>"$Phone",
        'Address'=>"$Address",
        'Gender'=>"$Gender",
       
    
     );
    
    
     $existingdata = file_get_contents('../File/data.json');
     $tempJSONdata = json_decode($existingdata);
     $tempJSONdata[] =$formdata;
     
     $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
     
     
     if(file_put_contents("../File/data.json", $jsondata)) {
          echo "Data successfully saved <br>";
      }
     else 
          echo "no data saved";
    
    $data = file_get_contents("../File/data.json");
    $mydata = json_decode($data);
    
    foreach($mydata as $myobject)
    {
    foreach($myobject as $key=>$value)
    {
      echo "your ".$key." is ".$value."<br>";
    } 
    echo "<br>";
    }
  
    

?>