<?php

include 'koneksi.php';


$data = mysqli_query($koneksi, "select * from user");
while ($d = mysqli_fetch_array($data)) { ?>


    <div class="card" id="card<?php echo $d['id'] ?>" style="display:block;">
        <div class="image">
            <img src="<?php echo $d['image'] ?>">

        </div>
        <div class="text">
            <h1><?php echo $d['nama'] ?></h1>
            <p><?php echo $d['nim'] ?></p>
            <a class="btn" onclick="btnClick(<?php echo $d['id'] ?>)" style="">Details</a>
        </div>
    </div>

<?php } ?>


<!-- temporary untuk menampilkan card utama pada id=newCard dengan perantara jquery di idx.js. datanya mengambil data dari database -->