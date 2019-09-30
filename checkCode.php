<?php
session_start();

if (isset($_POST['koodi'])) {
    
    if ($_POST['koodi'] == 'QWERTY1'){
        $_SESSION['koodi'] = $_POST['koodi'];
        $_SESSION['ok'] = true;
    } else {
        $_SESSION['ok'] = false;
    }

    header("Location: secret.php");

} else {
    echo "<p>Et antanut koodia!";
}