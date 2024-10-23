<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Customizer</title>
    <style>
        .image-container {
            display: inline-block;
            margin: 10px;
        }
        .image {
            width: 200px;
            height: 200px;
        }
        .circle {
            border-radius: 50%;
        }
        .square {
            border-radius: 0;
        }
        .triangle {
            width: 0;
            height: 0;
            border-left: 100px solid transparent;
            border-right: 100px solid transparent;
            border-bottom: 200px solid;
        }
        .border-red {
            border: 5px solid red;
        }
        .border-yellow {
            border: 5px solid yellow;
        }
        .border-green {
            border: 5px solid green;
        }
    </style>
</head>
<x-header></x-header>
<body>
    <h1>Image Customizer</h1>
    <div>
        <label for="image-upload">Upload an image:</label>
        <input type="file" id="image-upload" accept="image/*">
    </div>
    <div>
        <label for="shape-select">Choose a shape:</label>
        <select id="shape-select">
            <option value="circle">Circle</option>
            <option value="square">Square</option>
            <option value="triangle">Triangle</option>
        </select>
    </div>
    <div>
        <label for="border-select">Choose a border color:</label>
        <select id="border-select">
            <option value="border-red">Red</option>
            <option value="border-yellow">Yellow</option>
            <option value="border-green">Green</option>
        </select>
    </div>
    <div id="image-container" class="image-container">
        <img id="image" src="" alt="Selected Image" class="image circle border-red" style="display: none;">
    </div>

    <script>
        const imageUpload = document.getElementById('image-upload');
        const shapeSelect = document.getElementById('shape-select');
        const borderSelect = document.getElementById('border-select');
        const image = document.getElementById('image');
        const imageContainer = document.getElementById('image-container');

        imageUpload.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    image.src = e.target.result;
                    image.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });

        shapeSelect.addEventListener('change', () => {
            image.className = 'image ' + shapeSelect.value + ' ' + borderSelect.value;
        });

        borderSelect.addEventListener('change', () => {
            image.className = 'image ' + shapeSelect.value + ' ' + borderSelect.value;
        });
    </script>
</body>
</html>
