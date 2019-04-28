<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $id_pel=$_POST['id_pel'];
 $nama_pel=$_POST['nama_pel'];
 $alamat_pel=$_POST['alamat_pel'];
 $no_hp=$_POST['no_hp'];
 
 
 $q=mysqli_query($con,"INSERT INTO `pelanggan` (`id_pel`,`nama_pel`,`alamat_pel`,`no_hp`) VALUES ('$id_pel','$nama_pel','$alamat_pel','$no_hp')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
