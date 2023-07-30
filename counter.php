<?php

/* counter */

//opens countlog.txt to read the number of hits
$datei = fopen("./countlog.txt","r");
$hitCount = fgets($datei,1000);
fclose($datei);
$hitCount=$hitCount + 1 ;

#echo "$hitCount" ;
#echo " hits" ;
#echo "\n" ;

// opens countlog.txt to change new hit number
$datei = fopen("./countlog.txt","w");
fwrite($datei, $hitCount);
fclose($datei);

?>