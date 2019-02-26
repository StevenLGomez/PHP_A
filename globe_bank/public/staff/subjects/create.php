<?php
require_once('../../../private/initialize.php');

// Handle form values sent by new.php

// NOTE - Original example code requires PHP > 7.0
// $menu_name = $_POST['menu_name'] ?? '';
// $position = $_POST['position'] ?? '';
// $visible = $_POST['visible'] ?? '';

if (is_post_request())
{
  $menu_name = isset($_POST['menu_name']) ? $_POST['menu_name'] : '';
  $position = isset($_POST['position']) ? $_POST['position'] : '';
  $visible = isset($_POST['visible']) ? $_POST['visible'] : '';

  echo "Form parameters<br />";
  echo "Menu name: " . $menu_name . "<br />";
  echo "Position: " . $position . "<br />";
  echo "Visible: " . $visible . "<br />";
}
else
{
    redirect_to(url_for('staff/subjects/new.php'));
}

?>
