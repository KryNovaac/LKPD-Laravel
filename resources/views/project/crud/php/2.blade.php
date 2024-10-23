<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div>
    <x-header></x-header>
</div>
    <div class="container">
        <h1>Hari ini: {{ $hariIni ?? 'Tidak diketahui' }}</h1>

        <form method="post" action="{{ route('capek.uang') }}">
            @csrf
            <label for="inputText">Jumlah total pembelian</label>
            <input type="number" id="inputText" name="inputText" required>
            <button type="submit">Cek</button>
        </form>

        @if (isset($totalPembelian))
            <br>
            <p>Total pembelian: {{ $totalPembelian }} IDR</p>
            <p>Diskon: {{ $diskon }}%</p>
            <p>Total yang harus dibayar: {{ $totalBayar }} IDR</p>
        @endif
    </div>
</body>
</html>
