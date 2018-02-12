<html>
    <head>
        <meta charset="windows-1252">
        <title>Test 2</title>
       
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <?php include_once('includes/navigation.php') ?>
<?php

require_once('includes/User.php');
require_once('includes/db_connection.php');

session_start();

$user = array_key_exists('user', $_SESSION);

if(!$user) {
    include('login.php');
    die();
} else {
    $user = $_SESSION['user'];
    $term = $_GET['term'];
    if($term!="") {
        $query = "SELECT * FROM users WHERE name LIKE '%$term%' OR email LIKE '%$term%'";
        $result = mysqli_query($mysqli, $query);
        
        if(mysqli_num_rows($result) == 0) {
            ?>
                <div style="border: 1px solid #000;">
                    <div ><center>
                        <h3>No search results found for: <?= $term; ?></h3>
                    </center></div>
                </div>
            <?php
                } else {
            ?>
                <center> <div style="border: 1px solid #000;">
                   <div >
                        <h3 >Search results for: <?= $term; ?></h3>
                    </div>
                    <div class="row">
                        <div>
                            <table  border="1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($user = mysqli_fetch_object($result)) { ?>
                                    <tr>
                                        <td><?= $user->name; ?></td>
                                        <td><?= $user->email; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table><br>
                        </div>
                   </div>
                </div> </center>
            <?php
        }
    }
}
?>
    </body>
</html>