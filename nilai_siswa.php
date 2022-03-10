<?php 
    $proses = $_POST["proses"];
    $nama_siswa = $_POST["nama"];
    $mata_kuliah = $_POST["matkul"];
    $nilai_uts = $_POST["nilai_uts"];
    $nilai_uas = $_POST["nilai_uas"];
    $nilai_tugas = $_POST["nilai_tugas"];
    $nilai_total = (30/100 * $nilai_uts) + (35/100 * $nilai_uas) + (35/100 * $nilai_tugas);

    if ($nilai_total > 55) {
        $status = "lulus";
    } else {
        $status = "gagal";
    }

    if ($nilai_total >= 0 && $nilai_total <= 35) {
        $grade = "E";
    }elseif($nilai_total > 35 && $nilai_total <= 55){
        $grade = "D";
    }elseif($nilai_total > 55 && $nilai_total <= 69){
        $grade = "C";
    }elseif($nilai_total > 69 && $nilai_total <= 84){
        $grade = "B";
    }elseif($nilai_total > 84 && $nilai_total <= 100){
        $grade = "A";
    }else{
        $grade = "I";
    }

    switch ($grade) {
        case "E" : 
            $predikat = "Sangat Kurang";
            break;
        case "D" : 
            $predikat = "Kurang";
            break;
        case "C" :
            $predikat = "Cukup";
            break;
        case "B" : 
            $predikat = "Memuaskan";
            break;
        case "A" : 
            $predikat = "Sangat Memuaskan";
            break;
        default :
            $predikat = "Tidak Ada";
            break;
    }

    if(!empty($proses)) {
        echo 'Proses : '.$proses;
        echo '<br/>Nama : '.$nama_siswa;
        echo '<br/>Mata Kuliah : '.$mata_kuliah;
        echo '<br/>Nilai UTS : '.$nilai_uts;
        echo '<br/>Nilai UAS : '.$nilai_uas;
        echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
        echo '<br/>Predikat : '.$predikat;
        echo '<br/>Status : '.$status;
    }
    ?>

