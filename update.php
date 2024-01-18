<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/update.css">
    <title>Update Makanan</title>
</head>

<body>
    <?php
    include_once 'config.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = $conn->query("SELECT * FROM makanan WHERE id = $id");

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>

            <form action="update-submit.php?action=update&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                <h2>Update Makanan</h2>
                <label for="nama">Nama Makanan:</label>
                <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>

                <label for="harga">Harga Makanan:</label>
                <input type="text" name="harga" value="<?php echo $row['harga']; ?>" required><br>

                <label for="deskripsi">Deskripsi Makanan:</label>
                <textarea name="deskripsi" rows="4" required><?php echo $row['deskripsi']; ?></textarea><br>

                <label for="gambar">Gambar Makanan:</label>
                <input type="file" name="gambar" accept="image/*"><br>
                <img src="<?php echo $row['gambar']; ?>" alt="Makanan" style="max-width: 200px;"><br>

                <input type="submit" value="Update Makanan">
            </form>
            <?php
        } else {
            echo "Makanan tidak ditemukan.";
        }
    } else {
        echo "ID makanan tidak diberikan.";
    }

    $conn->close();
    ?>
</body>

</html>