<?php
require_once('../../../private/initialize.php');

// Handle form values sent by new.php

// NOTE - Original example code requires PHP > 7.0
// $menu_name = $_POST['menu_name'] ?? '';
// $position = $_POST['position'] ?? '';
// $visible = $_POST['visible'] ?? '';

if (is_post_request())
{
    // Handle form values sent by new.php

    $menu_name = isset($_POST['menu_name']) ? $_POST['menu_name'] : '';
    $position = isset($_POST['position']) ? $_POST['position'] : '';
    $visible = isset($_POST['visible']) ? $_POST['visible'] : '';

    $sql = "INSERT INTO subject ";
    $sql .= "(menu_name, position, visible) ";
    $sql .= "VALUES (";
    $sql .= "'" . $menu_name . "', ";
    $sql .= "'" . $position . "', ";
    $sql .= "'" . $visible . "'";
    $sql .= ");";

    $result = mysqli_query($db, $sql);

    // For insert statement $result is true/false
    if($result)
    {
        // INSERT failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
    else
    {
        $new_id = mysqli_insert_id($db);
        redirect_to(url_for('/staff/subjects/show.php?id=' . $new_id));
    }


}
else
{
    redirect_to(url_for('/staff/subjects/new.php'));
}

?>
