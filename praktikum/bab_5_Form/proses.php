<?php

$target_path = "uploads/"; //menunjukkan lokasi folder tempat file akan diunggah
$target_path = $target_path . basename( $_FILES['uploadfile']['name']) ;
/* digunakan untuk mengambil nama file dari path atau URL lengkap
adalah elemen dari array superglobal $_FILES, yang menyimpan nama file yang diunggah oleh pengguna. */

/* move_uploaded_file() adalah fungsi PHP yang digunakan untuk memindahkan file yang diunggah dari direktori sementara 
(yang ditentukan oleh $_FILES['uploadfile']['tmp_name']) ke lokasi tujuan yang ditentukan oleh $target_path. */
if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $target_path)){
    echo "The file " . basename( $_FILES['uploadfile']['name']) . " has been upload";
} else{
    echo "There was an error uploading the file, please try again!";
}

?>