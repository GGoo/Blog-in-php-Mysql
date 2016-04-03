use Blog;

drop table if exists wpisy;
drop table if exists komentarze;



create table wpisy (id int auto_increment PRIMARY KEY,tytul varchar(100) NOT NULL,tresc text NOT NULL,data date NOT NULL);
create table komentarze (id int auto_increment PRIMARY KEY,id_wpis int(11) NOT NULL,imie varchar(40) NOT NULL ,mail varchar(40) NOT NULL,komentarz text NOT NULL,data date NOT NULL);


INSERT INTO wpisy (tytul, tresc, data) VALUES ('Podstawy Mysqla', ' MYSQL to wolnodostepny system zarzadzania relacyjnymi bazami danych.

MySQL rozwijany jest przez firme Oracle. Wczesniej przez   wiekszosc czasu jego tworzeniem zajmowala sie szwedzka firma MySQL AB. MySQL AB zostalaa kupiona 16 stycznia 2008 roku przez Sun Microsystems, a ten 27 stycznia 2010 roku przez Oracle. W miedzyczasie Monty Widenius stworzyl MariaDB – forka (alternatywna wersje) opartego na licencji GPL.','2015-01-09');

INSERT INTO wpisy (tytul, tresc, data) VALUES ('Podstawy JavaScript', 'JavaScript, JS – skryptowy jezyk programowania, stworzony przez firme Netscape, najczesciej stosowany na stronach internetowych. Pod koniec lat 90. XX wieku organizacja ECMA wydala na podstawie JavaScriptu standard jezyka skryptowego o nazwie ECMAScript. Glownym autorem JavaScriptu jest Brendan Eich','2015-01-10');



INSERT INTO wpisy (tytul, tresc, data) VALUES ('java', 'java proba a co to takiego?', '2014-12-20');

INSERT INTO komentarze (id_wpis, imie,mail, komentarz, data) values (1, 'Gosia', 'piekarska@live.com', 'bardzo ciekawy artykul. dziekuje bardzo. Bede tutaj wracac ', '2014-12-29');
INSERT INTO komentarze (id_wpis, imie,mail, komentarz, data) values (1, 'Ola', 'ola@live.com', 'Dziekuje bardzo.', '2014-12-29');
INSERT INTO komentarze (id_wpis, imie,mail, komentarz, data) values (2, 'Tomasz', 'tomasz@live.com', 'Bardzo malo informacji. Zero konkretow', '2014-12-29');


ALTER TABLE `komentarze` ADD CONSTRAINT `kl_wpis_id` FOREIGN KEY (`id_wpis`) REFERENCES `wpisy` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;



