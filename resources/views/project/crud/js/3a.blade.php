<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Button</title>
    <style>
        .A {
            position: relative;
            width: 600px;
            height: 34px;
            
        }

        .A input {
            opacity: 0;
            width: 0;
            height: 0;
            
        }

        .C {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ff0000;
            transition: .4s;
            
            border-radius: 20px;
        }

        .C:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 20px;
        }

        input:checked + .C {
            background-color: #2196F3;
        }

        input:checked + .C:before {
            transform: translateX(560px);
        }
    </style>
</head>
<body>
<x-header></x-header>
    <center>

        
    </center><div>
    <div class="A" onclick="myFunction()">
        <input type="checkbox" id="B">
        <label for="B" class="C"></label>
    </div>

    <br>
    <script>
        function myFunction() {
            var element = document.getElementById("B");
            element.checked =!element.checked;

            var color = element.checked? "#2196F3" : "#ff0000";
            document.querySelector("body").style.backgroundColor = color;

            var text = element.checked? "Background Color: #2196F3" : "Background Color: #ff0000";
            document.querySelector("p").innerHTML = text;
        }
    </script>
</div>

<script> 
</script>
</body>
</html>
