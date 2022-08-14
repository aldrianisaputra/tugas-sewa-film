<?php
include 'koneksi.php';
?>


<div class="container" style="margin-top: 20px;">
    <center>
        <font size="6">Data Kelompok Film</font>
    </center>
    <hr>
    <a href="index.php?page=tambah_film"><button class="btn btn-dark right">Tambah Data</button></a>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID kelompok film</th>
                    <th>Jenis</th>
                    <th>Harga Sewa</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
            $sql = "SELECT * FROM kelompokfilm";
            $query =  mysqli_query($connect, $sql);
            while ($kelfi = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $kelfi['id_kelompokfilm'] . "</td>";
                echo "<td>" . $kelfi['jenis'] . "</td>";
                echo "<td>" . $kelfi['harga_sewa'] . "</td>";

                echo "<td>";
                echo "<a href='index.php?page=edit_film&id_kelompokfilm=" . $kelfi['id_kelompokfilm'] . "'><button type='button' class='btn btn-warning btn-sm'>Edit</button></a>  ";
                echo "<a href='index.php?page=hapus_film&id_kelompokfilm=" . $kelfi['id_kelompokfilm'] . "'><button type='button' class='btn btn-danger btn-sm'>Hapus</button></a>";

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