<?php




        if (!is_dir('uploads')) {
            mkdir('uploads', 0755) or die("Impossibile creare la cartella");

        }

        define("gif", 1);
        define("jpg", 2);
        define("png", 3);
        define("swf", 4);
        define("psd", 5);
        define("bmp", 6);
        define("wbmp", 15);
        define("ico", 17);

// Modifica nome file caricato

        $nomefile = $_POST['nomefile'];

// Modifica dimensioni accettate

        $larghezzaimg = 1920;
        $altezzaimg = 1080;

        $tempo = time() . '.txt';
        if (move_uploaded_file($_FILES["upfile1"]["tmp_name"], 'uploads/' . $tempo)) {

            if (exif_imagetype('uploads/' . $tempo) !== jpg
                && exif_imagetype('uploads/' . $tempo) !== gif
                && exif_imagetype('uploads/' . $tempo) !== png
                && exif_imagetype('uploads/' . $tempo) !== swf
                && exif_imagetype('uploads/' . $tempo) !== psd
                && exif_imagetype('uploads/' . $tempo) !== bmp
                && exif_imagetype('uploads/' . $tempo) !== wbmp
                && exif_imagetype('uploads/' . $tempo) !== ico) {

                echo "<span class='error'>Formato file sconosciuto, upload fallito</span>";
                @unlink('uploads/' . $tempo);
                return;
                exit;
            } else {
                $dimensioni = @getimagesize('uploads/' . $tempo);

//if ( $larghezzaimg  !== $dimensioni[0] || $altezzaimg  !== $dimensioni[1] )  {
//@unlink ('uploads/' . $tempo);
//echo "<span class='error'>Dimensioni immagine non corrette, upload annullato</b></span>";
//return;
//exit;
            } //}

            $datafile = file_get_contents('uploads/' . $tempo);
            @unlink('uploads/' . $tempo);
            file_put_contents('uploads/' . $nomefile, $datafile);

            $handle = opendir('uploads');
            while (($file = readdir($handle)) !== false) {
                if ($nomefile !== $file) {
                 //   @unlink('uploads/' . $file);
                }
            }
            echo "<span class='success'>Caricamento completato</span>";
//echo "File caricato: " . $nomefile;
            return;
            exit;
        }

        ?>

    

</body>
</html>
