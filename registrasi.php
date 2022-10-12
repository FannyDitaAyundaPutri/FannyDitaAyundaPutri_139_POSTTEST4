<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTTEST 4</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="daftar.css"/>
    <link rel="https://fonts.googleapis.com/css?family-great+vibes" href="stylesheet" type="text/cs">
    <link rel="https://fonts.googleapis.com/css?family-great-raleway" href="stylesheet">
    
</head>
<body>
    <div class="container">
        <h3 class="text-center mt-3 mb-5">HALAMAN REGISTRASI</h3>
        <div class="card p-5 mb-5">
        <from method="POST" action="simpan_registrasi.php">]=[0]
            <div class="from-row">
                <div class="form-group"></div>
                <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama"  name="nama_lengkap" placeholder="Masukkan Nama Lengkap">
                </div>

                <label for="user">Alamat</label>
                    <input type="text" class="form-control" id="rumah"  name="alamat" placeholder="Masukkan Alamat">
                </div>

                <label for="user">No. Telephone</label>
                    <input type="text" class="form-control" id="telp"  name="hp" placeholder="No. Telephone">
                </div>

                <label for="sts">Status Registrasi</label>
                <select id="sts" class="form-control" name="status"></select>
                <option selected>Pilih...</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>
    </div>
           <button type="registrasi" class="btn btn-primary">Registrasi</button>   
           <button type="reset" class="btn btn-danger">Reset</button>  
        </form>

        <?php
        if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $notelepon = $_POST['no.telepon'];
    }
    ?>
    </div>

</body>
</html>