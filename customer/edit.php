<?php
include 'koneksi.php';
?>

<div class="container" style="margin-top:20px">
    <center>
        <font size="6">Edit Data</font>
    </center>

    <hr>

    <?php
    $no_identitas = $_GET['no_identitas'];
    $sql = "SELECT * FROM customer WHERE no_identitas='$no_identitas'";
    $query = mysqli_query($connect, $sql);
    $cus = mysqli_fetch_assoc($query);

    if (mysqli_num_rows($query) < 1) {
        die("data tidak ditemukan...");
    }
    ?>
    <?php
    //jika tombol simpan di tekan/klik
    if (isset($_POST['simpan'])) {
        $no_identitas = $_POST['no_identitas'];
        $jenis_identitas = $_POST['jenis_identitas'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];

        $sql = "UPDATE customer SET jenis_identitas='$jenis_identitas', nama='$nama', alamat='$alamat' WHERE no_identitas='$no_identitas'";
        $query = mysqli_query($connect, $sql);

        if ($sql) {
            echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=tampil_customer";</script>';
        } else {
            echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
        }
    }
    ?>

    <form action="index.php?page=edit_customer&no_identitas=<?php echo $no_identitas; ?>" method="post">
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
            <div class="col-md-6 col-sm-6">
            <input type="hidden" class="form-control" name="no_identitas" value="<?php echo $cus['no_identitas']?>"/>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Identitas</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="jenis_identitas" class="form-control" value="<?php echo $cus['jenis_identitas']; ?>" required>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="nama" class="form-control" value="<?php echo $cus['nama']; ?>" required>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="alamat" class="form-control" value="<?php echo $cus['alamat']; ?>" required>
            </div>
        </div>
        <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
                <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
                <a href="index.php?page=tampil_customer" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </form>
</div>