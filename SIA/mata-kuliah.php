<?php
include 'koneksi.php';
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Data Mata Kuliah</title>
</head>
<div class="container">
<br>
<h3><center> Data Mata Kuliah </center></h3>
</div>

<div class="container">
<a class = "btn btn-primary" href="tambah-mk.php"> Tambah Data</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Mata Kuliah</th>
      <th scope="col">Kode Mata Kuliah</th>
      <th scope="col">Ruang Kuliah</th>
      <th scope="col">Jadwal Kuliah</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <?php
      include ('koneksi.php');
      $no = 1;
      $query = mysqli_query($conn,"SELECT * FROM tb_mk");
        while    ($hasil = mysqli_fetch_assoc($query)){
    ?>    
    <tr>   
          <td><?php echo $no++; ?></td>
          <td><?php echo $hasil["nama_matakuliah"];?></td>
          <td><?php echo $hasil["kode_mk"];?></td>
          <td><?php echo $hasil["ruang_kuliah"];?></td>
          <td><?php echo $hasil["jadwal_kuliah"];?></td>
          <td>
            <a href="hapus-mk.php?kode_mk=<?php echo $hasil['kode_mk']?> "> Hapus</a>
          </td>
      </tr> 
      <?php
        }
      ?>
  </tr>
</table>
</div>

</body>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>