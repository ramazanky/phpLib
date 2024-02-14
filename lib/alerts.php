 <?php if (@$uploadError == 1) { ?>
  <script>
   Swal.fire({
    icon: "error",
    title: "HATA!",
    text: "Dosya türünün "+'"jpg, png, jpeg"'+" olmasına dikkat edin",
   });
  </script>
 <?php } ?> 


 <?php if (@$sizeError == 1) { ?>
  <script>
   Swal.fire({
    icon: "error",
    title: "HATA!",
    text: "Dosyanızın 39.9 Mb ten büyük olmasına dikkat edin",
   });
  </script>
  <?php } ?>