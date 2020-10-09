-- ------------------------------------------------------------
--         Script MySQL.
-- ------------------------------------------------------------
DROP TABLE IF EXISTS utilisateur;
DROP TABLE IF EXISTS salle;
DROP TABLE IF EXISTS creneau;
DROP TABLE IF EXISTS reserver;
-- ------------------------------------------------------------
--  Table: utilisateur
-- ------------------------------------------------------------

CREATE TABLE utilisateur(
        id         Int  Auto_increment  NOT NULL ,
        nom        Varchar (50) NOT NULL ,
        prenom     Varchar (50) NOT NULL ,
        email      Varchar (50) NOT NULL ,
        motdepasse Varchar (50) NOT NULL ,
        droit      Varchar (50) NOT NULL COMMENT "droits: admin/etudiant"
	,CONSTRAINT utilisateur_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


-- ------------------------------------------------------------
--  Table: salle
-- ------------------------------------------------------------

CREATE TABLE salle(
        numero  Int NOT NULL ,
        nbplace Int NOT NULL
	,CONSTRAINT salle_PK PRIMARY KEY (numero)
)ENGINE=InnoDB;


-- ------------------------------------------------------------
--  Table: creneau
-- ------------------------------------------------------------

CREATE TABLE creneau(
        id        Int  Auto_increment  NOT NULL ,
        heure_deb Time NOT NULL ,
        heure_fin Time  NOT NULL
        heure_fin Time NOT NULL
	,CONSTRAINT creneau_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


-- ------------------------------------------------------------
--  Table: reserver
-- ------------------------------------------------------------

CREATE TABLE reserver(
        id         Int NOT NULL ,
        numero     Int NOT NULL ,
        date_reservation Date NOT NULL,
        id_creneau Int NOT NULL
	,CONSTRAINT reserver_PK PRIMARY KEY (id,numero,id_creneau)

	,CONSTRAINT reserver_utilisateur_FK FOREIGN KEY (id) REFERENCES utilisateur(id)
	,CONSTRAINT reserver_salle0_FK FOREIGN KEY (numero) REFERENCES salle(numero)
	,CONSTRAINT reserver_creneau1_FK FOREIGN KEY (id_creneau) REFERENCES creneau(id)
)ENGINE=InnoDB;
