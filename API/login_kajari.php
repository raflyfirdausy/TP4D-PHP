<?php
include "koneksi.php";

$email      = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : null; 
$nip        = isset($_POST['nip']) ? htmlspecialchars($_POST['nip']) : null; 
$password   = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : null;

// $query      = "SELECT * FROM kajari_petugas WHERE username = '$email' AND password ='$password' AND status = 'kajari'";
$query      = "SELECT * FROM kajari_petugas WHERE nip = '$nip' AND password ='$password' AND status = 'kajari'";
$result     = $koneksi->query($query);

if($result->num_rows > 0){
    
    $result_ = array();
    while($data = $result->fetch_assoc()){
        array_push($result_, $data);
    }

    echo json_encode(array(
        "status" => 1,
        "result" => $result_
    ));
} else {
    echo json_encode(array(
        "status" => 0,
        "result" => "Username atau password yang anda masukan salah"
    ));
}
?>