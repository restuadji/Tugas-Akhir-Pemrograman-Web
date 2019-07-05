<?php
if(!empty($_POST['Nama'])){
  $Nama = $_POST['Nama']; // data dikirimkan melalui inputan form pada index.php
  $Email = $_POST['Email']; // data dikirimkan melalui inputan form pada index.php

  $data = "\n $Nama|$Email"; // Format data yang akandiparsing
  
  $fh = fopen("filenya.txt", "a"); // membuka filenya.txt Untuk menuliskan data pada form 
  fwrite($fh, $data);

  fclose($fh);// menutup filenya.txt
}
?>