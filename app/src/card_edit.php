<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "pagina modifica carta<br>";

require 'connessione.php';

if (isset($_REQUEST['delete']) && is_numeric($_REQUEST['delete'])) {
    $idDelete = $_REQUEST['delete'];
    $pdo->prepare("DELETE FROM cards WHERE id = ?")
        ->execute([$idDelete]);
    
    header("Location: home_admin.php");
    exit;
}

$id = $_GET['id'] ?? null;


if (!$id) {
    die("ID mancante");
}

// SE invii il form → UPDATE
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['card_nome'] ?? '';
    $image = $_POST['card_image'] ?? '';
    $price = $_POST['price'] ?? '';
    $descrizione = $_POST['descrizione'] ?? '';

    $sql = "UPDATE cards 
            SET card_nome = :nome,
                card_image = :image,
                price = :price,
                descrizione = :descrizione
            WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':nome' => $nome,
        ':image' => $image,
        ':price' => $price,
        ':descrizione' => $descrizione,
        ':id' => $id
    ]);

    header("Location: home_admin.php");
    exit;
}

// PRENDO dati esistenti
$stmt = $pdo->prepare("SELECT * FROM cards WHERE id = :id");
$stmt->execute([':id' => $id]);
$card = $stmt->fetch();

if (!$card) {
    die("Card non trovata");
}
?>

<!doctype html>
<html>
<head>
    <title>Modifica card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Modifica card</h1>

    <form method="POST">

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="card_nome" class="form-control"
                   value="<?= htmlspecialchars($card['card_nome']) ?>">
        </div>

        <div class="mb-3">
            <label>Immagine (URL)</label>
            <input type="text" name="card_image" class="form-control"
                   value="<?= htmlspecialchars($card['card_image']) ?>">
        </div>

        <div class="mb-3">
            <label>Prezzo</label>
            <input type="number" name="price" class="form-control"
                   value="<?= htmlspecialchars($card['price']) ?>">
        </div>

        <div class="mb-3">
            <label>Descrizione</label>
            <textarea name="descrizione" class="form-control"><?= htmlspecialchars($card['descrizione']) ?></textarea>
        </div>

        <button type="submit" class="btn btn-success">Salva modifiche</button>
        <div class="d-flex justify-content-between mt-4">

    

    <a href="?id=<?= $card['id'] ?>&delete=<?= $card['id'] ?>" 
   class="btn btn-danger"
   onclick="return confirm('Sei sicuro di eliminare questo ordine?')">
   🗑 Elimina ordine
</a>

</div>

    </form>
</div>

</body>
</html>