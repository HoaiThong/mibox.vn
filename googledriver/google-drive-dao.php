<?php

class DriveDAO {

    private $str = "https://drive.google.com/uc?export=download&id=";

    /*
      ---> format file download xlsx;
      $str_xlsx="https://docs.google.com/spreadsheets/d/1AbxoAtX3L1O1xTDE2rrEtws13KLP7gNbAGamaZvauc0/export?format=xlsx";
     */

    function downloads($url, $file_name) {
        // Initialize a file URL to the variable 
        // $url = "https://docs.google.com/spreadsheets/d/1AbxoAtX3L1O1xTDE2rrEtws13KLP7gNbAGamaZvauc0/export?format=xlsx";
// Use basename() function to return the base name of file  
        //  $file_name = "demo.xlsx";

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $now = date("Y") . '-' . date("m") . '-' . date("d");
        $folder = "downloads/$now";
        if (!is_dir($folder)) {
            mkdir($folder, 755, true);
        }
        $file_name = $folder . '/' . $file_name;
// Use file_get_contents() function to get the file 
// from url and use file_put_contents() function to 
// save the file by using base name 
        if (file_put_contents($file_name, file_get_contents($url))) {
            echo "File downloaded successfully";
        } else {
            echo "File downloading failed.";
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

        $array = explode("/", $driveUrl);
        $id = $array[5];
        return $id;
    }

    /*
      format:
      return 'https://drive.google.com/uc?export=download&id=1RLTt0BODNKiQ8XFmSD7GyNTTWLduE2me',
     */

    function convertUrlToDownload($driveUrl) {
        return $this->str + getID($driveUrl);
    }

    /*
      function download($remoteFile, $localFile) {
      const BUFFER = 1024;
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

     */
}
?> 

