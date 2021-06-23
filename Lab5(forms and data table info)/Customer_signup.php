<html>
    <head>
        <title>Customer Signup Page</title>
    </head>
    <body>
        <legend ><h1>Login Page</h1></legend>
        <fieldset>
        <table>
        <tr align="center">
            <td>User Name</td>
			<td>:<input name="customer_uname" value="" type="text"></td>
            <td><span></span></td><br>
        </tr>
        <tr align="center">
            <td>Password</td>
            <td>:<input name="customer_pass" value="" type="password"></td>
            <td><span></span></td><br>
        </tr>
        <tr align="center">
            <td>Email</td>
			<td>:<input name="customer_email" value="" type="text"></td>
            <td><span></span></td><br>
        </tr>    
        <tr align="center">
            <td>Phone Number</td>
			<td>:<input name="customer_phone" value="" type="number"></td>
            <td><span></span></td><br>
        </tr>    
        <tr align="center">
            <td>Address</td>
			<td>:<input name="customer_address" value="" type="text"></td>
            <td><span></span></td><br>
        </tr>   
        <tr>
            <td align="center">Birth Date</td>
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
            <td></span></td>
        </tr>
        <tr align="center">
            <td>Driving License</td>
			<td>:<input name="customer_license" value="" type="number"></td>
            <td><span></span></td><br>
        </tr>        
        <tr align="center">
            <td><input type="submit" value="Login"></td>
            <td><span></span></td><br>
        </tr>
        </table>
        </fieldset>
    </body>
</html>