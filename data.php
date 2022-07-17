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
    <a href="tambah_data.php" type="button" class="btn btn-primary">TAMBAH</a>

    <!--mengeluarkan data-->
    <div class="card" style="width: 1500px;">
      <div class="card-header text-white bg-secondary">
        Data
      </div>
      <div class="list-group list-group-flush">
        <table class="table">
          <thead>
            <tr>
              <th></th>
              <th>ID</th>
              <th>ITEM_GRP_ID</th>
              <th>BARCODE</th>
              <th>NAMA</th>
              <th>SATUAN_ID</th>
              <th>HPP</th>
              <th>CRT_DATE</th>
              <th>UPD_DATE</th>
            </tr>
          <tbody>
            <?php
            $sql2   = "select * from item order by id desc";
            $q2   = mysqli_query($koneksi, $sql2);
            $urut = 1;
            while ($r2 = mysqli_fetch_array($q2)) {
              $id           = $r2['id'];
              $item_grp_id  = $r2['item_grp_id'];
              $barcode      = $r2['barcode'];
              $nama         = $r2['nama'];
              $satuan_id    = $r2['satuan_id'];
              $hpp          = $r2['hpp'];
              $crt_date     = $r2['crt_date'];
              $upd_date     = $r2['upd_date'];
              ?>
              <tr>
                <th><?php $urut++ ?></th>
                <td><?php echo $id ?></td>
                <td><?php echo $item_grp_id ?></td>
                <td><?php echo $barcode ?></td>
                <td><?php echo $nama ?></td>
                <td><?php echo $satuan_id ?></td>
                <td><?php echo $hpp ?></td>
                <td><?php echo $crt_date ?></td>
                <td><?php echo $upd_date ?></td>

                <!--ubah dan hapus-->
                <td>
                  <!--ubah-->
                  <a href="ubah_data.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Ubah</button></a>
                  <!--hapus-->
                  <a href="tambah_edit_hapus_data_proses.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin mau hapus data?')"><button type="button" class="btn btn-danger">Hapus</button></a>

                </td>
              </tr>
            <?php
          }
          ?>
          </tbody>
          </thead>
        </table>
      </div>
    </div>
  </div>
</body>

</html>