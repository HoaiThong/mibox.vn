<?php

$str = "https://drive.google.com/uc?export=download&id=";
/*
  ---> format file download xlsx;
  $str_xlsx="https://docs.google.com/spreadsheets/d/1AbxoAtX3L1O1xTDE2rrEtws13KLP7gNbAGamaZvauc0/export?format=xlsx";
 */

class DriveDAO {

    const BUFFER = 1024;

    function download($remoteFile, $localFile) {
        $fremote = fopen($remoteFile, 'rb');
        if (!$fremote) {
            return false;
        }

        $flocal = fopen($localFile, 'wb');
        if (!$flocal) {
            fclose($fremote);
            return false;
        }

        while ($buffer = fread($fremote, BUFFER)) {
            fwrite($flocal, $buffer);
        }

        fclose($flocal);
        fclose($fremote);

        return true;
    }

}

/*
  -->
  //'https://drive.google.com/uc?export=download&id=1RLTt0BODNKiQ8XFmSD7GyNTTWLduE2me',
  //"https://docs.google.com/uc?id=1RLTt0BODNKiQ8XFmSD7GyNTTWLduE2me"
  download(
  "https://docs.google.com/spreadsheets/d/1AbxoAtX3L1O1xTDE2rrEtws13KLP7gNbAGamaZvauc0/export?format=xlsx"
  ,
  'downloads/abc.xlsx'
  );
 */

function getID($driveUrl) {
    // format: link goc: $driveUrl= https://drive.google.com/file/d/1r96CK91m2SLVKlXQFYQeRblayF6v-at8/view?usp=sharing
    $id = "";
    return $id;
}

/*
  format:
  return 'https://drive.google.com/uc?export=download&id=1RLTt0BODNKiQ8XFmSD7GyNTTWLduE2me',
 */

function convertUrlToDownload($driveUrl) {
    return $this->str + getID($driveUrl);
}
?> 

