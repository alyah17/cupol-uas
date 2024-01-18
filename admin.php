<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin Page</title>
</head>



<body>

    <nav style="display: flex; justify-content: space-between; padding: 120px;">
        <h2>Daftar Makanan</h2>
        <a href="tambah-makanan.html">Tambah Makanan</a>
    </nav>

    <div class="card-wrapper">
        <?php
        include_once 'config.php';

        $result = $conn->query("SELECT * FROM makanan");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='card'>";
                echo "<img src='" . $row['gambar'] . "' alt='Makanan'>";
                echo "<h3>" . $row['nama'] . "</h3>";
                echo "<p>" . $row['deskripsi'] . "</p>";
                echo "<p>Harga: $" . $row['harga'] . "</p>";
                echo "<a href='update.php?id=" . $row['id'] . "'>Update</a>";
                echo "<a href='delete.php?action=delete&id=" . $row['id'] . "'>Delete</a>";
                echo "</div>";
            }
        } else {
            echo "Tidak ada makanan.";
        }

        $conn->close();
        ?>
    </div>


</body>

</html>