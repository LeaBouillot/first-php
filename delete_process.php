<?php
unlink('data/'.basename($_POST['id'])); // basename($_POST['id'] ::security)
header('Location: index.php');
?>