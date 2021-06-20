<?php

$artis = new App\Artis();
$rows = $artis->tampil();

?>

<h2>Rekomendasi Artist</h2>

<a href="index.php?page=artis_input">Tambah</a>
<table>

    <tr>
        <th>NAMA</th>
        <th>EDIT</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
        <tr>
            <td><?php echo $row['artis_name']; ?></td>
            <td><a href="index.php?page=artis_update&id=<?php echo $row['artis_id']; ?>">Edit</a></td>
        </tr>
    <?php } ?>

</table>

