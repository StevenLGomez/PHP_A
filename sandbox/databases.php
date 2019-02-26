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
     // 2. Perform database query
     // $query = "SELECT * FROM subjects"; <= Simple query approach...
     // Divide & conquer query approach
     $query = "SELECT * ";
     $query .= "FROM subjects ";
     $query .= "WHERE visible = 1 ";
     $query .= "ORDER BY position ASC";

     // $result is a 'resource', collection of database rows
     $result = mysqli_query($connection, $query);

     // Test if there was a query error
     if (!$result)
     {
         die("Database query failed.");
     }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
    
        <title>Databases</title>
    </head>
    <body>
        Nice body!
        <br />

        <ul>
        <?php
             // 3. Use returend data (if any)
             //while($subject = mysqli_fetch_row($result))
             while($subject = mysqli_fetch_assoc($result))    // Author's favorite method
             //while($subject = mysqli_fetch_array($result))
             {
                 // Data from each subject
                 //var_dump($subject);
        ?>
            <li><?php echo $subject["menu_name"] . " (" . $subject["id"] . ")"; ?></li>

        <?php
             }
             ?>
        </ul>

        <?php
             // 4. Release returned data
             mysqli_free_result($result);
            ?>

    </body>
</html>

<?php
     // 5. Close database connection
     mysqli_close($connection);
?>
