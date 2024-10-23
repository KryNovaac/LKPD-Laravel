<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .a {
            background-color: rgb(0, 84, 157);
            width: 30%;
            padding: 20px;
            color: white;
            border-radius: 20px;
        }
        #a {
            text-align: center;
        }
        .b {
            color: blue;
        }
    </style>
    <x-header></x-header>
    <center>
        <div class="a">
            <label for="data">Cari data</label>
            <input type="date" id="dataCari" name="dataCari" required>
            <button onclick="satu()" type="submit">klik</button>        
        </div>
    </center>
  
 
    <div><p id="a">Tidak mencari data..</p></div>

    <script>
        function satu() { 
            var tanggal = new Date(document.getElementById('dataCari').value).getDate();
            var bulan = new Date(document.getElementById('dataCari').value).getMonth() + 1;
            var tahun = new Date(document.getElementById('dataCari').value).getFullYear();

            switch (bulan) { 
                case 1:
                    bulan = "Januari";
                    break;
                case 2:
                    bulan = "Februari";
                    break;
                case 3:
                    bulan = "Maret";
                    break;
                case 4:
                    bulan = "April";
                    break;
                case 5:
                    bulan = "Mei";
                    break;
                case 6:
                    bulan = "Juni";
                    break;
                case 7:
                    bulan = "Juli";
                    break;
                case 8:
                    bulan = "Agustus";
                    break;
                case 9:
                    bulan = "September";
                    break;
                case 10:
                    bulan = "Oktober";
                    break;
                case 11:
                    bulan = "November";
                    break;
                case 12:
                    bulan = "Desember";
                    break;
            }

            document.getElementById('a').innerHTML = `<a id="a"> Mencari data tanggal <span class="b">${tanggal} ${bulan} ${tahun}</span></a>`; }
    </script>
</body>
</html>