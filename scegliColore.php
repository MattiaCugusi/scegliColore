<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funzione Scegli Colore</title>
</head>
<body>
    <?php
  

     function scegliColore($iniziale) {
        $colore = "";


        switch ($iniziale){
            case "r":
              $colore = "red";
              break;            
            case "g":
              $colore = "green";
              break;
            case "b":
              $colore = "blue";
              break;
            default:
              $colore = "black";
            
        }

        return $colore;

     }

     $risultato = scegliColore("r");

     $paragrafo = "<p style='color: " . $risultato . ";'>Questo paragrafo ha la proprieta color con valore " . $risultato . "</p>";

     echo $paragrafo;

    ?>

    
    
</body>
</html>