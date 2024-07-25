<?php
require_once('lib/print.php'); // empeche redeclaration de print_title() sur top.php
//top.php 
require('view/top.php');
?>

<!-- php echo $_GET['id'];  ::   = $_GET['id'] -->
<a href="create.php">create</a>
<?php if(isset($_GET['id'])) {  ?>
<a href="update.php?id=<?= $_GET['id'] ?>">update</a> 
<!-- delete -->
<form action="delete_process.php" method="post">
    <input type="hidden" name="id" value="?=$_GET['id']?>">
    <input type="submit" value="delete">
</form>
<?php } ?>

<h2>
<?php print_title(); ?>
</h2>

<?php print_description(); ?>
<!-- bottom.php -->
<?php
require('view/bottom.php');
?>
