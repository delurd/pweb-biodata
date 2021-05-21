<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "select * from user");

while ($d = mysqli_fetch_array($data)) {
?>

    <div id="detailCard<?php echo $d['id'] ?>" class="detailCard" style="display:none">
        <div class="detailCardflex">
            <div class="detailCardContent">
                <span class="close" onclick="btnClose(<?php echo $d['id'] ?>)">&times;</span>
                <div class="col-50">
                    <div class="card" style="background-color: #181818; display: block;">
                        <div class="image">
                            <img src="<?php echo $d['image'] ?>">
                        </div>
                        <div class="text">
                            <h1><?php echo $d['panggilan'] ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-50">
                    <h1>About Me</h1>
                    <p>Nama : <a class="isian"><?php echo $d['nama'] ?></a></p>
                    <p>NIM : <a class="isian"><?php echo $d['nim'] ?></a></p>
                    <p>Alamat : <a class="isian"><?php echo $d['alamat'] ?></a></p>
                    </p>
                    <p>Nomor Telepon : <a class="isian"><?php echo $d['no_telp'] ?></a></p>
                    </p>
                    <p>Email : <a class="isian"><?php echo $d['email'] ?></a></p>
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php } ?>


<!-- tempDetailCard untuk menampilkan detailCardd  pada id=newDetailCard dengan perantara jquery di idx.js. datanya mengambil data dari database -->