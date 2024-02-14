<?php 
/*

▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬
¦ InsertImgFile ¦
▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬
¦ updateImgFile ¦
▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬


===================================
===================================
===================================

¦ InsertImgFile ¦


$fileMethod = $_FILES['dosya'];
$extraID = 123;
 $yuklenenDosyaAdi = InsertImgFile($fileMethod, $extraID, $targetFolder);
if (empty($yuklenenDosyaAdi)) {
 $uploadError = 1;
}



===================================
===================================
===================================

¦ updateImgFile ¦


$table = "kullanicilar";
$WHERE_ID = 123;
$extraID = 456;
$resim_tmp = "tmp_file.jpg";
$fileUpdate = updateImgFile($table, $WHERE_ID, $extraID, $resim_tmp);
if (empty($fileUpdate)) {
 $uploadError = 1;
}


===================================
===================================
===================================

*/

function InsertImgFile($fileMethod, $extraID, $targetFolder)
{
 $Tmp_Name = $fileMethod['tmp_name'];

 if (empty($Tmp_Name)) {
  $file = "";
 } else {
  if (
   $fileMethod["type"] == "image/gif" ||
   $fileMethod["type"] == "image/png" ||
   $fileMethod["type"] == "image/jpg" ||
   $fileMethod["type"] == "image/jpeg"
  ) {
   $random = rand(0, 9999999);
   $file = $random . "-" . $extraID . "." . substr($fileMethod['name'], -3);
   move_uploaded_file($fileMethod['tmp_name'], $targetFolder . "/" . $file);
  }
 }

 return $file;
}

/*
==================================
==================================
==================================
*/


function updateImgFile($table, $WHERE_ID, $extraID, $updateFileMethod)
{
 $fileUpdate = "";
 if (empty($updateFileMethod)) {
  $ayar_kaydi = $db->query("SELECT * FROM $table WHERE id = '{$WHERE_ID}'")->fetch(PDO::FETCH_ASSOC);
  $fileUpdate = $ayar_kaydi['fileUpdate'];
 } else {
  if (
   $_FILES["fileUpdate"]["type"] == "image/gif" ||
   $_FILES["fileUpdate"]["type"] == "image/png" ||
   $_FILES["fileUpdate"]["type"] == "image/jpg" ||
   $_FILES["fileUpdate"]["type"] == "image/jpeg"
  ) {
   $ayar_kaydi = $db->query("SELECT * FROM $table WHERE id = '{$WHERE_ID}'")->fetch(PDO::FETCH_ASSOC);
   if ($ayar_kaydi['fileUpdate'] != "fileUpdate-yok") {
    unlink($targetFolder . $ayar_kaydi['fileUpdate']);
   }
   $random = rand(0, 995959999);
   $fileUpdate = $random . "-" . $extraID . "." . substr($_FILES['fileUpdate']['name'], -3);
   move_uploaded_file($_FILES['fileUpdate']['tmp_name'], $targetFolder . "/" . $fileUpdate);
  }
 }

 return $fileUpdate;
}


/*
==================================
==================================
==================================
*/

?>