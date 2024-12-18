<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "kesehatan";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil pertanyaan terkait Anemia
$sql = "SELECT pertanyaan FROM tb_pertanyaan_kesehatan WHERE id_kategori = 1";
$result = $conn->query($sql);
$questions = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $questions[] = $row['pertanyaan'];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Anemia</title>
</head>
<body>
    <h1>Informasi Anemia</h1>
    <section>
        <h2>Apa itu Anemia?</h2>
        <p>Anemia adalah kondisi di mana tubuh Anda tidak memiliki cukup sel darah merah yang sehat untuk membawa oksigen ke jaringan tubuh Anda. Ini dapat menyebabkan Anda merasa lelah dan lemah.</p>

        <h2>Tanda dan Gejala</h2>
        <ul>
            <li>Merasa lelah atau lemah</li>
            <li>Kulit pucat</li>
            <li>Sesak napas</li>
            <li>Pusing atau kepala berkunang-kunang</li>
            <li>Detak jantung tidak teratur</li>
        </ul>

        <h2>Dampak dan Komplikasi</h2>
        <p>Jika tidak ditangani, anemia dapat menyebabkan komplikasi seperti kerusakan organ, gangguan kehamilan, dan lain-lain.</p>

        <h2>Penyebab</h2>
        <p>Anemia dapat disebabkan oleh kekurangan zat besi, vitamin, atau penyakit kronis.</p>

        <h2>Pencegahan</h2>
        <p>Makan makanan bergizi, kaya zat besi, dan vitamin, serta lakukan pemeriksaan kesehatan secara rutin.</p>

        <h2>Pengobatan</h2>
        <p>Pengobatan tergantung pada penyebabnya, seperti suplemen zat besi, vitamin, atau penanganan medis lainnya.</p>
    </section>

    <section>
        <h2>Ingin Mengetahui Lebih Lanjut?</h2>
        <p>Ikuti tes kesehatan anemia untuk mengetahui kondisi Anda lebih lanjut.</p>
        <form action="pengetesan_anemia.php" method="GET">
            <button type="submit">Mulai Tes</button>
        </form>
    </section>
</body>
</html>
