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

            <!--LATERALES-->
            <div class="img" id="img1">
                <img src="https://cdn2.coppel.com/images/emarketing/1stlevel/2023/septiembre/hogar/Bloques/nuevosBloques/Bloque1-desktop.jpg">
            </div>
            <div class="img" id="img2">
                <img src="https://cdn2.coppel.com/images/emarketing/1stlevel/2023/septiembre/hogar/Bloques/Bloque2-desktop.jpg">
            </div>

        </div>
    </section>
    <!--Lo mas buscado-->
    <section class="carrusel-products">
        <div class="title">
            <h2>Lo más buscado</h2>
        </div>

    </section>

    <!--El descanso que te mereces-->
    <section class="camas">
        <div class="title">
            <h2>El descanso que te mereces</h2>
        </div>
        <div class="beds">
            <div class="colchones">
                <img src="https://cdn2.coppel.com/images/emarketing/1stlevel/2023/septiembre/hogar/desktop/Colchones.jpg">
                <span>Colchones</span>
            </div>
            <div class="juego-col">
                <img src="https://cdn2.coppel.com/images/emarketing/1stlevel/2023/septiembre/hogar/desktop/colchonybox.jpg">
                <span>Juego de colchón y box</span>
            </div>
            <div class="blancos">
                <img src="https://cdn2.coppel.com/images/emarketing/1stlevel/2023/septiembre/hogar/desktop/Blancos.jpg">
                <span>Blancos para el hogar</span>
            </div>
        </div>
    </section>

    <!--Las mejores marcas-->
    <section class="marcas">
        <div class="title">
            <h2>Las mejores marcas</h2>
        </div>
        <div class="beds">

        </div>

    </section>

    <!--Renueva tus espacios-->
    <section class="space">
        <div class="title">
            <h2>Renueva tus espacios</h2>
        </div>
        <div class="roms">
            <div class="comedor">
                <img src="https://cdn2.coppel.com/images/emarketing/1stlevel/2023/septiembre/hogar/desktop/Comedor.jpg">
                <span>Comedor</span>
            </div>
            <div class="cocina">
                <img src="https://cdn2.coppel.com/images/emarketing/1stlevel/2023/septiembre/hogar/desktop/Cocina.jpg">
                <span>Cocina</span>
            </div>
            <div class="sala">
                <img src="https://cdn2.coppel.com/images/emarketing/1stlevel/2023/septiembre/hogar/desktop/Sala.jpg">
                <span>Sala</span>
            </div>
        </div>

        <div class="roms2">
            <div class="recamara">
                <img src="https://cdn2.coppel.com/images/emarketing/1stlevel/2023/septiembre/hogar/desktop/Recamara.jpg">
                <span>Recámara</span>
            </div>
            <div class="oficina">
                <img src="https://cdn2.coppel.com/images/emarketing/1stlevel/2023/septiembre/hogar/desktop/oficinayestudio.jpg">
                <span>Oficina y estudio</span>
            </div>
            <div class="patio">
                <img src="https://cdn2.coppel.com/images/emarketing/1stlevel/2023/septiembre/hogar/desktop/patioyjardin1.jpg">
                <span>Patio y jardín</span>
            </div>
        </div>

    </section>


    <!--IVA-->
    <section class="calculadora">
        <div class="title">
            <h2>Calculadora de IVA</h2>
        </div>
        <div class="calc">
            <span>Monto: </span>
            <input type="text" id="cantidad_precio" class="cost" placeholder="$0.00" />
            <input type="button" value="Calcular precio con IVA" onclick="calcularPrecio()">
            <div id="resultado">
            </div>
        </div>

    </section>

</body>

<!--Script para calcular IVA-->
<script>
    function calcularPrecio() {
        let price = document.getElementById("cantidad_precio").value;
        price = price * 1.16;
        document.getElementById("resultado").innerHTML = price;
    }
</script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="slider.js"></script>

</html>