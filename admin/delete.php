<?php

//koneksi ke database
require '../koneksi.php';

//identifier menentukan data produk 
$id = $_GET['id'];

if($id){
    $query = "SELECT gambar FROM produk WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    //apakah mengembalikan tepat 1 baris hasil atau tidak
    if(mysqli_num_rows($result) == 1){
        //mengambil 1 baris hasil query
        $row = mysqli_fetch_assoc($result);
        $folder = "../image/".$row['gambar'];
        unlink($folder);
    }
    //menghapus data
    $_query = "DELETE FROM produk WHERE id = $id";
    mysqli_query($conn, $_query);

    //menampilkan pesan 
    echo "<script>
            alert('Berhasil Menghapus Data');
            document.location.href = 'view.php';
        </script>";

    // echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.10'></script>
    // <script>
    // Swal.fire({
    //     icon: 'success',
    //     title: 'Berhasil Menghapus Data',
    //     showConfirmButton: false,
    //     timer: 1500
    // }).then(function() {
    //     window.location.href = 'view.php';});
    // </script>";
}
?>
