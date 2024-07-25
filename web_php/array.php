<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>

    <?php
    $alphabet= array('a', 'b', 'c', 'd', 'e', 'f', 'g');
    echo $alphabet[1].'<br>'; // 2eme values dans array
    echo $alphabet[3].'<br>'; // 4eme values dans array
    echo count($alphabet).'<br>'; // nombre element dans array
    var_dump(count($alphabet)); //info de contenu d array et nombre element dans array

    array_push($alphabet, 'ciel'); // php array add : array_push
    var_dump($alphabet) //afficher le code de source pour voir la base de donné
    ?>
    
</body>
</html>