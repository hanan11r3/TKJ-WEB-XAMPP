<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum Web Dinamis - XI RPL 8</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f2f5; margin: 0; padding: 20px; }
        .container { max-width: 900px; margin: auto; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        header { border-bottom: 3px solid #d32f2f; margin-bottom: 30px; padding-bottom: 10px; }
        h1 { color: #d32f2f; margin: 0; }
        .card-container { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; }
        .card { border: 1px solid #eee; padding: 20px; border-radius: 12px; background: #fafafa; transition: transform 0.2s; }
        .card:hover { transform: translateY(-5px); box-shadow: 0 6px 12px rgba(0,0,0,0.1); }
        .card img { width: 100%; height: 200px; object-fit: cover; border-radius: 8px; margin-bottom: 15px; border: 2px solid #ddd; }
        .card h3 { margin: 10px 0; color: #333; font-size: 1.1em; }
        .info { color: #666; font-size: 0.9em; margin: 5px 0; }
        .badge { background: #d32f2f; color: white; padding: 3px 10px; border-radius: 20px; font-size: 0.8em; }
    </style>
</head>
<body>

<div class="container">
    <header>
        <?php $nama_kelompok = "Kelompok XI RPL 8 - Web Dinamis"; ?>
        <h1><?php echo $nama_kelompok; ?></h1>
        <p>SMK Telkom Malang - Praktikum Pemrograman Web</p>
    </header>

    <div class="card-container">
        <?php
        // Data Anggota Kelompok XI RPL 8
        $daftar_anggota = [
            [
                "nama" => "Elang Dipa Purwadhiyaksa",
                "absen" => "14",
                "kelas" => "XI RPL 8",
                "foto" => "images/elang.jpg"
            ],
            [
                "nama" => "Ahmad Hanan Nada Firdaus",
                "absen" => "04",
                "kelas" => "XI RPL 8",
                "foto" => "images/hanan.jpg"
            ],
            [
                "nama" => "Sayoga Sindhunata Naruttama",
                "absen" => "30",
                "kelas" => "XI RPL 8",
                "foto" => "images/sayoga.jpg"
            ]
        ];

        foreach ($daftar_anggota as $siswa) {
            echo "<div class='card'>";
                echo "<img src='{$siswa['foto']}' alt='Foto {$siswa['nama']}'>";
                echo "<h3>{$siswa['nama']}</h3>";
                echo "<p class='info'>No. Absen: <strong>{$siswa['absen']}</strong></p>";
                echo "<p class='info'><span class='badge'>{$siswa['kelas']}</span></p>";
            echo "</div>";
        }
        ?>
    </div>
</div>

</body>
</html>