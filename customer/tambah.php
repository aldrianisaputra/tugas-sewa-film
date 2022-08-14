<?php
include 'koneksi.php';
?>

<center>
    <font size="6">Tambah Data</font>
</center>
<hr>
<?php
if (isset($_POST['simpan'])) {
    $no_identitas = $_POST['no_identitas'];
    $jenis_identitas = $_POST['jenis_identitas'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $cek = mysqli_query($connect, "SELECT * FROM customer WHERE no_identitas='$no_identitas'") or die(mysqli_error($connect));

    if (mysqli_num_rows($cek) == 0) {
        $sql = mysqli_query($connect, "INSERT INTO customer(no_identitas, jenis_identitas, nama, alamat) VALUES('$no_identitas', '$jenis_identitas', '$nama', '$alamat')") or die(mysqli_error($connect));

        if ($sql) {
            echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_customer";</script>';
        } else {
            echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
        }
    }
}
?>
<form action="index.php?page=tambah_customer" method="post">
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">No Identitas</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" name="no_identitas" class="form-control" size="4" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Identitas</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="jenis_identitas" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="nama" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="alamat" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
        </div>
</form>