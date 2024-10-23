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
<body> <center>
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

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f9f9f9;
    }
    .container {
        max-width: 600px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: 30%;
        padding: 20px;
        background-color: rgba(0, 0, 0, 0.7);
        background: linear-gradient(90deg, rgba(0, 0, 0, 0.43),rgba(0, 0, 0, 0.7)),rgba(0, 0, 0, 0.5);
        border-radius: 20px;
         backdrop-filter: blur(5px);
         margin-top: 30px;
        
    }
    input {
        border-radius: 50%;
        height: 40px;
        color : white ;
        font-size: 0.7em;
        border-top: none;
        border-right: none;
        border-left: none;
        border-color: white;
        border-radius: 10px;
        background: transparent;
    }

    h1, label {
        
        margin:2px;
        background: linear-gradient(90deg, rgb(195, 255, 135), rgb(255, 215, 150),rgb(88, 11, 11) 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent; 
        animation: gradient 4.5s ease infinite; 
    }
    .f {
        animation: fadeIn 2.5s ease-in-out;
        border-radius: 20px;
        width: 30%;
        background-color: aqua;
        background-color: rgba(0, 0, 0, 0.4);
        padding:10px;
        margin: 3px;
        color: rgba(255, 255, 255, 0.627);
        transform: translateY(-50px);
        animation: scrollFromTop 1s ease-in-out forwards;
    }
    button {
        margin :20px;
        color : white; 
        border-radius :20px;
    }
</style>
    <div class="container">
        <h1>Faktorial</h1>
        <form method="post" action="{{ route('faktorial.calculate') }}">
            @csrf
            <label for="inputText">Nilai A</label> <br>
            <input type="number" id="b" name="b" required> <br>
            
            <label for="inputText">Nilai B</label> <br>
            <input type="number" id="inputText" name="inputText" required> <br>
            
            <button type="submit">Cek</button>
        </form>
    </div>
    
    @if(isset($results))
    <div class="f">
        @foreach ($results as $key => $value)
            <p>{{ $key }} : {{ $value }}</p>
        @endforeach
    </div>
    @endif
</center>
</body>
</html>