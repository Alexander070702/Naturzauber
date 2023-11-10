<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    // Hier könnten Sie die E-Mail-Adresse in eine Datenbank einfügen oder für den Newsletter registrieren.
    echo "Vielen Dank für Ihre Anmeldung mit der E-Mail-Adresse: " . $email;
    // Weiterleitung zurück zur Startseite oder zu einer Bestätigungsseite
    header("Location: index.html");
}
?>
