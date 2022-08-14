<?php
include 'koneksi.php';
?>

<div class="container" style="margin-top:20px">
    <center>
        <font size="6">Edit Data</font>
    </center>

    <hr>

    <?php
    $id_kelompokfilm = $_GET['id_kelompokfilm'];
    $sql = "SELECT * FROM kelompokfilm WHERE id_kelompokfilm='$id_kelompokfilm'";
    $query = mysqli_query($connect, $sql);
    $kelfi = mysqli_fetch_assoc($query);
    if (mysqli_num_rows($query) < 1) {
        die("data tidak ditemukan...");
    }

    ?>
    <?php
    if (isset($_POST['simpan'])) {
        $id_kelompokfilm = $_POST['id_kelompokfilm'];
        $jenis = $_POST['jenis'];
        $harga_sewa = $_POST['harga_sewa'];

        $sql = "UPDATE kelompokfilm SET id_kelompokfilm ='$id_kelompokfilm', jenis='$jenis', harga_sewa='$harga_sewa' WHERE id_kelompokfilm ='$id_kelompokfilm'";
        $query = mysqli_query($connect, $sql);
        if ($sql) {
            echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=tampil_film";</script>';
        } else {
            echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
        }
    }
    ?>

    <form action="index.php?page=edit_film&id_kelompokfilm=<?php echo $id_kelompokfilm; ?>" method="post">
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
            <div class="col-md-6 col-sm-6">
            <input type="hidden" class="form-control" name="id_kelompokfilm" value="<?php echo $kelfi['id_kelompokfilm']?>"/>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="jenis" class="form-control" value="<?php echo $kelfi['jenis']; ?>" required>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Harga Sewa</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="harga_sewa" class="form-control" value="<?php echo $kelfi['harga_sewa']; ?>" required>
            </div>
        </div>
        <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
                <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
                <a href="index.php?page=tampil_customer" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </form>
    </form>
</div>