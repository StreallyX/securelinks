-- *********************************************
-- * Standard SQL generation                   
-- *--------------------------------------------
-- * DB-MAIN version: 11.0.2              
-- * Generator date: Sep 14 2021              
-- * Generation date: Fri Feb  2 22:39:57 2024 
-- * LUN file: C:\Users\Alex\Desktop\UwAmp\www\securelinks\db_SecureLinks.lun 
-- * Schema: MCD/SQL 
-- ********************************************* 


-- Database Section
-- ________________ 

create database MCD;


-- DBSpace Section
-- _______________


-- Tables Section
-- _____________ 

create table t_picture (
     _idPicture char(1) not null,
     picName char(1) not null,
     picUrl char(1) not null,
     constraint ID_t_picture_ID primary key (_idPicture));

create table t_links (
     idLinks char(1) not null,
     linShorturl char(1) not null,
     linOrginalUrl char(1) not null,
     linFKWebsite char(1) not null,
     idWebsite char(1) not null,
     constraint ID_t_links_ID primary key (idLinks));

create table t_user (
     idUser char(1) not null,
     usName char(1) not null,
     useSurname char(1) not null,
     useMail char(1) not null,
     usePassword char(1) not null,
     constraint ID_t_user_ID primary key (idUser));

create table t_website (
     idWebsite char(1) not null,
     webUrl char(1) not null,
     webTemplate char(1) not null,
     webPicture char(1) not null,
     webBackgroundColor char(1) not null,
     webTitle char(1) not null,
     webDescription char(1) not null,
     idUser char(1) not null,
     constraint ID_t_website_ID primary key (idWebsite));


-- Constraints Section
-- ___________________ 

alter table t_links add constraint REF_t_lin_t_web_FK
     foreign key (idWebsite)
     references t_website;

alter table t_user add constraint ID_t_user_CHK
     check(exists(select * from t_website
                  where t_website.idUser = idUser)); 

alter table t_website add constraint EQU_t_web_t_use_FK
     foreign key (idUser)
     references t_user;


-- Index Section
-- _____________ 

create unique index ID_t_picture_IND
     on t_picture (_idPicture);

create unique index ID_t_links_IND
     on t_links (idLinks);

create index REF_t_lin_t_web_IND
     on t_links (idWebsite);

create unique index ID_t_user_IND
     on t_user (idUser);

create unique index ID_t_website_IND
     on t_website (idWebsite);

create index EQU_t_web_t_use_IND
     on t_website (idUser);

