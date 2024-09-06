<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balaton</title>
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
                <li><a href="balaton.php" class="active">BALATON</a></li>
                <li><a href="hegyek.php">MOUNTAINS</a></li>
                <li><a href="vizek.php">LAKES & RIVERS</a></li>
            </ul>
        </nav>
    <h4>Balaton Is The Hungarian Sea</h4>
        <div class="image-wrapper">
            <img src="media/Balaton.jpeg" alt="Balaton">
        </div>
        <p>Lake Balaton is located in the middle of Transdanubia , bordered by the Balaton highlands to the north, the Zalai and Somogyi hills to the west and south , and field to the east .

Balaton is Hungary's largest lake , our natural treasure famous in Europe. Its greatest depth at Tihany is 11-12.5 m, its average depth is 3-4 m. The water is shallower on the south coast, so it warms up quickly in the summer and is excellent for swimming. On its northern coast, the mountains of the Balaton highlands , which form the southern foreground of Bakony, rise up covered with vineyards and forests.

Sentinel-2 satellite recording from Lake Balaton. The emerald green shades of the water surface are caused by the chemical composition of the lake and the approximately 2,000 species of algae living in the lake. European Space Agency, ESA, 2019 Sentinel -2 satellite recording from Lake Balaton. The emerald green shades of the water surface are caused by the chemical composition of the lake and the approximately 2,000 species of algae living in the lake . European Space Agency, ESA, 2019n the sunny slopes of the Balaton highlands . In summer, the pleasant weather , the sails driven by the north-west winds, and the harmoniously beautiful landscape have a calming effect on the resting people. The highest water level (113.3 meters) was during the Tatar invasion and the age of Turkish subjugation . 


Jenő Cholnoky : The probable extent of Lake Balaton from the end of Roman rule to the conquest
The mean water level of Lake Balaton at the end of the 18th century was around 106.5 meters above the Adriatic sea level . The artificial regulation of the lake's water level began in 1847 with the demolition of the dam of the Kiliti mill and was completed in 1863 with the ceremonial opening of the first Sió sluice, still built of wood.</p>
<div class="slider-container">
        <div class="slider">
            <img src="media/siofok.jpg" alt="Siofok">
            <img src="media/tihany.jpg" alt="Tihany">
            <img src="media/part.jpg" alt="Part">
            <img src="media/rev.jpg" alt="Rev">
            <img src="media/ponty.gif" alt="Ponty">
            <img src="media/hajo.jpg" alt="Hajo">
            <img src="media/strand.jpg" alt="Strand">
            <img src="media/telen.jpg" alt="Telen">
            <img src="media/telen1.jpeg" alt="Telen1">
            <img src="media/telen2.jpg" alt="Telen2">
        </div>
        <button class="prev" onclick="prevSlide()">&#10094;</button>
        <button class="next" onclick="nextSlide()">&#10095;</button>
    </div>

    <!-- Optional JavaScript for Menu Toggle -->
    <script src="script.js"></script>
</body>
</html>