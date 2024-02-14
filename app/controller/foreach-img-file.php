<?php 
require_once '../../content/conn.php';
$redy = $db->query("SELECT * FROM docs")->fetchAll(PDO::FETCH_ASSOC);?>

<div style=" display: flex;  flex-wrap: wrap;">
 <?php foreach ($redy as $go){ ?>

  <img style="margin: 15px;" src="uploads/<?=$go['name'] ?>">
  <br> 
  <button class="btn btn-primary" value="<?=$go['id'] ?>" id="deleteImageBtn">Sil</button>

 <?php } ?>
</div>