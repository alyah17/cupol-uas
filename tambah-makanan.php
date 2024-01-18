<?php
// Koneksi ke database
$conn = new mysqli("127.0.0.1", "root", "", "foodo");

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

// Ambil nama file gambar
$gambar = $_FILES['gambar']['name'];

// Lokasi file sementara gambar
$file_tmp = $_FILES['gambar']['tmp_name'];

// Pindahkan file gambar ke folder yang diinginkan
move_uploaded_file($file_tmp, "" . $gambar);

// Simpan data ke database
$sql = "INSERT INTO makanan (nama, harga, deskripsi, gambar) VALUES ('$nama', '$harga', '$deskripsi', '$gambar')";

if ($conn->query($sql) === TRUE) {
    header("Location: admin.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>