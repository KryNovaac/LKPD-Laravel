<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hitungMundur Timer</title>
    <style>
        #hitungMundur-display {
            font-size: 2em;
            margin-top: 20px;
        }
        .satu {
            background-color: rgb(0, 206, 151);
            width: 20%;
            height: auto!important;
            padding: 20px;
            border-radius: 10px;
            color: white;
        }
        button {
            margin-top: 10px;
            width: 100%;
            height: 50px;
            background-color: rgb(19, 139, 0);
            color: white;
            border-radius: 20px;
            border: none;
            
            transition: 0.5s;
         }
         button:hover {
            background-color: rgb(41, 81, 0);
            transition: 1.2s;
         }
    </style>
</head>
<x-header></x-header>
<body>
    <center>
    <div class="satu">

            <h1>Hitung Mundur</h1>
            <div id="hitungMundur-display">Hitungan mundur: <span id="hitungMundur">10</span></div>
            <button id="start-button">Mulai</button>
            <button id="stop-button">Berhenti</button>
        </div>
    </center>

    <script>
        let hitungMundur;
        let interval;

        document.getElementById('start-button').addEventListener('click', () => {
            hitungMundur = 10;
            document.getElementById('hitungMundur').textContent = hitungMundur;
            interval = setInterval(() => {
                if (hitungMundur > 1) {
                    hitungMundur--;
                    document.getElementById('hitungMundur').textContent = hitungMundur
                } else {
                    clearInterval(interval);
                    document.getElementById('hitungMundur').textContent = "Selesai!";
                }
            }, 1200);
        });

        document.getElementById('stop-button').addEventListener('click', () => {
            clearInterval(interval);
            document.getElementById('hitungMundur').textContent = "Dihentikan";
        });
    </script>
</body>
</html>
