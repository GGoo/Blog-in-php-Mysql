<!DOCTYPE HTML PUBLIC>

<html>

	<head>
		
		<!-- Deklaracja kodowania dokumentu -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Content-Language" content="pl">
		
		<!-- Słowa kluczowe -->
		<meta name="keywords" content="m,piekarska, strona www">
		<!-- Opis strony -->
		<meta name="description" content="Moja pierwsza strona internetowa">
		<link rel="stylesheet" href="plik.css" type="text/css" media="screen">		
			
			<!-- Tytuł strony -->
		<title>Kontakt z blogerka</title>
	
	</head>
	
	<!-- ################ Początek sekcji body ################ -->
	
	<body>
	
		<!-- ################ TOP ################ -->
	
		<div id="TOP">
		
			<div id="logo">
			
				<img src="images/mp.jpeg" width="85" height="54" alt="Web">				
				<span>M Piekarska</span>
				<span> moja pierwsza strona webowa </span>
				
			
			</div>
			
			<div id="fast_contact">
			
				<span>kontakt</span>
				<span><a href="mailto:s12375@szuflandia.pjwstk.edu.pl">s12375@szuflandia.pjwstk.edu.pl</a></span>
			
		</div>
				
		</div> <!-- Koniec DIV TOP -->
		
		<!-- ################ MENU ################ -->
		
		<div id="MENU">
		
			<a href="index.php" title="Strona główna">Strona główna</a>
			<a href="o_mnie.php" title="O mnie ">O mnie</a>
			<a href="galeria.php" title="Galeria">Galeria</a>
			<a href="blog.php" title="blog">Blog</a>			
					
		</div> 
		
		
		<div id="slider_index">
	
	
	<center><img src="images/IT.jpeg" width="960" height="320" alt="kontakt"></center>
	
					</div> <!-- Koniec DIV Menu -->
		
				<!-- ################ KONTAKT ################ -->
		
		<div class="box_2_column"> <!-- 2 boxy na stronie w jednej formularz a w drugim mapa -->
		
			<div class="bigger">
			
		<br>
				<h2>Formularz kontaktowy</h2>
				<br>
				<br>
				<br>
				<form method="POST" action="skrypt.php"><!--formularz-->
				
					<table>	
				<tr>
					
						<td>
						<label for="name">Imię i nazwisko</label>
						</td><td>
						<input type="text" name="name" value=""><br><br>
						</td>
						
					</tr>	
				<tr>
				<td>Wiek:</td>
				<td>
				<select name="wiek" required>
				<option value="Mniej niz 18">Mniej niż 18</option>
				<option value="Wiecej niz 18">Więcej niz 18</option>
			</select><br><br>
		</td>
	</tr>
	
	<tr>
	<td>
								
						Adres e-mail
						</td>
						<td>
						<input type="email" name="email" value=""><br><br>	
</td></tr><tr><td>						
						<label for="telephone">Telefon</label>
						</td><td>
						<input type="text" name="telephone" value=""><br><br>
						</td></tr><tr><td>
						<label for="message">Wiadomość</label>
						</td><td>
						<textarea name="message" rows="8" cols="60"></textarea><br><br>
						</td></tr>
						<input type="hidden" name="wysylka">
						<tr><td></td><td>
						<input type="submit" name="submit">
						
		</td></tr>
						
					</table>
				
				</form>
			
			</div>
		
			<div class="smaller"> <!--mniejsza ramka -->
		<br>
		
				
				<h2>Napisz</h2>
				
				
				E-Mail
				<strong><a href="mailto:s12375@szuflandia.pjwstk.edu.pl">s12375@szuflandia.pjwstk.edu.pl</a></strong>
			
				</p>
				
				<img src="images/kontakt.jpeg" width="240" height="240" alt="kontakt">
			
			</div> 
			
		</div><!-- Koniec DIV box_2_column -->
		
		<!-- ################ FOOTER ################ -->
		
		<div id="FOOTER">
		
			<a href="index.php" title="Strona główna ">Strona główna</a>
			<a href="o_mnie.php" title="O mnie">O mnie</a>
			<a href="blog.php" title=" Blog">blog</a>			
			<a href="galeria.php" title="Galeria">galeria</a>
			
		
		</div> <!-- Koniec DIV FOOTER -->
		
		
		
		<?php 
		
/* Ustawienia formularza kontaktowego */

$adres_odbiorcy = 's12375@pjwstk.edu.pl'; 	



/* Ustawienia wymaganych pól */


$valid['imie'] = 2 ; 	// imie: 0 - oznacza pole nieobowiązkowe, inna liczba minimalną ilość znaków jakie musi wpisać użytkownik
$valid['mail'] = 1 ; 	// e-mail: 0 - oznacza pole nieobowiązkowe, 1 - pole wymagane
$valid['tresc'] = 5 ; 	// Treść: 0 - oznacza pole nieobowiązkowe, inna liczba minimalną ilość znaków jakie musi wpisać użytkownik



/* Komunikaty */

$komunikat['sukces'] = 'Dziękujemy. Twoja wiadomość została wysłana.'; 		//Wiadomość po udanym wysłaniu formularza
$komunikat['blad'] = 'Wiadomość <b>NIE</b> została wysłana. Popraw poniższe błędy.'; 	//Wiadomość przy błędzie w sprawdzaniu danych, błędy zostaną wymienione poniżej
//$komunikat['imie'] = 'Nick musi mieć min. 2 znaki.'; 	//Wpisz właściwą ilość znaków jeśli pole wymagane
//$komunikat['mail'] = 'Podaj poprawny adres e-mail.'; 	//Wiadomość po błędnym wpisaniu adresu e-mail
//$komunikat['tresc'] = 'Treść musi mieć min. 5 znaków'; 	//Wpisz właściwą ilość znaków jeśli pole wymagane
$komunikat['fail'] = 'Przepraszamy wystąpił chwilowy błąd. Spróbuj ponownie później'; 	//W przypadku nieudanego wyslania wiadomości np. błędu serwera

?>		
		
	
	</body>

</html>






