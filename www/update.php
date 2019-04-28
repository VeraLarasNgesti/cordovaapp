<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id_pel=$_POST['id_pel'];
 $nama_pel=$_POST['nama_pel'];
 $alamat_pel=$_POST['alamat_pel'];
 $no_hp=$_POST['no_hp'];

 
 $q=mysqli_query($con,"UPDATE `pelanggan` SET `id_pel`='$id_pel',`nama_pel`='$nama_pel',`alamat_pel`='$alamat_pel',`no_hp`='$no_hp' where `id_pel`='$id_pel'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
