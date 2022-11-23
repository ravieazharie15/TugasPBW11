<?php
require_once "koneksi.php";
$sql = "SELECT * FROM tb_dosen";
$result = mysqli_query($con, $sql);
?>
<html>
    <head>
        <title>DATA SINTA</title>
        <h2>Data Dosen Universitas Trilogi</h2>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>ID Dosen</th>
                <th>Nama Dosen</th>
                <th>Prodi</th>
            </tr>
            <?php while($data = mysqli_fetch_row($result)): ?>
                <tr>
                    <td><?php echo $data[0];?></td>
                    <td><?php echo $data[1];?></td>
                    <td><?php echo $data[2];?></td>
                </tr>
                <?php endwhile; ?>
                
        </table>

    </body>
</html>