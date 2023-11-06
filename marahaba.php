<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./marahaba_round.png">
    <title>Marahaba Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 1600px; 
        }

        .menu {
            width: 40%;
            height: 40%;
            overflow: visible;
            position: relative;
        }

        .menu img {
            width: 100%; /* Change to 100% to cover the entire container */
            height: 100%; /* Change to 100% to cover the entire container */
            position: absolute;
            top: 0;
            left: 0;
            object-fit: cover;
            display: none;
        }

        .menu img:first-child {
            display: block;
        }

        button {
            background-color: #000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            position: absolute;
            bottom: 20px;
            right: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="menu">
            <img src="./menu/marahaba_menu_1.jpg" alt="marahaba menu">
            <img src="./menu/marahaba_menu_2.jpg" alt="marahaba menu">
            <img src="./menu/marahaba_menu_3.jpg" alt="marahaba menu">
            <img src="./menu/marahaba_menu_4.jpg" alt="marahaba menu">
            <img src="./menu/marahaba_menu_5.jpg" alt="marahaba menu">
            <img src="./menu/marahaba_menu_6.jpg" alt="marahaba menu">
            <img src="./menu/marahaba_menu_7.jpg" alt="marahaba menu">
            <img src="./menu/marahaba_menu_8.jpg" alt="marahaba menu">
            <img src="./menu/marahaba_menu_9.jpg" alt="marahaba menu">
            <img src="./menu/marahaba_menu_10.jpg" alt="marahaba menu">
            <button>Next Image</button>
        </div>
    </div>
    <script>
        let index = 0;
        let images = document.querySelectorAll('.menu img');
        let button = document.querySelector('button');

        button.addEventListener('click', () => {
            images[index].style.display = 'none';
            index++;
            if (index >= images.length) {
                index = 0;
            }
            images[index].style.display = 'block';
        });
    </script>
</body>
</html>