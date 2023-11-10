<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="validateform.js"></script>
<link rel="stylesheet" href="style.css">
<title>Form validation (IT SOURCECODE)</title>
</head>
<body>
<div class="panel-body">
<form action="connect.php" method="post">
</div>
<div class="container">
<form action="#" mehtod="post" name="StudentRegistration"
onsubmit="return(validate());">
<table cellpadding="2" width="90%" align="center"
cellspacing="2">
<tr class="form-control">
<td colspan=2>
<h2>Student Registration Form</h2>
<style>
h2
{
animation-duration: 5s;
animation-name: slidein;
animation-iteration-count: 2;
}
@keyframes slidein {
0% {
margin-left: 0%;
}
50% {
margin-left: 100px;
}
100% {
margin-left: 0%;
}
}
</style>
</td>
</tr>
<tr class="form-control">
<td>Full Name</td>
<td><input type=text name=fullname id="fullname" size="30"></td>
</tr>
<tr class="form-control">
<td>Father Name</td>
<td><input type="text" name="fathername" id="fathername"
size="30"></td>
</tr>
<tr class="form-control">
<td>Personal Address</td>
<td><input type="text" name="personaladdress"
id="personaladdress" size="30"></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="male" size="10">Male
<input type="radio" name="gender" value="Female" size="10">Female</td>
</tr>
<tr>
<td>Course</td>
<td><select name="Course" style="width:200px;">
<option value="-1" selected>select..</option>
<option value="B.Tech">B.TECH</option>
<option value="MCA">MCA</option>
<option value="MBA">MBA</option>
<option value="BCA">BCA</option>
</select></td>
</tr>
<tr class="form-control">
<td>City</td>
<td><select name="City" style="width:200px;">
<option value="-1" selected>select..</option>
<option value="Jaipur">Jaipur</option>
<option value="Banglore">Banglore</option>
<option value="Hyderabad">Hyderabad</option>
<option value="Chennai">Chennai</option>
</select></td>
</tr>
<tr>
<td>District</td>
<td><select name="District" style="width:200px;">
<option value="-1" selected>select..</option>
<option value="Shahpura">Shahpura</option>
<option value="Kolar">Kolar</option>
<option value="Secundrabad">Secunderabad</option>
<option value="Salem">Salem</option>
</select></td>
</tr>
<tr>
<td>State</td>
<td>
<select Name="State" style="width:200px;">
<option value="-1" selected>select..</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Karnataka">Karnataka</option>
<option value="Telangana">Telangana</option>
<option value="TamilNadu">TamilNadu</option>
</select>
</td>
</tr>
<tr class="form-control">
<td>Phonenumber: (+91)</td>
<td><input type="text" name="phoneno" id="mobileno" size="30"></td>
</tr>
<tr class="form-control">
<td>BloodGroup</td>
<td><input type="text" name="bloodgroup" id="bloodgroup" size="4"></td>
</tr>
<tr class="form-control">
<td>PinCode</td>
<td><input type="text" name="pincode" id="pincode" size="30"></td>
</tr>
<tr class="form-control">
<td>Email-Id</td>
<td><input type="text" name="emailid" id="emailid" size="30"></td>
</tr>
<tr class="form-control">
<td>Sporting/Cultural Interests </td>
<td><input type="text" name="interests" id="interests" size="70"></td>
</tr>
<tr class="form-control">
<td>AdditionalInformation</td>
<td><input type="text" name="info" id="info" size="60"></td>
</tr>
<tr class="formbutton">
<td><input type="reset"></td>
<td colspan="2"><input type="submit" value="Submit Form" /></td>
</tr>
</table>
</form>
</div>
</body>
</html>