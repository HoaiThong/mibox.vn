<?php
function df($urlFile){
    $file_name  =   basename($urlFile);
    //save the file by using base name
    $fn         =   file_put_contents($file_name,file_get_contents($urlFile));
    header("Content-type:application/pdf");

//Set the Content-Transfer-Encoding to "Binary"
header('Content-Transfer-Encoding: Binary');
    header('Content-length: '.filesize($file_name));
    header('Content-disposition: attachment; filename="'.basename($file_name).'.pdf"');
    readfile($file_name);
}
$url        =   'https://neilpatel.com/wp-content/uploads/2019/08/google.jpg'; 
$urlPdf     =   'https://drive.google.com/file/d/1oCduao5WccsdT5g1iOQcnJpCeTAixXpk';
df($urlPdf);
?>