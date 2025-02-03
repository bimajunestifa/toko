<!DOCTYPE html>
<html>
<head>
    <title>Situs Nasa</title>
    <style>
        body {
            background-image: url('buah2.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
            color: #333;
        }
        table {
            border-collapse: collapse;
            margin: 20px auto;
            width: 80%;
        }
        td {
            padding: 10px;
            text-align: center;
        }
        .header {
            background-color: red;
            color: white;
        }
        .green {
            background-color: green;
            color: white;
        }
        .blue {
            background-color: blue;
            color: white;
        }
        .white {
            background-color: white;
        }
        input[type="number"] {
            width: 80%;
            padding: 5px;
            margin: 5px 0;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: green;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: darkgreen;
        }
        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
<center>
    <h2>Toko Buah</h2>
    <hr>
    <form action="" method="post">
        <table border="2">
            <tr>
                <td class="header">BUAH</td>
                <td class="green">HARGA (Per Kg)</td>
                <td class="blue">JUMLAH Kg</td>
            </tr>
            <tr>
                <td>
                    <select name="fruit1" required>
                        <option value="">Pilih Buah 1</option>
                        <option value="Apple">Apple</option>
                        <option value="Banana">Banana</option>
                        <option value="Cherry">Cherry</option>
                        <option value="Grapes">Grapes</option>
                        <option value="Mango">Mango</option>
                    </select>
                    <img src="cery.jpg" style="width:120px;height:120px;">
                </td>
                <td><input type="number" name="price1" placeholder="Harga 1" required></td>
                <td><input type="number" name="kg1" placeholder="Jumlah Kg" required></td>
            </tr>
            <tr>
                <td>
                    <select name="fruit2" required>
                        <option value="">Pilih Buah 2</option>
                        <option value="Apple">Apple</option>
                        <option value="Banana">Banana</option>
                        <option value="Cherry">Cherry</option>
                        <option value="Grapes">Grapes</option>
                        <option value="Mango">Mango</option>
                    </select>
                    <img src="kecapiku.jpeg" style="width:120px;height:120px;"> 
                </td>
                <td><input type="number" name="price2" placeholder="Harga 2" required></td>
                <td><input type="number" name="kg2" placeholder="Jumlah Kg" required></td>
            </tr>
            <tr>
                <td>
                    <select name="fruit3" required>
                        <option value="">Pilih Buah 3</option>
                        <option value="Apple">Apple</option>
                        <option value="Banana">Banana</option>
                        <option value="Cherry">Cherry</option>
                        <option value="Grapes">Grapes</option>
                        <option value="Mango">Mango</option>
                    </select>
                    <img src="naga.jpeg" style="width:120px;height:120px;"> 
                </td>
                <td><input type="number" name="price3" placeholder="Harga 3" required></td>
                <td><input type="number" name="kg3" placeholder="Jumlah Kg" required></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Total" name="total"></td>
            </tr>
        </table>
    </form>
    <br>
    <?php
    if (isset($_POST['total'])) {
        $fruit1 = $_POST['fruit1'];
        $fruit2 = $_POST['fruit2'];
        $fruit3 = $_POST['fruit3'];
        $price1 = $_POST['price1'];
        $price2 = $_POST['price2'];
        $price3 = $_POST['price3'];
        $kg1 = $_POST['kg1'];
        $kg2 = $_POST['kg2'];
        $kg3 = $_POST['kg3'];

        $total1 = $price1 * $kg1;
        $total2 = $price2 * $kg2;
        $total3 = $price3 * $kg3;
        $total = $total1 + $total2 + $total3;

        if ($total > 100000) {
            $discount = ($total / 100) * 20;
            $finalPrice = $total - $discount;
            echo "<table bgcolor='white'>
                    <tr>
                      <td>BUAH</td>
                      <td>HARGA SATUAN</td>
                      <td>JUMLAH KG</td>
                      <td>TOTAL BUAH</td>
                    </tr>
                    <tr>
                      <td>".$fruit1."</td>
                      <td>Rp.".$price1."</td>
                      <td>".$kg1."</td>
                      <td>Rp.".$total1."</td>
                    </tr>
                    <tr>
                      <td>".$fruit2."</td>
                      <td>Rp.".$price2."</td>
                      <td>".$kg2."</td>
                      <td>Rp.".$total2."</td>
                    </tr>
                    <tr>
                      <td>".$fruit3."</td>
                      <td>Rp.".$price3."</td>
                      <td>".$kg3."</td>
                      <td>Rp.".$total3."</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td>Harga Awal</td>
                      <td>Rp.".$total."</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td>Diskon (20%)</td>
                      <td>Rp.".$discount."</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td>Total</td>
                      <td>Rp.".$finalPrice."</td>
                    </tr>";         
        } else {
            echo "<table bgcolor='white'>
                    <tr>
                      <td>BUAH</td>
                      <td>HARGA SATUAN</td>
                      <td>JUMLAH KG</td>
                      <td>TOTAL BUAH</td>
                    </tr>
                    <tr>
                      <td>".$fruit1."</td>
                      <td>Rp.".$price1."</td>
                      <td>".$kg1."</td>
                      <td>Rp.".$total1."</td>
                    </tr>
                    <tr>
                      <td>".$fruit2."</td>
                      <td>Rp.".$price2."</td>
                      <td>".$kg2."</td>
                      <td>Rp.".$total2."</td>
                    </tr>
                    <tr>
                      <td>".$fruit3."</td>
                      <td>Rp.".$price3."</td>
                      <td>".$kg3."</td>
                      <td>Rp.".$total3."</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td>Total</td>
                      <td>Rp.".$total."</td>
                    </tr>";
        }
    }
    ?>
</center>
</body>
</html>