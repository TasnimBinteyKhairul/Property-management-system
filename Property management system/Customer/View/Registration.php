<?php include "..\Control\CustomerRegValidation.php"  ?>

<!DOCTYPE html>
<html>
<head>

<title>Registration Form </title>

</head>
<body>

<h1 align="Center">Customer Sign Up</h1>
<form action="..\control\process.php" method="post" enctype="multipart/form-data">
<tr>
<td>

<table>
	<center>
<tr>	
<h3> <a href="Login.php">Login</a></h3>
 <h3><a href="..\..\admin\MainPage.php">Home</a></h3>
 <br>
<td><label for="fname ">Full name : </label></td>
<td><input type="text" name="fname"><?php echo $Val_Name; ?></td>
</tr>


<tr>
 <td><label for="email ">Email : </label></td>
 <td><input type="text" name="email"><?php  echo $Val_Email; ?></td>
</tr>


<tr>
 <td><label for="password ">Password : </label></td>
 <td><input type="password" name="password"><?php  echo $Val_Pass; ?></td>
</tr>


<tr>
 <td><label for="ConfirmPassword ">Confirm Password : </label></td>
 <td><input type="ConfirmPassword" name="ConfirmPassword"><?php  echo $Val_ConfPass; ?> </td>
</tr>



<tr>
<td>Phone: </td>
<td> <input type="text"  id="phone" name="phone"><?php echo  $Val_Phone;?></td>
</tr>

<tr>
 <td><label for="Address ">Address : </label></td>
 <td><textarea rows="7" cols="25" name="Address" ></textarea><?php echo  $Val_Add;?></td>
</tr>

<tr>
<td> Gender : </td>
<td>
<input type="radio" name="gender" value="Male"> Male 
<input type="radio" name="gender" value="Female"> Female 
<input type="radio"  name="gender" value="Other"> Other
<?php echo $Val_Gender;?>
</td>
</tr>




<tr>
<td> <label for="file ">Please Choose a photo: </label> </td>
<td><input type="file" name="fileupload"></td>
</tr>

</center>
<tr>
<td> <input type="submit" name="Submit"> 
<input type="reset" name="Reset">
</td>

</tr>

</table>

</form>
</body>
</html>