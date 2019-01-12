<?php
require_once "./connect.php";

$sql = 'SELECT * FROM tb_siswa';
$result = mysqli_query($connect, $sql);

if ($result) {
    if (mysqli_num_rows($result)) {
    ?>
        <table border = 1 cellspacing=1 cellpadding=5 class="tabel">
            <br><h2 class="judul">Data Siswa</h2>
            <tr class="data">
                <th>No</th>
                <th width=100>NIS</th>
                <th width=150>Nama</th>
                <th>Alamat</th>
            </tr>
            <?php
                $i = 1;
                while ($row = mysqli_fetch_row($result)) {
            ?>
                <tr>
                    <th>
                        <?php echo $i;?>
                    </th>
                    <th>
                        <?php echo $row[0];?>
                    </th>
                    <th>
                        <?php echo $row[1];?>
                    </th>
                    <th>
                        <?php echo $row[2];?>
                    </th>
                </tr>
                <?php
                    $i++;
                }
                ?>
        </table>
    <?php
}
else{
        echo 'Data Tidak Ditemukan';
}
mysqli_close($connect);
}
?>