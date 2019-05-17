INSERT INTO `registrovani`(`Username`, `Prezime`, `e_mail`, `Password`, `Ime`) VALUES ('sara97','Milovanovic','sara@gmail.com','sara123','Sara');
INSERT INTO `registrovani`(`Username`, `Prezime`, `e_mail`, `Password`, `Ime`) VALUES ('iva97','Veljkovic','iva@gmail.com','iva123','Iva');
INSERT INTO `registrovani`(`Username`, `Prezime`, `e_mail`, `Password`, `Ime`) VALUES ('nedeljko97','Jokic','ned@gmail.com','ned321','Ned');
INSERT INTO `registrovani`(`Username`, `Prezime`, `e_mail`, `Password`, `Ime`) VALUES ('pera','Peric','pera@gmail.com','pera123','Pera');
INSERT INTO `registrovani`(`Username`, `Prezime`, `e_mail`, `Password`, `Ime`) VALUES ('zika','Zikic','zika@gmail.com','zika123','Zika');
INSERT INTO `registrovani`(`Username`, `Prezime`, `e_mail`, `Password`, `Ime`) VALUES ('mika97','Mikic','mika@gmail.com','mika123','Mika');
INSERT INTO `registrovani`(`Username`, `Prezime`, `e_mail`, `Password`, `Ime`) VALUES ('tasha','Sekularac','tasha@gmail.com','tasha123','Tasha');
INSERT INTO `registrovani`(`Username`, `Prezime`, `e_mail`, `Password`, `Ime`) VALUES ('drazen','Draskovic','drazen@gmail.com','drazen123','Drazen');

INSERT INTO `admin`(`IdRegistrovani`, `Radi_od`) VALUES (1,'2019-05-05');
INSERT INTO `admin`(`IdRegistrovani`, `Radi_od`) VALUES (2,'2019-05-05');
INSERT INTO `admin`(`IdRegistrovani`, `Radi_od`) VALUES (3,'2019-05-05');

INSERT INTO `profesor`(`IdRegistrovani`) VALUES (7);
INSERT INTO `profesor`(`IdRegistrovani`) VALUES (8);

INSERT INTO `student`(`IdRegistrovani`, `Najbolji`) VALUES ('4','da');
INSERT INTO `student`(`IdRegistrovani`, `Najbolji`) VALUES ('5','ne');
INSERT INTO `student`(`IdRegistrovani`, `Najbolji`) VALUES ('6','ne');

INSERT INTO `kurs`(`Ime`, `Ocena`, `Status`) VALUES ('C','0','dostupan');
INSERT INTO `kurs`(`Ime`, `Ocena`, `Status`) VALUES ('Java','0','nedostupan');

INSERT INTO `faq`(`Pitanje`, `Odgovor`) VALUES ('Kako da Vas kontaktiramo za dodatna pitanja?','Mozete nas kontaktirati pute naseg maila: code_with_zac@gmail.com');
INSERT INTO `faq`(`Pitanje`, `Odgovor`) VALUES ('Kada ce biti dostupni novi kursevi?','Nas tim radi na unapredjenju sajta i dodavanju novih kurseva i pitalica');

INSERT INTO `ocena`(`Vrednost`, `IdRegistrovani`, `IdKurs`) VALUES ('5','7','1');
INSERT INTO `ocena`(`Vrednost`, `IdRegistrovani`, `IdKurs`) VALUES ('2','1','1');
INSERT INTO `ocena`(`Vrednost`, `IdRegistrovani`, `IdKurs`) VALUES ('4','2','1');

INSERT INTO `slusa`(`IdRegistrovani`, `IdKurs`) VALUES ('4','1');
INSERT INTO `slusa`(`IdRegistrovani`, `IdKurs`) VALUES ('5','1');
INSERT INTO `slusa`(`IdRegistrovani`, `IdKurs`) VALUES ('6','1');

INSERT INTO `komentari`( `Tekst`, `DatumVreme`, `IdRegistrovani`, `IdKurs`) VALUES ('Top kurs!','2019-06-06','4','1');
INSERT INTO `komentari`( `Tekst`, `DatumVreme`, `IdRegistrovani`, `IdKurs`) VALUES ('Zlata vredan!','2019-05-06','7','1');

INSERT INTO `oblast`( `Ime`, `Materijal`, `IdKurs`) VALUES ('Pokazivaci','**Pokazivaci materijali**','1');

INSERT INTO `pitalica`(`Status`, `Tekst`, `Tip`, `IdOblast`, `Tacan`) VALUES ('aktivna','2+3=?','radio','1','1');

INSERT INTO `odgovor`(`Tekst`, `Redni_br`, `IdPitalica`) VALUES ('=5','1','1');
INSERT INTO `odgovor`(`Tekst`, `Redni_br`, `IdPitalica`) VALUES ('=4','2','1');
INSERT INTO `odgovor`(`Tekst`, `Redni_br`, `IdPitalica`) VALUES ('=6','3','1');
INSERT INTO `odgovor`(`Tekst`, `Redni_br`, `IdPitalica`) VALUES ('=2','4','1');