<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
    $confirm_pass="";
    $err_confirm_pass="";
    $email="";
    $err_email="";
    $phone="";
    $err_phone="";
    $address="";
    $err_address="";
    $birthdate="";
    $err_birthdate="";
	$gender="";
	$err_gender="";
	$bio="";
	$err_bio="";
	
	
	$hasError=false;
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
        //name//
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="-Name Required-";
		}
		elseif (strlen($_POST["name"]) <=3){
			$hasError = true;
			$err_name = "-Name must be greater than 3 characters-";
		}
		else
		{
			$name = $_POST["name"];
		}

        //User name//
        if(empty($_POST["uname"])){
			$hasError=true;
			$err_uname="-User Name Required-";
		}
		elseif (strlen($_POST["uname"]) <=6)
		{
			$hasError = true;
			$err_uname = "-User Name must be greater than 6 characters-";
		}
		else if(strpos($_POST["uname"]," "))
		{
			$err_uname = "-no space is allowed-";
		}	
		else
		{
			$uname = $_POST["uname"];
		}

        //Password//
        if(empty($_POST["pass"])){
			$hasError=true;
			$err_pass="-Password Required-";
		}
		elseif (strlen($_POST["pass"]) <=8)
		{
			$hasError = true;
			$err_pass = "-Password must be greater than 8 characters-";
		}
		else if(strpos($_POST["pass"],"#"||"?"))
		{
			$err_pass = "-Dont use those special characters in your password-";
		}	
		else
		{
			$pass = $_POST["pass"];
		}

		//Confirm Password//
		if(empty($_POST["confirm_pass"]))
		{
			$hasError=true;
			$err_confirm_pass="-Password Required-";
		}

		elseif($pass != $confirm_pass)
		{
			$hasError=true;	
   			$err_confirm_pass ="-Password and Confirm password should not be different-";  
		}
		if($pass ==  $confirm_pass)
        {
            if( ctype_upper($pass) && ctype_lower($pass) && is_numeric($pass) )
            {
               $pass = $_POST["pass"];
            }

            else
            {
                 $err_pass="-Password should contain atleast one uppercase,lower case and numeric-";
            }
        }

        //Email//
        if(empty($_POST["email"]))
		{
			$hasError=true;
			$err_email="-Email is Required-";
		}
		else if(!strpos($_POST["email"],"@"))
		{
			$err_email = "*-Invalid Email-";
		}
		else
		{
			$email = $_POST["email"];
		}

        //Phone//
        if(!empty($_POST["phone"]))
		{
			$hasError=true;
			$err_phone="-Phone number is Required-";
		}
		
		else
		{
			$phone = $_POST["phone"];
		}

        //Address//
        if(empty($_POST["address"])){
			$hasError=true;
			$err_address="-Address is Required-";
		}
		else
		{
			$address = $_POST["address"];
		}

        //Gender//
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender = "-Gender is Required-";
		}
		else{
			$gender = $_POST["gender"];
		}
		
		
		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "-Bio is Required-";
		}
		else{
			$bio = $_POST["bio"];
		}
		
		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["pass"]."<br>";
            echo $_POST["confirm_pass"]."<br>";
            echo $_POST["email"]."<br>";
            echo $_POST["phone"]."<br>";
            echo $_POST["address"]."<br>";
            echo $_POST["birthdate"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["bio"]."<br>";

			}
		}
?>
<html>
	<body>
		<form action="" method="post">
        <fieldset>
        <legend>Club Member Registration</legend>
			<table>
				<tr>
					<td align="right">Name</td>
					<td>:<input name="name" value="<?php echo $name;?>" type="text"><br>
					<span style="color:red;"><?php echo $err_name;?></span></td>
				</tr>

				<tr>
					<td align="right">Username</td>
					<td>:<input name="uname" value="<?php echo $uname;?>" type="text"><br>
					<span style="color:red;"><?php echo $err_uname;?></span></td>
				</tr>

				<tr>
					<td align="right">Password</td>
					<td>:<input name="pass" value="<?php echo $pass;?>" type="password"><br>
					<span style="color:red;"><?php echo $err_pass;?></span></td>
				</tr>

                <tr>
					<td align="right">Confirm Password</td>
					<td>:<input name="confirm_pass" value="<?php echo $confirm_pass;?>" type="password"><br>
					<span style="color:red;"><?php echo $err_confirm_pass;?></span></td>
				</tr>

                <tr>
					<td align="right">Email</td>
					<td>:<input name="email" value="<?php echo $email;?>" type="text"><br>
					<span style="color:red;"><?php echo $err_email;?></span></td>
				</tr>

                <tr>
					<td align="right">Phone</td>
					<td>:<input name="phone" value="<?php echo $phone;?>" type="number" placeholder="Code">
                    <input name="phone" value="<?php echo $phone;?>" type="number" placeholder="Number"><br>
					<span style="color:red;"><?php echo $err_phone;?></span></td>
				</tr>

                <tr>
					<td align="right">Address</td>
					<td>:<input name="address" value="<?php echo $address;?>" type="text" placeholder="Street Address"><br>
                    <input name="address" value="<?php echo $address;?>" type="text" placeholder="City">
                    <input name="address" value="<?php echo $address;?>" type="text" placeholder="State"><br>
                    <input name="address" value="<?php echo $address;?>" type="text" placeholder="Postal/Zip Code"><br>
					<span style="color:red;"><?php echo $err_address;?></span></td>
				</tr>

                <tr>
					<td align="right">Birth Date</td>
					<td>
                    <select id="birthdate" name="day" >
					<?php			
						for ($i = 0; $i < 32; $i++) 
						{
							if($i == 0)
								{

									echo "<option value='day' disabled selected>Day</option>";
								}
									else
									{
										echo "<option value='$i'>$i</option>";
									}
						}
					?>			
                    </select>
                    <select id="birthdate" name="month" >
					<?php			
						for ($i = 0; $i < 13; $i++) 
						{
							if($i == 0)
								{

									echo "<option value='month' disabled selected>Month</option>";
								}
									else
									{
										echo "<option value='$i'>$i</option>";
									}
						}
					?>			
                    </select>
                    <select  id="birthdate" name="year" >
                    <?php			
						for ($i = 1900; $i < 2022; $i++) 
						{
							if($i == 1900)
								{

									echo "<option value='year' disabled selected>Year</option>";
								}
									else
									{
										echo "<option value='$i'>$i</option>";
									}
						}
					?>			
                    </select>
                    </td>
					<td><span style="color:red;"><?php echo $err_birthdate?></span></td>
				</tr>

                <tr>
					<td align="right">Gender</td>
					<td>:<input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input type="radio" <?php if($gender == "Female") echo "checked";?> value="Female" name="gender"> Female <br>
					<span style="color:red;"><?php echo $err_gender;?></span></td>
				</tr>

				<tr>
					<td align="right"></td>
                    <td><input type="checkbox" id="" name="">A Friend or Colleague</td>
				</tr>

                <tr>
					<td align="right"> Where did you hear us? </td>
                    <td><input type="checkbox" id="" name="">Google</td>
				</tr>
                
                <tr>
					<td align="right"> About us? </td>
                    <td>
                    <input type="checkbox" id="" name="">Blog post <br>
                    <input type="checkbox" id="" name="">News Article <br>
                    </td>
				</tr>

                <tr>
					<td align="right">Bio</td>
					<td><textarea name="bio"><?php echo $bio;?></textarea>
						<br><span style="color:red;"><?php echo $err_bio;?></span>
					</td>
				</tr>
				<tr>
					<td><input type="submit" value="Register"></td>
				</tr>
			</table>
            </fieldset>
		</form>
	</body>
</html>