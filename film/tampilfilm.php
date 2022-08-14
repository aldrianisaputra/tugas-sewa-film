<?php
include 'koneksi.php';
?>


<div class="container" style="margin-top: 20px;">
    <center>
        <font size="6">Data Film</font>
    </center>
    <hr>
    <a href="index.php?page=tambah_filem"><button class="btn btn-dark right">Tambah Data</button></a>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Kode Film</th>
                    <th>Jenis</th>
                    <th>Judul</th>
                    <th>Jumlah Keping</th>
                    <th>Jumlah Film</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM film";
                $query =  mysqli_query($connect, $sql);
                while ($film = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" . $film['kode_film'] . "</td>";
                    echo "<td>" . $film['jenis'] . "</td>";
                    echo "<td>" . $film['judul'] . "</td>";
                    echo "<td>" . $film['jmlh_keping'] . "</td>";
                    echo "<td>" . $film['jmlh_film'] . "</td>";

                    echo "<td>";
                    echo "<a href='index.php?page=edit_filem&kode_film=".$film['kode_film'] . "'><button type='button' class='btn btn-warning btn-sm'>Edit</button></a>  ";
                    echo "<a href='index.php?page=hapus_filem&kode_film=" . $film['kode_film'] . "'><button type='button' class='btn btn-danger btn-sm 'onclick='return confirm(\'Yakin ingin menghapus data ini?\')>Hapus</button></a>";

                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>

</html>