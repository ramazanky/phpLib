<?php
require_once 'content/conn.php';
require_once 'lib/lib.max.php';
require_once 'content/head.php';
require_once 'lib/alerts.php';
?>





<div class="mt-5 container">
 <h1>Dosya Ekleme</h1>
 <form method="post" enctype="multipart/form-data">
  <div class="input-group mb-3">
   <input type="file" class="form-control" name="yuklenecekdosya">
  </div>
  <p><b>Hedef Klasör: </b><?=$targetFolder ?></p>
  <button class="btn btn-success" type="button" id="insert-file-btn">Kaydet</button>
 </form>


<br>


 <button class="btn btn-primary" id="showAllImages">Resimleri Göster</button>

 <div class="div1"></div>


 <div class="write-images"></div>

</div>








<?php require_once 'content/footer.php';  ?>

