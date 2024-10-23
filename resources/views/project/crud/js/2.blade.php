<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Belanja</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 10px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: #575757;
            border-radius: 5px;
        }

        main {
            padding: 20px;
        }

        .product {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .product-item {
            background-color: #f4f4f4;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: calc(33.333% - 40px);
            box-sizing: border-box;
        }

        .product-item img {
            max-width: 100%;
            border-radius: 5px;
        }

        .product-item h2 {
            margin: 10px 0;
        }

        .product-item p {
            margin: 0;
        }

        .product-item button {
            background-color: #333;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }

        .product-item button:hover {
            background-color: #575757;
        }
        #more {display: none;}
    </style>
</head>
<body>
<x-header></x-header>
    <header>
        <nav>
            <img src="https://smkwikrama.sch.id/assets2/wikrama-logo.png" height="50px" alt="Logo">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Belanja</a></li>
                <li><a href="#">Pengaturan</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Selamat Datang di Web Belanja Kami</h1>
        <div class="product">
            <div class="product-item">
                
                <img src="data:image/jpeg;base64,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" alt="Product 1">
                <h2>Gorengan</h2>
                <p><i class="fa-solid fa-cart-shopping"></i> 200k</p>
                <p>Harga : 5k</p>
                <p> <i class="fa-solid fa-heart"></i>: 10k</p><br>
                <p>Makanan yang digulai oleh minyak namun renyah di mulut. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                <button onclick="myFunction()" id="myBtn">Read more</button>
                <button onclick="showAlert()">Beli Sekarang</button>
            </div>
            <div class="product-item">
                <img src="https://img.kurio.network/NA0gqKiXKd36Yfko5ijr5tRktgA=/320x320/filters:quality(80)/https://kurio-img.kurioapps.com/21/11/02/c0ea0699-bb8d-4e52-9152-20315efc9179.jpe" alt="Product 2">
                <h2>Kerupuk</h2>
                <p><i class="fa-solid fa-cart-shopping"></i> 200k</p>
                <p>Harga : 5k</p>
                <p> <i class="fa-solid fa-heart"></i>: 10k</p><br>
                <p>Merupakan makanan enak dan renyah. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>

<button onclick="myFunction()" id="myBtn">Read more</button>
                <button onclick="showAlert()">Beli Sekarang</button>
            </div>
            <div class="product-item">
                <img src="data:image/jpeg;base64,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" alt="Product 3">
                <h2>Kue</h2>
                <p><i class="fa-solid fa-cart-shopping"></i> 200k</p>
                <p>Harga : 5k</p>
                <p> <i class="fa-solid fa-heart"></i>: 10k</p><br>
                <p>Desert, dengan lapisan cream yang lezat. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                <button onclick="myFunction()" id="myBtn">Read more</button>
                <button onclick="showAlert()">Beli Sekarang</button>
            </div>
        </div>
    </main>
    <script>
        function showAlert() {
            alert("Tombol ditekan!");
        }
        function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
    </script>
</body>
</html>
