<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Coppel - Hogar</title>
    <link href="style.css" rel="stylesheet">
    <link href="slider.css" rel="stylesheet">
</head>

<body>
    <!--Nav bar-->
    <div class="navbar"></div>

    <!--Content-->
    <section class="content" id="first-section">
        <div class="box-title">
            <h1 class="category-title">Hogar y muebles</h1>
        </div>
        <div>
            productos
        </div>
    </section>
    <section class="content" id="second-section">
        <div class="box-content">
            <!--Slider-->
            <div class="slider-container">
                <div class="slide fade">
                    <img class="slide-image" src="https://cdn2.coppel.com/images/emarketing/1stlevel/2023/septiembre/hogar/Sliders/Hogar&Muebles-desktop-septiembre1.jpg">
                </div>

                <div class="slide fade">
                    <img class="slide-image" src="https://cdn2.coppel.com/images/emarketing/1stlevel/2023/septiembre/hogar/Sliders/Hogar_Muebles-desktop-septiembre1.jpg">
                </div>

                <div class="slide fade">
                    <img class="slide-image" src="https://cdn2.coppel.com/images/emarketing/1stlevel/2023/septiembre/hogar/Sliders/Hogar_Muebles-desktop-septiembre2.jpg">
                </div>

                <!-- dots -->
                <div class="dot-container">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>


            <div class="img1">
                <img src="https://cdn2.coppel.com/images/emarketing/1stlevel/2023/septiembre/hogar/Bloques/nuevosBloques/Bloque1-desktop.jpg">
            </div>
            <div class="img2">
                <img src="https://cdn2.coppel.com/images/emarketing/1stlevel/2023/septiembre/hogar/Bloques/Bloque2-desktop.jpg">
            </div>



        </div>
    </section>
</body>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="slider.js"></script>

</html>