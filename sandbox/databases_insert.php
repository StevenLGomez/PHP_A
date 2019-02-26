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
     $menu_name = "Today's Widget Trivia";
     $position = (int) 4;
     $visible = (int) 1;

     // Fix the embedded single quote in menu_name (Should use this on all strings !!)
     $menu_name = mysqli_real_escape_string($connection, $menu_name);

     // 2. Perform database query
     $query  = "INSERT INTO subjects(";
     $query .= " menu_name, position, visible";
     $query .= " ) VALUES (";
     $query .= " '{$menu_name}', {$position}, {$visible}";
     $query .= ")";

     // $result is a 'resource', collection of database rows
     $result = mysqli_query($connection, $query);

     // Test if there was a query error
     if ($result)
     {
         // Success
         // redirect_to("somepage.php");
         echo "Success!";
     }
     else
     {
         // Failure
         // $message = "subject creation failed";
         die("Database query failed. " . mysqli_error($connection));
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
