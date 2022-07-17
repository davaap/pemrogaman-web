<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM item WHERE id='$id'";
$res = $koneksi->query($sql);
$row = $res->fetch_array(MYSQLI_BOTH);

if (isset($_GET['op'])) {
  $op = $_GET['op'];
}

if ($op == 'edit') {
  $id = $_GET['id'];
  $sql1 = "select * from item where id = '$id'";
  $q1 = mysqli_query($koneksi, $sql1);
  $r1 = mysqli_fetch_array($q1);

  $id           = $r1['id'];
  $item_grp_id  = $r1['item_grp_id'];
  $barcode      = $r1['barcode'];
  $nama         = $r1['nama'];
  $satuan_id    = $r1['satuan_id'];
  $hpp          = $r1['hpp'];
  $crt_date     = $r1['crt_date'];
  $upd_date     = $r1['upd_date'];
}

?>

<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>
  <div class="mx-auto">
    <a href="data.php" type="button" class="btn btn-info">LIHAT</a>
    <!--memasukan data-->
    <div class="card" style="width: 500px;">
      <div class="card-header text-white bg-secondary">
        Buat / Edit Data
      </div>
      <form action="tambah_edit_hapus_data_proses.php" method="post" class="list-group-item">
        <!-- id-->
        <div class="mb-3">
          <label for="id" class="form-label">ID</label>
          <input type="text" class="form-control" id="id" name="id" value="<?php echo $id ?>">
        </div>
        <!-- item_grp_id-->
        <div class="mb-3">
          <label for="item_grp_id" class="form-label">ITEM GRP ID</label>
          <select class="form-control" id="item_grp_id" name="item_grp_id">
            <?php
            $sql_item_grp = "SELECT * FROM item_grp";
            $res_item_grp = $koneksi->query($sql_item_grp);
            while ($item_grp = $res_item_grp->fetch_array(MYSQLI_BOTH)) {
              if ($item_grp['id'] == $row['item_grp_id'])
                $select = 'selected="selected"';
              else
                $select = '';
              echo "<option value='" . $item_grp['id'] . "' $select>" . $item_grp['nama'] . "</option>";
            }
            ?>
          </select>
        </div>
        <!-- barcode-->
        <div class="mb-3">
          <label for="barcode" class="form-label">BARCODE</label>
          <input type="text" class="form-control" id="barcode" name="barcode" value="<?php echo $barcode ?>">
        </div>
        <!-- nama-->
        <div class="mb-3">
          <label for="nama" class="form-label">NAMA</label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
        </div>
        <!--satuan_id-->
        <div class="mb-3">
          <label for="satuan_id" class="form-label">SATUAN ID</label>
          <select class="form-control" id="satuan_id" name="satuan_id">
            <?php
            $sql_satuan = "SELECT * FROM satuan";
            $res_satuan = $koneksi->query($sql_satuan);
            while ($satuan = $res_satuan->fetch_array(MYSQLI_BOTH)) {
              if ($satuan['id'] == $row['satuan_id'])
                $select = 'selected="selected"';
              else
                $select = '';
              echo "<option value='" . $satuan['id'] . "' $select>" . $satuan['nama'] . "</option>";
            }
            ?>
          </select>
        </div>
        <!--hpp-->
        <div class="mb-3">
          <label for="hpp" class="form-label">HPP</label>
          <input type="text" class="form-control" id="hpp" name="hpp" value="<?php echo $hpp ?>">
        </div>
        <!--crt_date-->
        <div class="mb-3">
          <label for="crt_date" class="form-label">CRT_DATE</label>
          <input type="text" class="form-control" id="crt_date" name="crt_date" value="<?php echo $crt_date ?>">
        </div>
        <!--upd_date-->
        <div class="mb-3">
          <label for="upd_date" class="form-label">UPD_DATE</label>
          <input type="text" class="form-control" id="upd_date" name="upd_date" value="<?php echo $upd_date ?>">
        </div>
        <div class="col-4">
          <input type="submit" name="perbarui" value="Perbarui" onclick="return confirm('Yakin mau diperbarui?')">
        </div>
      </form>
    </div>
  </div>
</body>

</html>