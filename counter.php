<?php

/* counter */
// Add correct path to your countlog.txt file.
$path = './countlog.txt';

//opens countlog.txt to read the number of hits
$countfile  = fopen( $path, 'r' );
$hitCount = fgets( $countfile, 1000 );
fclose( $countfile );

// Update the count.
$hitCount = abs( intval( $hitCount ) ) + 1;

#echo "{$hitCount} hits\n";

// opens countlog.txt to change new hit number
$countfile = fopen( $path, 'w' );
fwrite( $countfile, $hitCount );
fclose( $countfile );

?>