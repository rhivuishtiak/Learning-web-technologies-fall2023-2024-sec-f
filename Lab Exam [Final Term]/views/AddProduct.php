<html>
    <head>
        <title>Product</title>
    </head>
    <body>
        
            <form method="POST" action="../controllers/productcheck.php" >
            <fieldset>
                <table>
                    <tr>
                        <td>Name</td>
                        <td>:<input type="text" name="name" value=""/> <br></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>:<input type="text" name="price" value=""/> <br></td>
                    </tr>
                    <tr>
                        <td>Details</td>
                        <td>:<input type="text" name="details" value=""/> <br></td>
                    </tr>
                </table>
                <input type="submit" name="submit" value="Submit"/>
                <input type="reset" name="reset" value="Reset">
            </fieldset>
            </form>

    </body>
</html>