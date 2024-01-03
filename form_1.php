<?php

$Username=$_REQUEST['Username'];
$Password=$_REQUEST['Password'];
$Name=$_REQUEST['Name'];
$Country=$_REQUEST['Country'];
$Zip_code=$_REQUEST['Zip_code'];
$Email=$_REQUEST['Email'];
$Sex=$_REQUEST['Sex'];
$Language=$_REQUEST['Language'];
$About=$_REQUEST['About'];



echo "<table border=1 bordercolor='red'> 
		<tr><td>Username</td><td>$Username</td></tr>
		<tr><td>Password</td><td>$Password</td></tr>
		<tr><td>Name</td><td>$Name</td></tr>
		<tr><td>Country</td><td>$Country</td></tr>
		<tr><td>Zip code</td><td>$Zip_code</td></tr>
		<tr><td>Email</td><td>$Email</td></tr>
		<tr><td>Sex</td><td>$Sex</td></tr>
		<tr><td>Language</td><td>$Language</td></tr>
		<tr><td>About</td><td>$About</td></tr>
		</table>";



?>