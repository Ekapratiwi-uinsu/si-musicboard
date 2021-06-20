<?php

namespace App;

class Playlist extends Koneksi {

    public function __construct ()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_artist, tb_album, tb_track, tb_played";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function input()
    {
        $i_id_artis = $_POST['i_id_artis'];
        $i_id_album = $_POST['i_id_album'];
        $i_id_track = $_POST['i_id_track'];
        $i_played = $_POST['i_played'];

        $sql = "INSERT INTO tb_album VALUES (NULL, :played_id_artis, :played_id_album, :played_id_track, :played)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":played_id_artis", $i_id_artis);
        $stmt->bindParam(":played_id_album", $i_id_album);
        $stmt->bindParam(":played_id_track", $i_id_track);
        $stmt->bindParam(":played", $i_played);
        $stmt->execute();
    }

    public function update()
    {
        $i_id_artis = $_POST['i_id_artis'];
        $i_id_album = $_POST['i_id_album'];
        $i_id_track = $_POST['i_id_track'];
        $i_played = $_POST['i_played'];

        $sql = "UPDATE tb_played SET :played_id_artis=:played_id_artis, played_id_album=:played_id_album WHERE played_id_artis=:played_id_artis ";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":played_id_artis", $i_id_artis);
        $stmt->bindParam(":played_id_album", $i_id_album);
        $stmt->bindParam(":played_id_track", $i_id_track);
        $stmt->bindParam(":played", $i_played);
        $stmt->execute();
    }
}