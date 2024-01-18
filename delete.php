<?php
include_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Logika untuk menangani tambah makanan jika diperlukan
}

if (isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $id = $_GET['id'];

    if ($action == 'delete') {
        // Hapus makanan
        $sql = "DELETE FROM makanan WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            header("Location: admin.php");
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } elseif ($action == 'update') {
        // Logika untuk menangani update makanan jika diperlukan
    }
}

$conn->close();
?>