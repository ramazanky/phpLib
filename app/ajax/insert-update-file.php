<?php
require_once '../../content/conn.php';
require_once '../../lib/lib.max.php';


if ($_FILES['yuklenecekdosya'] and empty($_GET['id'])) {

$fileMethod = $_FILES['yuklenecekdosya'];
$extraID = 123;

$yuklenenDosyaAdi = InsertImgFile($fileMethod, $extraID, "../../uploads");
if (empty($yuklenenDosyaAdi)) {
 $uploadError = 1;
} else {
 $simdi = $db->prepare("INSERT INTO docs SET name=:name");
 $ekle = $simdi->execute(array("name" => $yuklenenDosyaAdi));
}

}


if ($_SERVER['CONTENT_LENGTH'] > 41943040) {
 $sizeError = 1;
}
require_once '../../lib/alerts.php';

?>