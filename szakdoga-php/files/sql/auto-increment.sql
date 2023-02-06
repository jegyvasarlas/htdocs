alter table jegyvasarlas.allomas
    modify id bigint auto_increment;

alter table jegyvasarlas.allomas
    auto_increment = 1;
	
alter table jegyvasarlas.megallo
    modify id bigint auto_increment;

alter table jegyvasarlas.megallo
    auto_increment = 1;

alter table jegyvasarlas.vonal
    modify id bigint auto_increment;

alter table jegyvasarlas.vonal
    auto_increment = 1;
	
insert into jegyvasarlas.allomas(nev) values ('Budapest-Nyugati');
insert into jegyvasarlas.allomas(nev) values ('Budapest-Keleti');
insert into jegyvasarlas.allomas(nev) values ('Budapest-Déli');
insert into jegyvasarlas.allomas(nev) values ('Zugló');
insert into jegyvasarlas.allomas(nev) values ('Kőbánya alsó');
insert into jegyvasarlas.allomas(nev) values ('Kőbánya-Kispest');
insert into jegyvasarlas.allomas(nev) values ('Pestszentlőrinc');
insert into jegyvasarlas.allomas(nev) values ('Szemeretelep');


