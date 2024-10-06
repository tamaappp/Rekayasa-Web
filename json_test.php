<?php
// Langkah 1: Membuat variabel JSON yang berisi data booking billiard
$jsonBooking = '{
    "nama_tim": "Tim yoga",
    "waktu_booking": "2024-10-06 20:00",
    "durasi_jam": 3,
    "meja": "Meja 5",
    "biaya_per_jam": 50000,
    "pemain": [
        {
            "nama": "yoga",
            "tingkat_keahlian": "Menurun"
        },
        {
            "nama": "Budi",
            "tingkat_keahlian": "Pemula"
        },
        {
            "nama": "Candra",
            "tingkat_keahlian": "bukan ahli"
        }
    ]
}';

// Langkah 2: Decode JSON menjadi PHP Object
$dataObject = json_decode($jsonBooking);

// Akses nilai dari PHP Object
echo "<h3>Informasi Booking Billiard (PHP Object)</h3>";
echo "Nama Tim: " . $dataObject->nama_tim . "<br>";
echo "Waktu Booking: " . $dataObject->waktu_booking . "<br>";
echo "Durasi: " . $dataObject->durasi_jam . " jam<br>";
echo "Meja: " . $dataObject->meja . "<br>";

$totalBiaya = $dataObject->durasi_jam * $dataObject->biaya_per_jam;
echo "Total Biaya: Rp " . $totalBiaya . "<br>";

echo "<h3>Daftar Pemain (PHP Object)</h3>";
foreach ($dataObject->pemain as $index => $pemain) {
    echo ($index + 1) . ". Nama: " . $pemain->nama . " - Tingkat Keahlian: " . $pemain->tingkat_keahlian . "<br>";
}

// Langkah 3: Decode JSON menjadi PHP Array
$dataArray = json_decode($jsonBooking, true);

// Akses nilai dari PHP Array
echo "<h3>Informasi Booking Billiard (PHP Array)</h3>";
echo "Nama Tim: " . $dataArray['nama_tim'] . "<br>";
echo "Waktu Booking: " . $dataArray['waktu_booking'] . "<br>";
echo "Durasi: " . $dataArray['durasi_jam'] . " jam<br>";
echo "Meja: " . $dataArray['meja'] . "<br>";

$totalBiayaArray = $dataArray['durasi_jam'] * $dataArray['biaya_per_jam'];
echo "Total Biaya: Rp " . $totalBiayaArray . "<br>";

echo "<h3>Daftar Pemain (PHP Array)</h3>";
foreach ($dataArray['pemain'] as $index => $pemain) {
    echo ($index + 1) . ". Nama: " . $pemain['nama'] . " - Tingkat Keahlian: " . $pemain['tingkat_keahlian'] . "<br>";
}
?>