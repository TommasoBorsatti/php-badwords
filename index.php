<?php

  $_GET["censura"];
  $dirtyTextA = "<strong>[A Butch]</strong> Penso che ti ritroverai, quando tutta questa merdata sarà finita, penso che ti ritroverai ad essere un figlio di puttana sorridente. La faccenda è che in questo momento hai talento, ma per quanto sia doloroso il talento non dura. Il tuo periodo sta per finire. Ora, questa è una merdosissima realtà della vita, ma è una realtà della vita davanti alla quale il tuo culo deve essere realista. Vedi, questa attività è stracolma di stronzi poco realisti che da giovani pensavano che il loro culo sarebbe invecchiato come il vino. Se vuoi dire che diventa aceto, è così; se vuoi dire che migliora con l'età, non è così. E poi, quanti combattimenti credi di poter ancora affrontare? Mh? Due? Non ci sono combattimenti per i vecchi pugili. Eri quasi arrivato ma non ce l'hai mai fatta, e se dovevi farcela ce l'avresti già fatta. <em>[gli porge una notevole quantità di banconote]</em> Sei dei miei? <em>[Butch accetta]</em> [...] La sera del combattimento forse sentirai una piccola fitta: è l'orgoglio che ti blocca il cervello e te lo mette nel culo. Mettiglielo tu nel culo. L'orgoglio fa solo male. Non aiuta, mai! Supera certe cagate. <em><strong>(Marsellus)</strong></em>";
  $dirtyTextA = str_replace($_GET["censura"], "***", $dirtyTextA);

  $dirtyTextB = "<strong>[A Mr. Pink, che gli chiede perché abbia detto a Mr. Orange il suo nome]</strong> Eravamo appena sfuggiti agli sbirri. Lui era stato ferito... Era stato ferito per colpa mia. Era in un lago di sangue, cazzo, urlava. Giuro su Dio, ero convinto che sarebbe morto da un momento all'altro. Cercavo di consolarlo, gli dicevo di non preoccuparsi, che tutto era okay, che avrei pensato io a lui... E mi ha chiesto come mi chiamo. Mi stava morendo tra le braccia, che cazzo avrei dovuto fare secondo te! Dirgli \"mi dispiace tanto, ma non posso darti questa cazzo d'informazione\"? \"È contro il regolamento\"? \"Non mi fido di te\"? Forse non avrei dovuto, ma l'ho fatto! Fanculo te e fanculo Joe! <em><strong>(Mr. White)</strong></em>";
  $dirtyTextB = str_replace($_GET["censura"], "***", $dirtyTextB);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>MOVIE QUOTES</h1>
    <p><em>Per censurare una parola utilizza la query: ?censura=parola.</em></p>
    <h2>Pulp Fiction (1994)</h2>
    <p> <?php echo $dirtyTextA ?> </p>
    <h3>la lunghezza di questo paragrafo è <?php echo strlen($dirtyTextA)?> caratteri</h3>
    <h2>Le Iene (1992)</h2>
    <p> <?php echo $dirtyTextB ?> </p>
    <h3>la lunghezza di questo paragrafo è <?php echo strlen($dirtyTextB)?> caratteri</h3>
  </body>
</html>
