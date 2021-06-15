<?php
    include 'koneksi.php';

    class Model extends Connection{

        public function __construct(){
            $this->conn = $this->get_connection();
        }
       //Kategori
        public function insert_kategori($id_kategori,$kategori){
            $sql = "INSERT INTO tbl_kategori (id_kategori, kategori) VALUES ('$id_kategori', '$kategori')";
            $this->conn->query($sql);
        }
        public function tampil_kategori(){

            $sql = "SELECT * FROM tbl_kategori";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris[] = $obj;
            }
            if (!empty($baris)) {
                return $baris;
            }   
        }
        public function edit_kategori($id){
            $sql = "SELECT * FROM tbl_kategori WHERE id_kategori = '$id'";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris = $obj;
            }
            return $baris;
        }
        public function update_kategori($id_kategori,$kategori){
            $sql = "UPDATE tbl_kategori set kategori = '$kategori' WHERE id_kategori = '$id_kategori'";
            $this->conn->query($sql);
        }
        public function delete_kategori($id) 
 	{ 
    
    $sql = "DELETE FROM tbl_kategori WHERE id_kategori='$id'"; 
    $this->conn->query($sql); 
} 
   //databarang
   public function insert_barang($id_barang,$nama,$stock,$harga,$id_kategori){
    $sql = "INSERT INTO tbl_databarang (id_barang,nama,stock,harga,id_kategori) VALUES ('$id_barang','$nama', '$stock','$harga','$id_kategori')";
    $this->conn->query($sql);
} 
public function tampil_barang(){
    $sql = "SELECT * FROM tbl_databarang";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris[] = $obj;
    }
    if (!empty($baris)) {
        return $baris;
    }   
}
public function edit_barang($id){
    $sql = "SELECT * FROM tbl_databarang WHERE id_barang = '$id'";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris = $obj;
    }
    return $baris;
}
public function update_barang($id_barang,$nama,$stock,$harga,$id_kategori){
    $sql = "UPDATE tbl_databarang set nama ='$nama', stock ='$stock', harga ='$harga', id_kategori = '$id_kategori' WHERE id_barang = '$id_barang'";
    $this->conn->query($sql);
}
public function delete_barang($id) 
{ 

$sql = "DELETE FROM tbl_databarang WHERE id_barang='$id'"; 
$this->conn->query($sql); 
} 
}
    