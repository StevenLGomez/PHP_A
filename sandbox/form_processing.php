<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
    
        <title>Form Processing</title>
    </head>
    <body>
        <pre>
        <?php print_r($_POST); ?>
        </pre>

        <br />

        <?php
             // Make use of the input name attribute (implies name= should always be defined)
             if (isset($_POST['submit']))
             {
                 echo "form was submitted";

                 // Good way to set default values
                 if (isset($_POST["username"]))
                 {
                    $username = $_POST["username"];
                 }
                 else
                 {
                     $username = "";
                 }

                 if (isset($_POST["password"]))
                 {
                     $password = $_POST["password"];
                 }
                 else
                 {
                     $password = "";
                 }

                 // Or better yet, set default values using ternary operator
                 //    boolean_test ? value_if_true : value_if_false
                 $username - isset($_POST['username']) ? $_POST['username'] : "";
                 $password - isset($_POST['password']) ? $_POST['password'] : "";
             }
             else
             {
                 $username = "Chicken";
                 $password = "Pie";
             }
        ?>

        <?php
             echo "{$username}: {$password}";
        ?>
    </body>
</html>

