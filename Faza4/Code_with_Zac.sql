
CREATE TABLE IF NOT EXISTS Admin
( 
	IdRegistrovani     int  NOT NULL COLLATE utf8_unicode_ci NOT NULL,
	Radi_od            date  NULL COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY   (IdRegistrovani )
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS FAQ
( 
	IdFAQ              int  NOT NULL AUTO_INCREMENT,
	Pitanje            varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	Odgovor            varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY   (IdFAQ )
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS Komentari
( 
	IdKomentari        int  NOT NULL AUTO_INCREMENT,
	Tekst              varchar(20)  NULL ,
	DatumVreme           date  NULL ,
	IdRegistrovani     int ,
	IdKurs             int  NOT NULL ,
	PRIMARY KEY   (IdKomentari )
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS Kurs
( 
	IdKurs             int  NOT NULL AUTO_INCREMENT,
	Ime                varchar(20) ,
	Ocena              float  NULL ,
	Status             varchar(10) ,
	PRIMARY KEY   (IdKurs )
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE IF NOT EXISTS Materijali_na_cekanju
( 
	IdMaterijali_na_cekanju int  NOT NULL AUTO_INCREMENT,
	Tekst              varchar(255) ,
	IdOblast           int  NOT NULL ,
	PRIMARY KEY   (IdMaterijali_na_cekanju )
)
 ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS Oblast
( 
	IdOblast           int  NOT NULL AUTO_INCREMENT,
	Ime                varchar(20) ,
	Materijal          varchar(40)  NULL ,
	IdKurs             int  NOT NULL ,
	PRIMARY KEY   (IdOblast )
)
 ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS Ocena
( 
	IdOcena            int  NOT NULL AUTO_INCREMENT,
	Vrednost           float  NULL ,
	IdRegistrovani     int ,
	IdKurs             int  NOT NULL ,
	PRIMARY KEY   (IdOcena )
)
 ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS Odgovor
( 
	Tekst              varchar(255) ,
	Redni_br           integer  not NULL ,
	/*CONSTRAINT za_redni_br_1771392294*/
	/*	CHECK  ( Redni_br BETWEEN 1 AND 4 ),*/
	IdPitalica         int  NOT NULL ,
	PRIMARY KEY   (IdPitalica,Redni_br )
)
 ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS Odslusani
( 
	IdRegistrovani     int  NOT NULL ,
	IdKurs             int  NOT NULL ,
	PRIMARY KEY   (IdRegistrovani ,IdKurs )
)
 ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS Pitalica
( 
	IdPitalica         int  NOT NULL AUTO_INCREMENT,
	Status             varchar(10) ,
	Tekst             varchar(255) ,
	Tip                varchar(20)  NULL ,
	
	IdOblast           int  NOT NULL ,
	Tacan              integer  NULL ,
	PRIMARY KEY   (IdPitalica )
)
 ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS Profesor
( 
	IdRegistrovani     int  NOT NULL ,
	PRIMARY KEY   (IdRegistrovani )
)
 ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS Registrovani
( 
	IdRegistrovani     int  NOT NULL AUTO_INCREMENT,
	Username           varchar(20) ,
	Prezime            varchar(20)  NULL ,
	e_mail             varchar(20)  NULL ,
	Password           varchar(20) ,
	Ime                varchar(20) ,
	PRIMARY KEY   (IdRegistrovani )
)
 ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE Registrovani
	ADD UNIQUE (Username  )
;

ALTER TABLE Registrovani
	ADD UNIQUE (e_mail  )
;

CREATE TABLE IF NOT EXISTS Rezultat
( 
	IdRezultat         int  NOT NULL AUTO_INCREMENT,
	Status            varchar(10) ,
	Procenat_tacnih    float  NULL ,
	IdOblast           int  NOT NULL ,
	IdRegistrovani     int  NOT NULL ,
	PRIMARY KEY   (IdRezultat )
)
 ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS Slusa
( 
	IdRegistrovani     int  NOT NULL ,
	IdKurs             int  NOT NULL ,
	PRIMARY KEY   (IdRegistrovani ,IdKurs )
)
 ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS Student
( 
	IdRegistrovani     int  NOT NULL ,
	Najbolji           varchar(10) ,
	PRIMARY KEY   (IdRegistrovani )
)
 ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


ALTER TABLE Admin
	ADD CONSTRAINT R_1 FOREIGN KEY (IdRegistrovani) REFERENCES Registrovani(IdRegistrovani)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;


ALTER TABLE Komentari
	ADD CONSTRAINT R_14 FOREIGN KEY (IdRegistrovani) REFERENCES Registrovani(IdRegistrovani)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;



ALTER TABLE Komentari
	ADD CONSTRAINT R_16 FOREIGN KEY (IdKurs) REFERENCES Kurs(IdKurs)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;


ALTER TABLE Materijali_na_cekanju
	ADD CONSTRAINT R_25 FOREIGN KEY (IdOblast) REFERENCES Oblast(IdOblast)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;


ALTER TABLE Oblast
	ADD CONSTRAINT R_17 FOREIGN KEY (IdKurs) REFERENCES Kurs(IdKurs)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;


ALTER TABLE Ocena
	ADD CONSTRAINT R_11 FOREIGN KEY (IdRegistrovani) REFERENCES Registrovani(IdRegistrovani)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;

ALTER TABLE Ocena
	ADD CONSTRAINT R_13 FOREIGN KEY (IdKurs) REFERENCES Kurs(IdKurs)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;


ALTER TABLE Odgovor
	ADD CONSTRAINT R_26 FOREIGN KEY (IdPitalica) REFERENCES Pitalica(IdPitalica)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;


ALTER TABLE Odslusani
	ADD CONSTRAINT R_7 FOREIGN KEY (IdRegistrovani) REFERENCES Student(IdRegistrovani)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;

ALTER TABLE Odslusani
	ADD CONSTRAINT R_8 FOREIGN KEY (IdKurs) REFERENCES Kurs(IdKurs)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;


ALTER TABLE Pitalica
	ADD CONSTRAINT R_18 FOREIGN KEY (IdOblast) REFERENCES Oblast(IdOblast)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;


ALTER TABLE Profesor
	ADD CONSTRAINT R_3 FOREIGN KEY (IdRegistrovani) REFERENCES Registrovani(IdRegistrovani)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;


ALTER TABLE Rezultat
	ADD CONSTRAINT R_23 FOREIGN KEY (IdOblast) REFERENCES Oblast(IdOblast)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;

ALTER TABLE Rezultat
	ADD CONSTRAINT R_24 FOREIGN KEY (IdRegistrovani) REFERENCES Student(IdRegistrovani)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;


ALTER TABLE Slusa
	ADD CONSTRAINT R_5 FOREIGN KEY (IdRegistrovani) REFERENCES Student(IdRegistrovani)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;

ALTER TABLE Slusa
	ADD CONSTRAINT R_6 FOREIGN KEY (IdKurs) REFERENCES Kurs(IdKurs)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;


ALTER TABLE Student
	ADD CONSTRAINT R_2 FOREIGN KEY (IdRegistrovani) REFERENCES Registrovani(IdRegistrovani)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;

ALTER TABLE Kurs
	ADD  UNIQUE (Ime  )
;
