<?php

include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] =='POST'){

    $email = $_POST['email'];
    $instansi = $_POST['nama_instansi'];
    $password = $_POST['password'];

    $sql = "INSERT INTO tb_userpemohon (email,instansi,password) VALUES ('$email', '$instansi', '$password')";
		
    if ( mysqli_query($con, $sql) ) {
        $result["success"] = "1";
        $result["message"] = "success";

        echo json_encode($result);
		mysqli_close($con);

    } else{

        $result["success"] = "0";
        $result["message"] = "error";

        echo json_encode($result);
		mysqli_close($con);
    }
}

?>