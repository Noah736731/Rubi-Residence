<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phonenumber = htmlspecialchars($_POST['Phone number']);

    // Adresse e-mail destinataire
    $to = "singolkevin2@gmail.com";

    // Sujet de l'e-mail
    $subject = "Nouveau message de contact : $name";

    // Contenu de l'e-mail
    $body = "Name : $name\n";
    $body .= "E-mail : $email\n\n";
    $body .= "Phone number :\n$Phonenumber";

    // Entêtes pour l'e-mail
    $headers = "From: $email";

    // Envoi de l'e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "message envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
}
?>
