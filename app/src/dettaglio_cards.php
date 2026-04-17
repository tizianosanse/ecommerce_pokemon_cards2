<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'connessione.php';

$id = $_GET['id'] ?? null;

if (!$id || !is_numeric($id)) {
    die("ID ordine non valido");
}

// 1. Usa una query preparata per evitare SQL Injection e filtrare per ID
$stmt = $pdo->prepare("SELECT id, card_nome, card_image, price, descrizione FROM cards WHERE id = ?");
$stmt->execute([$id]);

// 2. Usa fetch() e non fetchAll() perché ti serve una singola riga, non una lista
$card = $stmt->fetch();

if (!$card) {
    die("Card non trovata");
}

// --- DEVI CHIUDERE IL TAG PHP QUI SOTTO ---
?>

<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <title>Dettaglio Card #<?= htmlspecialchars($card['id']) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h1 class="mb-4">Dettaglio Card #<?= htmlspecialchars($card['id']) ?></h1>

    <div class="card mb-4">
        <div class="card-header">
            Informazioni Card
        </div>
        <div class="card-body">
            <img src="<?= htmlspecialchars($card['card_image']) ?>" alt="Immagine card" class="img-fluid mb-3" style="max-width: 200px;">
            
            <p><strong>Nome Carta:</strong> <?= htmlspecialchars($card['card_nome']) ?></p>
            <p><strong>Descrizione:</strong> <?= htmlspecialchars($card['descrizione']) ?></p>
            <p><strong>Prezzo:</strong> <?= htmlspecialchars($card['price']) ?> €</p>
        </div>
    </div>
    
    <a href="home.php" class="btn btn-secondary">Torna alla lista</a>
</div>
</body>
</html>
