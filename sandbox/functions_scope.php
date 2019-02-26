<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
    
        <title>Functions: Scope</title>
    </head>
    <body>
        <?php
            $bar = "outside";    // Global scope

            function foo()
            {
                // Use global sparingly !!
                global $bar;

                // This if statement demonstrates that the LOCAL $bar is not set
                // if the global statement is not included.
                if (isset($bar))
                {
                    echo "foo: " . $bar . "<br />";
                }
                $bar = "inside";  // Local scope (only within this function)
            }

            echo "1: " . $bar . "<br />";
            foo();
            echo "2: " . $bar . "<br />";


        ?>
    </body>
</html>
