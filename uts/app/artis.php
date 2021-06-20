<?php

namespace App;

class Artis extends Koneksi {

    public function __construct ()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_artist";
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

        $sql = "INSERT INTO tb_artist VALUES (NULL, :artis_name)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":artis_name", $i_nama);
        $stmt->execute();
    }

    public function update()
    {
        $i_nama = $_POST['i_nama'];

        $sql = "UPDATE tb_artist SET artis_id=:artis_id, artis_name=:artis_name WHERE artis_id=:artis_id ";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":artis_name", $i_nama);
        $stmt->execute();
    }
}