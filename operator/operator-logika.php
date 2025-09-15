<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>operator logika</title>
</head>
<body>
      <?php 
          $n = true;
          $i = false;

          echo " == OPERATOR LOGIKA AND == ";
          echo "<br>";
          echo "true $$ fslse : " ; 
          var_dump($n && $i);
          echo "<br>";
          echo "false $$ false : "; 
          var_dump($i && $i);
          echo "<br>";
          echo "false $$ true: " ;
           var_dump($i && $n);
          echo "<br>";
          echo "true $$ true : " ;
           var_dump($n && $n);
          echo "<br>";

          echo " == OPERATOR LOGIKA OR == ";
          echo "<br>";
          echo "N || I : " ;
           var_dump($n || $i);
          echo "<br>";
          echo "I || I : " ;
           var_dump($i || $i);
          echo "<br>";
          echo "I || N : " ;
           var_dump($i || $n);
          echo "<br>";
          echo "N || N : " ;
           var_dump($n || $n);
          echo "<br>";

          echo " == OPERATOR LOGIKA NEGASI == ";
          echo "<br>";
          echo " ! I : " ;
           var_dump(! $i);
          echo "<br>";
          echo " ! N : " ;
           var_dump(! $n);
          echo "<br>";
       ?>
</body>
</html>