<?php 
  
// Initialize a file URL to the variable 
$url = "https://docs.google.com/spreadsheets/d/1AbxoAtX3L1O1xTDE2rrEtws13KLP7gNbAGamaZvauc0/export?format=xlsx";
  
// Use basename() function to return the base name of file  
$file_name = "demo.xlsx"; 
   
// Use file_get_contents() function to get the file 
// from url and use file_put_contents() function to 
// save the file by using base name 
if(file_put_contents( $file_name,file_get_contents($url))) { 
    echo "File downloaded successfully"; 
} 
else { 
    echo "File downloading failed."; 
} 
  
?> 