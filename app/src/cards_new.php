<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "pagina nuova carta<br>";

require 'connessione.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['card_nome'] ?? '';
    $image = $_POST['card_image'] ?? '';
    $price = $_POST['price'] ?? '';
    $descrizione = $_POST['descrizione'] ?? '';

    $sql = "INSERT INTO cards (card_nome, card_image, price, descrizione)
            VALUES (:nome, :image, :price, :descrizione)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':nome' => $nome,
        ':image' => $image,
        ':price' => $price,
        ':descrizione' => $descrizione
    ]);

    // redirect dopo insert
    header("Location: home_admin.php");
    exit;
}
?>

<!doctype html>
<html>
<head>
    <title>Nuova card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Nuova card</h1>

    <form method="POST">

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="card_nome" class="form-control">
        </div>

        <div class="mb-3">
            <label>Immagine (URL)</label>
            <input type="text" name="card_image" class="form-control">
        </div>

        <div class="mb-3">
            <label>Prezzo</label>
            <input type="number" name="price" class="form-control">
        </div>

        <div class="mb-3">
            <label>Descrizione</label>
            <textarea name="descrizione" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Salva</button>

    </form>
</div>

</body>
</html>