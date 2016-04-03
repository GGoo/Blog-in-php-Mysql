<?php
error_reporting(0);
//host, login, hasło
mysql_connect("localhost","root", "root") or die("Nie mogłam połączyć się z MySQL");

mysql_query("SET NAMES utf8");//kodowanie


//nazwa bazy danych
mysql_select_db("blog") or die("Błąd przy wybieraniu bazy danych");
?>