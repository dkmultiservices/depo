<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "saintumacarlos22@gmail.com"; // Imel ou la
    $subject = "Nouvo mesaj soti nan fòm kontak DK Multi Services";
    $body = "Non: $name\n\nEmail: $email\n\nMesaj:\n$message";
    
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Mesaj ou a te voye avèk siksè. N'ap kontakte ou byento!</p>";
    } else {
        echo "<p>Gen yon pwoblèm lè voye mesaj la. Tanpri eseye ankò pi ta.</p>";
    }
}
?>
