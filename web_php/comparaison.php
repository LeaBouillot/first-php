<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Comparaison Operators & Conditional</h2>
 <?php
 var_dump(10 == 10); // true 
 echo '<br />';
var_dump(11);
 ?>

<h2>Conditional</h2>
<?php 
echo '1<br />';
?>


<h2> if else</h2>
<?php
$isAllowedToEnter = "Oui";

// SI on a l'autorisation d'entrer
if ($isAllowedToEnter === "Oui") {
    // instructions à exécuter quand on est autorisé à entrer
} // SINON SI on n'a pas l'autorisation d'entrer
elseif ($isAllowedToEnter === "Non") {
    // instructions à exécuter quand on n'est pas autorisé à entrer
} // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
else {
    echo "Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te plaît ?";
}
?>

<h2>5. 2 façon les conditions</h2>
<?php
$chickenRecipesEnabled = true;

if ($chickenRecipesEnabled) {
    echo '<h1>Liste des recettes à base de poulet</h1>';
}
?>
<!-- /// -->
<?php $chickenRecipesEnabled = true; ?>

<?php if ($chickenRecipesEnabled): ?> <!-- Ne pas oublier le ":" -->


<h2>6. switch</h2>
<h4>Liste des recettes à base de poulet</h4>

<?php endif; ?><!-- Ni le ";" après le endif -->

<!--IF: Pour une condition simple et courte, on utilise le  if  -->
<!-- SWITCH:quand on a une série de conditions à analyser, on préfère utiliser switch pour rendre le code plus clair : Le switch ne peut tester que l'égalité. === -->
<?php
$grade = 10;

switch ($grade) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $grade vaut 0
        echo "Il faudra revoir tout le cours !";
    break;
    // break , il sort des accolades et donc il ne lit pas les case qui suivent.
    
    case 5: // dans le cas où $grade vaut 5
        echo "Tu dois réviser plusieurs modules";
    break;
    
    case 7: // dans le cas où $grade vaut 7
        echo "Il te manque quelques révisions pour atteindre la moyenne ";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
// Le mot-clé default à la fin est un peu l'équivalent du  else  
?>


</body>
</html>

<!-- var_dump();  indque si c'est string int boolean... -->