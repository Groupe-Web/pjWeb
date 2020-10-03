
#--insertion des donnes dans la base

#-- insertion des utilisateurs

INSERT INTO utilisateur(nom,prenom,email,motdepasse,droit)
VALUES('MOUAFFO TAKOUMBO','Zidane','zid@gmail.com','admin'),
      ( 'EBENA',  'emile', 'ab@gmail.com' ,'etudiant'),
        ( 'GRASSET',  'Jerôme', 'gr@gmail.com' ,'etudiant'),
          ( 'LEMAIRE',  'bruno', 'br@gmail.com' ,'etudiant'),
            ( 'OBAMA',  'barack', 'ob@gmail.com' ,'etudiant'),
              ( 'GATES',  'bill', 'bg@gmail.com' ,'etudiant');


#----- insertion des salles

INSERT INTO salle(numero,nbplace)
VALUES('105','26'),
        ('106','26'),
        ('107','26'),
        ('108','26'),
        ('109','26'),
        ('110','26');


#----- insertion des creneaux

--INSERT INTO creneau()
