<?php
require('lib/print.php');
//top.php 
require('view/top.php');
?>

<!-- php echo $_GET['id'];  => <?= $_GET['id'] ?>-->
<a href="create.php">create</a>
<?php if(isset($_GET['id'])) {  ?>
<a href="update.php?id=<?= $_GET['id'] ?>">update</a> 
<?php } ?>

<form action="undate_process.php" method="post">
    <input type="hidden" name="old_title" value="<?=$_GET['id'] ?>">
      <p><input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>"/></p>
      <p><textarea name="description" placeholder="Description"><?php print_description(); ?></textarea></p>
      <input type="submit" />
</form>

<?php
require('view/bottom.php');
?>
 