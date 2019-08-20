<?php
include "koneksi.php";

    $queryMax = "SELECT max(id_daftar_pemohon) as max FROM `daftar_pemohon`";
    $kodeSekarang = (int) $koneksi->query($queryMax)->fetch_assoc()["max"] + 1;

    if($kodeSekarang < 10){
        $kodeSekarang = "000" . $kodeSekarang;
    } else if($kodeSekarang < 100){
        $kodeSekarang = "00" . $kodeSekarang;
    } else if($kodeSekarang < 1000){
        $kodeSekarang = "0" . $kodeSekarang;
    } else if($kodeSekarang < 10000){
        $kodeSekarang = "0" . $kodeSekarang;
    } 

    $id_pemohon = isset($_POST['id_pemohon']) ? $_POST['id_pemohon'] : null;
    $no_regis = "PBK-" . $kodeSekarang;
    $instansi_pemohon =isset($_POST['instansi_pemohon']) ? $_POST['instansi_pemohon'] : null;
    $alamat_instansi =isset($_POST['alamat_instansi']) ? $_POST['alamat_instansi'] : null;
    $nomer_surat =isset($_POST['nomer_surat']) ? $_POST['nomer_surat'] : null;
    $tanggal_surat =isset($_POST['tanggal_surat']) ? $_POST['tanggal_surat'] : null;
    $tanggal_masuk =isset($_POST['tanggal_masuk']) ? $_POST['tanggal_masuk'] : null;
    $jenis_kegiatan =isset($_POST['jenis_kegiatan']) ? $_POST['jenis_kegiatan'] : null;
    $pagu_anggaran =isset($_POST['pagu_anggaran']) ? $_POST['pagu_anggaran'] : null;
    $instansi =isset($_POST['instansi']) ? $_POST['instansi'] : null;
    $tahun_anggaran =isset($_POST['tahun_anggaran']) ? $_POST['tahun_anggaran'] : null;
    $pelaksanaan_dengan_cara =isset($_POST['pelaksanaan_dengan_cara']) ? $_POST['pelaksanaan_dengan_cara'] : null;
    $metode_pembayaran =isset($_POST['metode_pembayaran']) ? $_POST['metode_pembayaran'] : null;
    $lokasi_kegiatan =isset($_POST['lokasi_kegiatan']) ? $_POST['lokasi_kegiatan'] : null;
    $konsultan_perencanaan =isset($_POST['konsultan_perencanaan']) ? $_POST['konsultan_perencanaan'] : null;
    $awal_pekerjaan =isset($_POST['awal_pekerjaan']) ? $_POST['awal_pekerjaan'] : null;
    $akhir_pekerjaan =isset($_POST['akhir_pekerjaan']) ? $_POST['akhir_pekerjaan'] : null;
    $uitzet_perencanaan =isset($_POST['uitzet_perencanaan']) ? $_POST['uitzet_perencanaan'] : null;
    $pcm_persiapan =isset($_POST['pcm_persiapan']) ? $_POST['pcm_persiapan'] : null;
    $mc_pelaksanaan =isset($_POST['mc_pelaksanaan']) ? $_POST['mc_pelaksanaan'] : null;
    $pho_penyerahan_hasil =isset($_POST['pho_penyerahan_hasil']) ? $_POST['pho_penyerahan_hasil'] : null;
    $nama_pegawai_pemohon =isset($_POST['nama_pegawai_pemohon']) ? $_POST['nama_pegawai_pemohon'] : null;
    $nomor_hp =isset($_POST['nomor_hp']) ? $_POST['nomor_hp'] : null;
    $email =isset($_POST['email']) ? $_POST['email'] : null;
    $foto_dokumen=isset($_POST['foto_dokumen']) ? $_POST['foto_dokumen'] : null;

    if($foto_dokumen != null){
        $img_name = md5($foto_dokumen) . ".jpg";
        $path = "image/";
        $upload = file_put_contents($path . $img_name, base64_decode($foto_dokumen));

        if($upload){
            $query = "INSERT INTO `daftar_pemohon`(
                `id_daftar_pemohon`,
                `id_pemohon`,
                `no_regis`,
                `instansi_pemohon`,
                `alamat_instansi`,
                `nomer_surat`,
                `tanggal_surat`,
                `tanggal_masuk`,
                `jenis_kegiatan`,
                `pagu_anggaran`,
                `instansi`,
                `tahun_anggaran`,
                `pelaksanaan_dengan_cara`,
                `metode_pembayaran`,
                `lokasi_kegiatan`,
                `konsultan_perencanaan`,
                `awal_pekerjaan`,
                `akhir_pekerjaan`,
                `uitzet_perencanaan`,
                `pcm_persiapan`,
                `mc_pelaksanaan`,
                `pho_penyerahan_hasil`,
                `nama_pegawai_pemohon`,
                `nomor_hp`,
                `email`,
                `foto_dokumen`
            )
            VALUES(
                NULL,
                '$id_pemohon ',
                '$no_regis',
                '$instansi_pemohon',
                '$alamat_instansi',
                '$nomer_surat',
                '$tanggal_surat',
                '$tanggal_masuk',
                '$jenis_kegiatan',
                '$pagu_anggaran',
                '$instansi',
                '$tahun_anggaran',
                '$pelaksanaan_dengan_cara',
                '$metode_pembayaran',
                '$lokasi_kegiatan',
                '$konsultan_perencanaan',
                '$awal_pekerjaan',
                '$akhir_pekerjaan',
                '$uitzet_perencanaan',
                '$pcm_persiapan',
                '$mc_pelaksanaan',
                '$pho_penyerahan_hasil',
                '$nama_pegawai_pemohon',
                '$nomor_hp',
                '$email',
                '$img_name'
            )";

            $result  = $koneksi->query($query);
            if($result != null){

                $queryGetNoRegis = "SELECT no_regis FROM daftar_pemohon WHERE id_daftar_pemohon = (SELECT LAST_INSERT_ID())";
                $resultQueryNoRegis = $koneksi->query($queryGetNoRegis);

                if($resultQueryNoRegis != null){
                    echo json_encode(array(
                        "status" => 1,
                        "result" => "Berhasil mengajukan permohonan",
                        "no_regis" => $resultQueryNoRegis->fetch_assoc()["no_regis"]
                    ));
                } else {
                    echo json_encode(array(
                        "status" => 1,
                        "result" => "Berhasil mengajukan permohonan",
                        "no_regis" => $koneksi->error
                    ));
                }
            } else {
                echo json_encode(array(
                    "status" => 0,
                    "result" => $koneksi->error,
                    "no_regis" => "Tidak Ditemukan"
                ));
            }
        } else {
            echo json_encode(array('status' => 0, 'result' => 'Gagal Upload Foto'));
        }
    } else {
        echo json_encode(array('status' => 0, 'result' => 'Foto tidak ditemukan'));
    }
    

