<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-md-6 mx-auto p-5">
            <div class="card">
                <div class="login-box">
                    <div class="login-snip">
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                            class="tab">Login</label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign
                            Up</label>
                        <div class="login-space">
                            <div class="login" action="proses_login.php">
                                <div class="group">
                                    <label for="user" class="label">Username</label>
                                    <input id="user" type="text" class="input" placeholder="Enter your username">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="pass" type="password" class="input" data-type="password"
                                        placeholder="Enter your password">
                                </div>
                                <div class="group">
                                    <input id="check" type="checkbox" class="check" checked>
                                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Sign In">
                                </div>
                                <div class="hr"></div>
                                <div class="foot">
                                    <a href="#">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="sign-up-form" action="proses_register.php">
                                <div class="group">
                                    <label for="user" class="label">nik</label>
                                    <input id="user" type="text" name="nik" class="input" placeholder="masukkan nik">
                                </div>
                                <div class="group">
                                    <label for="user" class="label">nama_pegawai</label>
                                    <input id="user" type="text" name="nama_pegawai" class="input"
                                        placeholder="masukkan namamu">
                                </div>
                                <div class="group">
                                    <label for="user" class="label">alamat_pegawai</label>
                                    <input id="user" type="text" name="alamat_pegawai" class="input"
                                        placeholder="masukkan alamat">
                                </div>
                                <div class="group">
                                    <label for="user" class="label">jenis_kelamin</label>
                                    <select name="jenis_kelamin" class="input">
                                        <option value="">Pilih jenis kelamin</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="group">
                                    <label for="user" class="label">no_telpon</label>
                                    <input id="user" type="text" name="no_telpon" class="input"
                                        placeholder="masukkan no.telpon">
                                </div>
                                <?php
                                include "koneksi.php";
                                $qry_kelas = mysqli_query($conn, "select * from pegawai");
                                while ($data_kelas = mysqli_fetch_array($qry_kelas)) {
                                    echo '<option value="' . $data_kelas['id_kelas'] . '">' . $data_kelas['nama_kelas'] . '</option>';
                                }
                                ?>
                                <div class="group">
                                    <label for="user" class="label">Username</label>
                                    <input id="user" type="text" class="input" placeholder="Create your Username">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="pass" type="password" class="input" data-type="password"
                                        placeholder="Create your password">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Email Address</label>
                                    <input id="pass" type="text" class="input" placeholder="Enter your email address">
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Sign Up">
                                </div>
                                <div class="hr"></div>
                                <div class="foot">
                                    <label for="tab-1">Already Member?</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

</body>

</html>