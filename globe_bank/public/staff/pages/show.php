<?php require_once('../../../private/initialize.php'); ?>


<!-- getting and using the data that we make available when passing data from one page to another-->
<?php
$id = $_GET['id'] ?? '1'; // 1 is the default
?>

<!-- gettign header -->
<?php $page_title = 'Show Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
	<div id="content">

      <!-- link to add new page currently goes nowhere -->
      <a class="back-link" href="<?php echo url_for('/staff/pages/index.php');
      ?>">&laquo; Back to List</a>
      <div class="page show">

      	Page ID: <?php echo h($id);?>
      		
      	</div>
      </div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
