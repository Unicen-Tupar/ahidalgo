<?php

function curiosidades(){
    $curios = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <title>Boku No Heroz</title>
    </head>
    <body>
        <div>
            <nav>
                <ul class="ulhome">
                <img src="./img/home1.png" class="home-img-1" alt="Logo">    
                <li class="home-list"><a href="home">HOME</a></li>
                <li class="home-list"><a href="creadores">CREADORES</a></li>
                <li class="home-list"><a href="personajes">PERSONAJES</a></li>
                <li class="home-list"><a href="curiosidades">CURIOSIDADES</a></li>
                <li class="home-list"><a href="veronline">VER ONLINE</a></li>
                <li class="home-list"><a href="contacto">CONTACTANOS</a></li>
                <li class="home-list"><a href="juego">JUEGO</a></li>
                <img src="./img/home1.png" class="home-img-2" alt="Logo">
                </ul>
            </nav>
        </div>
    
    <div class="div-fondo">
        <h1>CURIOSIDADES</h1>
        <p class="texto-gral">
            El universo de Boku No Hero Academia está repleto de curiosidades, no sólo de sus
            personajes e historias sino también de sus propios creadores. Diseños alternativos, 
            bocetos iniciales muy distintos al resultado final y mucho más. Si deseas
            comentarnos alguna curiosidad para que aparezca en la página puedes hacerlo en la
            sección de contacto.
        </p>
    
        <div class="div-curios">
            <ul class="ul-curios">
                <li>Kohei Horikoshi tomó inspiración en el icónico Goku de Dragon Ball Z 
                    para crear a All Might
                </li>
                <li>Horikoshi es además fanático de los mangas de Naruto y One Piece</li>
                <li>Antes de <span class="italic"> BNHA</span>, Horikoshi trabajó en dos
                mangas previos que lamentablemente fueron cancelados, así que decidió hacer un último
                intento. El resto es historia</li>
                
                <li>Horikoshi le envió a Eichiro Oda (Creador de One Piece) un fanart de uno de 
                    sus personajes (Smoker para ser exactos) hace muchísimos años. Ahora, ambos 
                    comparten sus respectivos mangas en la misma revista, la legendaria
                    <span class="italic"> Weekly Shonen Jump</span>
                </li>
                <li>La idea para el personaje Sero le vino a la mente cuando vio una cinta
                    adhesiva mientras hacía las compras
                </li>
                <li>Originalmente Uraraka tenía un quirk y una apariencia distintos, que
                    más tarde pasarían a formar parte de Mount Girl</li>
            </ul>
        </div>
    </div>
    </body>
    </html>';

return $curios;
}

?>