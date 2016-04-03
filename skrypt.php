<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>

<?php

if(isset($_POST['wysylka'])) {

$name = $_POST['name'];
$mail = $_POST['email'];
$message = $_POST['message'];
$telefon = $_POST['telephone'];
$wiek = $_POST['wiek'];

//$naglowki //
$naglowki = "MIME-Version: 1.0\r\n";//typ wysylania maila
$naglowki .= "Content-type: text/html; charset=utf-8\r\n";
$naglowki .= "From: $name <$mail>\r\n";//

$message .= "<br><br>Wiek: $wiek<br><br>Telefon: $telefon";

mail("<s12375@pjwstk.edu.pl>", "Z formularza kontaktowego", $message, $naglowki);

	echo "Mail wysłano!";

} else {

}
?>


</body>
</html>
