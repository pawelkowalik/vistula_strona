<?php

// Tworzymy zmienną dla imienia i nazwiska
$name = $_POST['name'];

// Tworzymy zmienną dla adresu email
$tel = $_POST['tel'];

// Tworzymy zmienną dla adresu email
$email = $_POST['email'];

// Tworzymy zmienną dla wiadomości
$message = $_POST['message'];

// Podajesz adres email z którego ma być wysłana wiadomość
$odkogo = $email;

// Podajesz adres email na który chcesz otrzymać wiadomość
$dokogo = "pawkow@pawkow.ayz.pl";

// Podajesz tytuł jaki ma mieć ta wiadomość email
$tytul = "Formularz kontaktowy z sbmvistula.pl";

$naglowek = "";
$naglowek .= "Od:" . $odkogo . " \n";
$naglowek .= "Content-Type:text/plain;charset=utf-8";

// Przygotowujesz treść wiadomości
$wiadomosc = "";
$wiadomosc .= "Imie i nazwisko: " . $name . "\n";
$wiadomosc .= "Telefon: " . $tel . "\n";
$wiadomosc .= "Email: " . $email . "\n";
$wiadomosc .= "Wiadomość: " . $message . "\n";

// Wysyłamy wiadomość
$sukces = mail($dokogo, $tytul, $wiadomosc, $naglowek, '-f kowalik.paw@gmail.com');

// Przekierowywujemy na potwierdzenie
if ($sukces){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=sukces.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=blad.html\">";
}
?>