
<?php
/* Creare una variabile con un paragrafo di testo.
 Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre */
 $parolaccia = $_GET["parola"];
 $canzone = "Bella stronza<br>
Che hai distrutto tutti i sogni<br>
Della donna che ho tradito<br>
Che mi hai fatto fare a pugni<br>
Con il mio migliore amico<br>
E ora mentre vado a fondo<br>
Tu mi dici sorridendo 'ne ho abbastanza'<br>
<br>
Bella stronza<br>
Che ti fai vedere in giro<br>
Per alberghi e ristoranti<br>
Con il culo sul Ferrari<br>
Di quell'essere arrogante<br>
Non lo sai che i miliardari<br>
Anche ai loro sentimenti danno un prezzo<br>
Il disprezzo<br>
Perché forse io ti ho dato troppo amore<br>
Bella stronza che sorridi di rancore<br>
<br>
Ma se Dio ti ha fatto bella<br>
Come il cielo e come il mare<br>
A che cosa ti ribelli<br>
Di chi ti vuoi vendicare<br>
Ma se Dio ti ha fatto bella<br>
Più del sole e della luna<br>
Perché non scappiamo insieme<br>
Non lo senti questo mondo come puzza<br>
<br>
Ma se Dio ti ha fatto bella<br>
Come un ramo di ciliegio<br>
Tu non puoi amare un tarlo<br>
Tu commetti un sacrilegio<br>
E ogni volta che ti spogli<br>
Non lo senti il freddo dentro<br>
Quando lui ti paga i conti<br>
Non lo senti l'imbarazzo del silenzio<br>
<br>
Perché sei bella, bella, bella<br>
Bella stronza<br>
Che hai chiamato la volante quella notte<br>
E volevi farmi mettere in manette<br>
Solo perché avevo perso la pazienza<br>
La speranza, sì, bella stronza<br>
<br>
Ti ricordi<br>
Quando con i primi soldi<br>
Ti ho comprato quella spilla<br>
Che ti illuminava il viso<br>
E ti chiamavo la mia stella<br>
Quegli attacchi all'improvviso<br>
Che avevamo noi di sesso e tenerezza<br>
Bella stronza, sì<br>
Perché forse io ti ho dato troppo amore<br>
Bella stronza che sorridi di rancore<br>
<br>
Ma se Dio ti ha fatto bella<br>
Come il cielo e come il mare<br>
A che cosa ti ribelli<br>
Ma se Dio ti ha fatto bella<br>
Più del sole e della luna<br>
Esci dai tuoi pantaloni, mi accontento<br>
Come un cane degli avanzi<br>
<br>
Perché sei bella, bella, bella<br>
Mi verrebbe di strapparti<br>
Quei vestiti da puttana<br>
E tenerti a gambe aperte<br>
Finché viene domattina<br>
Ma di questo nostro amore<br>
Così tenero e pulito<br>
Non mi resterebbe altro che un lunghissimo minuto di violenza<br>
E allora ti saluto, bella stronza, eh";

  $canzone_new = str_replace($parolaccia, '***', $canzone);

  // $masini_felice = "";
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
    <div class="container">
      <div class="container-testo">
        <h1>
          <?php if ($parolaccia == "stronza") { ?>

           <p> <?php echo $canzone_new ?> </p>

         <?php } else {  ?>
           <p> <?php echo $canzone ?></p>
        <?php }; ?>
        </h1>

      </div>
      <div class="container-masini">
        <?php if ($parolaccia == "stronza") { ?>

         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJwzW5v5RJjy3pkKN5tvvCZusPhYYeq2Lltg&usqp=CAU" alt="">

       <?php } else {  ?>
         <img src="https://www.noidegli8090.com/wp-content/uploads/2019/08/1546867257986.jpg-marco_masini_in_lizza__amici_o_the_voice__rai_o_mediaset__questo_e_il_dilemma_.jpg" alt="">
      <?php }; ?>
      </div>

    </div>
  </body>
</html>
