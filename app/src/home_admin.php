
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "pagina admin<br>";

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
    <title>ecommerce_pokemon</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class ="container">
      <h1>cards</h1>
<div class="mb-3">
    <a href="cards_new.php" class="btn btn-primary">Nuova card</a>
</div>

    <div class="row row-cols-1 row-cols-md-3 g-4"> 

<?php foreach ($cards as $c): ?>

    <!-- ogni card è una colonna -->
    <div class="col">

        <div class="card h-100" style="width: 18rem;">
            
            <img src="<?= $c['card_image'] ?>" class="card-img-top" alt="...">

            <div class="card-body">
                
                <a href="dettaglio_cards.php?id=<?=$c['id']?>"><h5 class="card-title"><?= htmlspecialchars($c['card_nome'])?></h5></a>
                <p class="card-text"><?= htmlspecialchars($c['descrizione'])?></p>
                <p class="card-text"><?= htmlspecialchars($c['price'])?> € </p>
                <a href="#" class="btn btn-primary">aggiungi al carrello</a>
                <a href="card_edit.php?id=<?= $c['id'] ?>" class="btn btn-warning">Modifica</a>
                
            </div>

        </div>

    </div>

<?php endforeach; ?>

</div>
