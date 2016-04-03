<?php
ob_start();
error_reporting(0);
?>

<!DOCTYPE HTML html>
<html>
	<head>
		
		<!-- Deklaracja kodowania dokumentu -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Content-Language" content="pl">
		
		<!-- Słowa kluczowe -->
		<meta name="keywords" content="projekt, zaliczenie, php">
		<!-- Opis strony -->
		<meta name="description" content="Projekt zaliczeniowy PHP">
		
		
		<!-- CSS -->
		
		<link rel="stylesheet" href="plik.css" type="text/css" media="screen">
		
				
		<!-- Tytuł strony -->
		<title>Projekt na zaliczenie </title>
	
	</head>
	
	<!-- ################ Początek sekcji body ################ -->
	
	<body>
	
		<!-- ################ TOP ################ -->
	
		<div id="TOP">
		
			<div id="logo">
			
				<img src="images/mp.jpeg" width="85" height="54" alt="Web">
				
				<span>M Piekarska</span>
				<span>moja pierwsza strona webowa</span>
			
			</div>
			
			<div id="fast_contact">
			
				<span>kontakt</span>
				<span><a href="mailto:s12375@pjwstk.edu.pl">s12375@pjwstk.edu.pl</a></span>
			
		</div>
		
		</div> <!-- Koniec DIV TOP -->
				
				
		<!-- ################ MENU ################ -->
		
		<div id="MENU">
		
			<a href="index.php" title="Strona główna |Projekt na zaliczenie PHP">Strona główna</a>
			<a href="o_mnie.php" title="O mnie">O mnie</a>
			<a href="galeria.php" title="Galeria">Galeria</a>	
			<a href="blog.php" title="Blog ">Blog</a>
			<a href="kontakt.php" title="Kontakt">Kontakt</a>
		
		</div> <!-- Koniec DIV Menu -->
		
		<!-- ################ slider ################ -->
	
		<center>
		<img src="images/images-4.jpeg" width="960" height="320" alt="web">
		
			<h1>Rozwazania na temat swiata IT</h1>
			
			</center>
		
				
	
	
	
	
	<!-- ################ OPINIE_KLIENTOW ################ -->
		
		<div id="references">
		
			<span>Ponad 100 codziennych wizyt</span>
			<span>Co mowia o nas inni</span>
			
			<blockquote>
				<p> Regularnie tutaj zagladam. Informacje podane sa w prosty i bardzo zrozumialy sposob.Dopiero zaglebiam temat, wiec warto tutaj byc.Codziennie. 
				Polecam w 100%  - <strong>Aleks Kowalski</strong></p>
				
			</blockquote>
		
		</div> <!-- Koniec DIV references -->


<div class="box_3_column">
		
			<div>
			<?php
			require_once "mysql.php";//polaczenie z baza 
			
				$data = date("Y-m-d", time()-60*60*24);
				//echo $data;
				$query = "SELECT * FROM wpisy where data = '$data'";
				$result = mysql_query($query);
				$row = mysql_fetch_assoc($result);//zapisuje wiersz wyniku w tab. asocj, zwraca pobrany wiersz
				$ile = mysql_num_rows($result);
			?>
			
				<h2>Wczoraj na blogu…</h2>
				
				<img src="images/images.png" width="91" height="91" alt="mysql">
				
				<?php
				if($ile>0) {
				?>
				<p><?php echo $row['tresc']; ?></p>
				
				<a href="blog.php?art=<?php echo $row['id']; ?>" title="Dowiedz się więcej">dowiedz się więcej</a>
				<?php
				} else {
					echo "Brak wpisu...";
				}
				?>
			
			</div>
			
			<div>
			
			<?php
				$data2 = date("Y-m-d");
				//echo $data2;
				$query2 = "SELECT * FROM wpisy WHERE data = '$data2'";
				$result2 =@mysql_query($query2);
				$row2 = @mysql_fetch_assoc($result2);
				$ile2 = @mysql_num_rows($result2);
			?>
				<h2>Dzisiaj na blogu...</h2>
				
				<img src="images/java.jpeg" width="91" height="91" alt="java">
				
				<?php
				if($ile2>0) {
				?>
				<p><?php echo $row2['tresc']; ?></p>
				
				<a href="blog.php?art=<?php echo $row2['id']; ?>" title="Dowiedz się więcej">dowiedz się więcej</a>
				<?php
				} else {
					echo "Brak wpisu...";
				}
				?>
			</div>
		
			<div>
			
				<h2>Jutro na blogu...</h2>
				
				<img src="images/Unknown1.jpeg" width="132" height="132" alt="php">
				
				<p>Podstawy MYSQL i JavyScript juz mamy. Jutro PHP</p>
				
							
			</div>
		
		</div>
		</div>
			
		<!-- ################ FOOTER ################ -->
		
		 <div id="FOOTER"> <!--dol strony -->
		
		<!--- BEGIN FOOTER -->

			<a href="o_mnie.php" title="O  mnie">O mnie</a>
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
ob_end_flush();//koniec ob_start()
?>