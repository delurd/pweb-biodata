<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Fira+Sans:200,300,400,500,600,700,800,900&display=swap'>
        <title>Here Are We</title>

        <!-- <script src="index.js"></script> -->
        <link rel="stylesheet" href="style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- <script src="jquery-3.6.0.js"></script> -->
        <?php include 'control.php' ?>

        <style>
            

        </style>
    </head>
    <body>
        <section class="page-1 pageBlur">
            <div class="row" >      
                <div class="title">
                    <h1 style="font-size: 3em;">Who Are We ?</h1>
                </div>
                <?php for($i = 0; $i < count($nama); $i++) {?>
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
                <?php } ?>
                
            </div>
        </section>


        <?php for ($i=0; $i < count($nama); $i++) { ?>
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
                        <p>Alamat : <a class="isian"><?php echo $alamat[$i]; ?></a></p></p>
                        <p>Nomer Telepon : <a class="isian"><?php echo $no_telp[$i]; ?></a></p></p>
                        <p>Email : <a class="isian"><?php echo $email[$i]; ?></a></p></p>
                    </div>  
                </div>
            </div>
        </div>
        <?php } ?>
    </body>

    <script>
        //Mengetahui jumlah card
        var items = document.getElementsByClassName("detailCard");
        console.log("items ="+items.length);
        var durasi = 0;
        
        //Menganimasi saat halaman dibuka
        $(document).ready(function(){
            $(".row").fadeIn(3000);

            for(i=0;i<items.length;i++){
                $("#card"+i).fadeIn(durasi+=1000);
                console.log("fade "+i);
            }
        })
        
        //Memanggil efect Blur
        $(document).ready(function(){
            $(".btn").click(function(){
                $(".page-1").toggleClass("pageBluractive");
            })
            $(".close").click(function(){
                $(".page-1").toggleClass("pageBluractive");
                
            })
        })


        //Memanggil detailcard sesuai nomer
        function btnClick(nomer) {
            $(document).ready(function(){
                $("#detailCard"+nomer).slideToggle(200);
            })
        }
        function btnClose(nomer) {
            $(document).ready(function(){
                $("#detailCard"+nomer).slideToggle(300);
            })
        }
    </script>

</html>
