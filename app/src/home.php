
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "home<br>";

require 'connessione.php';

$stmt = $pdo->query("SELECT id, card_nome,price,descrizione
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

</head>
<body>
<div class ="container">
      <h1>Cards</h1>
<div class="mb-3">
    <a href="prodotti_new.php" class="btn btn-primary">New Cards</a>
  
</div>

    <table id="table_id" class="display">
    <tr>
      <th>Nome</th>
      <th>Descrizione</th>
      <th>Prezzo</th>
    
     
    </tr>

    <?php foreach ($cards as $c): ?>
      <tr>
        <td><?= $c['id'] ?></td>
        <td><?= htmlspecialchars($c['card_nome']) ?></td>
        <td><?= htmlspecialchars($c['descrizione']) ?></td>
        <td><?= htmlspecialchars($c['price']) ?></td>
      
      </tr>
    <?php endforeach; ?>
  </table>
</div>
