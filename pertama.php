<!DOCTYPE html>
<html>
<head>
	<title>Situs Nasa</title>
</head>
<body background="buah2.jpg"><center>
        <h2>MINANG MART</h2><hr>
<form action="#" method="post">
<table border="2" bgcolor='white'>
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
        input[type="text"], input[type="number"] {
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
                <td class="header">BARANG</td>
                <td class="green">HARGA (Per Kg)</td>
                <td class="blue">JUMLAH Kg</td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="N1" placeholder="Nama Buah 1" required>
                    <img src="cery.jpg" style="width:120px;height:120px;">
                <td><input type="number" name="1" placeholder="Harga 1" required></td>
                <td><input type="number" name="kg1" placeholder="Jumlah Kg" required></td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="N2" placeholder="Nama Buah 2" required>
                    <img src="kecapiku.jpeg" style="width:120px;height:120px;"> 
                <td> <input type="number" name="2" placeholder="Harga 2" required></td>
                <td><input type="number" name="kg2" placeholder="Jumlah Kg" required></td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="N3" placeholder="Nama Buah 3" required>
                    <img src="naga.jpeg" style="width:120px;height:120px;"> 
                <td><input type="number" name="3" placeholder="Harga 3" required></td>
                <td><input type="number" name="kg3" placeholder="Jumlah Kg" required></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Total" name="total"></td>
            </tr>
        </table>
    </form>
    <br>
        <?php
if (isset($_POST['total'])){
                $buah1 = $_POST ['1'];
                $buah2 = $_POST ['2'];
                $buah3 = $_POST ['3'];
                $kg1 = $_POST ['kg1'];
                $kg2 = $_POST ['kg2'];
                $kg3 = $_POST ['kg3'];
                $name1 = $_POST ['N1'];
                $name2 = $_POST ['N2'];
                $name3 = $_POST ['N3'];

        $harga1 = $buah1 * $kg1;
        $harga2 = $buah2 * $kg2;
        $harga3 = $buah3 * $kg3;
        $total = $harga1 + $harga2 + $harga3;
        
        if($total > 100000){
                $diskon = ($total/100)*20;
                $hargadiskon = $total - $diskon;
                echo "<table bgcolor='white'>
                        <tr>
                          <td>BARANG</td>
                          <td>harga satuan</td>
                          <td>Jumlah Kg</td>
                          <td>total buah</td>
                        </tr>
                        <tr>
                          <td>".$name1."</td>
                          <td>Rp.".$buah1."</td>
                          <td>".$kg1."</td>
                          <td>Rp.".$harga1."</td>
                        </tr>
                        <tr>
                          <td>".$name2."</td>
                          <td>Rp.".$buah2."</td>
                          <td>".$kg2."</td>
                          <td>Rp.".$harga2."</td>
                        </tr>
                        <tr>
                          <td>".$name3."</td>
                          <td>Rp.".$buah3."</td>
                          <td>".$kg3."</td>
                          <td>Rp.".$harga3."</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>harga awal</td>
                          <td>Rp.".$total."</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>terpotong (20%)</td>
                          <td>Rp.".$diskon."</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>Total</td>
                          <td>Rp.".$hargadiskon."</td>
                        </tr>";         
        } else {
                echo "<table bgcolor='white'>
                <tr>
                  <td>BARANG</td>
                  <td>HARGA SATUAN</td>
                  <td>JUMLAH KG</td>
                  <td>TOTAL BUAH</td>
                </tr>
                <tr>
                  <td>".$name1."</td>
                  <td>Rp.".$buah1."</td>
                  <td>".$kg1."</td>
                  <td>Rp.".$harga1."</td>
                </tr>
                <tr>
                  <td>".$name2."</td>
                  <td>Rp.".$buah2."</td>
                  <td>".$kg2."</td>
                  <td>Rp.".$harga2."</td>
                </tr>
                <tr>
                  <td>".$name3."</td>
                  <td>Rp.".$buah3."</td>
                  <td>".$kg3."</td>
                  <td>Rp.".$harga3."</td>
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

</body>

</html>