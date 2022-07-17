<?php
include "koneksi.php";

//simpan data
if (isset($_POST['simpan'])){
    $id           = $_POST['id'];
    $nama         = $_POST['nama'];
    $item_grp_id  = $_POST['item_grp_id'];
    $barcode      = $_POST['barcode'];
    $satuan_id    = $_POST['satuan_id']; 
    $hpp          = $_POST['hpp'];
    $crt_date     = date("Y-m-d H:i:s");


      $sql1 = "INSERT INTO item (id, nama, item_grp_id, barcode, satuan_id, hpp, crt_date)
            VALUES ('$id', '$nama', '$item_grp_id', '$barcode', '$satuan_id', '$hpp', '$crt_date')";

    if (!$res = $koneksi->query($sql1)){
        echo $sql1;
      }else{
        header("Location: data.php");
      }
    }
 
 //ubah data
if(isset($_POST['perbarui'])){

  $id           = $_POST['id'];
  $nama         = $_POST['nama'];
  $item_grp_id  = $_POST['item_grp_id'];
  $barcode      = $_POST['barcode'];
  $satuan_id    = $_POST['satuan_id'];
  $hpp          = $_POST['hpp'];
  $upd_date     = date("Y-m-d H:i:s");
  
  
  $sql = "UPDATE item
      SET nama='$nama', item_grp_id='$item_grp_id', barcode='$barcode', satuan_id='$satuan_id',hpp='$hpp',upd_date='$upd_date' WHERE id='$id'";
  if(!$res = $koneksi->query($sql))
    echo $sql;
  else
    header("Location: data.php");
}

//hapus data
if (isset($_GET['op'])) {
   $op= $_GET['op'];
  }
  
  if ($op == 'delete') {
   $id = $_GET['id'];
    $sql1 = "delete from item where id = '$id'";
    $q1   = mysqli_query($koneksi,$sql1);
  
   header("Location: data.php");
    }
