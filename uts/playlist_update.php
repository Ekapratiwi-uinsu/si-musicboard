<h2>Edit Data Playlist</h2>
<form action="playlist_proses.php" method="POST">
    <table>
    <tr>
            <td>ARTIST</td>
            <td>
                <select name="i_id_artis">
                <?php foreach ($rows as $row) { ?>
                    <option value="<?php echo $row['artis_id']; ?>"><?php echo $row['artis_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>ALBUM</td>
            <td>
                <select name="i_id_album">
                <?php foreach ($rows as $row) { ?>
                    <option value="<?php echo $row['album_id']; ?>"><?php echo $row['album_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>TRACK</td>
            <td><input type="text" name="i_id_track"></td>
        </tr>
        <tr>
            <td>PLAYLIST</td>
            <td><input type="text" name="played"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="EDIT" name="b_edit"></td>
        </tr>
    </table>
</form>