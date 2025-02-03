<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buah Buah</title>
    <style>
        body {
            background-image: url('buah2.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            margin: 20px auto;
            width: 80%;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: green;
            color: white;
        }
        td {
            background-color: white;
        }
        .total-table {
            background-color: white;
            margin: 20px auto;
            border: 1px solid black;
            width: 80%;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Nasi Padang</h2>
    <hr>
    <form action="" method="post">
        <table border="2">
            <tr>
                <th>Barang</th>
                <th>Harga (per Kg)</th>
                <th>Jumlah Kg</th>
            </tr>
            <tr>
                <td><input type="text" name="N1" required></td>
                <td><input type="number" name="1" step="0.01" required></td>
                <td><input type="number" name="kg1" min="0" required></td>
            </tr>
            <tr>
                <td><input type="text" name="N2" required></td>
                <td><input type="number" name="2" step="0.01" required></td>
                <td><input type="number" name="kg2" min="0" required></td>
            </tr>
            <tr>
                <td><input type="text" name="N3" required></td>
                <td><input type="number" name="3" step="0.01" required></td>
                <td><input type="number" name="kg3" min="0" required></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Total" name="total"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['total'])) {
        // Retrieve and sanitize input
        $names = [htmlspecialchars($_POST['N1']), htmlspecialchars($_POST['N2']), htmlspecialchars($_POST['N3'])];
        $prices = [floatval($_POST['1']), floatval($_POST['2']), floatval($_POST['3'])];
        $quantities = [floatval($_POST['kg1']), floatval($_POST['kg2']), floatval($_POST['kg3'])];

        // Calculate total prices
        $totalPrices = [];
        $total = 0;
        for ($i = 0; $i < 3; $i++) {
            $totalPrices[$i] = $prices[$i] * $quantities[$i];
            $total += $totalPrices[$i];
        }

        // Calculate discount if applicable
        $discount = ($total > 100000) ? ($total * 0.20) : 0;
        $finalTotal = $total - $discount;

        // Display results
        echo "<table class='total-table'>
                <tr>
                    <th>Barang</th>
                    <th>Harga Satuan</th>
                    <th>Jumlah Kg</th>
                    <th>Total</th>
                </tr>";
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>
                    <td>{$names[$i]}</td>
                    <td>Rp." . number_format($prices[$i], 2) . "</td>
                    <td>{$quantities[$i]}</td>
                    <td>Rp." . number_format($totalPrices[$i], 2) . "</td>
                  </tr>";
        }
        echo "<tr>
                <td colspan='3'>Harga Awal</td>
                <td>Rp." . number_format($total, 2) . "</td>
              </tr>
              <tr>
                <td colspan='3'>Terpotong (20%)</td>
                <td>Rp." . number_format($discount, 2) . "</td>
              </tr>
              <tr>
                <td colspan='3'>Total</td>
                <td>Rp." . number_format($finalTotal, 2) . "</td>
              </tr>
            </table>";
    }
    ?>
</body>
</html>