
<?php
/* Creare una variabile con un paragrafo di testo.
 Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre */
 $parolaccia = $_GET["parola"];
 $canzone = "Bella stronza
Che hai distrutto tutti i sogni
Della donna che ho tradito
Che mi hai fatto fare a pugni
Con il mio migliore amico
E ora mentre vado a fondo
Tu mi dici sorridendo 'ne ho abbastanza'";

  $canzone_new = ('$parolaccia', '***', $canzone);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/0ae8af7e4e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">

    <title>PHP Badwords</title>
  </head>
  <body>
    <h1>
      <?php if ($parolaccia == "stronza") { ?>

       <p> <?php echo $canzone_new ?> </p>

     <?php } else {  ?>
       <p> <?php echo $canzone ?></p>
    <?php } ?>
    </h1>
  </body>
</html>
