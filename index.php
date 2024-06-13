<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href = "style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/7862c90b9f.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <!-- Bagian Form -->
        <div class="card1">
            <p>Cek Nilai</p>
            <form action="" method="POST">
            <div class="form-floating">
                <input type="text" class="form-control" id="Nama" placeholder="Nama" name="Nama">
                <label for="Nama">Nama</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="number" class="form-control" id="Nilai" placeholder="Nilai" name="Nilai">
                <label for="Nilai">Nilai</label>
            </div>
            <br>
            <button type="submit" class="efek">Kirim</button>
            </form>
        </div>
        <!-- Bagian Keterangan Nilai -->
        <div class="card2">
            <div class="minicard">
            <?php
            if (@$_POST['Nama'] == "" || @$_POST['Nilai'] == "") {
            echo '<p style="margin-top:40px;">Silahkan Isi Data Anda</p>';
            } else if(@$_POST['Nilai'] >= 71) {
                echo '<i class="fa-regular fa-face-smile" style="font-size: 50px; margin-top:50px;"></i> 
                <div class="ket">
                <h1>Kompeten<h1>
                </div>';
                echo '<div class="ket1">
                <h4>Rincian Nilai</h4>' . @$_POST['Nama'] . "<br>" . @$_POST['Nilai'] . '</div>';
                
            }else {
                echo '<i class="fa-regular fa-face-tired" style="font-size: 50px; margin-top:50px"></i>
                <div class="ket">
                <h1>Tidak Kompeten<h1>
                </div>';
                echo '<div class="ket1">
                <h4>Rincian Nilai</h4>' . @$_POST['Nama'] . "<br>" . @$_POST['Nilai'] . '</div>';
            };

?>  

            </div>
        </div>
    </div>
</body>
</html>

