//Mengetahui jumlah card
var items = document.getElementsByClassName("detailCard");
console.log("items =" + items.length);
var durasi = 0;



$(document).ready(function () {
    //Menganimasi saat halaman dibuka
    $(".row").fadeIn(3000);

    for (i = 0; i < items.length; i++) {
        $("#card" + i).fadeIn(durasi += 1000);
        console.log("fade " + i);
    }
    --i;
    //untuk meload data dari database(untuk card dan detailCard) agar dapat tampil ketika browser direload
    $("#newCard").load('newCard.php');
    $("#newDetailCard").load('newDetailCard.php');


    //men Submit biodata Baru ke database dengan perantara ajax ke upload.php *jika id = btnSubmit di click
    $("#btnSubmit").click(function () {
        submitData(); //memanggil function submitData
    })



    function submitData() {
        //untuk mengambil data dari index.php ke javascript menggunakan jquery
        var nama = $('#nama').val();
        var panggilan = $('#panggilan').val();
        var nim = $('#nim').val();
        var alamat = $('#alamat').val();
        var no_telp = $('#no_telp').val();
        var email = $('#email').val();
        var num = ++i;
        var prodi = $('#id_prodi').val();
        var kelas = $('#id_kelas').val();

        //untuk mentransfer data dari variabel javascript ke ajax / php
        var dataString = {
            'nama': nama,
            'panggilan': panggilan,
            'nim': nim,
            'alamat': alamat,
            'no_telp': no_telp,
            'email': email,
            'num': num,
            'prodi': prodi,
            'kelas': kelas,
        };

        $.ajax({
            type: 'POST',
            url: 'upload.php', //target url
            data: dataString,
            beforeSend: function () {

            },
            success: function () {
                alert("success");
                $("#newCard").load('newCard.php'); //menampilkan temporary.php di id=newCard di index.php
                $("#newDetailCard").load('newDetailCard.php'); //menampilkan tempDetailCard.php di id=newDetailCard di index.php
                btnClose("Tambah"); //auto menutup detialcardtambahbaru jika proses selesai
                clearInputan(); //auto menghapus isi/value pada detaicardtambahbaru
                console.log(no_telp);
            }
        })
    }

    function clearInputan() {
        $('#nama').val("");
        $('#panggilan').val("");
        $('#nim').val("");
        $('#alamat').val("");
        $('#no_telp').val("");
        $('#email').val("");
    }

})

//Memanggil detailcard sesuai nomer dan effect blur
function btnClick(nomer) {
    $(document).ready(function () {
        $(".page-1").toggleClass("pageBluractive");
        $("#detailCard" + nomer).slideToggle(200);
    })
}

function btnClose(nomer) {
    $(document).ready(function () {
        $(".page-1").toggleClass("pageBluractive");
        $("#detailCard" + nomer).slideToggle(300);
        //clearInputan();
    })
}




//Memanggil efect Blur
// $(document).ready(function(){
//     $(".btn").click(function(){
//             $(".page-1").toggleClass("pageBluractive");
//     })
//     $(".close").click(function(){
//             $(".page-1").toggleClass("pageBluractive"); 
//     })
// })



// function btnClick(nomer) {
//   const pageBlur = document.querySelector(".pageBlur");
//   pageBlur.classList.toggle("active");

//   const detailPage = document.querySelector('.detailCard');
//   detailPage.classList.toggle('active');

//   var boten = document.getElementById("detailCard" + nomer);
//   boten.style.display = "block";
// }
// function btnClose(nomer) {
//   var cls = document.getElementById("detailCard" + nomer);
//   cls.style.display = "none";

//   const pageBlur = document.querySelector(".pageBlur");
//   pageBlur.classList.toggle("active");
// }



//untuk detailcard >> temDetailCard.php
  // function submitDetailCard() {
  //   var nama2 = $('#nama').val();
  //   var panggilan2 = $('#panggilan').val();
  //   var nim2 = $('#nim').val();
  //   var alamat2 = $('#alamat').val();
  //   var no_telp2 = $('#no_telp').val();
  //   var email2 = $('#email').val();
  //   var num2 = i;

  //   var dataString2 = {
  //     'nama2': nama2,
  //     'panggilan2': panggilan2,
  //     'nim2': nim2,
  //     'alamat2': alamat2,
  //     'no_telp2': no_telp2,
  //     'email2': email2,
  //     'num2': num2,
  //   };
  //   $.ajax({
  //     type: "POST",
  //     url: "http://localhost/pweb-1/temDetailCard.php",
  //     data: dataString2,
  //     crossDomain: true,
  //     cache: false,
  //     beforeSend: function () {

  //     },
  //     success: function (data) {
  //       $("#newDetailCard").append(data); //menampilkan temDetailCard.php di id newDetailCard
  //     }
  //   })
  // }