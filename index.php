<?php

 $Ad=$_POST["Ad"];
 $SoyAd=$_POST["SoyAd"];
 file_put_contents("uye_bilgileri.txt",$Ad . " " . $SoyAd ."\n",FILE_APPEND );



$uye = file_get_contents("uye_bilgileri.txt");
$uye = explode("\n" , $uye );                       
for($i=0 ; $i<count($uye) ;$i++)
{
    echo $uye[$i]  . "<br>";
}

?>
<form action="index.php" method="post">

Ad <input type="textbox" name="Ad">

Soyad <input type="textbox" name="SoyAd">
<input type ="submit" value="gönder">
</form>


