<?php
{
    if (file_exists('item.dat'))
    $f=fopen('item.dat','r');
    echo "<br/><br/><br/>";
    echo "<table border type=3 align=center cellpadding=10>";
    echo "<tr><td colspan=7 align=center><h3>Book Records.</h3></td></tr>";
    echo "<tr><td align=center>Item no.</td>";
    echo "<td align=center>B_Name.</td>";
    echo "<td align=center>B_Qt</td>";
    echo "<td align=center>Rate.</td>";
    echo "<td align=center>B_TT</td>";
    
    while(!feof($f))
    {
        $d= fgets($f);
        $s=explode(' ',$d);
        if(!empty($s[0]) && !empty($s[1]) && !empty($s[2]) && !empty($s[3]))
        {
            $m1=$s[2];
            $m2=$s[3];
            $total=$m1*$m2;
            echo "<tr><td align=center>$s[0]</td>";
            echo "<td align=center>$s[1]</td>";
            echo "<td align=center>$m1</td>";
            echo "<td align=center>$m2</td>";
            echo "<td align=center>$total</td>";
        }
    }
    echo "</table>";
}
?>
