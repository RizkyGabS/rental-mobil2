<?php
    include 'koneksi.php';

    $query = "SELECT * FROM kendaraan;";
    $sql = mysqli_query($conn, $query);
    $no = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            CRUD - BS5
            </a>
        </div>
    </nav>
    
    <!-- Judul -->
    <div class="container-fluid">
        <h1 class="mt-4">Data Rental</h1>
        <figure>
            <blockquote class="blockquote">
            <p>Berisi data yang telah disimpan di database.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
            CRUD <cite title="Source Title">Create Read Update Delete</cite>
            </figcaption>
        </figure>

        <a href="kelola.php" type="button" class="btn btn-primary mb-3">
            <i class="fa fa-plus"></i> Tambah Data </a>

        <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover">
            <thead>
                <tr>
                    <th><center>No.</center></th>
                    <th>Merek</th>
                    <th>Nama Kendaraan</th>
                    <th>Jarak Tempuh</th>
                    <th>Foto Kendaraan</th>
                    <th>Transmisi</th>
                    <th>Kursi</th>
                    <th>Bahan Bakar</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <!-- Menggunakan perulangan dan database -->
            <?php
                while($result = mysqli_fetch_assoc($sql)){
            ?>
                <tr>
                    <td><center>
                        <?php echo ++$no; ?>.
                    </center></td>
                    <td>
                        <?php echo $result['Merek']; ?>
                    </td>
                    <td>
                        <?php echo $result['Nama_Kendaraan']; ?>
                    </td>
                    <td>
                        <?php echo $result['Jarak_Tempuh']; ?>
                    </td>
                    <td>
                        <img src="img/<?php echo $result['Foto_Kendaraan']; ?>" alt="image 1" style="width: 150px;">
                    </td>
                    <td>
                        <?php echo $result['Transmisi']; ?>
                    </td>
                    <td>
                        <?php echo $result['Kursi']; ?>
                    </td>
                    <td>
                        <?php echo $result['Bahan_Bakar']; ?>
                    </td>
                    <td>
                        <?php echo $result['Deskripsi']; ?>
                    </td>
                    <td>
                        <a href="kelola.php?ubah=<?php echo $result['id_kendaraan']; ?>" type="button" class="btn btn-success btn-sm"> <i class="fa fa-pencil"></i> </a>
                        <a href="proses.php?hapus=<?php echo $result['id_kendaraan']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i> </a>
                    </td>
                </tr>
                <?php
                    }
                ?>

                <!-- Tanpa menggunakan perulangan dan database
                    <tr>
                    <td><center>2.</center></td>
                    <td>11224</td>
                    <td>Khalix Sari</td>
                    <td>Perempuan</td>
                    <td>
                        <img src="img/img2.jpg" alt="image 1" style="width: 150px;">
                    </td>
                    <td>Jl. Malioboro</td>
                    <td>
                        <a href="kelola.php?ubah=2" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> </a>
                        <a href="proses.php?hapus=2" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </a>
                    </td>
                </tr> -->
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>