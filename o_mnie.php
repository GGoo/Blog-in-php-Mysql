<?php
ob_start();//buforowanie
?>
<!DOCTYPE HTML>
<html>

	<head>
		
		<!-- Deklaracja kodowania dokumentu -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Content-Language" content="pl">
		
		<!-- Słowa kluczowe -->
		<meta name="keywords" content="web, Piekarska, M">
		<!-- Opis strony -->
		<meta name="description" content="O mnie">
		
		<!-- CSS -->
		
			<link rel="stylesheet" href="plik.css" type="text/css" media="screen">		

		
		<!-- Tytuł strony -->
		<title>O mnie</title>
	
	</head>
	
	<!-- ################ Początek sekcji body ################ -->
	
	<body>
	
		<!-- ################ TOP ################ -->
	
		<div id="TOP">
		
			<div id="logo">
			
				<img src="images/mp.jpeg" width="85" height="54" alt="MP">
				
				<span>M Piekarska</span>
				<span>Moja pierwsza strona webowa</span>
			
			</div>
			<!-- kontakt mail w prawym gornym rogu -->
			<div id="fast_contact">
			
				<span>kontakt</span>
				<span><a href="mailto:s12375@pjwstk.edu.pl">s12375@pjwstk.edu.pl</a></span>
			
		</div>
		
		</div> <!-- Koniec DIV TOP -->
		
		<!-- ################ MENU ################ -->
		
		<div id="MENU">
		
			<a href="index.php" title="Strona główna">Strona główna</a>
			<a href="galeria.php" title="galeria">Galeria</a>
			<a href="blog.php" title="blog">Blog</a>
			<a href="kontakt.php" title="Kontakt">Kontakt</a>
		
		</div> <!-- Koniec DIV Menu -->
			
			
		<!-- ################ O  MNIE ################ -->
		
		<center>
		<img src="images/images.jpeg" width="960" height="320" alt="web">
		
			<h1>O mnie</h1>
					
		</center>
		
		<div class="box_2_column">
		
			<div class="bigger">
		
				<h2>Prawda i tylko prawda</h2>
				
				<p>Nazywam się Malgorzata Piekarska. Z zawodu Ekonomistka, mieszkajaca w roznych miejscach na swiecie.Wladajace biegle kilkoma jezykami. Teraz zycie rzucilo mnie wraz z rodzina do Hagi, gdzie pracuje w szkole brytyjskiej.</p>
				<p> Informatyka zawsze byla mi bliska sercu i zawsze chcialam zglebic jej temat. Uwazam, ze nalezy czegos sprobowac i najwyzej zalowac niz nie probowac i potem cale zycie zalowac. Zachcialo mi sie zostac inzynierem, dlatego tez postanowilam po bardzo dlugiej przerwie, i po odchowaniu corki, wrocic na studia. To b. duze wyzwanie dla mnie, ale b.ciekawe, ktorego nie zaluje.</p>
				<p> Do tej pory na studiach informatycznych poznalam podstawy c++ i javy. Jednak  programy do web dev sa tym "czyms" co prawia mi radosc.</p> 
				
				
				<p> W ramach projektu na zaliczenie z projektowania  pracuje w :
				<ul>		
					<li>HTML</li>
					<li>CSS</li>
					<li>PHP</li>
					<li>MySql</li>
				
				</ul>
				
				<p>Jeszcze bardzo dlugo i ciezka droga przede mne, ale jako pracowity czlowiek "beda jeszcze ze mnie ludzie" jesli chodzi o dzialke jaka jest IT, bo w innych mysle, a w zasadzie jestem pewna - juz jestem.</p>
				<br>
				
	<p> <strong>Dziekuje za odwiedzenie mojej strony i zapraszam ponownie.</strong></p>
			
			</div>
		
			<div class="smaller">
			
				<br>
				<br>
				<br>
				<br>
				
				
				<img src="images/ja.jpg" width="249" height="147" alt="ja">
				<br>
	 			<p>ciekawa swiata<br>
	 			<br>
	 			
	 			<p> lubiaca sie uczyc nowych rzeczy</p>
	 			<br>
	 			
	 			<p> bardzo pracowita</p>
	 			<br>
	 			<p>ambitna </p>
	 			<br>
	 			<p> lubiaca ludzi</p>
	 			<br>
	 		    <p> kochajaca fotografie i pare innych rzeczy</p>
	 		    <br>
	 		  					
			</div> 
			
		</div><!-- Koniec DIV box_2_column -->
		
				
		<!-- ################ FOOTER ################ -->
		
		 <div id="FOOTER"> <!-- na dole strony strona glowna, o mnie ...c-->
		
		<!--- BEGIN FOOTER -->
	 <div id="footer"> 

			<a href="index.php" title="Strona główna">Strona główna</a>
			<a href="o_mnie.php" title="O  mnie ">O mnie</a>
			<a href="galeria.php" title="Galeria">Galeria</a>		
			<a href="blog.php" title="Blog">Blog</a>
			<a href="kontakt.php" title="Kontakt ">Kontakt</a>
			
			<hr />
			<small>&copy; Copyright 2015 M Piekarska</small><br />
			
			<?php
	
				include ('licznik.php');
				
			?>			
		
		</div> <!-- Koniec DIV FOOTER -->
	
	</body>

</html>		
<?php
ob_end_flush();
?>