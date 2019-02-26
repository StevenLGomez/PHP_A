<?php
    require_once("included_functions.php");
    require_once("validation_functions.php");

    $errors = array();
    $message = "";

    if (isset($_POST['submit']))
    {
        // Form was submitted

        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        // Validations

        // Fields that cannot be empty
        $fields_required = array("username", "password");
        foreach($fields_required as $field)
        {
            $value = trim($_POST[$field]);
            if (!has_presence($value))
            {
                $errors[$field] = ucfirst($field) . " can't be blank";
            }
        }

        // Fields with max length limit
        $fields_with_max_lengths = array("username" => 30, "password" => 8);
        validate_max_lengths($fields_with_max_lengths);

//        foreach($fields_with_max_lengths as $field => $max)
//        {
//            $value = trim($_POST[$field]);
//            if (!has_max_length($value, $max))
//            {
//                $errors[$field] = ucfirst($field) . " is too long";
//            }
//        }

        // Test for presence of errors from validations above
        if (empty($errors))
        {
            // Try to login
            if ($username == "steve" && $password == "secret")
            {
                // Successful login
                //redirect_to('basic.html');
                redirect_to('info.php');
            }
            else
            {
                // login failed
                $message = "Username/password do not match";
            }
        }
    }
    else
    {
        $username = "";
        $message = "Please log in";
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
    
        <title>Single Page Form</title>
    </head>
    <body>

        <?php echo $message; ?>
        <?php echo form_errors($errors); ?>

        <form action="form_with_validation.php" method="post">
            Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username) ?>" /><br />
            Password: <input type="password" name="password" value="" /><br />
            <br />
            <input type="submit" name="submit" value="Submit" />
        </form>
        <?php

        ?>
    </body>
</html>

