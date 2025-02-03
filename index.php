<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Harga Buah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        form {
            display: inline-block;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="number"] {
            width: 150px;
            padding: 5px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<center>
    <h1>Hitung Harga Buah</h1>
    <form action="#" method="post">
        <label>Buah Apel</label>
        <input type="number" name="buah1" placeholder="Harga per kilo" required> 
        <input type="number" name="kilo1" placeholder="Jumlah kilo" required><br>
        
        <label>Buah Manggis</label>
        <input type="number" name="buah2" placeholder="Harga per kilo" required> 
        <input type="number" name="kilo2" placeholder="Jumlah kilo" required><br>
        
        <label>Buah Kuldi</label>
        <input type="number" name="buah3" placeholder="Harga per kilo" required> 
        <input type="number" name="kilo3" placeholder="Jumlah kilo" required><br>
        
        <input type="submit" value="Hitung" name="hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $harga1 = intval(value: $_POST['buah1']) * intval(value: $_POST['kilo1']);
        $harga2 = intval(value: $_POST['buah2']) * intval(value: $_POST['kilo2']);
        $harga3 = intval(value: $_POST['buah3']) * intval(value: $_POST['kilo3']);

        $total = $harga1 + $harga2 + $harga3;

        if ($total < 100000) {
            $totalbaru = $total;
        } else {
            echo 
            $diskon = 20 * $total / 100;
            $totalbaru = $total - $diskon;
        }

        echo "<p>Total Harga: Rp " . number_format(num: $total, decimals: 4, decimal_separator: ',', thousands_separator: '.') . "</p>";
        echo "<p>Total Setelah Diskon: Rp " . number_format(num: $totalbaru, decimals: 4, decimal_separator: ',', thousands_separator: '.') . "</p>";
        echo "<p>Total Semua belanja: Rp " . number_format(num: $totalbaru, decimals: 4, decimal_separator: ',', thousands_separator: '.') . "</p>";
    }
    ?>
</center>
</body>
</html>