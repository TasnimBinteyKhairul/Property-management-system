<?php   include "..\Control\AgentRegValidation.php" ; ?>

<!DOCTYPE html>
<html>
<head>

<title>Registration Form </title>

</head>
<body>


<form action="..\Control\process.php" method="post" enctype="multipart/form-data">
<tr>
<td>
<u><h1 align="Center">Agent Sign Up</h1></u>
<fieldset>

<table>
<font color="red"> *Required
<br>
<br>

<tr>
<td>Name : </td>
<td><input type="text" placeholder="Enter your Name" name="name"> <?php echo $ValidName; ?>*</td>
</tr>


<tr>
<td> Email :  </td>
<td><input type="text" placeholder="Enter Email" name="email"> <?php echo $validateemail; ?>*</td>
</tr>

<tr>
<td> Username :  </td>
<td><input type="text" placeholder="Set Your Username" name="Username"> <?php echo $ValidUser; ?>*</td>
</tr>



<tr>
<td>Password :  </td>
<td><input type="password" placeholder="Enter Password" name="password"><?php echo $validatepassword; ?>*</td>
</tr>


<tr>
<td>Confirm Password :  </td>
<td><input type="password" placeholder="Enter Confirm Password" name="confirmpassword"><?php echo $validateconfirmpassword; ?>*</td>
</tr>


<tr>
<td>Phone: </td>
<td> <input type="text" placeholder="Enter Phone Number" id="phone" name="phone"><?php echo $ValidPhone; ?>*</td>
</tr>

<tr >
<td> Address: </td>
<td>
<input type="text" placeholder="Street" name="street"> <?php echo $ValidStreet ?>          
<input type="text" placeholder="City" name="city"><?php echo $ValidCity ?>  
<input type="text" placeholder="Postal Code" name="postal" > <?php echo $ValidPostal ?> 
*</td>
<tr>

<td>Date of Birth</td>
<td> <input type="date" id="birthday" name="birthday"><?php echo $Date; ?>*</td>
</tr>

<tr>
<td> Gender : </td>
<td>
<input type="radio" name="gender" value="Male"> Male 
<input type="radio" name="gender" value="Female"> Female 
<input type="radio"  name="gender" value="Other"> Other <br> <?php echo $validateradio; ?>
</td>
</tr>

<tr>
<td>Agent Type:</td>
<td>

<input type="checkbox"  name="PA" value="PropertyAgent"> Property Agent
<input type="checkbox" name="RA" value="RentingAgent">Renting Agent
<input type="checkbox" name="AA" value="AdviserAgent">Adviser Agent <br> <?php echo $validatecheckbox; ?>
</td>
</tr>


<tr>
<td> <label for="file ">Please Choose a Photo : </label> </td>
<td><input type="file" name="fileupload"></td>
</tr>


<tr>
<td> <input type="submit" name="Submit"> 
<input type="reset" name="Reset">
</td>

</tr>
<td>
<h4> <a href="AgentLogin.php">Login</a></h4>
</td>
<td>
<h4><a href="..\..\admin\MainPage.php">Home</a></h4>
</td>
</table>
</fieldset>
</form>
</body>
</html>