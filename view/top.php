<?php
require_once('lib/print.php'); //chemin de print_title()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title><?php print_title(); ?></title>
</head>
<body>
<h1> <a href="index.php">WEB</a></h1>

<ol>
    <?php
    print_list();
    ?>
</ol>