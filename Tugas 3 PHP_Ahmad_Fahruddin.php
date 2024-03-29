<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Mahasiswa</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://w0.peakpx.com/wallpaper/233/1014/HD-wallpaper-gundam-mobile-suit-gundam-the-witch-from-mercury.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: 100px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            color: white;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid white;
            padding: 8px;
            text-align: left;
            color: white;
        }
        th {
            background-color: #4CAF50;
        }
        tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.1);
        }
        tr:hover {
            background-color: rgba(255, 255, 255, 0.3);
        }
        tfoot {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Nilai Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Predikat</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nilai_mahasiswa = [
                    ['nim' => '123456', 'nama' => 'Mochamad', 'nilai' => 80],
                    ['nim' => '234567', 'nama' => 'Ilham', 'nilai' => 75],
                    ['nim' => '345678', 'nama' => 'Shalsabiela', 'nilai' => 90],
                    ['nim' => '456789', 'nama' => 'Saefuddin', 'nilai' => 55],
                    ['nim' => '567890', 'nama' => 'Yaroh', 'nilai' => 70],
                    ['nim' => '678901', 'nama' => 'Anugrah', 'nilai' => 85],
                    ['nim' => '789012', 'nama' => 'Dwi', 'nilai' => 60],
                    ['nim' => '890123', 'nama' => 'Saputra', 'nilai' => 95],
                    ['nim' => '901234', 'nama' => 'Bayu', 'nilai' => 40],
                    ['nim' => '012345', 'nama' => 'Angga', 'nilai' => 88]
                ];

                function hitungGrade($nilai) {
                    if ($nilai >= 90) {
                        return 'A';
                    } elseif ($nilai >= 80) {
                        return 'B';
                    } elseif ($nilai >= 70) {
                        return 'C';
                    } elseif ($nilai >= 60) {
                        return 'D';
                    } else {
                        return 'E';
                    }
                }

                function hitungPredikat($grade) {
                    switch ($grade) {
                        case 'A':
                            return 'Memuaskan';
                            break;
                        case 'B':
                            return 'Bagus';
                            break;
                        case 'C':
                            return 'Cukup';
                            break;
                        case 'D':
                            return 'Kurang';
                            break;
                        case 'E':
                            return 'Buruk';
                            break;
                        default:
                            return 'Tidak Valid';
                    }
                }

                $nilai_tertinggi = max(array_column($nilai_mahasiswa, 'nilai'));
                $nilai_terendah = min(array_column($nilai_mahasiswa, 'nilai'));
                $total_nilai = array_sum(array_column($nilai_mahasiswa, 'nilai'));
                $jumlah_mahasiswa = count($nilai_mahasiswa);
                
                foreach ($nilai_mahasiswa as $mahasiswa) {
                    $nim = $mahasiswa['nim'];
                    $nama = $mahasiswa['nama'];
                    $nilai = $mahasiswa['nilai'];
                    $grade = hitungGrade($nilai);
                    $predikat = hitungPredikat($grade);
                    $keterangan = ($grade == 'E') ? 'Tidak Lulus' : 'Lulus';

                    echo "<tr><td>$nim</td><td>$nama</td><td>$nilai</td><td>$grade</td><td>$predikat</td><td>$keterangan</td></tr>";
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6">Nilai Tertinggi: <?php echo $nilai_tertinggi; ?></td>
            </tr>
            <tr>
                <td colspan="6">Nilai Terendah: <?php echo $nilai_terendah; ?></td>
            </tr>
            <tr>
                <td colspan="6">Nilai Rata-rata: <?php echo round($total_nilai / $jumlah_mahasiswa, 2); ?></td>
            </tr>
            <tr>
                <td colspan="6">Jumlah Mahasiswa: <?php echo $jumlah_mahasiswa; ?></td>
            </tr>
            <tr>
                <td colspan="6">Jumlah Keseluruhan Nilai: <?php echo $total_nilai; ?></td>
            </tr>
        </tfoot>
    </table>
    <footer>
        <p>Copyright &copy; 2024 Ahmad Fahruddin</p>
    </footer>
</div>
</body>
</html>