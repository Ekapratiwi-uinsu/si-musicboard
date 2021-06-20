<h2>Edit Data Album</h2>
<form action="album_proses.php" method="POST">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="i_nama"></td>
        </tr>
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
            <td></td>
            <td><input type="submit" value="EDIT" name="b_edit"></td>
        </tr>
    </table>
</form>