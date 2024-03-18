<?php
// array degli hotel da far vedere
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - PHP</title>
</head>
<body>
<h2>cavallo</h2>
<ul>
    <?php
    // noi con foreach andiamo ad iterarci all'interno di ogni elemento
    foreach($hotels as $currenthotel)
    {
        //  facciamo una chiamata tramite echo per piportare il valore in pagina
       echo "<li>
       
                <ul>";
                // tramite li noi andiamo a "rappresentare l'elemento degli array" ma in ul noi andiamo a rappresentare gli elementi singoli all'interno dell'array
                    // andiamo ad iterarci per ogni elemento all'interno del medesimo elemento
                    // key e value sono praticamente il nome ed il valore dell'elemento su cui siamo
                    foreach($currenthotel as $key => $value){
                        // stampiamo in pagina
                      echo " 
                        <li>
                          $key:". $value."
                        </li>" ;
                    }
                    
                echo"
                </ul> 
            </li>";
    }

       

    ?>
</ul>
</body>
</html>