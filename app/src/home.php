<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "home<br>";

require 'connessione.php';

// Filtro ricerca
$nome = $_GET['nome'] ?? '';

if (!empty($nome)) {
    $stmt = $pdo->prepare("SELECT id, card_nome, card_image, price, descrizione FROM cards WHERE card_nome LIKE ?");
    $stmt->execute(["%$nome%"]);
} else {
    $stmt = $pdo->query("SELECT id, card_nome, card_image, price, descrizione FROM cards");
}

$cards = $stmt->fetchAll();

echo "pagina dbquery eseguita<br>";
echo "record trovati: " . count($cards) . "<hr>";
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pokemon Cards</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-4">

    <!-- Titolo + ricerca -->
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
        <h1>Cards</h1>
      

        <form method="GET" style="display:flex; gap:5px;">
                 <a href="login.php" class="btn btn-dark">
            Vai al login
        </a>
          <a href="carrello.php" class="btn btn-success">
            Vai al carrello
        </a>
        <input 
                type="text" 
                name="nome" 
                placeholder="Cerca carta..."
                value="<?= htmlspecialchars($nome) ?>"
                style="padding:6px 10px; border:1px solid #ccc; border-radius:6px;"
            >

          
            <button type="submit" class="btn btn-primary btn-sm">
                Cerca
            </button>

            <a href="?" class="btn btn-secondary btn-sm">
                Reset
            </a>
        </form>
    </div>

<div class="row g-4">

<?php foreach ($cards as $c): ?>

    <div class="col-12 col-md-6 col-lg-4 col-xl-3">

        <div class="card h-100 shadow-sm">

            <img 
                src="<?= htmlspecialchars($c['card_image']) ?>" 
                class="card-img-top p-2" 
                style="height:250px; object-fit:contain;"
            >

            <div class="card-body d-flex flex-column">

                <a class="text-decoration-none text-dark" href="dettaglio_cards.php?id=<?=$c['id']?>"><h5 class="card-title"><?= htmlspecialchars($c['card_nome'])?></h5></a>

                <p class="card-text text-muted small">
                    <?= htmlspecialchars($c['descrizione']) ?>
                </p>

                <p class="card-text mt-auto fw-bold">
                    Prezzo: <?= number_format($c['price'],2,',','.') ?> €
                </p>

                <a href="add_to_cart.php?id=<?= $c['id'] ?>" class="btn btn-primary w-100">
                    aggiungi al carrello
                </a>

            </div>

        </div>

    </div>

<?php endforeach; ?>

</div>
</div>

</body>
</html>