#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Salaire
#------------------------------------------------------------

CREATE TABLE Salaire(
        id_client  Int NOT NULL ,
        salaire    Varchar (50) NOT NULL ,
        profession Text NOT NULL
	,CONSTRAINT Salaire_PK PRIMARY KEY (id_client)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Client
#------------------------------------------------------------

CREATE TABLE Client(
        id_client         Int NOT NULL ,
        nom_client        Text NOT NULL ,
        prenom_client     Text NOT NULL ,
        genre_client      Text NOT NULL ,
        naissance_client  Date NOT NULL ,
        img_client        Blob NOT NULL ,
        tel_client        Int NOT NULL ,
        email_client      Varchar (50) NOT NULL ,
        password_client   Varchar (50) NOT NULL ,
        id_client_Salaire Int
	,CONSTRAINT Client_PK PRIMARY KEY (id_client)

	,CONSTRAINT Client_Salaire_FK FOREIGN KEY (id_client_Salaire) REFERENCES Salaire(id_client)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Proprietaire
#------------------------------------------------------------

CREATE TABLE Proprietaire(
        id_client           Int NOT NULL ,
        id_bien             Int NOT NULL ,
        id_client_relation1 Int NOT NULL
	,CONSTRAINT Proprietaire_PK PRIMARY KEY (id_client)

	,CONSTRAINT Proprietaire_Client_FK FOREIGN KEY (id_client_relation1) REFERENCES Client(id_client)
	,CONSTRAINT Proprietaire_Client_AK UNIQUE (id_client_relation1)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Type_bien
#------------------------------------------------------------

CREATE TABLE Type_bien(
        id_bien      Int NOT NULL ,
        id_type_bien Int NOT NULL ,
        type_bien    Bool NOT NULL
	,CONSTRAINT Type_bien_PK PRIMARY KEY (id_bien)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Ville
#------------------------------------------------------------

CREATE TABLE Ville(
        id_quartier Int NOT NULL ,
        id_ville    Int NOT NULL ,
        nom_ville   Text NOT NULL
	,CONSTRAINT Ville_PK PRIMARY KEY (id_quartier)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Quartier
#------------------------------------------------------------

CREATE TABLE Quartier(
        id_bien           Int NOT NULL ,
        id_quartier       Int NOT NULL ,
        id_ville          Int NOT NULL ,
        nom_quartier      Text NOT NULL ,
        id_quartier_Ville Int NOT NULL
	,CONSTRAINT Quartier_PK PRIMARY KEY (id_bien)

	,CONSTRAINT Quartier_Ville_FK FOREIGN KEY (id_quartier_Ville) REFERENCES Ville(id_quartier)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Bien
#------------------------------------------------------------

CREATE TABLE Bien(
        id_bien_Type_bien Int NOT NULL ,
        id_bien           Int NOT NULL ,
        superficie        Float NOT NULL ,
        etat              Text NOT NULL ,
        nb_pieces         Int NOT NULL ,
        nb_chambre        Int NOT NULL ,
        nb_salle_bain     Int NOT NULL ,
        nb_salle_eau      Int NOT NULL ,
        description       Longtext NOT NULL ,
        photos            Blob NOT NULL ,
        prix_vente        Varchar (50) NOT NULL ,
        prix_min_vente    Varchar (50) NOT NULL ,
        prix_max_vente    Varchar (50) NOT NULL ,
        prix_location     Varchar (50) NOT NULL ,
        frais             Varchar (50) NOT NULL ,
        perf_energie      Float NOT NULL ,
        ges               Float NOT NULL ,
        id_type_bien      Int NOT NULL ,
        type_bien         Boolean NOT NULL ,
        id_client         Int NOT NULL ,
        id_bien_Quartier  Int NOT NULL
	,CONSTRAINT Bien_PK PRIMARY KEY (id_bien_Type_bien,id_bien)

	,CONSTRAINT Bien_Type_bien_FK FOREIGN KEY (id_bien_Type_bien) REFERENCES Type_bien(id_bien)
	,CONSTRAINT Bien_Proprietaire0_FK FOREIGN KEY (id_client) REFERENCES Proprietaire(id_client)
	,CONSTRAINT Bien_Quartier1_FK FOREIGN KEY (id_bien_Quartier) REFERENCES Quartier(id_bien)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: stats_bien
#------------------------------------------------------------

CREATE TABLE stats_bien(
        id_bien           Int NOT NULL ,
        nb_visites        Int NOT NULL ,
        nb_favoris        Int NOT NULL ,
        id_bien_Type_bien Int NOT NULL ,
        id_bien_relation8 Int NOT NULL
	,CONSTRAINT stats_bien_PK PRIMARY KEY (id_bien)

	,CONSTRAINT stats_bien_Bien_FK FOREIGN KEY (id_bien_Type_bien,id_bien_relation8) REFERENCES Bien(id_bien_Type_bien,id_bien)
	,CONSTRAINT stats_bien_Bien_AK UNIQUE (id_bien_Type_bien,id_bien_relation8)
)ENGINE=InnoDB;

