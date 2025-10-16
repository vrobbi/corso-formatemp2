

<?php

if(isset($_POST['cancella'])) {
fopen("listamessaggi.txt", "w") or die("Unable to open file!");
echo "<div>La lista dei messaggi è stata cancellata</div>";
return;
}

$recuperotesto = $_POST['msg'];

if (strlen($recuperotesto) > 0) {
  
    $recuperotesto = "<div>".date('H:m:s') . " ". $recuperotesto . "</div>";
    $myfile = fopen("listamessaggi.txt", "r+") or die("Unable to open file!");
 $listamessaggi = fgets($myfile);
     fseek($myfile, 0, SEEK_SET); 
     echo  $recuperotesto.$listamessaggi;
    fwrite($myfile, $recuperotesto.$listamessaggi);
    
    fclose($myfile);
  
} else {

   if(file_exists("listamessaggi.txt" )) {

 $myfile = fopen("listamessaggi.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
    $numchars = 0;
    while (!feof($myfile)) {

      $listamessaggi =   fgets($myfile);
              

    }


   echo  $listamessaggi;
   }
     fclose($myfile);
}
?>




