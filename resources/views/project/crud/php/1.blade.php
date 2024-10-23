<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Character Checker</title>
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
</head>
<div>
    <x-header></x-header>
</div>
<body>
    <div class="container">
        <h1>Special Character Checker</h1>
        <form method="post" action="{{ route('checker.check') }}">
            @csrf
            <label for="inputText">Masukkan teks:</label>
            <input type="text" id="inputText" name="inputText" required>
            <button type="submit">Cek</button>
        </form>

        @if(isset($message))
            <p>{{ $message }}</p>
        @endif
    </div>
</body>
</html>
