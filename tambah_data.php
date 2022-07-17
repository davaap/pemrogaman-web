<?php
include "koneksi.php";
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
        <!--memasukan id-->
        <div class="mb-3">
          <label for="id" class="form-label">ID</label>
          <input type="text" class="form-control" id="id" name="id">
        </div>
        <!--memasukan item_grp_id-->
        <div class="mb-3">
          <label for="item_grp_id" class="form-label">ITEM GRP ID</label>
          <select class="form-control" id="item_grp_id" name="item_grp_id">
            <?php
            $sql = "SELECT * FROM item_grp";
            $res = $koneksi->query($sql);
            while ($rows = $res->fetch_array(MYSQLI_BOTH)) {
              echo "<option value='" . $rows['id'] . "'>" . $rows['nama'] . "</option>";
            }
            ?>
          </select>
        </div>
        <!--memasukan barcode-->
        <div class="mb-3">
          <label for="barcode" class="form-label">BARCODE</label>
          <input type="text" class="form-control" id="barcode" name="barcode">
        </div>
        <!--memasukan nama-->
        <div class="mb-3">
          <label for="nama" class="form-label">NAMA</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <!--memasukan satuan_id-->
        <div class="mb-3">
          <label for="satuan_id" class="form-label">SATUAN ID</label>
          <select class="form-control" id="satuan_id" name="satuan_id">
            <?php
            $sql = "SELECT * FROM satuan";
            $res = $koneksi->query($sql);
            while ($rows = $res->fetch_array(MYSQLI_BOTH)) {
              echo "<option value ='" . $rows['id'] . "'>" . $rows['nama'] . "</option>";
            }
            ?>
          </select>
        </div>
        <!--memasukan hpp-->
        <div class="mb-3">
          <label for="hpp" class="form-label">HPP</label>
          <input type="text" class="form-control" id="hpp" name="hpp">
        </div>
        <div class="col-4">
          <input type="submit" name="simpan" value="Simpan data">
        </div>
      </form>
    </div>
  </div>
</body>

</html>