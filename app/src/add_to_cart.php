<?php
session_start();

require 'connessione.php';

$id = $_GET['id'] ?? null;

if ($id) {

$stmt = $pdo->prepare("SELECT id, card_nome, card_image, price FROM cards WHERE id = ?");
$stmt->execute([$id]);
$card = $stmt->fetch();

if ($card) {

if (!isset($_SESSION['carrello'])) {
$_SESSION['carrello'] = [];
}

if (isset($_SESSION['carrello'][$id])) {
$_SESSION['carrello'][$id]['quantita']++;
} else {
$_SESSION['carrello'][$id] = [
"nome" => $card['card_nome'],
"prezzo" => $card['price'],
"immagine" => $card['card_image'],
"quantita" => 1
];
}

}

}

header("Location: home.php");
exit;