<div>
    <x-header></x-header>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* Gaya untuk tampilan */
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

<body>
    <div class="container">
        <h1>Koin Membelah</h1>
        <form method="post" action="{{ route('koin.calculate') }}">
            @csrf
            <label for="inputText">Masukkan Koin:</label>
            <input type="number" id="input" name="input" required>
            <button type="submit" value="Submit">Cek</button>
        </form>

        @if(isset($coins))
        <div>
            <h3>Jenis koin yang bisa digunakan untuk Rp{{ $uang }}:</h3>
            <ul>
                @foreach ($coins as $coin)
                    <li>Rp. {{ $coin }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    </div>
</html>