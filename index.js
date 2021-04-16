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
