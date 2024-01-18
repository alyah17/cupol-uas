<?php
include_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data dari form
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    // Jika ada file gambar baru diupload, proses gambar
    if ($_FILES['gambar']['name'] != '') {
        $gambar = $_FILES['gambar']['name'];
        $file_tmp = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($file_tmp, "path/to/uploaded/images/" . $gambar);
        // Update data termasuk gambar
        $sql = "UPDATE makanan SET nama='$nama', harga='$harga', deskripsi='$deskripsi', gambar='$gambar' WHERE id=$id";
    } else {
        // Update data tanpa mengganti gambar
        $sql = "UPDATE makanan SET nama='$nama', harga='$harga', deskripsi='$deskripsi' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        header("Location: admin.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>