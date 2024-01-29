<?php
$student_master=array(
				array("rollno"=>1,"Name"=>"Hetvi","City"=>"Rajkot","University"=>"Atmiya","Age"=>19,"Course"=>"Bca",
				"Division"=>"B1","Gender"=>"Female","DOB"=>"02 DEC,2004"),
				array("rollno"=>2,"Name"=>"Hetvi","City"=>"Rajkot","University"=>"Atmiya","Age"=>19,"Course"=>"Bca",
				"Division"=>"B1","Gender"=>"Female","DOB"=>"02 DEC,2004"),
				array("rollno"=>3,"Name"=>"Hetvi","City"=>"Rajkot","University"=>"Atmiya","Age"=>19,"Course"=>"Bca",
				"Division"=>"B1","Gender"=>"Female","DOB"=>"02 DEC,2004"),
				array("rollno"=>4,"Name"=>"Hetvi","City"=>"Rajkot","University"=>"Atmiya","Age"=>19,"Course"=>"Bca",
				"Division"=>"B1","Gender"=>"Female","DOB"=>"02 DEC,2004"),
				array("rollno"=>5,"Name"=>"Hetvi","City"=>"Rajkot","University"=>"Atmiya","Age"=>19,"Course"=>"Bca",
				"Division"=>"B1","Gender"=>"Female","DOB"=>"02 DEC,2004"),
				array("rollno"=>6,"Name"=>"Hetvi","City"=>"Rajkot","University"=>"Atmiya","Age"=>19,"Course"=>"Bca",
				"Division"=>"B1","Gender"=>"Female","DOB"=>"02 DEC,2004"),
				array("rollno"=>7,"Name"=>"Hetvi","City"=>"Rajkot","University"=>"Atmiya","Age"=>19,"Course"=>"Bca",
				"Division"=>"B1","Gender"=>"Female","DOB"=>"02 DEC,2004"),
				array("rollno"=>8,"Name"=>"Hetvi","City"=>"Rajkot","University"=>"Atmiya","Age"=>19,"Course"=>"Bca",
				"Division"=>"B1","Gender"=>"Female","DOB"=>"02 DEC,2004"),
				
				);

//print_r($student_master);

echo"<table border=1><tr><td><b>Rollno</b></td>
						<td><b>Name</b></td>
						<td><b>City</b></td>
						<td><b>University</b></td>
						<td><b>Age</b></td>
						<td><b>Course</b></td>
						<td><b>Division</b></td>
						<td><b>Gender</b></td>
						<td><b>DOB</b></td>
					</tr>";
foreach ($student_master as $row)
{
	echo"<tr>";
	foreach($row as $detail)
	{
		echo"<td>"."$detail"."</td>";
	}
		echo"</tr>";
}
echo"</table>";
?>