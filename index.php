
<!DOCTYPE html>

<html>
    <head>
        <meta charset="windows-1252">
        <title>Home Page</title>
 
      
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <?php include_once('includes/navigation.php') ?>
        <?php
		require_once('includes/User.php');

session_start()
 ?>
        <div style="border: 1px solid #000;">
		<center>
            <?php
			$isLogged = array_key_exists('user', $_SESSION);
			if($isLogged) {
    echo "<h1>Welcome user: " . $_SESSION['user']->name;
	echo "</h1><br>";
		echo "Your mail is: " . $_SESSION['user']->email;
} else {
   // header('Location:/zad2/login.php');
    echo " <h1>Home page, please login.</h1>";

}
			 ?>
               </center>
           
        </div>
    </body>
</html>
