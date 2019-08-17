<?php
include "koneksi.php";

$query = "SELECT * FROM daftar_pemohon WHERE status = 1 OR status = 2";

$result     = $koneksi->query($query);

if ($result->num_rows > 0) {
    $result_ = array();
    while ($data = $result->fetch_assoc()) {
        $data['foto_dokumen'] = "http://localhost/tp4d/api/image/" . $data['foto_dokumen'];
        array_push($result_, $data);
    }

    echo json_encode(array(
        "status" => 1,
        "result" => $result_
    ));
} else {
    echo json_encode(array(
        "status" => 0,
        "result" => "Tidak ada permohonan Baru"
    ));
}
