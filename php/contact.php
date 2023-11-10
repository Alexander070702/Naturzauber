<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Hier könnten Sie die Daten in eine Datenbank speichern oder per E-Mail versenden.
    // Zum Beispiel:
    // mail($admin_email, "Neue Kontaktanfrage", $message, "Von: $email");

    echo "Vielen Dank, $name. Wir haben Ihre Anfrage erhalten und werden uns bald melden.";

    // Weiterleitung oder eine Bestätigungsseite
    // header("Location: thank_you.html");
}
?>
