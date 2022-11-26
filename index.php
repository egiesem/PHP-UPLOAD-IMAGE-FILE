<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_FILES['berkas'])) {
    // ambil data file
     $namaFile = $_FILES['berkas'];
     

    function uploads($data) {
    // tentukan lokasi file akan dipindahkan
        $dirUpload = "terupload/";
        $namaFile=md5(date("Y-m-d H:i:s").rand(10,100)).$data['name'];
        $namaSementara = $data['tmp_name'];

        // pindahkan file
        $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
        

        // if ($terupload) {
        //     echo "Upload berhasil!<br/>";
        //     echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
        // } else {
        //     echo "Upload Gagal!";
        // }

        return $dirUpload.$namaFile;
    }

    echo uploads($namaFile);


    

}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title> 
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        Pilih file: <input type="file" name="berkas" />
        <input type="submit" name="upload" value="upload" />
    </form> 
</body> 
</html>