<?php

$playlist = new App\Playlist();
$rows = $playlist->tampil();

?>

<h2>Daftar Playlist <?php echo $_SESSION['user_name']; ?></h2>

<a href="index.php?page=playlist_input">Tambah</a>
<table>

    <tr>
        <th>ARTIST</th>
        <th>ALBUM</th>
        <th>TRACK</th>
        <th>PLAYLIST</th>
        <th>EDIT</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
        <tr>
            <td><?php echo $row['artis_id']; ?> - <?php echo $row['artis_name']; ?></td>
            <td><?php echo $row['album_id']; ?> - <?php echo $row['album_name']; ?></td>
            <td><?php echo $row['track_id']; ?> - <?php echo $row['track_name']; ?></td>
            <td><?php echo $row['played']; ?></td>
            <td><a href="index.php?page=playlist_update&id=<?php echo $row['album_id']; ?>">Edit</a></td>
        </tr>
    <?php } ?>

</table>