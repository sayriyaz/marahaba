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
            min-height: 100vh;
        }

        .menu {
            overflow: hidden;
            position: relative;
            max-width: 35%;
            max-height: 35%;
        }

        .menu img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
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
        }

        #nextButton {
            right: 20px;
        }

        #prevButton {
            left: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="menu">
            <img src="./menu/marahaba_menu_1.jpg" alt="marahaba menu">
            <img src="./menu/marahaba_menu_2.jpg" alt="marahaba menu">
            <img src="./menu/marahaba_menu_2.jpg" alt="marahaba menu">
            <img src="./menu/marahaba_menu_3.jpg" alt="marahaba menu">
            <img src="./menu/marahaba_menu_4.jpg" alt="marahaba menu">
            <img src="./menu/marahaba_menu_5.jpg" alt="marahaba menu">
            <img src="./menu/marahaba_menu_6.jpg" alt="marahaba menu">
            <img src="./menu/marahaba_menu_7.jpg" alt="marahaba menu">
            <img src="./menu/marahaba_menu_8.jpg" alt="marahaba menu">
            <img src="./menu/marahaba_menu_9.jpg" alt="marahaba menu">
            <img src="./menu/marahaba_menu_10.jpg" alt="marahaba menu">
            <!-- Add more image elements here for all 14 images -->
            <button id="prevButton">Previous Image</button>
            <button id="nextButton">Next Image</button>
        </div>
    </div>
    <script>
        let index = 0;
        let images = document.querySelectorAll('.menu img');
        let nextButton = document.getElementById('nextButton');
        let prevButton = document.getElementById('prevButton');

        function showImage(imageIndex) {
            images[index].style.display = 'none';
            index = imageIndex;
            images[index].style.display = 'block';
        }

        function nextImage() {
            showImage((index + 1) % images.length);
        }

        function prevImage() {
            showImage(index > 0 ? index - 1 : images.length - 1);
        }

        nextButton.addEventListener('click', nextImage);
        prevButton.addEventListener('click', prevImage);

        // Automatically switch to the next image every 5 seconds
        setInterval(nextImage, 1500);
    </script>
</body>
</html>
