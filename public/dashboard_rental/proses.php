<?php
    include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){

            $Merek = $_POST['Merek'];
            $Nama_Kendaraan = $_POST['Nama_Kendaraan'];
            $Jarak_Tempuh = $_POST['Jarak_Tempuh'];
            $Foto_Kendaraan = $_FILES['foto']['name'];
            $Transmisi = $_POST['Transmisi'];
            $Kursi = $_POST['Kursi'];
            $Bahan_Bakar = $_POST['Bahan_Bakar'];
            $Deskripsi = $_POST['Deskripsi'];

            $dir = "img/";
            $tmpFile = $_FILES['foto']['tmp_name'];

            move_uploaded_file($tmpFile, $dir.$Foto_Kendaraan);

            $query = "INSERT INTO kendaraan VALUES(null, '$Merek', '$Nama_Kendaraan', '$Jarak_Tempuh', '$Foto_Kendaraan', '$Transmisi', '$Kursi', '$Bahan_Bakar', '$Deskripsi')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: index.php");
                // echo "Data berhasil ditambahkan<a href='index.php'>[Home]</a>";
            } else {
                echo $query;
            }

            // echo $Merek. " | ".$Nama_Kendaraan. " | ".$Jarak_Tempuh. " | ".$Foto_Kendaraan. " | ".$Transmisi;

            echo "<br>Tambah Data <a href='index.php'>[Home]</a>";
        } else if($_POST['aksi'] == "edit"){
            echo "Edit Data <a href='index.php'>[Home]</a>";
            // var_dump($_POST);

            $id_kendaraan = $_POST['id_kendaraan'];
            $Merek = $_POST['Merek'];
            $Nama_Kendaraan = $_POST['Nama_Kendaraan'];
            $Jarak_Tempuh = $_POST['Jarak_Tempuh'];
            $Transmisi = $_POST['Transmisi'];
            $Kursi = $_POST['Kursi'];
            $Bahan_Bakar = $_POST['Bahan_Bakar'];
            $Deskripsi = $_POST['Deskripsi'];

            $queryShow = "SELECT * FROM kendaraan WHERE id_kendaraan = '$id_kendaraan'";
            $sqlShow = mysqli_query($conn, $queryShow);
            $result = mysqli_fetch_assoc($sqlShow);

            if($_FILES['foto']['name'] == ""){
                $Foto_Kendaraan = $result['Foto_Kendaraan'];
            } else {
                $Foto_Kendaraan = $_FILES['foto']['name'];
                unlink("img/".$result['Foto_Kendaraan']);
                move_uploaded_file($_FILES['foto']['tmp_name'], 'img/'.$_FILES['foto']['name']);
            }

            $query = "UPDATE kendaraan SET Merek='$Merek', Nama_Kendaraan='$Nama_Kendaraan', Jarak_Tempuh='$Jarak_Tempuh', Transmisi='$Transmisi', Kursi='$Kursi', Bahan_Bakar='$Bahan_Bakar', Deskripsi='$Deskripsi', Foto_Kendaraan='$Foto_Kendaraan' WHERE id_kendaraan='$id_kendaraan';";
            $sql = mysqli_query($conn, $query);
            header("location: index.php");
        }
    }

    if(isset($_GET['hapus'])){
        $id_kendaraan = $_GET['hapus'];

        $queryShow = "SELECT * FROM kendaraan WHERE id_kendaraan = '$id_kendaraan'";
        $sqlShow = mysqli_query($conn, $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        unlink("img/".$result['Foto_Kendaraan']);

        $query = "DELETE FROM kendaraan WHERE id_kendaraan = '$id_kendaraan'";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: index.php");
            // echo "Data berhasil ditambahkan<a href='index.php'>[Home]</a>";
        } else {
            echo $query;
        }

        // echo "Hapus Data <a href='index.php'>[Home]</a>";
    }
?>