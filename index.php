<?php


  $_GET["censura"];
  $dirtyTextA = "<strong>[A Butch]</strong> Penso che ti ritroverai, quando tutta questa merdata sarà finita, penso che ti ritroverai ad essere un figlio di puttana sorridente. La faccenda è che in questo momento hai talento, ma per quanto sia doloroso il talento non dura. Il tuo periodo sta per finire. Ora, questa è una merdosissima realtà della vita, ma è una realtà della vita davanti alla quale il tuo culo deve essere realista. Vedi, questa attività è stracolma di stronzi poco realisti che da giovani pensavano che il loro culo sarebbe invecchiato come il vino. Se vuoi dire che diventa aceto, è così; se vuoi dire che migliora con l'età, non è così. E poi, quanti combattimenti credi di poter ancora affrontare? Mh? Due? Non ci sono combattimenti per i vecchi pugili. Eri quasi arrivato ma non ce l'hai mai fatta, e se dovevi farcela ce l'avresti già fatta. [gli porge una notevole quantità di banconote] Sei dei miei? [Butch accetta] [...] La sera del combattimento forse sentirai una piccola fitta: è l'orgoglio che ti blocca il cervello e te lo mette nel culo. Mettiglielo tu nel culo. L'orgoglio fa solo male. Non aiuta, mai! Supera certe cagate. (Marsellus)";


  $dirtyTextA = str_replace($_GET["censura"], "xxx", $dirtyTextA);


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>MOVIE QUOTES</h1>
    <h2>Le Iene</h2>
    <p> <?php echo $dirtyTextA ?> </p>

    <p>la lunghezza di questo paragrafo è <?php  ?> </p>

  </body>
</html>
