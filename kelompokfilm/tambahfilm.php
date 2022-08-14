<?php
include 'koneksi.php';
?>

<center>
    <font size="6">Tambah Data</font>
</center>
<hr>
<?php
if (isset($_POST['simpan'])) {
    $id_kelfi = $_POST['id_kelfi'];
    $jenis_genre = $_POST['jenis_genre'];
    $hrga_sewa = $_POST['hrga_sewa'];

    $sql = "INSERT INTO kelompokfilm (id_kelompokfilm, jenis, harga_sewa) VALUES ('$id_kelfi', '$jenis_genre', '$hrga_sewa')
    ";
    $query = mysqli_query($connect, $sql);
    if ($sql) {
        echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_film";</script>';
    } else {
        echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
    }
}
?>
<form action="index.php?page=tambah_film" method="post">
<div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">ID Kelompok Film</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" name="id_kelfi" class="form-control" size="4" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="jenis_genre" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Harga Sewa</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="hrga_sewa" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
        </div>
    
</form>