<?php
function print_title() {
// htmlspecialchars() securisé le code
    if (isset($_GET['id'])) {
        echo htmlspecialchars($_GET['id']);
    } else {
        echo "Welcome";
    }
}
function print_description()
{
    if(isset($_GET['id'])) {
        //$basename: affiché que le chemin pas le contenu(le code securité par ex) securisé le code
        $basename =  basename($_GET['id']);
        echo "<br>";
        echo htmlspecialchars(file_get_contents("data/".$basename));
    } else {
        echo "Hello, PHP";
    }
}
function print_list()
{
    $list = scandir('./data'); // afficher les fiches dans arry
    $i = 0;
    while ($i < count($list)) { //count() compte le list
        $title =  htmlspecialchars( $list[$i]);
        if ($list[$i] != "." && $list[$i] != "..") {
            echo "<li><a 
            href=\"index.php?id=$title\">$title</a></li>\n";
        }
        $i++;
    }
}
