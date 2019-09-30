<?php
session_start();
if (!isset($_SESSION['ok'])) {
    die('Yritit sivulle ilman lupaa!');
}

if ($_SESSION['ok'] == FALSE) {
    die('Annoit väärän koodin!');
}

?>

<h1>Secret page</h1>
<p>Secrets ... </p>

<a href="logout.php">Lopeta istunto</a>