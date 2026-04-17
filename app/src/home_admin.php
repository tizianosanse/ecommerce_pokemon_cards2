<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "pagina admin<br>";

require 'connessione.php';

// filtro ricerca
$nome = $_GET['nome'] ?? '';

if (!empty($nome)) {
    $stmt = $pdo->prepare("SELECT id, card_nome, card_image, price, descrizione FROM cards WHERE card_nome LIKE ?");
    $stmt->execute(["%$nome%"]);
} else {
    $stmt = $pdo->query("SELECT id, card_nome, card_image, price, descrizione FROM cards");
}

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

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

    <div class="row row-cols-1 row-cols-md-3 g-4"> 

        <?php foreach ($cards as $c): ?>

        <div class="col">

            <div class="card h-100" style="width: 18rem;">
                
                <img src="<?= $c['card_image'] ?>" class="card-img-top" alt="...">

                <div class="card-body">
                    
                    <a class="text-decoration-none text-dark" href="dettaglio_cards.php?id=<?= $c['id'] ?>">
                        <h5 class="card-title"><?= htmlspecialchars($c['card_nome']) ?></h5>
                    </a>

                    <p class="card-text"><?= htmlspecialchars($c['descrizione']) ?></p>
                    <p class="card-text"><?= htmlspecialchars($c['price']) ?> €</p>

                    <a href="card_edit.php?id=<?= $c['id'] ?>" class="btn btn-warning">
                        Modifica
                    </a>
                    
                </div>

            </div>

        </div>

        <?php endforeach; ?>

    </div>

</div>

</body>
</html>