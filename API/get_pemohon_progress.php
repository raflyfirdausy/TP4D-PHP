<?php
include "koneksi.php";

$id_pemohon = isset($_GET['id_pemohon']) ? htmlspecialchars($_GET['id_pemohon']) : null;
$query = "SELECT * FROM daftar_pemohon WHERE (status = 1 OR status = 2) AND id_pemohon = '$id_pemohon' ORDER BY id_daftar_pemohon DESC";

if ($id_pemohon != null) {
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
            "result" => "Tidak ada data permohonan"
        ));
    }
} else {
    echo json_encode(array(
        "status" => 0,
        "result" => "Pemohon tidak ditemukan"
    ));
}
