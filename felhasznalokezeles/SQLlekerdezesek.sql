create table felhasznalok
(
    FelhasznaloNev varchar(20) primary key,
    Jelszo char(40) not null
);

insert into felhasznalok
values('Admin', SHA1('Szupertitkos'));

select FelhasznaloNev
from felhasznalok
where
    FelhasznaloNev like 'Admin'
    and Jelszo like SHA1('Szupertitkos');



