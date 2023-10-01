<html>
	<head>
		
		<title> cse-2022-sec-c </title>
	</head>
	
	
	<style>
body {
  background-image: url('my.png');
}
</style>
	
	<center>
	<body style="font-size: 1rem"   >	
	
	<h1 style="color:blue;" >***Online Form***</h1>
		
		<?php
			echo "</br></br></br> ***I've created a form page allowing you to enroll by submitting your info. You can add, delete, and update entries as needed.👇  </br></br></br></br></br>";
			//$imagePath = "pic_trulli.jpg"; // Replace this with the actual path to your image file
    
			//echo "<img src='$imagePath' alt='Sample Image'>";	
		?>
		
		
		<form action="enrollDisplay.php" method="post" style="font-size: 2rem" >
		
			Enrollment_no:
			<input type="text" name="enrollment_no" size="15" maxlength="30" placeholder="Enrollment_no">
			<input type="submit" value="Display"><br><br>

		</form>
		<form action="enroll_delete.php" method="post" style="font-size: 2rem">
			Enrollment_no:
			<input type="text" name="enrollment_no" size="15" maxlength="30" placeholder="Enrollment_no">
			<input type="submit" value="Delete" style="color:red"><br><br>
		</form>
		<form action="enroll_update.php" method="post" style="font-size: 2rem">
		    Enrollment_no:
		    <input type="text" name="enrollment_no" size="15" maxlength="30" placeholder="Enrollment_no">
			<input type="submit" value="Update"  style ="color:green"><br><br>
		</form>
		<form action="enroll_add_new.php" method="post" style="font-size: 2rem">
		
		<table style="width:8%">
		<tr>
			<th><input type="submit" value="   Add New  " style ="color:blue"> <br></th>
</tr>
</table>

		</form>
		
	</body>
</center>

</html>