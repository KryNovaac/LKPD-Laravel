<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        @keyframes gradient {
    0% {
      background-position: 0% 50%;
    }
    50% {
      background-position: 100% 50%;
    }
    100% {
      background-position: 0% 50%;
    }
  }

  @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1; 
            }
        }

        @keyframes scrollFromTop {
            from {
                opacity: 0;
                transform: translateY(-50px); 
            }
            to {
                opacity: 1;
                transform: translateY(0); 
            }
        }

        .x {
            width: 30%;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            background: linear-gradient(90deg, rgba(0, 0, 0, 0.43),rgba(0, 0, 0, 0.7)),rgba(0, 0, 0, 0.5);
            border-radius: 20px;
             backdrop-filter: blur(5px);
             margin-top: 30px;
        }
        .a {
            margin:2px;
            font-size: 2em;
            background: linear-gradient(90deg, rgb(195, 255, 135), rgb(255, 215, 150),rgb(88, 11, 11) 100%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent; 
            animation: gradient 4.5s ease infinite; 
        }
        
        #c {
            color: rgb(138, 154, 227);

        }

        input {
            border-radius: 50%;
            height: 40px;
        }

        #dataCari {
            padding: 5px;
            font-size: 0.7em;
            border-top: none;
            border-right: none;
            border-left: none;
            border-color: white;
            border-radius: 10px;
            background: transparent;
        }

        #a {
            animation: fadeIn 2.5s ease-in-out;
        }

        #z {
            border-radius: 20px;
            width: 30%;
            background-color: aqua;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 2px;
            margin: 3px;
            color: rgba(43, 13, 13, 0.627);
            transform: translateY(-50px);
            animation: scrollFromTop 1s ease-in-out forwards;
        }

        .f {
            animation: fadeIn 2.5s ease-in-out;
        }
    </style>
    <x-header></x-header>
    <center>
        <div class="x">
            <div class="a">
                <label for="data">Cari data</label>
                <input type="date" id="dataCari" name="dataCari">
                <input onclick="a()" type="submit"></input>        
            </div>
        </div>
            
      
        <div id="z"><p id="a">Tidak mencari data..</p></div>
    </center>
  
 

    <script>
        function a() {
            var tanggal = new Date(document.getElementById('dataCari').value).getDate();
            var bulan = new Date(document.getElementById('dataCari').value).getMonth() ;
            var tahun = new Date(document.getElementById('dataCari').value).getFullYear();

            switch (bulan) {
                case 0:
                    bulan = "Januari";
                    break;
                case 1:
                    bulan = "Februari";
                    break;
                case 2:
                    bulan = "Maret";
                    break;
                case 3:
                    bulan = "April";
                    break;
                case 4:
                    bulan = "Mei";
                    break;
                case 5:
                    bulan = "Juni";
                    break;
                case 6:
                    bulan = "Juli";
                    break;
                case 7:
                    bulan = "Agustus";
                    break;
                case 8:
                    bulan = "September";
                    break;
                case 9:
                    bulan = "Oktober";
                    break;
                case 10:
                    bulan = "November";
                    break;
                case 11 :
                    bulan = "Desember";
                    break;
            }

            if (tanggal && bulan && tahun) {
                document.getElementById('a').innerHTML = `<a class="f">Mencari data tanggal <span id="c">${tanggal} ${bulan} ${tahun}</span></a>`;
            } else {
                alert("Harap isi tanggal terlebih dahulu!");
            } 
        }
    </script>
</body>
</html>