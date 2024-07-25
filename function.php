<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">    
</head>
<body>
 <h1>function</h1> 

 <?php
 $str = "Lorem ipsum dolor sit amet.
  consectetur adip";
 echo $str;
 ?>
  <h2>strlen()</h2>
  <?php
  echo strlen($str);
  ?>
  <h3>nl2br()  :retour à la ligne</h3>
  <?php echo nl2br($str);
  ?>
   <h2>function 2</h2> 

   <h3>Basic</h3>
   <?php
   function basic(){
    print("lorem ipsum dolor1<br>");
    print("lorem ipsum dolor2<br>");
   }
   basic();
   ?>

   <h3>Parameter & argument</h3>
   <?php
function sum($a, $b) {
   print($a + $b);
   print("<br>");
}
sum(4, 6);
sum(4, 5);
   ?>

   <h3>Return</h3>
   <?php
   function sum2($a, $b) {
   return $a + $b;
   }
   print(sum(2,4));
   file_put_contents('result.txt', sum2(2,4));
   ?>
</body>
</html>