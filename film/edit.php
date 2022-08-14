<?php
include 'koneksi.php';
?>

<div class="container" style="margin-top:20px">
    <center>
        <font size="6">Edit Data</font>
    </center>

    <hr>

    <?php
    $kode_film = $_GET['kode_film'];
    $sql = "SELECT * FROM film WHERE kode_film='$kode_film'";
    $query = mysqli_query($connect, $sql);
    $film = mysqli_fetch_assoc($query);

    if (mysqli_num_rows($query) < 1) {
        die("data tidak ditemukan...");
    }
    ?>
    <?php
    //jika tombol simpan di tekan/klik
    if (isset($_POST['simpan'])) {
        $kode_film = $_POST['kode_film'];
        $jenis = $_POST['jenis'];
        $judul = $_POST['judul'];
        $jmlh_keping = $_POST['jmlh_keping'];
        $jmlh_film = $_POST['jmlh_film'];

        $sql = "UPDATE film SET jenis='$jenis', judul='$judul', jmlh_keping='$jmlh_keping', jmlh_film='$jmlh_film' WHERE kode_film='$kode_film'";
        $query = mysqli_query($connect, $sql);

        if ($sql) {
            echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=tampil_filem";</script>';
        } else {
            echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
        }
    }
    ?>

    <form action="index.php?page=edit_filem&kode_film=<?php echo $kode_film; ?>" method="post">
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
            <div class="col-md-6 col-sm-6">
            <input type="hidden" class="form-control" name="kode_film" value="<?php echo $film['kode_film']?>"/>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="jenis" class="form-control" value="<?php echo $film['jenis']; ?>" required>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Judul</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="judul" class="form-control" value="<?php echo $film['judul']; ?>" required>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Jumlah Keping</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="jmlh_keping" class="form-control" value="<?php echo $film['jmlh_keping']; ?>" required>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Jumlah Film</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="jmlh_film" class="form-control" value="<?php echo $film['jmlh_film']; ?>" required>
            </div>
        </div>
        <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
                <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
                <a href="index.php?page=tampil_filem" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </form>
</div>