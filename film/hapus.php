<?php
include 'koneksi.php';

//jika benar mendapatkan GET id dari URL
if(isset($_GET['kode_film'])){
	//membuat variabel $id yang menyimpan nilai dari $_GET['id']
	$kode_film = $_GET['kode_film'];

	//melakukan query ke database, dengan cara SELECT data yang memiliki id yang sama dengan variabel $id
	$cek = mysqli_query($connect, "SELECT * FROM film WHERE kode_film='$kode_film'") or die(mysqli_error($connect));

	//jika query menghasilkan nilai > 0 maka eksekusi script di bawah
	if(mysqli_num_rows($cek) > 0){
		//query ke database DELETE untuk menghapus data dengan kondisi id=$id
		$del = mysqli_query($connect, "DELETE FROM film WHERE kode_film='$kode_film'") or die(mysqli_error($connect));
		if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="index.php?page=tampil_filem";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="index.php?page=tampil_filem";</script>';
		}
	}else{
		echo '<script>alert("Kode tidak ditemukan di database."); document.location="index.php?page=tampil_filem";</script>';
	}
}else{
	echo '<script>alert("Kode tidak ditemukan di database."); document.location="index.php?page=tampil_filem";</script>';
}
?>