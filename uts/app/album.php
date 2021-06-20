<?php

namespace App;

class Album extends Koneksi {

    public function __construct ()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_album, tb_artist";
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
        $i_nama = $_POST['i_nama'];
        $i_id_artis = $_POST['i_id_artis'];

        $sql = "INSERT INTO tb_album VALUES (NULL, :album_name, :album_id_artis)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":album_name", $i_nama);
        $stmt->bindParam(":album_id_artis", $i_id_artis);
        $stmt->execute();
    }

    public function update()
    {
        $i_nama = $_POST['i_nama'];
        $i_id_artis = $_POST['i_id_artis'];

        $sql = "UPDATE tb_album SET album_id=:album_id, album_name=:album_name WHERE album_id=:album_id ";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":album_name", $i_nama);
        $stmt->bindParam(":album_id_artis", $i_id_artis);
        $stmt->execute();
    }
}