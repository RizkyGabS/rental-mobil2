<!DOCTYPE html>

<?php
    include 'koneksi.php';

    $id_kendaraan = '';
    $Merek = '';
    $Nama_Kendaraan = '';
    $Jarak_Tempuh = '';
    $Transmisi = '';
    $Kursi = '';
    $Bahan_Bakar = '';
    $Deskripsi = '';


    if(isset($_GET['ubah'])){
        $id_kendaraan = $_GET['ubah'];

        $query = "SELECT * FROM kendaraan WHERE id_kendaraan  = '$id_kendaraan';";
        $sql = mysqli_query($conn, $query);

        $result = mysqli_fetch_assoc($sql);

        $Merek = $result['Merek'];
        $Nama_Kendaraan = $result['Nama_Kendaraan'];
        $Jarak_Tempuh = $result['Jarak_Tempuh'];
        $Transmisi = $result['Transmisi'];
        $Kursi = $result['Kursi'];
        $Bahan_Bakar = $result['Bahan_Bakar'];
        $Deskripsi = $result['Deskripsi'];

        // var_dump($result);
        // die();
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CRUD</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            CRUD - BS5
            </a>
        </div>
    </nav>
    <div class="container">
        <form method="POST" action="proses.php" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $id_kendaraan; ?>" name="id_kendaraan">
            <div class="mb-3 row">
                <label for="Merek" class="col-sm-2 col-form-label">Merek</label>
                <div class="col-sm-10">
                <input required type="text" name="Merek" class="form-control" id="Merek" placeholder="ex: Toyota" value="<?php echo $Merek; ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="Nama_Kendaraan" class="col-sm-2 col-form-label">Nama Kendaraan</label>
                <div class="col-sm-10">
                <input required type="text" name="Nama_Kendaraan" class="form-control" id="Nama_Kendaraan" placeholder="ex: Kijang" value="<?php echo $Nama_Kendaraan; ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="Jarak_Tempuh" class="col-sm-2 col-form-label">Jarak Tempuh</label>
                <div class="col-sm-10">
                <input required type="text" name="Jarak_Tempuh" class="form-control" id="Jarak_Tempuh" placeholder="ex: 30.000" value="<?php echo $Jarak_Tempuh; ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="foto" class="col-sm-2 col-form-label">Foto Kendaraan</label>
                <div class="col-sm-10">
                    <input <?php if(!isset($_GET['ubah'])){ echo "required";} ?> class="form-control" type="file" name="foto" id="foto" accept="image/*">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="Transmisi" class="col-sm-2 col-form-label">Transmisi</label>
                <div class="col-sm-10">
                        <select required class="form-select" id="Transmisi" name="Transmisi">
                        <option <?php if($Transmisi == 'Manual'){echo "selected";}?> value="Manual">Manual</option>
                        <option <?php if($Transmisi == 'Otomatis'){echo "selected";}?> value="Otomatis">Otomatis</option>
                        </select>
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="Kursi" class="col-sm-2 col-form-label">Kursi</label>
                <div class="col-sm-10">
                    <input required class="form-control" id="Kursi" name="Kursi" rows="3" value="<?php echo $Kursi; ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="bbkr" class="col-sm-2 col-form-label">Bahan Bakar</label>
                <div class="col-sm-10">
                        <select required class="form-select" id="bbkr" name="Bahan_Bakar">
                        <option <?php if($Bahan_Bakar == 'Bensin'){echo "selected";}?> value="Bensin">Bensin</option>
                        <option <?php if($Bahan_Bakar == 'Solar'){echo "selected";}?> value="Solar">Solar</option>
                        </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="Deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="Deskripsi" name="Deskripsi" rows="3"></textarea>
                </div>
            </div>

            <div class="mb-3 row mt-4">
                <div class="col">
                    <?php
                        if(isset($_GET['ubah'])){
                    ?>
                        <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            Simpan Perubahan
                        </button>
                    <?php
                        } else {
                    ?>
                        <button type="submit" name="aksi" value="add" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            Tambahkan
                        </button>
                    <?php
                        }
                    ?>

                    <a href="index.php" type="button" class="btn btn-danger">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        Batal
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>