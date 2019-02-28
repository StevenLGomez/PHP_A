<?php require_once('../../../private/initialize.php'); ?>

<?php
// Check for valid value in super global _GET
// $id = $_GET['id'] ?? '1'; // Requires PHP > 7.0
$id = isset($_GET['id']) ? $_GET['id'] : '1';
?>

<?php $page_title = 'Show Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

	<a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

	<div class="subject show">
		Subject ID: <?php echo h($id); ?>
	</div>

</div>
