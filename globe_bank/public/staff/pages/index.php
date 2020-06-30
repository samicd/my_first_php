
<!-- gettign header -->
<?php require_once('../../../private/initialize.php'); ?>

<?php
	//array that is standing in for an array
  $pages_set = find_all_pages();
?>

<?php $page_title = 'Pages'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="pages listing">
    <h1>Pages</h1>

    <!-- link to add new page currently goes nowhere -->
    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/pages/new.php');?>">Create New Page</a>
    </div>

    <!-- creates table with the correct lables -->
  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Subject ID</th>
        <th>Position</th>
        <th>Visible</th>
  	    <th>Name</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

  	  <!-- loop through all pages to get info -->
      <?php while($page = mysqli_fetch_assoc($pages_set)) { ?>
        <tr>
          <td><?php echo h($page['id']); ?></td>
          <td><?php echo h($page['subject_id']); ?></td>
          <td><?php echo h($page['position']); ?></td>
          <td><?php echo $page['visible'] == 1 ? 'true' : 'false'; ?></td>
    	    <td><?php echo h($page['menu_name']); ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/pages/show.php?id=' . h(u($page['id'])));?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/pages/edit.php?id=' . h(u($page['id'])));?>">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>
    
    <?php
    mysqli_free_result($pages_set);
    ?>

  </div>

</div>

<!-- getting footer -->
 <?php include(SHARED_PATH . '/staff_footer.php'); ?>
