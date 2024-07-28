<?php   include "..\Control\RegValidation.php" ;
        //include "..\Control\AdminReg.php" ; 

?>

<!DOCTYPE html>
<html>
<head>

<title>Registration Form </title>

</head>
<body>

<h1 align="Right">Admin Sign Up</h1>
<form action="..\Control\process.php" method="post" enctype="multipart/form-data">
<tr>
<td>
<fieldset>

<table>
<tr>
<td> Full Name : </td>
<td><input type="text" placeholder="Enter your Name" name="name"> <?php echo $ValidName; ?>*</td>
</tr>


<tr>
<td> Email :  </td>
<td><input type="text" placeholder="Enter Email" name="email"> <?php echo $validateemail; ?> *</td>
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
<td>
<select name="code" id="code">
<option > </option>
<optgroup label="Country Code">
	<option value="+91">+91</option>
    <option value="+88">+88</option>
    <option value="+86">+86</option>
    <option value="+44">+44</option>
  </select>* <?php echo $ValidCode; ?>
</td>

</tr>

<tr>
<td></td>
<td> <input type="text" placeholder="Enter Phone Number" id="phone" name="phone"><?php echo $ValidPhone; ?>*</td>
</tr>

<tr >
					<td> Address : </td>
					<td><input type="text" placeholder="Street Address" name="street">* <?php echo $ValidStreet ?> </td>
					
				</tr>

			   	<tr>
           <td></td>
				  <td><input type="text" placeholder="City" name="city">*<?php echo $ValidCity ?> </td> 
          </tr>

          <tr>
          <td></td>
				  <td> <input type="text"  placeholder="State" name="state">*<?php echo $ValidState ?></td>
          </tr>

          <tr>
          <td></td>
					<td>  <input type="text" placeholder="Postal/Zip Code" name="postal" >* <?php echo $ValidPostal ?> </td>
					
				</tr>

<tr>
<td>Date of Birth</td>
<td> <input type="date" id="birthday" name="birthday">*<?php echo $Date; ?></td>
</tr>

<tr>
<td> Gender : </td>
<td>
<input type="radio" name="gender" value="Male"> Male 
<input type="radio" name="gender" value="Female"> Female 
<input type="radio"  name="gender" value="Other"> Other  * <br>  <?php echo $validateradio; ?><br>
</td>
</tr>




<tr>
<td> <label for="file ">Please Choose a photo[Optional] : </label> </td>
<td><input type="file" name="fileupload"></td>
</tr>


<tr>
<td> <input type="submit" name="Submit"> 
<input type="reset" name="Reset">
</td>
<td><h3> <a href="Login.php">Login</a></h3></td>
 <td><h3><a href="..\MainPage.php">Home</a></h3></td>
</tr>
</table>

</fieldset>

</form>
</body>
</html>