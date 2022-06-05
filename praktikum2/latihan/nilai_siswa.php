<?php
// Menginput data
$nama_siswa = $_POST["nama"];
$mata_kuliah = $_POST["mata_kuliah"];
$uts = $_POST["nilai_uts"];
$uas = $_POST["nilai_uas"];
$tugas = $_POST["nilai_tugas"];
$proses = $_POST["proses"];

// Total nilai
$total_nilai = $uts + $uas + $tugas;
$total = $total_nilai/3;

// Menampilkan nilai dengan if
if($total <= 55){
    $lulus = "Anda Tidak Lulus";
}else{
    $lulus = "Selamat Anda Lulus";
}

// Menampilkan nilai dengan elseif
if($total >= 85){
    $grade = "A";
}elseif($total >= 70){
    $grade = "B";
}elseif($total >= 56){
    $grade = "C";
}elseif($total >= 36){
    $grade = "D";
}elseif($total >= 10){
    $grade = "E";
}else{
    $grade = "I(tidak ada nilai)";
}

// Print data
echo "Nama : $nama_siswa";
echo "<br> Mata Kuliah : $mata_kuliah";
echo "<br> Nilai UTS : $uts";
echo "<br> Nilai UAS  : $uas";
echo "<br> Nilai Tugas : $tugas";
echo "<br> Keterangan  : $lulus";
echo "<br> Grade  : $grade";
echo "<br> Data telah di   : $proses";

?>