<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
    
        <title>Functions: Defining</title>
    </head>
    <body>
        <?php
            // In PHP 4+ functions can be called before the definition,
            // but is better form to define functions BEFORE calling them.
            function say_hello()
            {
                echo "Hello World!<br />";
            }

            function say_hello_to($word)
            {
                echo "Hello {$word}!<br />";
            }

            // Now actually call the function above
            say_hello();
            say_hello_to("Jose Jiminez");
            say_hello_to("Pedro Valdez");
        ?>
    </body>
</html>
