<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    $game[0]['name'] = 'CS:GO';
    $game[0]['price'] = 12;
    $game[0]['description'] ='Dobrá hra';
    $game[0]['game type'] = 'Kompetetivní';
    $game[0]['online/offline'] = 'Online';
    
    $game[1]['name'] = 'LOL';
    $game[1]['price'] = free;
    $game[1]['description'] ='Blbá hra';
    $game[1]['game type'] = 'Kompetetivní';
    $game[1]['online/offline'] = 'Online';
    

    $game[2]['name'] = 'Resident Evil Village';
    $game[2]['price'] = 30;
    $game[2]['description'] ='Dobrá hra';
    $game[2]['game type'] = 'Příběhovka';
    $game[2]['online/offline'] = 'Offline';


    $game[3]['name'] = 'Battlefield 2042';
    $game[3]['price'] = 53;
    $game[3]['description'] ='Dobrá hra';
    $game[3]['game type'] = 'Kompetetivní';
    $game[3]['online/offline'] = 'Online';

    $game[4]['name'] = 'Forza Horizon 5';
    $game[4]['price'] = 80;
    $game[4]['description'] ='Dobrá hra';
    $game[4]['game type'] = 'Auta';
    $game[4]['online/offline'] = 'Online';



//////////////////////////////////////////////////////////////////////////////////////////////////////

    $people[0]['firstname'] = 'Ondřej';
    $people[0]['game'] = $game[0];
    $people[0]['skill'] = 'Krásný';
    $people[0]['atractivity'] = '11/10';
    $people[0]['strenght'] = "9/10"; 
    $people[0]['fear'] = "0/10";

    $people[1]['firstname'] = 'Filip';
    $people[1]['game'] = $game[1];
    $people[1]['skill'] = 'Přátelský';
    $people[1]['atractivity'] = '8/10';
    $people[1]['strenght'] = "5/10"; 
    $people[1]['fear'] = "6/10";

    $people[2]['firstname'] = 'Honza';
    $people[2]['game'] = $game[2];
    $people[2]['skill'] = 'Dobrý ITak';
    $people[2]['atractivity'] = '1/10';
    $people[2]['strenght'] = "1/10"; 
    $people[2]['fear'] = "10/10";

    $people[3]['firstname'] = 'Jarda';
    $people[3]['game'] = $game[3];
    $people[3]['skill'] = 'Krásný';
    $people[3]['atractivity'] = '100/10';
    $people[3]['strenght'] = "5/10"; 
    $people[3]['fear'] = "2/10";

    $people[4]['firstname'] = 'Alexa';
    $people[4]['game'] = $game[4];
    $people[4]['skill'] = 'Prodává dopré holo';
    $people[4]['atractivity'] = '6/10';
    $people[4]['strenght'] = "4/10"; 
    $people[4]['fear'] = "4/10";
  
//////////////////////////////////////////////////////////////////////////////////////////////////////    

    for ($i=0; $i < count($game); $i++) { ?>
        
            <h2><?= $game[$i]['name']; ?> </h2>
            <p><strong>Cena:</strong><?= $game[i]['price']; ?></p>
            <p><strong>Popis:</strong><?= $game[i]['descriprion']; ?></p>
            <p><strong>Typ hry:</strong><?= $game[i]['game type']; ?></p>
            <p><strong>Online nebo offline:</strong><?= $game[i]['online/offline']; ?></p>
    <?php
    }
    
    
    ?>
</body>
</html>