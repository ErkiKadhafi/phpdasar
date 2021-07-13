<?php 
    require "../functions.php";
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM mahasiswa WHERE 
            nama LIKE '%$keyword%' OR
            nrp LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
            ";
    $mahasiswa = query($query);
?>

<table border="1" cellpadding="10" cellspacing=0>
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
            <?php $count = 1 ?>
            <?php foreach($mahasiswa as $row) : ?>
                <tr>
                    <td><?= $count; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>">Edit</a> | 
                        <a href="hapus.php?id=<?= $row["id"]; ?>"
                            onclick="return confirm('Are u sure?');">Delete</a>
                    </td>
                    <td>
                        <img src="img/<?= $row["gambar"]; ?>" width="100">
                    </td>
                    <td><?= $row["nrp"]; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["jurusan"]; ?></td>
                </tr>
                <?php $count++; ?>
            <?php endforeach; ?>
        </table>