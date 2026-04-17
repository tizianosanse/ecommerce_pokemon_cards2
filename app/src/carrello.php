<?php
session_start();

$carrello = $_SESSION['carrello'] ?? [];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Carrello</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h1>Carrello</h1>

<a href="home.php" class="btn btn-secondary mb-3">
Torna alle carte
</a>

<?php if (empty($carrello)): ?>

<p>Il carrello è vuoto</p>

<?php else: ?>

<table class="table table-bordered">

<thead>
<tr>
<th>Immagine</th>
<th>Nome</th>
<th>Prezzo</th>
<th>Quantità</th>
<th>Totale</th>
<th>Azioni</th>
</tr>
</thead>

<tbody>

<?php
$totale = 0;

foreach ($carrello as $id => $c):

$subtotale = $c['prezzo'] * $c['quantita'];
$totale += $subtotale;
?>

<tr>

<td>
<img src="<?= $c['immagine'] ?>" width="80">
</td>

<td><?= $c['nome'] ?></td>

<td><?= number_format($c['prezzo'],2,',','.') ?> €</td>

<td><?= $c['quantita'] ?></td>

<td><?= number_format($subtotale,2,',','.') ?> €</td>

<td>

<a href="update_cart.php?id=<?= $id ?>&azione=add" class="btn btn-success btn-sm">
➕
</a>

<a href="update_cart.php?id=<?= $id ?>&azione=remove" class="btn btn-warning btn-sm">
➖
</a>

<a href="update_cart.php?id=<?= $id ?>&azione=delete" class="btn btn-danger btn-sm">
❌
</a>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

<h3>Totale: <?= number_format($totale,2,',','.') ?> €</h3>

<?php endif; ?>

</div>

</body>
</html>