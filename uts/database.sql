CREATE TABLE tb_artist (
	artis_id SMALLINT(5) NOT NULL AUTO_INCREMENT,
	artis_name CHAR(128) NOT NULL,
	PRIMARY KEY(artis_id),
	UNIQUE KEY(artis_name)
);

CREATE TABLE tb_album (
	album_id SMALLINT(4) NOT NULL AUTO_INCREMENT,
	album_name CHAR(128) NOT NULL,
	album_id_artist SMALLINT(5) NOT NULL,
	PRIMARY KEY(album_id),
	UNIQUE KEY(album_name),
	FOREIGN KEY(album_id_artist) REFERENCES tb_artist(artis_id) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE tb_track (
	track_id SMALLINT(3) NOT NULL AUTO_INCREMENT,
	track_name CHAR(128) NOT NULL,
	track_id_artist SMALLINT(5) NOT NULL,
	track_id_album SMALLINT(4) NOT NULL,
	time DECIMAL(5,2) NOT NULL,
	PRIMARY KEY(track_id),
	UNIQUE KEY(track_name),
	FOREIGN KEY(track_id_artist) REFERENCES tb_artist(artis_id) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(track_id_album) REFERENCES tb_album(album_id) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE tb_played (
	played_id_artist SMALLINT(5) NOT NULL,
	played_id_album SMALLINT(4) NOT NULL,
	played_id_track SMALLINT(3) NOT NULL,
	played TIMESTAMP,
	FOREIGN KEY(played_id_artist) REFERENCES tb_artist(artis_id) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(played_id_album) REFERENCES tb_album(album_id) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(played_id_track) REFERENCES tb_track(track_id) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE tb_user (
	user_id INT(11) NOT NULL AUTO_INCREMENT,
	user_name VARCHAR(50) NOT NULL,
	user_password VARCHAR(256) NOT NULL,
	PRIMARY KEY(user_id),
	UNIQUE KEY(user_name)
);