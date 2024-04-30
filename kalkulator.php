<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <style>
        *{
            font-family: Arial, sans-serif;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: grey;
        }
        .calculator{
            text-align: center;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: black;
            color: white;
            width: 300px;
        }
        input[type="number"]{
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 18px;
            box-sizing: border-box;
        }
        button[type="submit"]{
            width: 20%;
            padding: 10px;
            margin: 20px 5px 10px 5px;
            border: none;
            border-radius: 5px;
            font-size: 25px;
            background-color: orange;
            color: white;
            cursor: pointer;
        }
        button[type="button"]{
            width: 100%;
            padding: 10px;
            margin: 20px 5px 10px 5px;
            border: none;
            border-radius: 5px;
            font-size: 25px;
            background-color: red;
            color: white;
            cursor: pointer;
        }
        button[type="submit"]:hover{
            background-color: red;
        }
        button[type="button"]:hover{
            background-color: darkred;
        }
        #hasil{
            padding: 10px;
            margin-top: 10px;
            font-size: 30px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h3>Kalkulator by: FaizalAG</h3>
    <form id="calculator-form" method="post">
        <input id="angka1" type="number" name="angka1" placeholder="angka ke-1" value="<?php echo isset($_POST['angka1']) ? $_POST['angka1'] : ''; ?>" required>
        <input id="angka2" type="number" name="angka2" placeholder="angka ke-2" value="<?php echo isset($_POST['angka2']) ? $_POST['angka2'] : ''; ?>" required>
        <button type="submit" name="tambah">+</button>
        <button type="submit" name="kurang">-</button>
        <button type="submit" name="kali">x</button>
        <button type="submit" name="bagi">:</button>
        <button type="button" id="clear">C</button>
    </form>
    <?php
$hasil = ""; 
$angka1 = isset($_POST['angka1']) ? $_POST['angka1'] : "";
$angka2 = isset($_POST['angka2']) ? $_POST['angka2'] : ""; 

if (isset($_POST['tambah'])) {
    $hasil = $angka1 + $angka2;
} elseif (isset($_POST['kurang'])) {
    $hasil = $angka1 - $angka2;
} elseif (isset($_POST['kali'])) {
    $hasil = $angka1 * $angka2;
} elseif (isset($_POST['bagi'])) {
    if ($angka2 != 0) {
        $hasil = $angka1 / $angka2;
    } else {
        $hasil = "Tak terhingga";
    }
} elseif (isset($_POST['clear'])) {
   
    $angka1 = "";
    $angka2 = "";
    $hasil = ""; 
}

echo "<div id='hasil'>Hasil: $hasil</div>";
?>

</div>

<script>
    document.getElementById('clear').addEventListener('click', function() {
        document.getElementById('angka1').value = '';
        document.getElementById('angka2').value = ''; 
        document.getElementById('hasil').innerText = 'Hasil:'; 
    });
</script>

</div>
</body>
</html>

