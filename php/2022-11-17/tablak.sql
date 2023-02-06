CREATE TABLE nyelvek (
  id int(11),
  nyelv varchar(7) NOT NULL,
  CONSTRAINT pk_nyelvek PRIMARY KEY (id)
);

CREATE TABLE vizsgak (
  sorsz int(11),
  idopont datetime NOT NULL,
  nyelvid int(11) NOT NULL,
  szint varchar(2) NOT NULL,
  CONSTRAINT pk_vizsgak PRIMARY KEY (sorsz)
);

CREATE TABLE jelentkezesek (
  sorsz int(11),
  nev varchar(18) NOT NULL,
  mobil varchar(8) NOT NULL,
  szulev int nOT NULL,
  vizsga int NOT NULL,
  CONSTRAINT pk_jelentkezesek PRIMARY KEY (sorsz)
);


