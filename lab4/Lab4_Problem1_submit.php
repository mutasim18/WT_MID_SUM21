<html>
	<body>
		<h1>Form submitted</h1>
		<?php
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
			
			foreach($arr as $e){
				echo "$e<br>";
			}
		?>
	</body>
</html>