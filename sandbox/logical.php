<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>

        <title>Logical And Comparison Operators</title>
    </head>
    <body>
        <?php
            $a = 4;
            $b = 3;

            if ( $a > $b )
            {
                echo "a is larger than b";
            }
            ?>
        <br />
        <?php
             $new_user = true;
             if ( $new_user )
             {
                 echo "<h1>Welcome</h1>";
                 echo "<p>We are glad you decided to join us.</p>";
             }
             ?>
        <br />
        <?php // Don't divide by zero
              $numerator = 20;
              $denominator = 4;
              if ( $denominator > 0 )
              {
                  // NOTE - scope delimiters work as in C, result is not
                  //        defined outside of this if statement.
                  $result = $numerator / $denominator;
                  echo "Result: {$result}";
              }
              ?>
        <br />

        <?php
              $a = 3;
              $b = 4;

              if ( $a > $b )
              {
                  echo "a is larger than b";
              }
              elseif ($b < $a)
              {
                  echo "a is smaller than b";
              }
              else
              {
                  echo "a is equal to b";
              }
              ?>
        <br />
        <?php
            // Comparison Operators:
            // equal:        ==
            // identical:    ===
            // compare:      > < >= <= <>
            // not equal:    !=
            // not identical !==

            // and:           &&
            // or:            ||
            // not:           !

              $a = 4;
              $b = 3;
              $c = 1;
              $d = 20;
              if ( ($a > $b) && ($c > $d) )
              {
                  echo "a is larger than b AND ";
                  echo "c is larger than d";
              }

              if ( !isset($e) )
              {
                  $e = 200;
              }
              echo $e;
               ?>

          <br />
          <?php
               // Don't reject 0 or 0.0
               $quantity = 0;
               if ( empty($quantity) && !is_numeric($quantity) )
               {
                   echo "You must enter a quantity.";
               }
               ?>

    </body>
</html>
