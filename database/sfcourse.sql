CREATE TABLE grupo (
	grupo_id INT NOT NULL,
	numero_grupo CHAR(1) NOT NULL,
	asignatura_id INT NOT NULL,
	docente_id INT NOT NULL,
	periodo_academico_id INT NOT NULL,
	PRIMARY KEY (grupo_id)
);

CREATE TABLE eap (
	escuela_id INT NOT NULL,
	nombre VARCHAR(90) NOT NULL,
	codigo VARCHAR(10) NOT NULL,
	facultad_id INT NOT NULL,
	PRIMARY KEY (escuela_id)
);

CREATE TABLE tipo_evaluacion (
	tipo_evaluacion_id INT NOT NULL,
	nombre VARCHAR(30) NOT NULL,
	PRIMARY KEY (tipo_evaluacion_id)
);

CREATE TABLE provincia (
	provincia_id INT NOT NULL,
	nombre VARCHAR(90) NOT NULL,
	PRIMARY KEY (provincia_id)
);

CREATE TABLE evaluacion_x_alumno (
	evaluacion_id INT NOT NULL,
	matricula_id INT NOT NULL,
	nota DOUBLE NOT NULL,
	PRIMARY KEY (evaluacion_id,matricula_id)
);

CREATE TABLE alumno (
	usuario_id INT NOT NULL,
	codigo VARCHAR(8) NOT NULL,
	escuela_id INT NOT NULL,
	PRIMARY KEY (usuario_id)
);

CREATE TABLE alumno_matriculado (
	matricula_id INT NOT NULL,
	grupo_id INT NOT NULL,
	usuario_id INT NOT NULL,
	nota DOUBLE,
	PRIMARY KEY (matricula_id)
);

CREATE TABLE facultad (
	facultad_id INT NOT NULL,
	nombre VARCHAR(90) NOT NULL,
	codigo VARCHAR(10) NOT NULL,
	sede_id INT NOT NULL,
	PRIMARY KEY (facultad_id)
);

CREATE TABLE tipo_ambiente (
	tipo_id INT NOT NULL,
	nombre VARCHAR(30) NOT NULL,
	PRIMARY KEY (tipo_id)
);

CREATE TABLE evaluacion (
	evaluacion_id INT NOT NULL,
	grupo_id INT NOT NULL,
	programacion_id INT NOT NULL,
	PRIMARY KEY (evaluacion_id)
);

CREATE TABLE docente_x_departamento (
	id INT NOT NULL,
	departamento_id INT NOT NULL,
	usuario_id INT NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE sesion (
	sesion_id INT NOT NULL,
	estado CHAR(1) NOT NULL,
	fecha DATE NOT NULL,
	clase_id INT NOT NULL,
	PRIMARY KEY (sesion_id)
);

CREATE TABLE usuario (
	usuario_id INT NOT NULL,
	nombres VARCHAR(90) NOT NULL,
	apellidos VARCHAR(90) NOT NULL,
	email VARCHAR(50) NOT NULL,
	password VARCHAR(255) NOT NULL,
	remember_token VARCHAR(100),
	tipo_usuario_id INT NOT NULL,
	PRIMARY KEY (usuario_id)
);

CREATE TABLE tipo_clase (
	tipo_clase_id INT NOT NULL,
	descripcion VARCHAR(30) NOT NULL,
	PRIMARY KEY (tipo_clase_id)
);

CREATE TABLE ambiente (
	ambiente_id INT NOT NULL,
	nombre VARCHAR(30) NOT NULL,
	facultad_id INT NOT NULL,
	tipo_id INT NOT NULL,
	PRIMARY KEY (ambiente_id)
);

CREATE TABLE clase (
	clase_id INT NOT NULL,
	dia CHAR(1),
	hora_inicio TIME NOT NULL,
	hora_fin TIME NOT NULL,
	ambiente_id INT NOT NULL,
	grupo_id INT NOT NULL,
	tipo_clase_id INT NOT NULL,
	PRIMARY KEY (clase_id)
);

CREATE TABLE distrito (
	distrito_id INT NOT NULL,
	nombre VARCHAR(90) NOT NULL,
	provincia_id INT NOT NULL,
	PRIMARY KEY (distrito_id)
);

CREATE TABLE departamento_academico (
	departamento_id INT NOT NULL,
	nombre VARCHAR(90) NOT NULL,
	facultad_id INT NOT NULL,
	PRIMARY KEY (departamento_id)
);

CREATE TABLE periodo_academico (
	periodo_academico_id INT NOT NULL,
	nombre VARCHAR(90) NOT NULL,
	fecha_inicio DATE NOT NULL,
	fecha_fin DATE NOT NULL,
	facultad_id INT NOT NULL,
	tipo_periodo_id INT NOT NULL,
	PRIMARY KEY (periodo_academico_id)
);

CREATE TABLE docente (
	usuario_id INT NOT NULL,
	PRIMARY KEY (usuario_id)
);

CREATE TABLE asignatura (
	asignatura_id INT NOT NULL,
	nombre VARCHAR(90) NOT NULL,
	codigo VARCHAR(10) NOT NULL,
	cantidad_de_creditos INT NOT NULL,
	ciclo INT NOT NULL,
	plan_de_estudios_id INT NOT NULL,
	tipo_asignatura_id INT NOT NULL,
	PRIMARY KEY (asignatura_id)
);

CREATE TABLE asistencia (
	asistencia_id INT NOT NULL,
	verificacion TINYINT NOT NULL,
	usuario_id INT NOT NULL,
	sesion_id INT NOT NULL,
	PRIMARY KEY (asistencia_id)
);

CREATE TABLE programacion_evaluacion (
	programacion_id INT NOT NULL,
	fecha DATE NOT NULL,
	hora_inicio DATE NOT NULL,
	hora_fin DATE NOT NULL,
	peso DOUBLE NOT NULL,
	tipo_evaluacion_id INT NOT NULL,
	PRIMARY KEY (programacion_id)
);

CREATE TABLE institucion (
	institucion_id INT NOT NULL,
	nombre VARCHAR(90) NOT NULL,
	siglas VARCHAR(10) NOT NULL,
	PRIMARY KEY (institucion_id)
);

CREATE TABLE tipo_asignatura (
	tipo_asignatura_id INT NOT NULL,
	descripcion VARCHAR(30) NOT NULL,
	PRIMARY KEY (tipo_asignatura_id)
);

CREATE TABLE plan_de_estudio (
	plan_de_estudios_id INT NOT NULL,
	nombre VARCHAR(30) NOT NULL,
	esta_vigente TINYINT NOT NULL,
	anio_de_publicacion INT NOT NULL,
	escuela_id INT NOT NULL,
	PRIMARY KEY (plan_de_estudios_id)
);

CREATE TABLE comentario_matriculado (
	matricula_id INT NOT NULL,
	comentario_id INT NOT NULL,
	nota_final DOUBLE NOT NULL,
	comentario VARCHAR(255),
	PRIMARY KEY (comentario_id)
);

CREATE TABLE tipo_usuario (
	tipo_usuario_id INT NOT NULL,
	nombre VARCHAR(30) NOT NULL,
	PRIMARY KEY (tipo_usuario_id)
);

CREATE TABLE tipo_periodo (
	tipo_periodo_id INT NOT NULL,
	nombre VARCHAR(30) NOT NULL,
	PRIMARY KEY (tipo_periodo_id)
);

CREATE TABLE sede (
	sede_id INT NOT NULL,
	nombre VARCHAR(90) NOT NULL,
	direccion VARCHAR(255) NOT NULL,
	institucion_id INT NOT NULL,
	distrito_id INT NOT NULL,
	PRIMARY KEY (sede_id)
);

CREATE TABLE estado (
	estado_id INT NOT NULL,
	descripcion VARCHAR(10) NOT NULL,
	PRIMARY KEY (estado_id)
);

ALTER TABLE sesion ADD CONSTRAINT sesion_clase_fk FOREIGN KEY (clase_id)
	REFERENCES clase (clase_id);

ALTER TABLE docente ADD CONSTRAINT docente_usuario_fk FOREIGN KEY (usuario_id)
	REFERENCES usuario (usuario_id);

ALTER TABLE docente_x_departamento ADD CONSTRAINT docente_x_departamento_departamento_academico_fk FOREIGN KEY (departamento_id)
	REFERENCES departamento_academico (departamento_id);

ALTER TABLE alumno ADD CONSTRAINT alumno_usuario_fk FOREIGN KEY (usuario_id)
	REFERENCES usuario (usuario_id);

ALTER TABLE grupo ADD CONSTRAINT grupo_periodo_academico_fk FOREIGN KEY (periodo_academico_id)
	REFERENCES periodo_academico (periodo_academico_id);

ALTER TABLE clase ADD CONSTRAINT clase_tipo_clase_fk FOREIGN KEY (tipo_clase_id)
	REFERENCES tipo_clase (tipo_clase_id);

ALTER TABLE ambiente ADD CONSTRAINT ambiente_facultad_fk FOREIGN KEY (facultad_id)
	REFERENCES facultad (facultad_id);

ALTER TABLE usuario ADD CONSTRAINT usuario_tipo_usuario_fk FOREIGN KEY (tipo_usuario_id)
	REFERENCES tipo_usuario (tipo_usuario_id);

ALTER TABLE sede ADD CONSTRAINT sede_institucion_fk FOREIGN KEY (institucion_id)
	REFERENCES institucion (institucion_id);

ALTER TABLE periodo_academico ADD CONSTRAINT periodo_academico_tipo_periodo_fk FOREIGN KEY (tipo_periodo_id)
	REFERENCES tipo_periodo (tipo_periodo_id);

ALTER TABLE clase ADD CONSTRAINT clase_ambiente_fk FOREIGN KEY (ambiente_id)
	REFERENCES ambiente (ambiente_id);

ALTER TABLE periodo_academico ADD CONSTRAINT periodo_academico_facultad_fk FOREIGN KEY (facultad_id)
	REFERENCES facultad (facultad_id);

ALTER TABLE asistencia ADD CONSTRAINT asistencia_usuario_fk FOREIGN KEY (usuario_id)
	REFERENCES usuario (usuario_id);

ALTER TABLE docente_x_departamento ADD CONSTRAINT docente_x_departamento_docente_fk FOREIGN KEY (usuario_id)
	REFERENCES docente (usuario_id);

ALTER TABLE grupo ADD CONSTRAINT grupo_asignatura_fk FOREIGN KEY (asignatura_id)
	REFERENCES asignatura (asignatura_id);

ALTER TABLE departamento_academico ADD CONSTRAINT departamento_academico_facultad_fk FOREIGN KEY (facultad_id)
	REFERENCES facultad (facultad_id);

ALTER TABLE asignatura ADD CONSTRAINT asignatura_tipo_asignatura_fk FOREIGN KEY (tipo_asignatura_id)
	REFERENCES tipo_asignatura (tipo_asignatura_id);

ALTER TABLE evaluacion ADD CONSTRAINT evaluacion_grupo_fk FOREIGN KEY (grupo_id)
	REFERENCES grupo (grupo_id);

ALTER TABLE alumno_matriculado ADD CONSTRAINT alumno_matriculado_alumno_fk FOREIGN KEY (usuario_id)
	REFERENCES alumno (usuario_id);

ALTER TABLE alumno_matriculado ADD CONSTRAINT alumno_matriculado_grupo_fk FOREIGN KEY (grupo_id)
	REFERENCES grupo (grupo_id);

ALTER TABLE distrito ADD CONSTRAINT distrito_provincia_fk FOREIGN KEY (provincia_id)
	REFERENCES provincia (provincia_id);

ALTER TABLE sede ADD CONSTRAINT sede_distrito_fk FOREIGN KEY (distrito_id)
	REFERENCES distrito (distrito_id);

ALTER TABLE alumno ADD CONSTRAINT alumno_eap_fk FOREIGN KEY (escuela_id)
	REFERENCES eap (escuela_id);

ALTER TABLE eap ADD CONSTRAINT eap_facultad_fk FOREIGN KEY (facultad_id)
	REFERENCES facultad (facultad_id);

ALTER TABLE comentario_matriculado ADD CONSTRAINT comentario_matriculado_alumno_matriculado_fk FOREIGN KEY (matricula_id)
	REFERENCES alumno_matriculado (matricula_id);

ALTER TABLE programacion_evaluacion ADD CONSTRAINT programacion_evaluacion_tipo_evaluacion_fk FOREIGN KEY (tipo_evaluacion_id)
	REFERENCES tipo_evaluacion (tipo_evaluacion_id);

ALTER TABLE evaluacion_x_alumno ADD CONSTRAINT evaluacion_x_alumno_evaluacion_fk FOREIGN KEY (evaluacion_id)
	REFERENCES evaluacion (evaluacion_id);

ALTER TABLE usuario ADD CONSTRAINT usuario_estado_fk FOREIGN KEY (estado_id)
	REFERENCES estado (estado_id);

ALTER TABLE clase ADD CONSTRAINT clase_grupo_fk FOREIGN KEY (grupo_id)
	REFERENCES grupo (grupo_id);

ALTER TABLE ambiente ADD CONSTRAINT ambiente_tipo_ambiente_fk FOREIGN KEY (tipo_id)
	REFERENCES tipo_ambiente (tipo_id);

ALTER TABLE plan_de_estudio ADD CONSTRAINT plan_de_estudio_eap_fk FOREIGN KEY (escuela_id)
	REFERENCES eap (escuela_id);

ALTER TABLE asignatura ADD CONSTRAINT asignatura_plan_de_estudio_fk FOREIGN KEY (plan_de_estudios_id)
	REFERENCES plan_de_estudio (plan_de_estudios_id);

ALTER TABLE grupo ADD CONSTRAINT grupo_docente_fk FOREIGN KEY (docente_id)
	REFERENCES docente (usuario_id);

ALTER TABLE evaluacion_x_alumno ADD CONSTRAINT evaluacion_x_alumno_alumno_matriculado_fk FOREIGN KEY (matricula_id)
	REFERENCES alumno_matriculado (matricula_id);

ALTER TABLE asistencia ADD CONSTRAINT asistencia_sesion_fk FOREIGN KEY (sesion_id)
	REFERENCES sesion (sesion_id);

ALTER TABLE facultad ADD CONSTRAINT facultad_sede_fk FOREIGN KEY (sede_id)
	REFERENCES sede (sede_id);

ALTER TABLE evaluacion ADD CONSTRAINT evaluacion_programacion_evaluacion_fk FOREIGN KEY (programacion_id)
	REFERENCES programacion_evaluacion (programacion_id);

