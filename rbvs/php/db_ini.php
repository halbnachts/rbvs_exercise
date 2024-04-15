<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','recruitmentsystem');//datenbankname
define('MYPDO',new PDO('mysql:host='.HOST.';charset=utf8' , USER , PASS));
MYPDO->exec('CREATE DATABASE IF NOT EXISTS '.DB);//anlegen einer db
MYPDO->exec('USE '.DB);//verbinden mit db
MYPDO->exec('CREATE TABLE IF NOT EXISTS jobangebote(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    abteilung_id INT(11),
    jobtitel VARCHAR(255) NOT NULL,
    beschreibung TEXT(255) NOT NULL
    )');
MYPDO->exec('CREATE TABLE bewerbung (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    jobangebot_id INT(11),
    nachname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    status BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (jobangebot_id)
        REFERENCES jobangebote (id)
    )');

?>