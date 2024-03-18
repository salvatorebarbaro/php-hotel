<?php
// array degli hotel da visualizzare
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

// Controlla se l'utente ha selezionato di visualizzare solo gli hotel con parcheggio
$showParking = isset($_GET['parking']) && $_GET['parking'] == 'on';

$filterPark = [];

foreach ($hotels as $hotel) {
    // Verifica se l'hotel ha il parcheggio e se l'utente ha selezionato di mostrarlo solo con parcheggio
    if ($hotel['parking'] == true && $showParking) {
        // Se l'hotel ha il parcheggio e l'utente ha selezionato di mostrarlo solo con parcheggio, aggiungilo all'array di hotel filtrati
        $filterPark[] = $hotel;
    } elseif (!$showParking) {
        // Se l'utente non ha selezionato di mostrarlo solo con parcheggio, aggiungi tutti gli hotel all'array di hotel filtrati
        $filterPark[] = $hotel;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - PHP</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2 class="text-center fs-1 my-2 text-uppercase text-primary">Elenco degli hotel</h2>

    <div class="row justify-content-center">
        <!-- apertura della tabella -->
        <table class="fs-5">
            <!-- definizione della testa della tabella -->
            <thead>
                <!-- definizione riga della thead -->
                <tr>
                    <!-- th sta per table head -->
                    <th class="text-center border border-primary border-1 my-1 p-3">Nome</th>
                    <th class="text-center border border-primary border-1 my-1 p-3">Descrizione</th>
                    <th class="text-center border border-primary border-1 my-1 p-3">Parcheggio</th>
                    <th class="text-center border border-primary border-1 my-1 p-3">Voto</th>
                    <th class="text-center border border-primary border-1 my-1 p-3">Distanza dal centro (km)</th>
                </tr>
            </thead>
            <!-- apertura della tbody -->
            <tbody>
                <!-- iteriamo all'interno dell'array filtrato -->
                <?php foreach ($filterPark as $hotel): ?>
                    <!-- ad ogni elemento dell'array verra assegnato un table row dove poi andando ad iterare su ogni elemento lo inseriamo in una table data -->
                    <tr>
                        <?php foreach ($hotel as $key => $value): ?>
                            <!-- mettiamo un if per controllare se parking è true o false e mettiamo si o no -->
                            <?php if ($key == 'parking'): ?>
                                <td class="text-center border border-primary border-1 text-uppercase p-3"><?php echo $value ? 'Sì' : 'No'; ?></td>
                            <?php else: ?>
                                <!-- inseriamo i valori nella table data -->
                                <td class="text-center border border-primary border-1 text-uppercase p-3"><?php echo $value; ?></td>
                            <?php endif; ?>
                            <!-- chiusura endforeach -->
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="container">
    <div class="row-cols-3 my-4">
        <h3 class="text-center">Selezione hotel</h3>
        <form action="" method="GET">
            <div class="form-check d-flex flex-column align-items-center border border-1 border-danger">
                <div class="d-flex my-2">
                    <!--  -->
                    <input class="form-check-input" type="checkbox" value="on" id="parkingCheckbox" name="parking">
                    <label class="form-check-label" for="parkingCheckbox">
                        Hotel con parcheggio
                    </label>
                </div>
                
                <button class="border border-1 rounded-2 mb-4" type="submit">Filtra i parcheggi</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
