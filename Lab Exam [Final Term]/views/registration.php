<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
    <center>
        <table  height=720 width=1080>
            <tr height=70>
                <td >
                     <table width = "800">
                    <tr>
                        <td>
                        </td>
                        <td align="right">
                    <a href="publichome.php">Home</a>  <a href="login.php">| Login</a>  
                    </td>    
                </tr>    
                </table>
                    
                </td>
            </tr>
            <tr>
                <td>        <form method="POST" action="../controllers/regcheck.php" >
                            <fieldset>
                                <legend>REGISTRATION</legend>
                                <table>
                                    <tr>
                                        <td>Name</td>
                                        <td>:<input type="text" name="name" value=""/> <br></td>
                                    </tr>
                                        
                                    <tr>
                                        <td>Email</td>
                                        <td>:<input type="email" name="email" value=""/> <br>
                                    </tr>

                                    <tr>
                                        <td>Username</td>
                                        <td>:<input type="text" name="username" value=""/> <br></td>
                                    </tr>

                                    <tr>
                                        <td>Password</td>
                                        <td>:<input type="password" name="password" value=""/> <br></td>
                                    </tr>

                                    <tr>
                                        <td>Confirm Password</td>
                                        <td>:<input type="password" name="confirmpassword" value=""/> <br> </td>
                                        
                                    </tr>
                                </table>
                                 <h1></h1>

                                    <Legend>Role</Legend>
            
                                         <input type="radio" name="role" value="saler"/> Saler
                                         <input type="radio" name="role" value="buyer"/> Buyer
                                 </fieldset>


                                              <h1></h1>
                            <input type="submit" name="submit" value="Submit"/>
                            <input type="reset" name="reset" value="Reset">
            </fieldset>
        </form>
</td>
            </tr>

            <tr>
                <td align="center"><fieldset>
                    <legend>Help & Support</legend>
                    <a href="">Contact Us</a>  <br>
                    <a href="">Complain</a> <br>
                    <a href="">FAQ</a> <br>
            </fieldset></td>
            </tr>


            <tr height =40>
                <td align="center">Copyright © 2023</td>
            </tr>
        </table>
    </center>
    </body>
</html>