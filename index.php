<?Php

include 'koneksi.php';

$query = "SELECT * FROM mahasiswa";
$result = $conn->query($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" style="width:100%">
<style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: pink;
        }
    </style>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Organisasi</th>
            <th>Divisi</th>
            <th>Aksi</th>
        </tr>


        <?php while( $row = $result->fetch_assoc())  :   ?>
        <tr>
            <td> <?php echo $row['no'] ?> </td>
            <td> <?php echo $row['nama'] ?> </td>
            <td> <?php echo $row['nim'] ?> </td>
            <td> <?php echo $row['organisasi'] ?> </td>
            <td> <?php echo $row['divisi'] ?> </td>
            <td>
                <a href="edit.php?id=; ?>">Edit</a>
                <a href="delete.php?id=; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
   


    </table>

    <br>

    <form action="insert.php" method="POST">
        Nama: <input type="text" name="nama" required><br>
        NIM: <input type="text" name="nim" required><br>
        Organisasi: <input type="text" name="organisasi" required><br>
        Divisi: <input type="text" name="divisi" required><br>
        <input type="submit" value="Tambah">
    </form>


</body>
</html>