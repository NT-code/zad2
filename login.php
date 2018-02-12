<!DOCTYPE html>

<html>
    <head>
        <meta charset="windows-1252">
        <title>Login page</title>

       <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>

    <body>
        <?php include_once('includes/navigation.php') ?>
        
        <div>    
		<center>
            <div>
                <div style="border: 1px solid #000;">

                    <form action="includes/login.php"   method="POST" style="padding: 10px;">

                        <label>Login page:</label><br/>

                        <input type="text" name="email" placeholder="Email"  required /><br/><br/>

                        <input type="password" name="password" placeholder="Password"  required /><br/><br/>

                        


                        <input type="submit" name="submit" value="Submit" />

                    </form>

                </div>
            </div>
		</center>
        </div>


    </body>
</html>