CREATE DATABASE Dlan;
USE Dlan;
CREATE TABLE kont_Sporocila
(
    id int AUTO_INCREMENT PRIMARY KEY,
    imePriimek varchar(255),
    telStevilka varchar(50),
    podjetje varchar(255),
    vrstaDela varchar(255),
    sporocilo varchar(255)
);
CREATE TABLE podjetje
(
	ID_podjetja int AUTO_INCREMENT PRIMARY KEY,
    ime_podjetja varchar(255),
    sedez_podjetja varchar(255)
);
CREATE TABLE ponujena_dela
(
	ID_dela int AUTO_INCREMENT PRIMARY KEY,
    vrsta_dela varchar(255)
);
CREATE TABLE delavni_cas
(
    ID_casa int AUTO_INCREMENT PRIMARY KEY,
    Dan varchar(50),
    start TIME,
    end TIME
);
-----------------------------------------------------------------
INSERT INTO podjetje (ime_podjetja,sedez_podjetja)
VALUES 
("Marbung company","Greenwiška cesta 10"),
("Henkel Maribor","Industrijska ulica 23"),
("Lumil","Ulica Vita Kraigherja 5"),
("Microgramm","Betnavska cesta 21"),
("Nigrad","Zagrebška cesta 30");
-----------------------------------------------------------------  
INSERT INTO ponujena_dela (vrsta_dela)
VALUES
("poprava strojne opreme"),
("nameščanje operacijskih sistemov"),
("odstranjevanje virusov"),
("oblikovanje spletnih strani"),
("izdelava podatkovnih baz");
---------------------------------------------
INSERT INTO delavni_cas (Dan, start, end)
VALUES 
("Ponedeljek","08:00","16:00"),
("Torek","08:00","16:00"),
("Sreda","08:00","16:00"),
("Četrtek","08:00","16:00"),
("Petek","09:00","16:00"),
("Sobota","12:00","14:00"),
("Nedelja","12:00","13:00");

CREATE DATABASE uporabniki;
USE uporabniki;
CREATE table uporabniki(id int UNIQUE AUTO_INCREMENT, mail varchar(50), geslo varchar(50), ime varchar(50), priimek varchar(50));
INSERT INTO uporabniki(mail, geslo, ime, priimek) VALUES("admin","admin","admin","admin");