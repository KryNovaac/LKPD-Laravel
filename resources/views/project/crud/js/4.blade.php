<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .lingkaran {
            border-radius: 50%;
        }
        .kotak {
            border-radius: 0%;
        }
        .segitiga {
            border-radius: 0%;
  clip-path: 
  polygon(50% 0,100% 100%,0 100%);
}
        .merah {
            border: 5px solid red;
        }
        .hijau {
            border: 5px solid green;
        }
        .kuning {
            border: 5px solid yellow;
        }
    </style>
    
</head>
<x-header></x-header>
<body>
    <div>
        <h1>Image Custom</h1>
        <label for="G">Pilih Gambar</label>
        <select id="G">
            <option value="">Pilih</option>
            <option value="G1">Gambar 1</option>
            <option value="G2">Gambar 2</option>
            <option value="G3">Gambar 3</option>
        </select>
    </div>
    <div>
        <label for="B">Pilih Bentuk</label>
        <select id="B">
            <option value="">Pilih</option>
            <option value="li">Lingkaran</option>
            <option value="ko">Kotak</option>
            <option value="se">Segitiga</option>
        </select>
    </div>
    <div>
        <label for="W">Pilih Warna</label>
        <select id="W">
            <option value="">Pilih</option>
            <option value="me">Merah</option>
            <option value="hi">Hijau</option>
            <option value="ku">Kuning</option>
        </select>
    </div>
    <div class="image-costum">
        <img id="image" src="" alt="">
    </div>
    <script>
        const selectImage = document.getElementById('G');
        const selectShape = document.getElementById('B');
        const selectColor = document.getElementById('W');
        const image = document.getElementById('image');

        selectImage.addEventListener('change', updateImage);
        selectShape.addEventListener('change', updateImage);
        selectColor.addEventListener('change', updateImage);

        function updateImage() {
            const imageValue = selectImage.value;
            const shapeValue = selectShape.value;
            const colorValue = selectColor.value;

            if (imageValue === 'G1') {
                image.src = 'https://i.pinimg.com/564x/d5/7c/fd/d57cfd993814e5407e6501c716cc8e91.jpg';
            } else if (imageValue === 'G2') {
                image.src = 'https://i.pinimg.com/564x/7a/8a/5c/7a8a5c6cc465b18a887419ef5f9caa7a.jpg';
            } else if (imageValue === 'G3') {
                image.src = 'https://i.pinimg.com/736x/73/dd/3f/73dd3fbfc78bac5d0d1d52040aea8afe.jpg';
            } else {
                image.src = '';
            }

            image.className = ''; 
            if (shapeValue === 'li') {
                image.classList.add('lingkaran');
            } else if (shapeValue === 'ko') {
                image.classList.add('kotak');
            } else if (shapeValue === 'se') {
                image.classList.add('segitiga');
            }

            if (colorValue === 'me') {
                image.classList.add('merah');
            } else if (colorValue === 'hi') {
                image.classList.add('hijau');
            } else if (colorValue === 'ku') {
                image.classList.add('kuning');
            }
        }

    </script>
    <button onclick="b()">Kirim</button>
    <script>
        function b() {
            alert("Data berhasil dikirim!");
        }
    </script>
</body>
</html>