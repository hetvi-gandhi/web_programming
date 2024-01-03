<html>
<head><b><center>Registration Form</center></b></head>
<body>
<table>

<form action="form_1.php" method="get">
<tr><td>Username:</td><td><input type="text" name="Username"></td></tr>
<tr><td>Password:</td><td><input type="text" name="Password"></td></tr>
<tr><td>Name:</td><td><input type="text" name="Name"></td></tr>
<tr><td>Address:</td><td><input type="text" name="Address"></td></tr>
<tr><td><label>Country</td></label>     
        
            <td><select name="Country">
			    <option>please select country</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">India</option>
                <option value="Angola">Angola</option>
			</select></td></tr>
			

<tr><td>Zip_code:</td><td><input type="text" name="Zip_code"></td></tr>
<tr><td>Email:</td><td><input type="text" name="Email"></td></tr>
<tr><td>Sex:</td><td><input type="radio" name="Sex" value="Male"><label>Male</label>
	<input type="radio" name="Sex" value="Female"><label>Female</label></td></tr>
<tr><td>Language:</td><td><input type="checkbox" name="Language" value="English"><label>English</label>
	<input type="checkbox" name="Language" value="Non English"><label>Non English</label></td></tr>
<tr><td>About:</td><td><textarea <input type="text" name="About"></textarea></td></tr>

<tr><td><input type="submit" name="submit"></td></tr>

</form>
</table>
</body>
</html>