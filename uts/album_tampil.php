<?php

$album = new App\Album();
$rows = $album->tampil();

?>

<h2>Kumpulan Album</h2>

<a href="index.php?page=album_input">Tambah</a>
<table>

    <tr>
        <th>NAMA</th>
        <th>ARTIST</th>
        <th>EDIT</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
        <tr>
            <td><?php echo $row['album_name']; ?></td>
            <td><?php echo $row['artis_id']; ?> - <?php echo $row['artis_name']; ?></td>
            <td><a href="index.php?page=album_update&id=<?php echo $row['album_id']; ?>">Edit</a></td>
        </tr>
    <?php } ?>

</table>

