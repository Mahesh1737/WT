<?php
$fnm=$_GET["t1"];
echo"File name is:<br>".$fnm;
echo"<br><br>";
$fp=fopen($fnm,"r");
if (!$fp)
   echo"File is not exti";
else
{
    $fs=filesize($fnm);
    echo"content of the file:<br>";
    echo fread($fp,$fs);
    echo"<br><br>";
    echo"file size is :<br>".$fs;
}
fclose($fnm);
?>












