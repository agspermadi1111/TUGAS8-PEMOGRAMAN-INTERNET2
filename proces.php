<?php
    include 'model.php';

    //kategori
    if (isset($_POST['submit_kategori'])) {
        $id_kategori = $_POST['id_kategori'];
        $kategori = $_POST['kategori'];

        $model = new Model();
        $model->insert_kategori($id_kategori,$kategori);
        header('location:kategori.php');
    }
    if (isset($_POST['submit_edit'])) {
        $id_kategori = $_POST['id_kategori'];
        $kategori = $_POST['kategori'];

        $model = new Model();
        $model->update_kategori($id_kategori,$kategori);
        header('location:kategori.php');
    }
    if (isset($_GET['id'])) {    
        $id = $_GET['id']; 
        $model = new Model();     
        $model->delete_kategori($id);     
        header('location:kategori.php'); 
    } 
       //data barang
       if (isset($_POST['submit_barang'])) {
        $id_barang = $_POST['id_barang'];
        $nama = $_POST['nama'];
        $stock = $_POST['stock'];
        $harga = $_POST['harga'];
        $id_kategori = $_POST['id_kategori'];

        $model = new Model();
        $model->insert_barang($id_barang,$nama,$stock,$harga,$id_kategori);
        header('location:data_barang.php');
    }
    if (isset($_POST['submit_edit_barang'])) {
        $id_barang = $_POST['id_barang'];
        $nama = $_POST['nama'];
        $stock = $_POST['stock'];
        $harga = $_POST['harga'];
        $id_kategori = $_POST['id_kategori'];

        $model = new Model();
        $model->update_barang($id_barang,$nama,$stock,$harga,$id_kategori);
        header('location:data_barang.php');
    }
    if (isset($_GET['id'])) {    
        $id = $_GET['id']; 
        $model = new Model();     
        $model->delete_barang($id);     
        header('location:data_barang.php'); 
    } 