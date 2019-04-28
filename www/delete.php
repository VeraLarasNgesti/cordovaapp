<?php
 include "db.php";
 if(isset($_GET['id_pel']))
 {
 $id_pel=$_GET['id_pel'];
 $q=mysqli_query($con,"delete from `pelanggan` where `id_pel`='$id_pel'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
