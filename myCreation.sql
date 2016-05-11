drop table user;
drop table role;
drop table country;
drop table commitee;
drop table event;
drop table doEvent;

create table role (
  idRole serial,
  nameRole varchar(20),
  CONSTRAINT pk_role primary key (idRole),
  CONSTRAINT dom_nomR check (nameRole in ('Admin',
  'NewMember'))
);

create table country(
  idCountry serial,
  nameC varchar(50),
  descriptionC varchar(200) ,
  CONSTRAINT pk_country primary key (idCountry)
);

create table utilisateur (
  idUser serial,
  firstName varchar(50) ,
  middleName varchar(50) ,
  lastName varchar(50) ,
  gender varchar(20) check (gender in ('Male',
  'Female')),
  email varchar(50) not null,
  password varchar(50) not null,
  idCountry int,
  idRole int,
  CONSTRAINT pk_user primary key (idUser),
  CONSTRAINT fk_user1 FOREIGN KEY (idCountry) REFERENCES
  country(idCountry),
  CONSTRAINT fk_user2 FOREIGN KEY (idRole) REFERENCES
  role(idRole)
);

create table commitee(
  idCommitee serial,
  nameCom varchar(50) ,
  descriptionCom varchar(200) ,
  idCountry int,
  CONSTRAINT pk_commitee primary key (idCommitee),
  CONSTRAINT fk_commitee FOREIGN KEY (idCountry) REFERENCES
  country(idCountry)
);

create table event(
  idEvent serial,
  nameEvent varchar(50) ,
  descriptionEvent varchar(200) ,
  CONSTRAINT pk_event primary key (idEvent)
);

create table doEvent(
idEvent serial REFERENCES event ON DELETE CASCADE,
idcommitee serial REFERENCES commitee ON DELETE CASCADE,
CONSTRAINT pk_doEvent primary key (idEvent,idCommitee)
);
