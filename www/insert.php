<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $no_hp=$_POST['no_hp'];
 
 
 $q=mysqli_query($con,"INSERT INTO `pelanggan` (`id`,`nama`,`alamat`,`no_hp`) VALUES ('$id','$nama','$alamat','$no_hp')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
