<?php 
if($_POST){
    $nik=$_POST["nik"];
    $nama_pegawai=$_POST["nama_pegawai"];
    $alamat_pegawai=$_POST["alamat_pegawai"];
    $tanggal_lahir=$_POST["tanggal_lahir"];
    $jenis_kelamin=$_POST["jenis_kelamin"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $id_kelas=$_POST["id_kelas"];
    if(empty($nik)){
        echo "<script>alert('nik tidak boleh kosong');location.href='login.php';</script>";
    }elseif(empty($nama_pegawai)){
        echo "<script>alert('Nama pegawai tidak boleh kosong');location.href='login.php';</script>";
    }elseif(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
    }elseif(empty($password)){
        echo "<script>alert('password siswa tidak boleh kosong');location.href='login.php';</script>";
    }else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into siswa (nama_pegawai,tanggal_lahir, gender, alamat, username, password, id_kelas) value ('".$nama_siswa."','".$tanggal_lahir."','".$gender."','".$alamat."','".$username."','".md5($password)."','".$id_kelas."')") or die(mysqli_error($conn));
        
    }
}
?>