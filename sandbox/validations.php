<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
    
        <title>Form Validations</title>
    </head>
    <body>
        <?php
            // Things to check for:
            // * Presence
            // Added trim() to remove entries of all spaces
            $value = trim("Apple");
            if (!isset($value) || (empty($value) && !is_numeric($value)))
            {
                echo "Value validation failed.<br />";
            }

            // * String length
            $value = "12349";
            $min = 3;
            if (strlen($value) < $min)
            {
                echo "Length validation failed (too short).<br />";
            }

            $max = 6;
            if (strlen($value) > $max)
            {
                echo "Length validation failed (too long).<br />";
            }

            // * Type
            $value = "1";
            if (!is_string($value))
            {
                echo "Type validation failed.<br />";
            }

            // * Inclusion in a set
            $value = "3";
            $set = array("1", "2,", "3", "4");
            if (!in_array($value, $set))
            {
                echo "Inclusion in set validation failed.<br />";
            }

            // * Uniqueness
                // Requires database, query to see if value already exists,
                // if yes, then the new value is NOT unique, raise the error.

            // * Format
            // Use a regular expression on a string
            // preg_match($regex, $subject)

            if (preg_match("/PHP/", "PHP is fun."))
            {
                echo "A regex match was found";
            }
            else
            {
                echo "A regex match was NOT found";
            }

            $value = "@nobody@nowhere.com";
            if (preg_match("/@/", $value))
            {
                echo "Properly formed email address";
            }
            else
            {
                echo "IM-properly formed email address";
            }

            if (strpos($value, "@") === false)
            {
                echo "Position validation failed";
            }




        ?>
    </body>
</html>
