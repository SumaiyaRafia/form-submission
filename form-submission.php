   <!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>


	<h1>Form Submission</h1>   




   <?php
    	$fName = $lName = $gender = $DOB = $religion = $email = $Username= $Pass = ""; 
    	$isValid = true;
    	$fNameErr = $lNameErr = $GenderErr = $DOBErr = $religionErr = $emailErr = $UsernameErr = $PassErr = ""; 
    	$successfulMessage = "";
    	
  

    if($_SERVER['REQUEST_METHOD'] === "POST"){

    	$fName = $_POST['fname'];
    	$lName = $_POST['lname'];
    	$gender = $_POST['gender'];
    	$DOB = $_POST['DOB'];
    	$religion = $_POST['religion'];
    	$email = $_POST['email'];
    	$Username = $_POST['Username'];
    	$Pass = $_POST['Pass'];
    	 
    	 if(empty($fName)) {
           $fNameErr = "REQUIRED!";
           $isValid = false;
    	 }
    	
    	 
    	 if(empty($lName)) {
           $lNameErr = "REQUIRED!";
           $isValid = false;
    	 }
 
    	 
    	 if(empty($Gender)) {
           $GenderErr = "REQUIRED!";
           $isValid = false;
    	 }

    	 
    	 if(empty($DOB)) {
           $DOBErr = "REQUIRED!";
           $isValid = false;
    	 }

    	 
    	 if(empty($religion)) {
           $religionErr = "REQUIRED!";
           $isValid = false;
    	 }
    	

    	 
    	 if(empty($Email)) {
           $EmailErr = "REQUIRED!";
           $isValid = false;
    	 }

    	 
    	 if(empty($Username)) {
           $UsernameErr = "REQUIRED!";
           $isValid = false;
    	 }
    	
    	 
    	 if(empty($Pass)) {
           $PassErr = "REQUIRED!";
           $isValid = false;
    	 }

    	 if($isValid){
             $successfulMessage = "Successful!!";
    	 }
    	
   }
  
?>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
	

	<form>

		<fieldset>
		<legend>Basic Information</legend>

		
		<label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname" value="<?php echo $fName; ?>">
		<span style="color: red;"><?php echo $fNameErr; ?></span>

		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname" value="<?php echo $lName; ?>">
		<span style="color: red;"><?php echo $lNameErr; ?></span>

		<br>
		<br>


		
		<label>Gender</label>
		<input type="radio" name="gender" id="male" value="<?php echo $gender; ?>">
		<label for="male">Male</label>
		<input type="radio" name="gender" id="female" value="<?php echo $gender; ?>">
		<label for="female">Female</label>
		<span style="color: red;"><?php echo $GenderErr; ?></span>

		<br>
		<br>


		<label for="birthDate">DoB:</label>
		<input type="date" id="birthDate" name="start"
		value="2021-02-15 <?php echo $DOB; ?>"
		min="1971-10-20" max="2030-12-31">
		<span style="color: red;"><?php echo $DOBErr; ?></span>

		<br>
		<br>

		

		<label for="relgion">Religion:</label>
		<select id="religion" name="enterReligion">
			<option value="islam">Islam</option>
			<option value="Hinduism">Hinduism</option>
			<option value="Christianity">Christianity</option>
			<option value="Buddhism">Buddhism</option>
			<option value="other">Other</option>
			<span style="color: red;"><?php echo $ReligionErr; ?></span>
		</select>

		<br>

		

	    </fieldset>

	    <fieldset>

		<legend>Contact Information</legend>

		<label for="present">Present Address:</label>
		<input type="text" name="presentAdd" id="present">
		<br>
		<br>

		<label for="permanent">Permanent Address:</label>
		<input type="text" name="permanentAdd" id="permanent">
		<br>
		<br>

		<label for="phone">Phone:</label>
		<input type="tel">
		<br>
		<br>

		<label for="emailId">Email:</label>
        <input type="email" id="emailId" name="Email"value="<?php echo $email; ?>">
        <span style="color: red;"><?php echo $emailErr; ?></span>
        <br>
        <br>


        <label for="webLink">Personal Website link:</label>
        <input type="url" id="webLink" name="Website">
        
        <br>
    </fieldset>



        <fieldset>
       <legend>Account Information</legend>

       <label for="username">Username:</label>
       <input type="text" id="username" name="username" >
       <span style="color: red;"><?php echo $UsernameErr; ?></span>
       <br>
       <br>

       <label for="pass"> Password:</label>
       <input type="password" id="pass" name="pass">
       <span style="color: red;"><?php echo $PassErr; ?></span>
       <br>

  

</fieldset>
		
		<br>

		<input type="submit" value="Submit">
			
	</form>

	
</body>
</html>