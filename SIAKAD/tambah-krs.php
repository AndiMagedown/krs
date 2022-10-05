<?php
include 'koneksi.php';
include 'navbar.php';
?>

<h3> <center>Input Data Mahasiswa</center>  </h3>
<div class="container">
<a class = "btn btn-primary" href="krs.php"> Data KRS </a>
<form action = "" method="POST">
    <div class="form-group">
      <label for="nim">NIM</label>
      <input type="text" name="nid" class="form-control"  placeholder="Masukan NIM" required>
    <div class="form-group">
  <div class="form-group">
    <label for="nama">Nama Mahasiswa</label>
    <input type="text" name="nama_dosen" class="form-control"  placeholder="Masukan Nama Mahasiswa" required>
  <div class="form-group">
    <label for="prodi">Prodi</label>
    <input type="text" name="kode_mk" class="form-control"  placeholder="Masukan Prodi" required>
  <div class="form-group">
    <label for="asal">Mata Kuliah</label>
    <input type="text" name="mk" class="form-control"  placeholder="Masukan Mata Kuliah" required>
  <div class="form-group">
    <label for="asal">Jadwal Kuliah</label>
    <input type="text" name="jadwal_kuliah" class="form-control"  placeholder="Masukan Jadwal Kuliah" required>
  <div class="form-group">
    <label for="asal">Ruang Kuliah</label>
    <input type="text" name="Ruang_kuliah" class="form-control"  placeholder="Masukan Ruang Kuliah" required>
  <div class="form-group">
    <label for="asal">Nama Dosen</label>
    <input type="text" name="nama_dosen" class="form-control"  placeholder="Masukan Nama Dosen" required>
    <br>
    <td><input class="btn btn-success" type="submit" name="simpan" value="simpan"></td>
    </div>
  <?php
    include 'koneksi.php';
    if (isset($_POST['simpan'])){
    $insert = mysqli_query($conn, "INSERT INTO tb_dosen VALUES 
                ('".$_POST['nid']."',
                '".$_POST['nama_dosen']."',
                '".$_POST['kode_mk']."',
                '".$_POST['mk']."')");
        if ($insert){
            echo "berhasil disimpan";
        } else {
            echo "gagal disimpan";
        }
    }
    ?>
</form>