-- *********************************************
-- * Standard SQL generation                   
-- *--------------------------------------------
-- * DB-MAIN version: 11.0.2              
-- * Generator date: Sep 14 2021              
-- * Generation date: Sat Feb  3 14:23:26 2024 
-- * LUN file:  
-- * Schema: mcd/SQL 
-- ********************************************* 


-- Database Section
-- ________________ 

create database mcd;


-- DBSpace Section
-- _______________


-- Tables Section
-- _____________ 

create table t_user (
     idUser -- Sequence attribute not implemented -- not null,
     useName varchar(255) not null,
     useSurname varchar(255) not null,
     useMail varchar(255) not null,
     usePassword varchar(255) not null,
     constraint ID_t_user_ID primary key (idUser));

create table t_website (
     idWebsite -- Sequence attribute not implemented -- not null,
     webUrl varchar(255) not null,
     webTemplate char not null,
     webBackgroundColor varchar(255) not null,
     webTitle varchar(255) not null,
     webDescription varchar(255) not null,
     webFkUSer numeric(1) not null,
     constraint ID_t_website_ID primary key (idWebsite));

create table t_links (
     idLinks -- Sequence attribute not implemented -- not null,
     linShortUrl varchar(255) not null,
     linOriginalUrl varchar(255) not null,
     linFkWebsite numeric(1) not null,
     constraint ID_t_links_ID primary key (idLinks));

create table t_picture (
     idPicture -- Sequence attribute not implemented -- not null,
     picFkWebsite numeric(1) not null,
     picName varchar(255) not null,
     picUrl varchar(255) not null,
     constraint ID_t_picture_ID primary key (idPicture),
     constraint SID_t_pic_t_web_ID unique (picFkWebsite));


-- Constraints Section
-- ___________________ 

alter table t_website add constraint ID_t_website_CHK
     check(exists(select * from t_picture
                  where t_picture.picFkWebsite = idWebsite)); 

alter table t_website add constraint REF_t_web_t_use_FK
     foreign key (webFkUSer)
     references t_user;

alter table t_links add constraint REF_t_lin_t_web_FK
     foreign key (linFkWebsite)
     references t_website;

alter table t_picture add constraint SID_t_pic_t_web_FK
     foreign key (picFkWebsite)
     references t_website;


-- Index Section
-- _____________ 

create unique index ID_t_user_IND
     on t_user (idUser);

create unique index ID_t_website_IND
     on t_website (idWebsite);

create index REF_t_web_t_use_IND
     on t_website (webFkUSer);

create unique index ID_t_links_IND
     on t_links (idLinks);

create index REF_t_lin_t_web_IND
     on t_links (linFkWebsite);

create unique index ID_t_picture_IND
     on t_picture (idPicture);

create unique index SID_t_pic_t_web_IND
     on t_picture (picFkWebsite);

