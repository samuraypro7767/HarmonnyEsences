<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/noso3.css">
    <link rel="stylesheet" href="../css/icons.css">
    <!-- <link rel="stylesheet" href="../css/fontello.css"> -->
    <link rel="shortcut icon" href="../img/logo.jpeg" type="image/x-icon">
  
    <title>catalogo</title>
</head>
<body class="fondocatalogo">
    <header>
       
        <nav id="navegacionPrincipal">
            <ul class="menuNavP">
                <li class="logo"><img src="../img/logo.jpeg" alt=""width="80" height="70"><i id="color-logo">Harmony</i><i id="color-logo2">Essences</i></li>
                <li><a href="./inicio.php" class="textomenu">Inicio</a></li>
                <li> <a href="./catalogo.php" class="textomenu">Productos</a>  </li>
                    <li><a href="#" class="textomenu">Saber mas</a>
                        <ul class="Submenu1">
                            <li><a href="./valore.php">Valores Institucionales</a></li>
                            <li><a href="./nosotros.php">Sobre Nosotros</a></li>
                        </ul>
                </li>
                <li><a href="#" class=" usuarioNavegacion"><i class="icon-user"></i></a>
                    <ul class="Submenu">
                        <li><a href="index.php">Iniciar Sesión</a></li>
                        <li><a href="register.php">Registrarme</a></li>
                    </ul>
                    <li class="espace-carro"><a href="#"id="carrito-raya" ></i><i onclick="showCart(this)" class="icon-shopping-cart"><p class="count-product">0</p></li></i></a> 
                </li>
            </ul>
        </nav>
    </header>
   
    <section class="shop-container"> 
        <div class="section-tittle">
           PRODUCTOS
        </div>
        <section class="contenido">
        <div class="mostrador" id="mostrador">
            <div class="fila">
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="../img/producto 9.png" alt="">
                    </div>
                    <p class="descripcion">BLEU NIGHT</p>
                    <span class="precio">$45000 COP</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="../img/perfume 2.png" alt="">
                    </div>
                    <p class="descripcion" id>GUCCI BAMBOO</p>
                    <span class="precio">$55000 COP</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="../img/perfume 3.png" alt="">
                    </div>
                    <p class="descripcion">BVGARI
                    </p>
                    <span class="precio">$85000 COP</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="../img/perfume 4.png" alt="">
                    </div>
                    <p class="descripcion">SHALIMAR</p>
                    <span class="precio">$60000 COP</span>
                </div>
            </div>
            <div class="fila">
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="../img/producto 11.png" alt="">
                    </div>
                    <p class="descripcion">INVICTUS</p>
                    <span class="precio">$90000 COP</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="../img/producto10.png" alt="">
                    </div>
                    <p class="descripcion">BLACK XS</p>
                    <span class="precio">$80000 COP</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="../img/producto 12.png" alt="">
                    </div>
                    <p class="descripcion">PARIS-CHANEL</p>
                    <span class="precio">$55000 COP</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="../img/producto 15.png" alt="">
                    </div>
                    <p class="descripcion">DOLCE&GABBANA</p>
                    <span class="precio">$90000</span>
                </div>
            </div> 
        </div>
        
        <!-- CONTENEDOR DEL ITEM SELECCIONADO -->
        <div class="seleccion" id="seleccion">
            <div class="cerrar" onclick="cerrar()">
                &#x2715
            </div>
            <div class="info">
                <img src="img/1.png" alt="" id="img">
                <h2 id="modelo">NIKE MODEL 1</h2>
                <p id="descripcion">Olore naturales donde encontraras gran varieddad en estos</p>

                <span class="precio" id="precio">$ 130</span>

               <div class="fila">
                     <!-- <div class="size">
                        <button> Agregar<i class="icon-caddie-shopping-streamline"></i></button>
                       
                        <button >Borrar<img src="../img/contenedor-de-basura.png" alt=""height="30"></button>
                </div> -->
                <button>Agregar</button>
                <button>Eliminar</button>
                
            </div>
        </div>
    </section>
   
    <div class="target_pa">

        <h1 id="titulo_inicio">Lo Mas Vendido En Nuestra Tienda</h1>
        <div class="card">
                <div class="face front">
                    <img src="../img/producto7.png" alt="">
                    <h3> Top N°1</h3>
                </div>
                <div class="face back">
                    <h3>Acqua Di gio Ciorgio Armani</h3>
                    <p>es una fragancia masculina inspirada en el mar, el sol, la tierra y la brisa del mediterráneo. </p>
                    <div class="link">
                        <a href="#">Detalles</a>
                    </div>
                </div>
            </div>
        
            <div class="card">
                <div class="face front">
                    <img src="../img/producto6.png" alt="">
                    <h3>Top N°2</h3>
                </div>
                <div class="face back">
                    <h3>Blue  De Flower Of Story</h3>
                    <p>Un aroma floral afrutado impactante, una fragancia plena y dulce con una feminidad intensificada. Una composición con un corazón radiante, intensificado por el absoluto de jazmín y la esencia de rosa.</p>
                    <div class="link">
                        <a href="#">Detalles</a>
                    </div>
                </div>
            </div>
        
            <div class="card">
                <div class="face front">
                    <img src="../img/producto8.png" alt="">
                    <h3>Top N°3</h3>
                </div>
                <div class="face back">
                    <h3>Live</h3>
                    <p>Live se lanzó en 2005. La Nariz detrás de esta fragrancia es Dominique Ropion. Las Notas de Salida son piña, limón siciliano (lima siciliana) y naranja italiana; las Notas de Corazón son flor del grosellero rojo, peonía y violeta; las Notas de Fondo son caramelo, sándalo, haba tonka y vainilla.</p>
                    <div class="link">
                        <a href="#">Detalles</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="pieigualdad"></div>
    

    
        <footer> 
    
    <p id="horarios"><strong>Nuestros horarios:</strong>
        Lunes - Viernes: 8am - 6pm
        <br>
        Sábado: 8am - 12:30pm
        <br>
        Domingo: Cerrado</p>

    <h3> Contactenos
    </h3>
    <a href="https://twitter.com/harmonyess7767/" class="foter1"> <i class="icon-twitter"></i> </a>
    <a href="https://www.facebook.com/profile.php?id=61552324395710&mibextid=ZbWKwL" class="foter1"> <i class="icon-facebook-official" ></i></a>
    <a href="https://wa.me/qr/3CB6W4TT5AAOG1" class="foter1"> <i class="icon-whatsapp" ></i></a>
    <a href="https://instagram.com/harmonnyessences?utm_source=qr&igshid=MzNlNGNkZWQ4Mg==" class="foter1"> <i class="icon-instagrem" ></i></a>
    <a href="tel:+573018215155" class="foter1"> <i class="icon-phone"></i></a>
</footer>

</body>

    <script src="./catalogo.js"></script>
<script src="../view/script.js"></script>
</html>