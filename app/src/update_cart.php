<?php
session_start();

$id = $_GET['id'] ?? null;
$azione = $_GET['azione'] ?? null;

if ($id && isset($_SESSION['carrello'][$id])) {

if ($azione == "add") {
$_SESSION['carrello'][$id]['quantita']++;
}

if ($azione == "remove") {
$_SESSION['carrello'][$id]['quantita']--;

if ($_SESSION['carrello'][$id]['quantita'] <= 0) {
unset($_SESSION['carrello'][$id]);
}
}

if ($azione == "delete") {
unset($_SESSION['carrello'][$id]);
}

}

header("Location: carrello.php");
exit;