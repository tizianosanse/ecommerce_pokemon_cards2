<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "home<br>";

require 'connessione.php';

$stmt = $pdo->query("SELECT id, card_nome,card_image,price,descrizione
                     FROM cards
             
                   
                     ");
$cards = $stmt->fetchAll();

echo "query eseguita<br>";
echo "record trovati: " . count($cards) . "<hr>";
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Cards</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/2.3.7/css/dataTables.dataTables.min.css" rel="stylesheet">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/2.3.7/js/dataTables.min.js"></script>
</head>
<body>
<div class ="container">
      <h1>Cards</h1>
<div class="mb-3">

  
</div>
<div class="row g-4">
        <?php foreach ($cards as $c): ?>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card h-100 shadow-sm">
                    <img src="<?= htmlspecialchars($c['card_image']) ?>" class="card-img-top p-2" alt="..." style="height: 250px; object-fit: contain;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?= htmlspecialchars($c['card_nome']) ?></h5>
                        <p class="card-text text-muted small"><?= htmlspecialchars($c['descrizione']) ?></p>
                        <p class="card-text mt-auto fw-bold">Prezzo: <?= number_format($c['price'], 2, ',', '.') ?> €</p>

                        <a href="#" class="btn btn-primary w-100">aggiungi al carrello</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
   
</div>