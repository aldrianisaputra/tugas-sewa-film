<?php
include 'koneksi.php';
?>


<div class="container" style="margin-top: 20px;">
    <center>
        <font size="6">Data Customer</font>
    </center>
    <hr>
    <a href="index.php?page=tambah_customer"><button class="btn btn-dark right">Tambah Data</button></a>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No Identitas</th>
                    <th>Jenis Identitas</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th> Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM customer";
                $query =  mysqli_query($connect, $sql);
                while ($cus = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" . $cus['no_identitas'] . "</td>";
                    echo "<td>" . $cus['jenis_identitas'] . "</td>";
                    echo "<td>" . $cus['nama'] . "</td>";
                    echo "<td>" . $cus['alamat'] . "</td>";

                    echo "<td>";
                    echo "<a href='index.php?page=edit_customer&no_identitas=".$cus['no_identitas'] . "'><button type='button' class='btn btn-warning btn-sm'>Edit</button></a>  ";
                    echo "<button type='button' class='btn btn-danger btn-sm  onclick='hapus()'</button> <a href='index.php?page=hapus_customer&no_identitas=" . $cus['no_identitas'] . "'> hapus </a>";

                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    function hapus() {
        var a = confirm('yakin hapus?');

        if ( a == false) {
            location: index.php
        }
    }
</script>
</body>
</html>