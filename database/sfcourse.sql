
CREATE TABLE usuario (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombres VARCHAR(90) NOT NULL,
	apellidos VARCHAR(90) NOT NULL,
	email VARCHAR(50) UNIQUE NOT NULL,
	password VARCHAR(255) NOT NULL,
	remember_token VARCHAR(100),
	deleted_at DATETIME,
	tipo_usuario_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE alumno (
	id INT UNSIGNED NOT NULL,
	codigo VARCHAR(8) UNIQUE NOT NULL,
	escuela_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE docente (
	id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE tipo_usuario (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(30) NOT NULL,
	PRIMARY KEY (id)
);

ALTER TABLE alumno ADD CONSTRAINT alumno_usuario_fk FOREIGN KEY (id)
	REFERENCES usuario (id);

ALTER TABLE docente ADD CONSTRAINT docente_usuario_fk FOREIGN KEY (id)
	REFERENCES usuario (id);

ALTER TABLE usuario ADD CONSTRAINT usuario_tipo_usuario_fk FOREIGN KEY (tipo_usuario_id)
	REFERENCES tipo_usuario (id);
