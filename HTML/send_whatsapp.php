<?php
// Data dari formulir
$nama = $_POST['nama'];
$rank = $_POST['rank'];
$pesan = $_POST['pesan'];

// Nomor WhatsApp penerima
$nomor_whatsapp = '6283108722239'; // Ganti dengan nomor WhatsApp Anda

// Format pesan yang akan dikirim
$pesan_whatsapp = "Nama: $nama\nRank yang dibeli: $rank\nPesan tambahan: $pesan";

// Encode pesan untuk URL
$pesan_whatsapp_encoded = urlencode($pesan_whatsapp);

// URL untuk mengirim pesan WhatsApp
$url_whatsapp = "https://wa.me/$nomor_whatsapp?text=$pesan_whatsapp_encoded";

// Redirect ke URL WhatsApp
header("Location: $url_whatsapp");
exit();
?>
