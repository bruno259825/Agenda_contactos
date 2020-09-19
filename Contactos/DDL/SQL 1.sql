DROP TABLE amistad;
DROP TABLE mensaje;

DROP TABLE usuario;


CREATE TABLE usuario(
    id_usuario varchar(13),
    foto blob,
    nombre varchar(50),
    password varchar(10) NOT NULL,
    fecha_alta date,
    CONSTRAINT PK_US_ID PRIMARY KEY (id_usuario)
);

CREATE TABLE mensaje(
    cod_men int(7),
    id_usuario varchar(13),
    descripcion mediumtext,
    fecha date,
    CONSTRAINT PK_ME_COD PRIMARY KEY (cod_men),
    CONSTRAINT FK_ME_ID FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE amistad(
    id_usuario varchar(13),
    id_amistad varchar(13),
    fecha_amistad date,
    CONSTRAINT PRIMARY KEY(id_usuario,id_amistad),
    CONSTRAINT FK1_AM_US FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
    CONSTRAINT FK2_AM_AM FOREIGN KEY (id_amistad) REFERENCES usuario(id_usuario)
);
