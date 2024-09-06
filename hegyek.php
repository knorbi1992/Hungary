<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mountains</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="media/embleme.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <!-- Logos on both sides of the title -->
        <div class="image-container">
            <img src="media/logo.png" alt="Left Logo">
            <img src="media/logo.png" alt="Right Logo">
        </div>

        <!-- Title -->
        <h1 class="hungary-title">
            <span class="red">H</span>
            <span class="white">u</span>
            <span class="green">n</span>
            <span class="red">g</span>
            <span class="white">a</span>
            <span class="green">r</span>
            <span class="red">y</span>
        </h1>

        <!-- Navigation -->
        <div class="menu-toggle" id="menu-toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <nav id="nav">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="balaton.php">BALATON</a></li>
                <li><a href="hegyek.php" class="active">MOUNTAINS</a></li>
                <li><a href="vizek.php">LAKES & RIVERS</a></li>
            </ul>
        </nav>

        <!-- New Image Section -->
        <section class="mountain-images">
            <h5>The central mountains of Hungary</h5>
            <div class="gallery">
                <a href="#" class="gallery-link" data-large-src="media/hegy.jpg">
                    <img src="media/hegy.jpg" alt="Hegy" class="gallery-item">
                </a>
                <a href="#" class="gallery-link" data-large-src="media/villany.jpg">
                    <img src="media/villany.jpg" alt="Villany" class="gallery-item">
                </a>
                <a href="#" class="gallery-link" data-large-src="media/matra.jpg">
                    <img src="media/matra.jpg" alt="Matra" class="gallery-item">
                </a>
                <a href="#" class="gallery-link" data-large-src="media/kekes.jpg">
                    <img src="media/kekes.jpg" alt="Kekes" class="gallery-item">
                </a>
            </div>
        </section>
        
        <!-- Modal for images -->
        <div id="image-modal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="modal-image">
        </div>

        <p>The mountains of Hungary are medium mountains, since none of them rises above 1500 m. The oldest of our mountains is the granite block of the Soproni Mountains (500 million years old) and the Velencei Mountains (300 million years old).The members of the Transdanubian Central Mountains (Bakony, Vértes, Gerecse, Dunazug Mountains, Pilis and the Buda Mountains) are all limestone mountains, with the exception of the Visegrád Mountains. Limestone can also be found in Mecsek and in the Northern Central Mountains in Cserehát, Bükk and the Aggteleki karst area.The largest part of the North Central Mountains is an andesite mountain of volcanic origin. Its members are Börzsöny, Cserhát, Mátra and the Zempléni Mountains.It is also volcanic, but already basalt builds up the mountains and witness mountains of the Balaton highlands (Badacsony, Szent-György-hegy, Ság, Somló).The order of the presented mountains also reflects the order of their age. Volcanic mountains are the youngest, although their surface is already heavily eroded and they do not remind of their former craters.</p>

        <!-- Optional JavaScript for Menu Toggle -->
        <script src="script.js"></script>
        <script src="modal.js"></script>
    </div>
</body>
</html>
