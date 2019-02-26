<?php
    // 1. Create a database connection
    $dbhost = "localhost";
    //$dbuser = "widget_cms";
    $dbuser = "developer";
    //$dbpass = "secretpassword";
    $dbpass = "holstein";
    $dbname = "widget_corp";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Test for connection error
    if (mysqli_connect_errno())
    {
        die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
    }
?>
<?php
     // Often these are form values in $_POST, hard coded for demonstration purposes
     $id = 5; // Borrowed from databases.php

     // 2. Perform database query
     $query  = "DELETE FROM subjects ";
     $query .= "WHERE id = {$id} ";
     $query .= "LIMIT 1";

     // $result is a 'resource', collection of database rows
     $result = mysqli_query($connection, $query);

     // Test if there was a query error
     if ($result && mysqli_affected_rows($connection) == 1)
     {
         // Success
         // redirect_to("somepage.php");
         echo "Success!";
     }
     else
     {
         // Failure
         // $message = "subject creation failed";
         die("Database delete failed. " . mysqli_error($connection));
     }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
    
        <title>Database Inserts</title>
    </head>
    <body>
        Nice body!
        <br />

    </body>
</html>

<?php
     // 5. Close database connection
     mysqli_close($connection);
?>
