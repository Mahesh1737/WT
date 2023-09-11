<?php
//SET B cha Q1 cha 1 brka 
     $x=$_POST['x'];
     $y=$_POST['y'];
     /*function compare(string $x,string $y)
     {
              $c=substr_count($x,$y);
              echo"$y appears in $x $c times";
     }
     compare($x,$y)*/
     function start(string $x,string $y)
     {
              $c=0;
              $a=strlen($y);
              while($y[$i]!='')
              {
                   if ($y[$i]==$x[$i])
                      $c++;
                   $i++;   
              }
              if ($a==$c)
                 echo"$y is appeared in $x at th start";
              else   
                 echo"$y is not appeared in $x at th start";
     }
     start($x,$y);

//SET B cha Q2 brka     
     function 
?>
