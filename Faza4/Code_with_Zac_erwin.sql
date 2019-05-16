
CREATE TABLE [Admin]
( 
	[IdRegistrovani]     [Id]  NOT NULL ,
	[Radi_od]            datetime  NULL ,
	CONSTRAINT [XPKAdmin] PRIMARY KEY  CLUSTERED ([IdRegistrovani] ASC)
)
go

CREATE TABLE [FAQ]
( 
	[IdFAQ]              [Id]  NOT NULL ,
	[Pitanje]            [Tekst] ,
	[Odgovor]            [Tekst] ,
	CONSTRAINT [XPKFAQ] PRIMARY KEY  CLUSTERED ([IdFAQ] ASC)
)
go

CREATE TABLE [Komentari]
( 
	[IdKomentari]        [Id]  NOT NULL ,
	[Tekst]              varchar(20)  NULL ,
	[Datetime]           datetime  NULL ,
	[IdRegistrovani]     [Id] ,
	[IdKurs]             [Id]  NOT NULL ,
	CONSTRAINT [XPKKomentari] PRIMARY KEY  CLUSTERED ([IdKomentari] ASC)
)
go

CREATE TABLE [Kurs]
( 
	[IdKurs]             [Id]  NOT NULL ,
	[Ime]                [Ime] ,
	[Ocena]              float  NULL ,
	[Status]             [Status] ,
	CONSTRAINT [XPKKurs] PRIMARY KEY  CLUSTERED ([IdKurs] ASC)
)
go

ALTER TABLE [Kurs]
	ADD CONSTRAINT [XIme] UNIQUE ([Ime]  ASC)
go

CREATE TABLE [Materijali_na_cekanju]
( 
	[IdMaterijali_na_cekanju] [Id]  NOT NULL ,
	[Tekst]              [Tekst] ,
	[IdOblast]           [Id]  NOT NULL ,
	CONSTRAINT [XPKMaterijali_na_cekanju] PRIMARY KEY  CLUSTERED ([IdMaterijali_na_cekanju] ASC)
)
go

CREATE TABLE [Oblast]
( 
	[IdOblast]           [Id]  NOT NULL ,
	[Ime]                [Ime] ,
	[Materijal]          varchar(40)  NULL ,
	[IdKurs]             [Id]  NOT NULL ,
	CONSTRAINT [XPKOblast] PRIMARY KEY  CLUSTERED ([IdOblast] ASC)
)
go

CREATE TABLE [Ocena]
( 
	[IdOcena]            [Id]  NOT NULL ,
	[Vrednost]           float  NULL ,
	[IdRegistrovani]     [Id] ,
	[IdKurs]             [Id]  NOT NULL ,
	CONSTRAINT [XPKOcena] PRIMARY KEY  CLUSTERED ([IdOcena] ASC)
)
go

CREATE TABLE [Odgovor]
( 
	[Tekst]              [Tekst] ,
	[Redni_br]           integer  NULL 
	CONSTRAINT [za_redni_br_1771392294]
		CHECK  ( Redni_br BETWEEN 1 AND 4 ),
	[IdPitalica]         [Id]  NOT NULL ,
	CONSTRAINT [XPKOdgovor] PRIMARY KEY  CLUSTERED ([IdPitalica] ASC)
)
go

CREATE TABLE [Odslusani]
( 
	[IdRegistrovani]     [Id]  NOT NULL ,
	[IdKurs]             [Id]  NOT NULL ,
	CONSTRAINT [XPKOdslusani] PRIMARY KEY  CLUSTERED ([IdRegistrovani] ASC,[IdKurs] ASC)
)
go

CREATE TABLE [Pitalica]
( 
	[IdPitalica]         [Id]  NOT NULL ,
	[Status]             [Status] ,
	[Tekst]              [Tekst] ,
	[Tip]                varchar(20)  NULL 
	CONSTRAINT [za_tip_1682135326]
		CHECK  ( [Tip]='radio' OR [Tip]='checkbox' OR [Tip]='fill' OR [Tip]='list' ),
	[IdOblast]           [Id]  NOT NULL ,
	[Tacan]              integer  NULL ,
	CONSTRAINT [XPKPitalica] PRIMARY KEY  CLUSTERED ([IdPitalica] ASC)
)
go

CREATE TABLE [Profesor]
( 
	[IdRegistrovani]     [Id]  NOT NULL ,
	CONSTRAINT [XPKProfesor] PRIMARY KEY  CLUSTERED ([IdRegistrovani] ASC)
)
go

CREATE TABLE [Registrovani]
( 
	[IdRegistrovani]     [Id]  NOT NULL ,
	[Username]           [Ime] ,
	[Prezime]            varchar(20)  NULL ,
	[e_mail]             varchar(20)  NULL ,
	[Password]           [Password] ,
	[Ime]                [Ime] ,
	CONSTRAINT [XPKRegistrovani] PRIMARY KEY  CLUSTERED ([IdRegistrovani] ASC)
)
go

ALTER TABLE [Registrovani]
	ADD CONSTRAINT [XUsername] UNIQUE ([Username]  ASC)
go

ALTER TABLE [Registrovani]
	ADD CONSTRAINT [Xe_mail] UNIQUE ([e_mail]  ASC)
go

CREATE TABLE [Rezultat]
( 
	[IdRezultat]         [Id]  NOT NULL 
	CONSTRAINT [za_procenat_34212326]
		CHECK  ( IdRezultat BETWEEN 0 AND 100 ),
	[Status]             [Status] ,
	[Procenat_tacnih]    float  NULL ,
	[IdOblast]           [Id]  NOT NULL ,
	[IdRegistrovani]     [Id]  NOT NULL ,
	CONSTRAINT [XPKRezultat] PRIMARY KEY  CLUSTERED ([IdRezultat] ASC)
)
go

CREATE TABLE [Slusa]
( 
	[IdRegistrovani]     [Id]  NOT NULL ,
	[IdKurs]             [Id]  NOT NULL ,
	CONSTRAINT [XPKSlusa] PRIMARY KEY  CLUSTERED ([IdRegistrovani] ASC,[IdKurs] ASC)
)
go

CREATE TABLE [Student]
( 
	[IdRegistrovani]     [Id]  NOT NULL ,
	[Najbolji]           [Status] ,
	CONSTRAINT [XPKStudent] PRIMARY KEY  CLUSTERED ([IdRegistrovani] ASC)
)
go


ALTER TABLE [Admin]
	ADD CONSTRAINT [R_1] FOREIGN KEY ([IdRegistrovani]) REFERENCES [Registrovani]([IdRegistrovani])
		ON DELETE CASCADE
		ON UPDATE CASCADE
go


ALTER TABLE [Komentari]
	ADD CONSTRAINT [R_14] FOREIGN KEY ([IdRegistrovani]) REFERENCES [Profesor]([IdRegistrovani])
		ON DELETE CASCADE
		ON UPDATE CASCADE
go

ALTER TABLE [Komentari]
	ADD CONSTRAINT [R_15] FOREIGN KEY ([IdRegistrovani]) REFERENCES [Student]([IdRegistrovani])
		ON DELETE CASCADE
		ON UPDATE CASCADE
go

ALTER TABLE [Komentari]
	ADD CONSTRAINT [R_16] FOREIGN KEY ([IdKurs]) REFERENCES [Kurs]([IdKurs])
		ON DELETE CASCADE
		ON UPDATE CASCADE
go


ALTER TABLE [Materijali_na_cekanju]
	ADD CONSTRAINT [R_25] FOREIGN KEY ([IdOblast]) REFERENCES [Oblast]([IdOblast])
		ON DELETE CASCADE
		ON UPDATE CASCADE
go


ALTER TABLE [Oblast]
	ADD CONSTRAINT [R_17] FOREIGN KEY ([IdKurs]) REFERENCES [Kurs]([IdKurs])
		ON DELETE CASCADE
		ON UPDATE CASCADE
go


ALTER TABLE [Ocena]
	ADD CONSTRAINT [R_11] FOREIGN KEY ([IdRegistrovani]) REFERENCES [Profesor]([IdRegistrovani])
		ON DELETE CASCADE
		ON UPDATE CASCADE
go

ALTER TABLE [Ocena]
	ADD CONSTRAINT [R_12] FOREIGN KEY ([IdRegistrovani]) REFERENCES [Student]([IdRegistrovani])
		ON DELETE CASCADE
		ON UPDATE CASCADE
go

ALTER TABLE [Ocena]
	ADD CONSTRAINT [R_13] FOREIGN KEY ([IdKurs]) REFERENCES [Kurs]([IdKurs])
		ON DELETE CASCADE
		ON UPDATE CASCADE
go


ALTER TABLE [Odgovor]
	ADD CONSTRAINT [R_26] FOREIGN KEY ([IdPitalica]) REFERENCES [Pitalica]([IdPitalica])
		ON DELETE CASCADE
		ON UPDATE CASCADE
go


ALTER TABLE [Odslusani]
	ADD CONSTRAINT [R_7] FOREIGN KEY ([IdRegistrovani]) REFERENCES [Student]([IdRegistrovani])
		ON DELETE CASCADE
		ON UPDATE CASCADE
go

ALTER TABLE [Odslusani]
	ADD CONSTRAINT [R_8] FOREIGN KEY ([IdKurs]) REFERENCES [Kurs]([IdKurs])
		ON DELETE CASCADE
		ON UPDATE CASCADE
go


ALTER TABLE [Pitalica]
	ADD CONSTRAINT [R_18] FOREIGN KEY ([IdOblast]) REFERENCES [Oblast]([IdOblast])
		ON DELETE CASCADE
		ON UPDATE CASCADE
go


ALTER TABLE [Profesor]
	ADD CONSTRAINT [R_3] FOREIGN KEY ([IdRegistrovani]) REFERENCES [Registrovani]([IdRegistrovani])
		ON DELETE CASCADE
		ON UPDATE CASCADE
go


ALTER TABLE [Rezultat]
	ADD CONSTRAINT [R_23] FOREIGN KEY ([IdOblast]) REFERENCES [Oblast]([IdOblast])
		ON DELETE CASCADE
		ON UPDATE CASCADE
go

ALTER TABLE [Rezultat]
	ADD CONSTRAINT [R_24] FOREIGN KEY ([IdRegistrovani]) REFERENCES [Student]([IdRegistrovani])
		ON DELETE CASCADE
		ON UPDATE CASCADE
go


ALTER TABLE [Slusa]
	ADD CONSTRAINT [R_5] FOREIGN KEY ([IdRegistrovani]) REFERENCES [Student]([IdRegistrovani])
		ON DELETE CASCADE
		ON UPDATE CASCADE
go

ALTER TABLE [Slusa]
	ADD CONSTRAINT [R_6] FOREIGN KEY ([IdKurs]) REFERENCES [Kurs]([IdKurs])
		ON DELETE CASCADE
		ON UPDATE CASCADE
go


ALTER TABLE [Student]
	ADD CONSTRAINT [R_2] FOREIGN KEY ([IdRegistrovani]) REFERENCES [Registrovani]([IdRegistrovani])
		ON DELETE CASCADE
		ON UPDATE CASCADE
go
