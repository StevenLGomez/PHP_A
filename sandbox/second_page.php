<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
    
        <title>Second Page</title>
    </head>
    <body>
        <pre>
            <?php 
                  //print_r($_GET); 
                  $id = $_GET['id'];
                  echo $id;

                  echo "<br />";

                  $company = $_GET['company'];
                  echo $company;
            ?>
        </pre>
        <?php $link_name = "First Page"; ?>
        <a href="first_page.php"><?php echo $link_name; ?></a>
        <?php

        ?>
    </body>
</html>


