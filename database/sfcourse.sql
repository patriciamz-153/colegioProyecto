CREATE TABLE plan_de_estudio (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(30) NOT NULL,
	esta_vigente BOOLEAN NOT NULL,
	anio_de_publicacion INT UNSIGNED NOT NULL,
	escuela_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE distrito (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(90) NOT NULL,
	provincia_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE eap (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(90) NOT NULL,
	codigo INT UNSIGNED NOT NULL,
	facultad_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

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

CREATE TABLE facultad (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(90) NOT NULL,
	codigo INT UNSIGNED NOT NULL,
	institucion_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE evaluacion (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	fecha DATE NOT NULL,
	hora_inicio TIME NOT NULL,
	hora_fin TIME NOT NULL,
	peso DOUBLE UNSIGNED NOT NULL,
	grupo_id INT UNSIGNED NOT NULL,
	tipo_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE tipo_ambiente (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(30) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE alumno (
	id INT UNSIGNED NOT NULL,
	codigo VARCHAR(8) UNIQUE NOT NULL,
	escuela_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE matricula (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	grupo_id INT UNSIGNED NOT NULL,
	alumno_id INT UNSIGNED NOT NULL,
	nota DOUBLE UNSIGNED,
	PRIMARY KEY (id)
);

CREATE TABLE tipo_asignatura (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	descripcion VARCHAR(30) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE sesion (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	estado CHAR(1) NOT NULL,
	fecha DATE NOT NULL,
	clase_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE tipo_clase (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	descripcion VARCHAR(30) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE provincia (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(90) NOT NULL,
	departamento_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE institucion (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(90) NOT NULL,
	siglas VARCHAR(10) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE clase (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	dia CHAR(1) NOT NULL,
	hora_inicio TIME NOT NULL,
	hora_fin TIME NOT NULL,
	ambiente_id INT UNSIGNED NOT NULL,
	grupo_id INT UNSIGNED NOT NULL,
	tipo_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE asignatura (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(90) NOT NULL,
	codigo INT UNSIGNED NOT NULL,
	cantidad_de_creditos INT UNSIGNED NOT NULL,
	ciclo INT UNSIGNED NOT NULL,
	plan_id INT UNSIGNED NOT NULL,
	tipo_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE facultad_x_sede (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	sede_id INT UNSIGNED NOT NULL,
	facultad_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE ambiente (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(30) NOT NULL,
	facultad_x_sede_id INT UNSIGNED NOT NULL,
	tipo_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE comentario_matricula (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	matricula_id INT UNSIGNED NOT NULL,
	nota_final DOUBLE UNSIGNED NOT NULL,
	comentario VARCHAR(255),
	PRIMARY KEY (id)
);

CREATE TABLE evaluacion_x_matricula (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	evaluacion_id INT UNSIGNED NOT NULL,
	matricula_id INT UNSIGNED NOT NULL,
	nota DOUBLE UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE sede (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(90) NOT NULL,
	direccion VARCHAR(255) NOT NULL,
	institucion_id INT UNSIGNED NOT NULL,
	distrito_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE departamento_academico (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(90) NOT NULL,
	facultad_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE docente (
	id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE asistencia (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	verificacion TINYINT NOT NULL,
	usuario_id INT UNSIGNED NOT NULL,
	sesion_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE tipo_periodo (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(30) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE tipo_usuario (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(30) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE docente_x_departamento (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	departamento_id INT UNSIGNED NOT NULL,
	docente_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE tipo_evaluacion (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(30) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE periodo_academico (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(90) NOT NULL,
	fecha_inicio DATE NOT NULL,
	fecha_fin DATE NOT NULL,
	facultad_id INT UNSIGNED NOT NULL,
	tipo_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE asignatura_aperturada (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	asignatura_id INT UNSIGNED NOT NULL,
	periodo_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE grupo (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	numero_grupo CHAR(1) NOT NULL,
	asignatura_aperturada_id INT UNSIGNED NOT NULL,
	docente_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE departamento (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(90) NOT NULL,
	PRIMARY KEY (id)
);

ALTER TABLE asignatura_aperturada ADD CONSTRAINT asignatura_aperturada_periodo_academico_fk FOREIGN KEY (periodo_id)
	REFERENCES periodo_academico (id);

ALTER TABLE clase ADD CONSTRAINT clase_grupo_fk FOREIGN KEY (grupo_id)
	REFERENCES grupo (id);

ALTER TABLE provincia ADD CONSTRAINT provincia_departamento_fk FOREIGN KEY (departamento_id)
	REFERENCES departamento (id);

ALTER TABLE sesion ADD CONSTRAINT sesion_clase_fk FOREIGN KEY (clase_id)
	REFERENCES clase (id);

ALTER TABLE alumno ADD CONSTRAINT alumno_usuario_fk FOREIGN KEY (id)
	REFERENCES usuario (id);

ALTER TABLE asignatura ADD CONSTRAINT asignatura_tipo_asignatura_fk FOREIGN KEY (tipo_id)
	REFERENCES tipo_asignatura (id);

ALTER TABLE evaluacion ADD CONSTRAINT evaluacion_grupo_fk FOREIGN KEY (grupo_id)
	REFERENCES grupo (id);

ALTER TABLE ambiente ADD CONSTRAINT ambiente_facultad_x_sede_fk FOREIGN KEY (facultad_x_sede_id)
	REFERENCES facultad_x_sede (id);

ALTER TABLE docente_x_departamento ADD CONSTRAINT docente_x_departamento_departamento_academico_fk FOREIGN KEY (departamento_id)
	REFERENCES departamento_academico (id);

ALTER TABLE evaluacion_x_matricula ADD CONSTRAINT evaluacion_x_matricula_evaluacion_fk FOREIGN KEY (evaluacion_id)
	REFERENCES evaluacion (id);

ALTER TABLE grupo ADD CONSTRAINT grupo_docente_fk FOREIGN KEY (docente_id)
	REFERENCES docente (id);

ALTER TABLE asistencia ADD CONSTRAINT asistencia_sesion_fk FOREIGN KEY (sesion_id)
	REFERENCES sesion (id);

ALTER TABLE facultad_x_sede ADD CONSTRAINT facultad_x_sede_facultad_fk FOREIGN KEY (facultad_id)
	REFERENCES facultad (id);

ALTER TABLE matricula ADD CONSTRAINT matricula_alumno_fk FOREIGN KEY (alumno_id)
	REFERENCES alumno (id);

ALTER TABLE clase ADD CONSTRAINT clase_tipo_clase_fk FOREIGN KEY (tipo_id)
	REFERENCES tipo_clase (id);

ALTER TABLE asignatura ADD CONSTRAINT asignatura_plan_de_estudio_fk FOREIGN KEY (plan_id)
	REFERENCES plan_de_estudio (id);

ALTER TABLE facultad ADD CONSTRAINT facultad_institucion_fk FOREIGN KEY (institucion_id)
	REFERENCES institucion (id);

ALTER TABLE facultad_x_sede ADD CONSTRAINT facultad_x_sede_sede_fk FOREIGN KEY (sede_id)
	REFERENCES sede (id);

ALTER TABLE distrito ADD CONSTRAINT distrito_provincia_fk FOREIGN KEY (provincia_id)
	REFERENCES provincia (id);

ALTER TABLE alumno ADD CONSTRAINT alumno_eap_fk FOREIGN KEY (escuela_id)
	REFERENCES eap (id);

ALTER TABLE eap ADD CONSTRAINT eap_facultad_fk FOREIGN KEY (facultad_id)
	REFERENCES facultad (id);

ALTER TABLE docente ADD CONSTRAINT docente_usuario_fk FOREIGN KEY (id)
	REFERENCES usuario (id);

ALTER TABLE sede ADD CONSTRAINT sede_institucion_fk FOREIGN KEY (institucion_id)
	REFERENCES institucion (id);

ALTER TABLE docente_x_departamento ADD CONSTRAINT docente_x_departamento_docente_fk FOREIGN KEY (docente_id)
	REFERENCES docente (id);

ALTER TABLE evaluacion_x_matricula ADD CONSTRAINT evaluacion_x_matricula_matricula_fk FOREIGN KEY (matricula_id)
	REFERENCES matricula (id);

ALTER TABLE plan_de_estudio ADD CONSTRAINT plan_de_estudio_eap_fk FOREIGN KEY (escuela_id)
	REFERENCES eap (id);

ALTER TABLE clase ADD CONSTRAINT clase_ambiente_fk FOREIGN KEY (ambiente_id)
	REFERENCES ambiente (id);

ALTER TABLE ambiente ADD CONSTRAINT ambiente_tipo_ambiente_fk FOREIGN KEY (tipo_id)
	REFERENCES tipo_ambiente (id);

ALTER TABLE evaluacion ADD CONSTRAINT evaluacion_tipo_evaluacion_fk FOREIGN KEY (tipo_id)
	REFERENCES tipo_evaluacion (id);

ALTER TABLE usuario ADD CONSTRAINT usuario_tipo_usuario_fk FOREIGN KEY (tipo_usuario_id)
	REFERENCES tipo_usuario (id);

ALTER TABLE asistencia ADD CONSTRAINT asistencia_usuario_fk FOREIGN KEY (usuario_id)
	REFERENCES usuario (id);

ALTER TABLE grupo ADD CONSTRAINT grupo_asignatura_aperturada_fk FOREIGN KEY (asignatura_aperturada_id)
	REFERENCES asignatura_aperturada (id);

ALTER TABLE periodo_academico ADD CONSTRAINT periodo_academico_tipo_periodo_fk FOREIGN KEY (tipo_id)
	REFERENCES tipo_periodo (id);

ALTER TABLE periodo_academico ADD CONSTRAINT periodo_academico_facultad_fk FOREIGN KEY (facultad_id)
	REFERENCES facultad (id);

ALTER TABLE departamento_academico ADD CONSTRAINT departamento_academico_facultad_fk FOREIGN KEY (facultad_id)
	REFERENCES facultad (id);

ALTER TABLE comentario_matricula ADD CONSTRAINT comentario_matricula_matricula_fk FOREIGN KEY (matricula_id)
	REFERENCES matricula (id);

ALTER TABLE asignatura_aperturada ADD CONSTRAINT asignatura_aperturada_asignatura_fk FOREIGN KEY (asignatura_id)
	REFERENCES asignatura (id);

ALTER TABLE sede ADD CONSTRAINT sede_distrito_fk FOREIGN KEY (distrito_id)
	REFERENCES distrito (id);

ALTER TABLE matricula ADD CONSTRAINT matricula_grupo_fk FOREIGN KEY (grupo_id)
	REFERENCES grupo (id);