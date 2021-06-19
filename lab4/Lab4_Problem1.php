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
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
        //name//
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="Name Required";
		}
		elseif (strlen($_POST["name"]) <=3){
			$hasError = true;
			$err_name = "Name must be greater than 3 characters";
		}
		else
		{
			$name = $_POST["name"];
		}

        //User name//
        if(empty($_POST["uname"])){
			$hasError=true;
			$err_uname="User Name Required";
		}
		elseif (strlen($_POST["uname"]) <=6){
			$hasError = true;
			$err_uname = "User Name must be greater than 6 characters";
		}
		else
		{
			$uname = $_POST["uname"];
		}

        //Password//
        if(empty($_POST["pass"])){
			$hasError=true;
			$err_pass="Password Required";
		}
		else
		{
			$pass = $_POST["pass"];
		}

        //Email//
        if(empty($_POST["email"])){
			$hasError=true;
			$err_email="Email is Required";
		}
		else
		{
			$email = $_POST["email"];
		}

        //Phone//
        if(empty($_POST["phone"])){
			$hasError=true;
			$err_phone="Phone number is Required";
		}
		else
		{
			$phone = $_POST["phone"];
		}

        //Address//
        if(empty($_POST["address"])){
			$hasError=true;
			$err_address="Address is Required";
		}
		else
		{
			$address = $_POST["address"];
		}

        //Gender//
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender = "Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
		
		
		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else{
			$bio = $_POST["bio"];
		}
		
		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
            echo $_POST["confirm_password"]."<br>";
            echo $_POST["email"]."<br>";
            echo $_POST["phone"]."<br>";
            echo $_POST["address"]."<br>";
            echo $_POST["birthdate"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["bio"]."<br>";
			foreach($arr as $e){
				echo "$e<br>";
			}
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
					<span><?php echo $err_name;?></span></td>
				</tr>

				<tr>
					<td align="right">Username</td>
					<td>:<input name="uname" value="<?php echo $uname;?>" type="text"><br>
					<span><?php echo $err_uname;?></span></td>
				</tr>

				<tr>
					<td align="right">Password</td>
					<td>:<input name="password" value="<?php echo $pass;?>" type="password"><br>
					<span><?php echo $err_pass;?></span></td>
				</tr>

                <tr>
					<td align="right">Confirm Password</td>
					<td>:<input name="confirm_password" value="<?php echo $confirm_pass;?>" type="password"><br>
					<span><?php echo $err_confirm_pass;?></span></td>
				</tr>

                <tr>
					<td align="right">Email</td>
					<td>:<input name="email" value="<?php echo $email;?>" type="text"><br>
					<span><?php echo $err_email;?></span></td>
				</tr>

                <tr>
					<td align="right">Phone</td>
					<td>:<input name="phone" value="<?php echo $phone;?>" type="text" placeholder="Code">
                    <input name="phone" value="<?php echo $phone;?>" type="text" placeholder="Number"><br>
					<span><?php echo $err_phone;?></span></td>
				</tr>

                <tr>
					<td align="right">Address</td>
					<td>:<input name="address" value="<?php echo $address;?>" type="text" placeholder="Street Address"><br>
                    <input name="address" value="<?php echo $address;?>" type="text" placeholder="City">
                    <input name="address" value="<?php echo $address;?>" type="text" placeholder="State"><br>
                    <input name="address" value="<?php echo $address;?>" type="text" placeholder="Postal/Zip Code"><br>
					<span><?php echo $err_address;?></span></td>
				</tr>

                <tr>
					<td align="right">Birth Date</td>
					<td>
                    <select id="birthdate" name="day" >
                    <option value="day">1</option>
                    <option value="day">2</option>
                    <option value="day">3</option>
                    <option value="day">4</option>
                    <option value="day">5</option>
                    <option value="day">6</option>
                    <option value="day">7</option>
                    </select>
                    <select id="birthdate" name="month" >
                    <option value="month">January</option>
                    <option value="month">February</option>
                    <option value="month">March</option>
                    <option value="month">April</option>
                    <option value="month">May</option>
                    <option value="month">June</option>
                    <option value="month">July</option>
                    <option value="month">August</option>
                    <option value="month">September</option>
                    <option value="month">October</option>
                    <option value="month">November</option>
                    <option value="month">December</option>
                    </select>
                    <select id="birthdate" name="year" >
                    <option value="year">2011</option>
                    <option value="year">2012</option>
                    <option value="year">2013</option>
                    <option value="year">2014</option>
                    <option value="year">2015</option>
                    <option value="year">2016</option>
                    <option value="year">2017</option>
                    </select>
                    </td>
					<td><span></span></td>
				</tr>

                <tr>
					<td align="right">Gender</td>
					<td>:<input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input type="radio" <?php if($gender == "Female") echo "checked";?> value="Female" name="gender"> Female <br>
					<span><?php echo $err_gender;?></span></td>
				</tr>

				<tr>
					<td align="right">
                    <input type="checkbox" id="" name="">A Friend or Colleague
                    </td>
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
						<br><span><?php echo $err_bio;?></span>
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