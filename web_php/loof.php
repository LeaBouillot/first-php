<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>while 반복문</title>
</head>

<body>
    <h1>while 반복문</h1>
    <!-- <?php
    $i=0;
    while($i<5){
      echo
        $i++;
    }
    ?> -->

<?php
echo '1<br>';
$i=0;
//while 은  boolen 과 조건을 합친 문법
// i가 <3 까지 echo 2 가 실행
while($i<3){
    echo '2<br>'; 
    $i=$i+1;
}
echo '3<br>';
?>


</body>
</html>


  <!-- Afficher la page correspond de l' id : pour la secutité ce code est faible-->
  
<!-- // Si l'id existe dans l'url, on affiche le contenu du fichier correspondant sinon affich "Welcome"
// echo isset($_GET['id'])? file_get_contents("data/".$_GET['id']) : "Welcome";  --> 
<!-- contenu -->

    <!-- // echo "<li>$list[0]</li>\n"; //\n retour à la ligne
    // echo "<li>$list[1]</li>\n";
    // echo "<li>$list[2]</li>\n";
    // echo "<li>$list[3]</li>\n";
    // echo "<li>$list[4]</li>\n";
    <ol>
    <li><a href="index.php?id=HTML">HTML</a></li>
    <li><a href="index.php?id=CSS">CSS</a></li>
    <li><a href="index.php?id=JAVASCRIPT">JAVASCRIPT</a></li>
    <li><a href="index.php?id=PHP">PHP</a></li>
</ol>  -->