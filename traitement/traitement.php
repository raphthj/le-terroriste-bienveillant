<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupérer les données soumises
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];

  // Créer l'email à envoyer
  $to = "rpascolo04@gmail.com";
  $subject = "Nouveau message soumis depuis votre site web";
  $body = "Email: $email\nPhone: $phone\nMessage: $message";
  $headers = "From: webmaster@example.com";

  // Envoyer l'email
  mail($to, $subject, $body, $headers);

  // Rediriger vers une page de confirmation
  header("Location: confirmation.php");
  exit();
}
?>