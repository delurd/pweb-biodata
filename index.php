<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Fira+Sans:200,300,400,500,600,700,800,900&display=swap'>
    <title>Here Are We</title>


    <link rel="stylesheet" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="jquery-3.6.0.js"></script> -->

    <?php include 'control.php' ?>
    <script src="index.js"></script>

    <style>


    </style>
</head>

<body>

    <section class="page-1 pageBlur"> <!--effect blur disini -->
        <div class="row" style="display:none;">
            <div class="title">
                <h1 style="font-size: 3em;">Who Are We ?</h1>
            </div>
            <!--perulangan PHP card-->
            <!-- <?php for ($i = 0; $i < count($nama); $i++) { ?>
                <div class="card" id="card<?php echo $i; ?>">
                    <div class="image">
                        <img src="images/<?php echo $image[$i]; ?>">

                    </div>
                    <div class="text">
                        <h1><?php echo $nama[$i]; ?></h1>
                        <p><?php echo $nim[$i]; ?> </p>
                        <a class="btn" onclick="btnClick(<?php echo $i; ?>)" style="">Details</a>
                    </div>
                </div>
            <?php } ?>akhir perulangan -->
            

            <!-- card tambah baru -->
            <div class="card" id="card<?php echo $nomer; ?>" style="display:flex;align-items: center; justify-content: center;">
                <div class="btnAdd" onclick="btnClick('Tambah')">
                    <a>+</a>
                </div>
            </div>

            <!-- tempat Card baru Ajax -->
            <div id="newCard">

            </div>

        </div>
    </section>

    <!--perulangan PHP detailcard-->
    <!-- <?php for ($i = 0; $i < count($nama); $i++) { ?>
        <div id="detailCard<?php echo $i; ?>" class="detailCard" style="display: none;">
            <div class="detailCardflex">
                <div class="detailCardContent">
                    <span class="close" onclick="btnClose(<?php echo $i; ?>)">&times;</span>
                    <div class="col-50">
                        <div class="card" style="background-color: #181818; display: block;">
                            <div class="image">
                                <img src="images/<?php echo $image[$i]; ?>">
                            </div>
                            <div class="text">
                                <h1><?php echo $panggilan[$i]; ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-50">
                        <h1>About Me</h1>
                        <p>Nama : <a class="isian"><?php echo $nama[$i]; ?></a></p>
                        <p>NIM : <a class="isian"><?php echo $nim[$i]; ?></a></p>
                        <p>Alamat : <a class="isian"><?php echo $alamat[$i]; ?></a></p>
                        </p>
                        <p>Nomor Telepon : <a class="isian"><?php echo $no_telp[$i]; ?></a></p>
                        </p>
                        <p>Email : <a class="isian"><?php echo $email[$i]; ?></a></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?> -->
    <!-- tempat DetalCard Baru AJAX -->
    <div id="newDetailCard">

    </div>

    <!-- detailCard tambah Baru -->
    <div id="detailCardTambah" class="detailCard" style="display: none;">
        <div class="detailCardflex">
            <div class="detailCardContent">
                <span class="close" onclick="btnClose('Tambah')">&times;</span>
                <div class="col-50">
                    <h1>Insert<br> Biodata</h1>
                    <!-- button tambah image -->
                    <div class="">
                        <div class="fileUpload">
                            <label class="btnAdd">
                                <p style="font-size: 20px;">Foto</p>
                                <input type="file" class="upload" name="foto" />
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-50">

                    <label>Nama : </label><br>
                    <input type="text" id="nama"></input>
                    <br><br>

                    <label>Nama Panggilan : </label><br>
                    <input type="text" id="panggilan"></input>
                    <br><br>

                    <label>NIM : </label><br>
                    <input type="text" id="nim"></input>
                    <br><br>

                    <label>Alamat : </label><br>
                    <input type="text" id="alamat"></input>
                    <br><br>

                    <label>Nomor Telepon : </label><br>
                    <input type="text" id="no_telp"></input>
                    <br><br>

                    <label>Email : </label><br>
                    <input type="email" id="email"></input><br><br>

                    <label>Prodi : </label><br>
                    <select name="id_prodi" id="id_prodi">
                        <option value="1">Informatika</option>
                        <option value="2">Industri</option>
                    </select><br><br>

                    <label>Kelas : </label><br>
                    <select name="id_kelas" id="id_kelas">
                        <option value="1">A Pagi</option>
                        <option value="2">B Pagi</option>
                        <option value="3">Sore</option>
                    </select><br><br><br>


                    <button class="btn" id="btnSubmit">Submit</button>

                </div>
            </div>
        </div>
    </div>


</body>

<script>

</script>

</html>