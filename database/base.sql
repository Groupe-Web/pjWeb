-- ------------------------------------------------------------
--         Script MySQL.
-- ------------------------------------------------------------
DROP TABLE IF EXISTS reserver;
DROP TABLE IF EXISTS utilisateur;
DROP TABLE IF EXISTS salle;
DROP TABLE IF EXISTS creneau;
-- ------------------------------------------------------------
--  Table: utilisateur
-- ------------------------------------------------------------

CREATE TABLE utilisateur(
        id         Int  Auto_increment  NOT NULL ,
        nom        Varchar (50) NOT NULL ,
        prenom     Varchar (50) NOT NULL ,
        email      Varchar (50) NOT NULL  UNIQUE ,
        motdepasse Varchar (50) NOT NULL ,
        droit      Varchar (50) NOT NULL COMMENT "droits: admin/etudiant",
        motdepasseHAshed VARCHAR(100) NULL DEFAULT NULL
	,CONSTRAINT utilisateur_PK PRIMARY KEY (id)
)ENGINE=InnoDB;

-- ------------------------------------------------------------
--  Table: salle
-- ------------------------------------------------------------

CREATE TABLE salle(
        numero  Int NOT NULL ,
        nbplace Int NOT NULL
	,CONSTRAINT numero PRIMARY KEY (numero)
)ENGINE=InnoDB;

-- ------------------------------------------------------------
--  Table: creneau
-- ------------------------------------------------------------

CREATE TABLE creneau(
        id        Int  Auto_increment  NOT NULL ,
        heure_deb Time NOT NULL ,
        heure_fin Time  NOT NULL
	,CONSTRAINT creneau_PK PRIMARY KEY (id)
)ENGINE=InnoDB;

-- ------------------------------------------------------------
--  Table: reserver
-- ------------------------------------------------------------

CREATE TABLE reserver(
        id         Int Auto_increment NOT NULL ,
        date_reservation Date NOT NULL,
        id_creneau Int NOT NULL,
        id_salle Int NOT NULL,
        id_utilisateur Int NOT NULL,
        nbplace_libre Int NULL
	,CONSTRAINT id PRIMARY KEY (id,id_salle,id_creneau)

	,CONSTRAINT id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id)
	,CONSTRAINT id_salle FOREIGN KEY (id_salle) REFERENCES salle(numero)
	,CONSTRAINT id_creneau FOREIGN KEY (id_creneau) REFERENCES creneau(id)
)ENGINE=InnoDB;
