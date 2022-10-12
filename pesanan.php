<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTTEST 4</title>
    <link rel="stylesheet" href="style.css">
    <link rel="https://fonts.googleapis.com/css?family-great+vibes" href="stylesheet" type="text/cs">
    <link rel="https://fonts.googleapis.com/css?family-great-raleway" href="stylesheet">
</head>
<body>
    <div class="nav">
        <nav>
            <img src="Logo Coffee.png" class="logo" width="160px" height="130px">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="menu.php">MENU</a></li>
                <li><a href="pesanan.php">PESANAN</a></li>
                <li><a href="about.php">ABOUT ME</a></li>
                <li><a href="#">CONTACT US</a></li> 
            </ul>
            <input type="checkbox" onclick="ubahMode()">
        </nav>
    </div> 
    
    <div class="pesanan"><br>
        <h2 class="menu-title">PESANAN</h2>
        <div class="container">
            <h4 class="text-center font-weight-bold">DATA PESANAN</h4><br>
    </div>
    <table class="table table-bordered" id="example">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Pesanan</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Black Coffee</td>
                <td>2</td>
                <td>2022-10-05</td>
                <td>Belum Bayar</td>
                <td>
                    <a href="#" class="badge badge-danger">Hapus Data</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Cappuccino</td>
                <td>2</td>
                <td>2022-10-08</td>
                <td>Belum Bayar</td>
                <td>
                    <a href="#" class="badge badge-danger">Hapus Data</a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Chocolate</td>
                <td>5</td>
                <td>2022-10-10</td>
                <td>Belum Bayar</td>
                <td>
                    <a href="#" class="badge badge-danger">Hapus Data</a>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Latte</td>
                <td>2</td>
                <td>2022-10-12</td>
                <td>Belum Bayar</td>
                <td>
                    <a href="#" class="badge badge-danger">Hapus Data</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>