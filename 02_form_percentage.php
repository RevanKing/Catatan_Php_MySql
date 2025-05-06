<!DOCTYPE html>
<html>
<head>
    <title>Hitung Persentase Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f0fe;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .percentage-box {
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
            width: 350px;
        }

        .percentage-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            background: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="percentage-box">
    <h2>Hitung Persentase</h2>
    <form method="post">
        <div class="input-group">
            <label for="nilai_awal">Nilai Awal:</label>
            <input type="number" name="nilai_awal" id="nilai_awal" required />
        </div>
        <div class="input-group">
            <label for="persen">Persentase (%):</label>
            <input type="number" name="persen" id="persen" step="0.01" required />
        </div>
        <button type="submit" class="submit-btn">Hasil</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai_awal = $_POST['nilai_awal'];
        $persen = $_POST['persen'];

        $hasil = ($persen / 100) * $nilai_awal;
        echo '<div class="result">';
        echo "Nilai Awal: Rp " . number_format($nilai_awal, 0, ',', '.') . "<br>";
        echo "Persentase: " . $persen . "%<br>";
        echo "Hasil: " . $persen . "% x " . number_format($nilai_awal, 0, ',', '.') . " = <strong>Rp " . number_format($hasil, 0, ',', '.') . "</strong>";
        echo '</div>';
    }
    ?>
</div>

</body>
</html>
