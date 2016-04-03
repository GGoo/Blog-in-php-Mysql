<?php
	
	$nazwa_pliku = 'liczba_odwiedzin.txt';
	$licznik = file_get_contents($nazwa_pliku);//zwraca plik jako ciag znakow

	echo "<small>Liczba odwiedzin na stronie to: $licznik</small>";

	if(!isset($_COOKIE['visited'])) {
		$licznik++;
		file_put_contents($nazwa_pliku, $licznik);
		setcookie("visited");
	}
?>



