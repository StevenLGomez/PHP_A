<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
    
        <title>Debugging</title>
    </head>
    <body>
        <?php
            $number = 99;
            $string = "bug";
            $array = array(1 => "homepage", 2 => "About Us", 3 => "Services");

            function say_hello_to($word)
            {
                echo "Hello {$word}! <br />";
                var_dump(debug_backtrace());
            }


            var_dump($number);
            echo "<br />";
            var_dump($string);
            echo "<br />";

            echo "<pre>";
            var_dump($array);
            echo "</pre>";

            echo "<br />";

            echo "<pre>";
            print_r(get_defined_vars());
            echo "</pre>";

            echo "<br />";
            var_dump(debug_backtrace());

            say_hello_to("Everyone");

        ?>
    </body>
</html>
