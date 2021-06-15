<?php
include 'model.php';
$model = new Model();
$index = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Data Barang Online Shop</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
        crossorigin="anonymous">
    </head>
<body>

        <?php
            include 'navbar.php';
        ?>
        
    <div class="container-fluid">
        <h1 align="center">DATA BARANG ONLINE SHOP ZEPHYRUS</h1>
        <a href="tambah_barang.php"> Tambah Data</a><br>
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>ID </th>
                    <th>NAMA</th>
                    <th>STOK</th>
                    <th>HARGA</th>
                    <th>KODE KATEGORI</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $result = $model->tampil_barang();
                    if (!empty($result)) {
                        foreach ($result as $data) : ?>
                <tr>
                   <td><?= $index++ ?></td>
                   <td><?= $data->id_barang?></td>
                   <td><?= $data->nama ?></td>
                   <td><?= $data->stock ?></td>
                   <td><?= $data->harga ?></td>
                   <td><?= $data->id_kategori ?></td>
                    <td>
                        <a name="edit" id="edit" href="edit_barang.php?id=<?=$data->id_barang?>">Edit</a>
                        <a name="delete" id="delete" href="proces.php?id=<?=$data->id_barang?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach;
                    }else { ?>
                <tr>
                    <td colspan="7">Belum Ada Data Pada Tabel Absensi</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
</body>
</html>