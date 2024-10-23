<div>
    <x-header></x-header>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pilihan Ganda</title>
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f9f9f9;
        }
        form, #zero {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="radio"] {
            margin-right: 10px;
        }
        input[type="text"] {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    <center>

        
        <?php
    $jawabanBenar = ['a', 'b', 'c', 'a', 'c', 'b', 'a', 'a', 'a', 'a'];
    $jawabanSiswa = isset($_POST['jawaban']) ? $_POST['jawaban'] : [];
    
    $jumlahBenar = 0;
    $jumlahSalah = 0;
    
    for ($i = 0; $i < count($jawabanBenar); $i++) {
        if (isset($jawabanSiswa[$i]) && $jawabanSiswa[$i] === $jawabanBenar[$i]) {
            $jumlahBenar++;
        } else {
            $jumlahSalah++;
        }
    }
    ?>

<form method="post">
    <h1> Test Speed PPLG</h1>
    <label for=""> Input Nama</label>
    <input type="text" id="a" name="a">
    <?php if(isset($_POST['a'])) {
            $Nama = $_POST['a'];}
            ?>
        <p>Pilih jawaban untuk setiap soal:</p>
        <?php for ($i = 0; $i < count($jawabanBenar); $i++) { ?>
            <br>
            <label>
   <?php echo $i + 1; ?>. )           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages <br> 
                <br><label for="">Pilih Jawaban</label> <br>
                <input type="radio" name="jawaban[<?php echo $i; ?>]" value="a"> A
                <input type="radio" name="jawaban[<?php echo $i; ?>]" value="b"> B
                <input type="radio" name="jawaban[<?php echo $i; ?>]" value="c"> C
            </label>
            <br>
            <?php } ?>
            <input type="submit" value="Submit">
        </form>

        <?php 
        if ( isset($Nama) ) {
            echo '<div id="zero"><h1> Hasil Test </h1> <br>';
            echo "Nama : " . $Nama;
            echo "<br> Jumlah Benar : " .$jumlahBenar;
            echo "<br> Jumlah Salah : " .$jumlahSalah . "</div>";
        }
        ?>
        <br>
        <button onclick="location.href='10.php'"> Again?</button>
    </center>
    </body>
    </html>
    