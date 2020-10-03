<?php
 $x = 0b1010;
 $x = $x << 2;

 echo "$x<br>";

 $x=1;
 $y=1;

 if ($x == $y) {
     # code...
     echo '$x jest równa $y<br>'; 
 } else {
     echo '$x nie jest równa $y<br>';
 }

 if ($x === $y) {
     # code...
     echo '$x jest identyczna $y<br>'; 
 } else {
     echo '$x nie jest identyczna $y<br>';
 }

 echo gettype($x);
 echo gettype($y),'<hr>';

 $x=-10;
 $y=1;

 $x=1;
 $x=$x++;
 echo $x;

?>