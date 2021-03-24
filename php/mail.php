<?php
if (isset($_POST['submit']) && !empty($_POST['message'])) {
    $dest = "gonzales.pierre01470@gmail.com";
    $send = $_POST['email'];
    $sujet = $_POST['object'];
    $message .= $_POST['lastname'] . ' ' . $_POST['firstname'] . '<br>' . $_POST['message'];
    $header = "From: $dest";
    mail($dest, $sujet, $message, $header);
    header("Location: ../index.php");
}
