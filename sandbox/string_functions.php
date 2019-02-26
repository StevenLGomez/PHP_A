<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
    
        <title>String Functions</title>
    </head>
    <body>
    <?php
        $first = "The quick brown fox";
        $second = " jumped over the lazy dog.";

        $third = $first;
        $third .= $second;
        echo $third;
    ?>

    <br />
    <?php echo strtolower($third); ?><br />
    <?php echo strtoupper($third); ?><br />
    <?php echo ucfirst($third); ?><br />
    <?php echo ucwords($third); ?><br />
    <br />

    <?php echo strlen($third); ?><br />
    <?php echo "A" . trim(" B C D ") . "E"; ?><br />
    <?php echo strstr($third, "brown"); ?><br />
    <?php echo str_replace("quick", "super-fast", $third); ?><br />
    <br />

    <?php echo str_repeat($third, 2); ?><br />
    <?php echo substr($third, 5, 10); ?><br />
    <?php echo strpos($third, "brown"); ?><br />
    <?php echo strchr($third, "z"); ?><br />

    </body>
</html>
