<?php
$write = "/Users/hp/Desktop/php/files-7/php02/data/f1.txt";

// =============== file Writing system ============= i don't like this one
$existingData = file_get_contents($write);
$fp = fopen($write,'w');
fwrite($fp,$existingData."\n");
fwrite($fp, "Jupiter \n");
fwrite($fp, "Pluto \n");
fwrite($fp, "Earth");

//================= file append system ========================= i like this one 
$fp = fopen($write, 'a');
fwrite($fp, "Jupiter");
fwrite($fp, "Pluto");
fwrite($fp, "Earth");




