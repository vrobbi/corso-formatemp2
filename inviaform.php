<?php



        

         ?>

        <!DOCTYPE html>
<html>
    <head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="content-type" content="text/html">
<title>esempio di risposta del server</title>
<style>
body {

    text-align:center;
    font-size:20px;
}
div {
    width:70%;
    margin: 0 auto;
}

</style>
</head>
<body>
    <H2>Risposta del server</H2>

    <div>Hai inviato i seguenti dati <br>
<?php $recuperotitolo = $_POST['untitolo'];
         $recuperotesto = $_POST['untesto'];
         echo  $recuperotitolo . "<br>".  $recuperotesto;    ?>
         <br><br>
         <a href="form.html">Torna alla pagina di invio form</a>
   </div>
    




</body>
</html>
        
     

