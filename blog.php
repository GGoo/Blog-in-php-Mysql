
<?php
error_reporting(0);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

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
		
		<link rel="shortcut icon" href="">
		
		<!-- Tytuł strony -->
		<title>Blog</title>
	
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
			
		
		
		</div> <!-- Koniec DIV TOP -->
		
		</div>				
				
		<!-- ################ MENU ################ -->
		
		<div id="MENU">
		
			<a href="index.php" title="Strona glowna |Projekt na zaliczenie PHP">Strona główna</a>
			<a href="o_mnie.php" title="O mnie">O mnie</a>
			<a href="galeria.php" title="Galeria">Galeria</a>	
			<a href="blog.php" title="Blog ">Blog</a>
			<a href="kontakt.php" title="Kontakt">Kontakt</a>
		
		</div> <!-- Koniec DIV Menu -->
		
		<!-- ################ slider ################ -->
	
		<center><img src="images/blog.jpg" width="960" height="320" alt="IT"></center>
		<br>
		<br>
<br>

			<center><h1>Wszystko o stronach wwww oczami poczatkujacej webdeveloperki</h1></center>
	

				<br>
				<br>
				<br>
	

<?php
error_reporting(E_ALL);

require_once "mysql.php";

$data = date("Y-m-d");
?>


<h2> FORMULARZ dodawania wpisu</h2>
<form action="blog.php" method="POST">

Tytul: <strong><input type="text" name="tytul"  size="70"></strong>
<br>
<br>

Tresc: <textarea  name="tresc" cols="50" rows="10"> </textarea>
<br>
<br>

<input type="submit" value="dodaj" >

<br>
<br>


</form>


<?php

if(isset($_POST['tresc']) && isset($_POST['tytul']))
{

$tytul=$_POST['tytul'];
$tresc=$_POST['tresc'];
	


@mysql_query("INSERT INTO wpisy(tytul, tresc, data) VALUES('$tytul', '$tresc', '$data')");
  
  //@wygluszanie bledow  
  if (@mysql_affected_rows() > 0) {// sprawdza i zwraca zarazem liczbe zmodyfikowanych wierszy z wyzszej operacji

    echo "<br/><br/><b>DODANO!</b> <br/><br/>";
  } else {
    echo "<br/><br/><b>NIESTETY! Nie można było dodać...</b><br/><br/>";
  }
  
  
  
}else{
	
	echo "<br>";
	echo "<br>";
	
}
//sprawdza czy id jest ustawione jesli nie jest to ustawia na 0 a jesli jest to pobiera wartosc;
 if(isset($_GET['id'])){
   $x=$_GET['id'];
} else {
   $x=0;
}

if(isset($_GET['art'])) {// art id aktualnej strony
$art = $_GET['art'];

$query ="SELECT * FROM wpisy where id = '$art'"; //id danego wpisu 

} else {

//wybieranie wpisow * - wszystkie kolumny, limituje zapytania 1 - interesuje nas 1 wpis, x od ktorego zaczynamy 
$query ="SELECT * FROM wpisy limit $x, 1";//ten select pobiera po kolei
}


$result = @mysql_query($query);//wykonanie
$ilePobrano = @mysql_num_rows($result);// do 1 najbllizszego mysqlquery - zwraca ile elementow zwraca

if ($ilePobrano>0)
{
	
	while ($row = @mysql_fetch_assoc($result)) //pobiera wszystkie elementy ktore wzroci zapytanie result
	 {
	
		echo "{$row['tytul']}<br><br>";//wyswietlanie tytulu w {} pobiera po kolumnach tytuly
		echo "{$row['tresc']}<br><br>";// pobiera po kolumnach tresc
		echo $row['data'];
		echo "<br>";
	}


}
else
{
		
echo "<strong> Brak wpisu o takim id</strong>";
}
?>


&nbsp;&nbsp;&nbsp;
<br><br><br>

<?php


if(isset($_GET['id']))	
{
	
	if ($_GET['id']<=0)
	{
		echo "<< poprzedni";
	} else{
		$y=$_GET['id'] -1;//poprzednie id
	
		echo "<a href=\"blog.php?id=$y\"><< poprzedni</a>";
	}

}
else {

}	
	

?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="blog.php?id=<?php if(isset($_GET['id'])) { echo $_GET['id']+1; } else { echo "1"; }?>">nastepny >></a>
 


<?php

$result = @mysql_query($query);//wykonanie
$row = @mysql_fetch_assoc($result);
	//id  rozne od ""
	if ($row['id']!=""){
		
		
		echo "<br><br><a href=\"blog.php?id={$row['id']}&akcja=usun\" onclick=\"return confirm('Na pewno?');\">
		<strong><font color=red>Usuń ten wpis<br></font></strong></a>";
	}
	

if(isset($_GET['akcja'])){// sprawdza czy akcja istnieje
	if ($_GET['akcja']=="usun")// sprawdzy czy usunac
	{
		echo " ";
		
		if(isset($_GET['id']))
		{
   			$x=$_GET['id'];
		} 
		else 
		{
  		 $x=0;
		}
		$usuwanie="DELETE FROM  wpisy WHERE id= $x";	
		$wynik=	mysql_query($usuwanie);
		
		if (@mysql_affected_rows() > 0)//@ wyglusza bledy!
		{

    		echo "<br/><br/><b>USUNIĘTO!</b><br/><br/>";
  		} else {
    		echo "<br/><br/><NIESTETY! Nie można było usunąć...</b></font><br/><br/>";
  		}
	} else {
			echo "nie klieknieto usun";
	}
			
	
	} else {
			//echo "brak akcji";
}


if(isset($_GET['id']))	//ponownie id pobieramy
{
	$y=$_GET['id'];
	
}
else 
{
	$y=0;
}

?>
<br>
<br>
<br>
<hr>

<!--komentarz ktory mozna dodac -->
<?php

$query2 ="SELECT * FROM wpisy limit $y, 1";
$result2 = @mysql_query($query2);
$row2 = @mysql_fetch_assoc($result2);//wynik w tabl asocj

?>

<div style="background:#fbfbfb;">

<h3> <strong>KOMENTARZ </strong></h3>
<form action="blog.php?id=<?php echo $y; ?>&real=<?php echo $row2['id']; ?>" method="POST">

<strong>Imie </strong>(wymagane): <input type="text" name="imie"  size="30">

<br>


<strong> Email</strong>(wymagane): <input type="email" name="mail" required placeholder="Wpisz e-mail">

<br>

Komentarz: <textarea  name="komentarz" cols="20" rows="5"> </textarea>
<br>
<br>

<input type="submit" value="dodaj">

<br>
<br>


</form>

<hr>

</div>

<?php

if(isset($_POST['imie']) && isset($_POST['mail']) && isset($_POST['komentarz']))

{
	
$imie=$_POST['imie'];
$mail=$_POST['mail'];
$komentarz=$_POST['komentarz'];

if(isset($_GET['id']))	
{
	$y=$_GET['id'];
	
}
else 
{
	$y=0;
}


$z = $_GET['real'];//$z pobiera realne id z mysqla
$data=date("Y-m-d");

mysql_query("INSERT INTO komentarze(id_wpis,imie, mail, komentarz, data) VALUES('$z' , '$imie' , '$mail', '$komentarz', '$data')");
  
  //@wygluszanie bledow nie wyswietli sie on, warto zeby byl w bazie danych
  if (mysql_affected_rows() > 0) {// zwraca liczbe zmodyfikowanych wierszy 

   
    echo "<br/><b>DODANO!<br/><br/>";
  } else {
    echo "<br/><br/><b>NIESTETY! Nie można było dodać...</b><br/><br/>";
  }

  
}
   
   
else
{
	//echo "nie wyslano";
	echo "<br>";
	echo "<br>";
	
}


$query3 ="SELECT * FROM komentarze where id_wpis={$row2['id']}";//ten select pobiera po kolei
$result3 = @mysql_query($query3);//wykonanie
$ilePobrano3 = @mysql_num_rows($result3);// do 1 najbllizszego mysqlquery

if ($ilePobrano3>0)
{
	
		while ($row3 = @mysql_fetch_assoc($result3))
	 {
	
		echo "<p style=\"background: #fbfbfb  ;\">";
		echo "{$row3['imie']}<br><br>";//wyswietlanie tytulu w {} pobiera po kolumnach tytuly
		echo "{$row3['komentarz']}<br><br>";// pobiera po kolumnach tresc
		echo $row3['data'];
		echo "<br>";
		echo "</p>";
	}

}
else 
{
	echo "<hr>Brak komentarzy dla tego wpisu<br><br><hr>";
}

?>

		


					
		<!-- ################ FOOTER ################ -->
		
		 <div id="FOOTER"> <!-- na dole strony o mnie, gal, etc-->
		
		<!--- BEGIN FOOTER -->
	 <div id="footer"> 



		<!--	<p class="company"> 2014&copy;</p> 	-->
		<a href="strona glowna.php" title="strona glowna">O mnie</a>		
			<a href="o_mnie.php" title="O  mnie ">O mnie</a>
			<a href="galeria.php" title="Galeria">Galeria</a>		
			<a href="kontakt.php" title="Kontakt ">Kontakt</a>
			
			<hr />
			<small>&copy; Copyright 2015 M Piekarska</small><br />
			
			<?php
	
				include ('licznik.php');
				
			?>			
		
		</div> <!-- Koniec DIV FOOTER -->
	
	</body>

</html>			

