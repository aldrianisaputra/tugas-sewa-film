<?php
include 'koneksi.php';
?>

<center>
    <font size="6">Tambah Data</font>
</center>
<hr>
<?php
if (isset($_POST['simpan'])) {
    $kode_film = $_POST['kode_film'];
    $jenis = $_POST['jenis'];
    $judul = $_POST['judul'];
    $jmlh_keping = $_POST['jmlh_keping'];
    $jmlh_film = $_POST['jmlh_film'];

    $sql = "INSERT INTO film (kode_film, jenis, judul, jmlh_keping, jmlh_film) VALUES ('$kode_film', '$jenis', '$judul','$jmlh_keping', '$jmlh_film'  )
    ";
    $query = mysqli_query($connect, $sql);
    if ($sql) {
        echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_filem";</script>';
    } else {
        echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
    }
}
?>
<form action="index.php?page=tambah_filem" method="post">
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Kode Film</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" name="kode_film" class="form-control" size="4" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="jenis" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Judul</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="judul" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Jumlah Keping</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="jmlh_keping" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Jumlah Film</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="jmlh_film" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
        </div>
</form>