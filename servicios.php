<?php
    session_start();
    require "conex.php";

    $sql="SELECT * FROM servicio ";
    $resultado1 = $conexion->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Spa Forever Beautiful</title>
	<link rel="icon" href="imagenes\icon.png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.css">
	<link rel="stylesheet" href="css\Estilo-servicios.css">
</head>
<body>
	<header>
	
		<div class="conteiner">
			<img src="imagenes\logo.jpeg" alt="logo">
			<nav class="navega">
				<ul>
					<li><a href="Index.html">Inicio</a></li>
					<li><a href="productos.php">Productos</a></li>
					<li><a href="servicios.php">Servicios</a></li>
					<li><a href="Reservar.html">Reservar</a></li>
					<li><a href="#">Contacto</a></li>
					<li><a href="login.php">Iniciar sesion</a></li>
				</ul>
			</nav>
		</div>
	</header> 
	<script>
window.addEventListener('mouseover', initLandbot, { once: true });
window.addEventListener('touchstart', initLandbot, { once: true });
var myLandbot;
function initLandbot() {
  if (!myLandbot) {
    var s = document.createElement('script');s.type = 'text/javascript';s.async = true;
    s.addEventListener('load', function() {
      var myLandbot = new Landbot.Livechat({
        configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-1650820-9Z3KON36977OZQIM/index.json',
      });
    });
    s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
  }
}
</script>
	
	<div class="carousel__contenedor">
        <div class="carousel__lista" id="carousel__lista" data-bs-ride="carousel">
            <div class="carousel__elemento">
                <img src="imagenes\main.jpg" alt="1" class="d-block w-100">
            </div>
            <div class="carousel__elemento">
                <img src="imagenes\main2.jpg" alt="2" class="d-block w-100">
            </div>
            <div class="carousel__elemento">
                <img src="imagenes\main3.jpg" alt="3" class="d-block w-100">
            </div>
            <div class="carousel__elemento">
                <img src="imagenes\main4.jpg" alt="4" class="d-block w-100">
            </div>
            <div class="carousel__elemento">
                <img src="imagenes\main5.jpg" alt="5" class="d-block w-100">
            </div>
            <div class="carousel__elemento">
                <img src="imagenes\main6.jpg" alt="6" class="d-block w-100">
            </div>
        </div>
        <div role="tablist" class="carousel__indicadores"></div>
        <button aria-label="Anterior" class="carousel__anterior">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <button aria-label="Siguiente" class="carousel__siguiente">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>

	<marquee direction="left">
		Aprovecha ahora nuestras ofertas por el mes de mayo. <b>¡¡Hasta un 50% de descuento en servicios selecionados!!</b>
	</marquee>
	
		<h2 align="center">Nuestros servicios</h2>
		
		<div class="cont">
			<div class="contpro">
			<?php while($row = $resultado1->fetch_assoc()){ ?>
				<div class="flip">
					<div class="face front">
					<img src="DASHBOARD/startbootstrap-sb-admin-2-gh-pages/tratamientos/<?php echo $row["img"];?>.jpg?nocache=<?php echo time(); ?>" alt="">
					</div>
					<div class="face back">
						<div class="enlace">
							<a href="reservas.php"><?php echo $row ['NOM_SER']; ?></a>
						</div>
						<div class="descripcion-servicio"><p><?php echo $row ['DESCRIPCION_SER']; ?></p></div>
						<div class="precio-servicio"><p>Precio: S/<?php echo $row ['TARIFA']; ?></p></div>
					</div>

				</div>

				<?php }?>		
			
				<!-- <div class="flip">
					<div class="face front">
						<img src="imagenes\carbon-activo.jpg" alt="carbon">
					</div>
					<div class="face back">
						<div class="enlace">
							<a href="reservas.html">CARBON ACTIVO</a>
						</div>
						<div class="descripcion-servicio">Mascarilla que actúa como un imán para limpiar los poros en profundidad.Vuelve la piel más tersa · Suaviza el cutis · Rejuvenece · Elimina células muertas de la piel</div>
						<div class="precio-servicio">Precio: $20</div>
					</div>		
				</div>
				<div class="flip">
					<div class="face front">
						<img src="imagenes\vitaminac.jpg" alt="vitaminac">
					</div>
					<div class="face back">
						<div class="enlace">
							<a href="reservas.html">VITAMINA C</a>
						</div>
						<div class="descripcion-servicio">La vitamina C endovenosa se administra mediante una infusión intravenosa en una vena del brazo. Aporta firmeza y elasticidad a la piel, previene los signos prematuros del envejecimiento, y reduce el riesgo de padecer cáncer.</div>
						<div class="precio-servicio">Precio: $120</div>
					</div>
				</div>
				<div class="flip">
					<div class="face front">
						<img src="imagenes\peptonas.png" alt="peptonas">
					</div>
					<div class="face back">
						<div class="enlace">
							<a href="reservas.html">PEPTONAS</a>
						</div>
						<div class="descripcion-servicio">Reparación celular y recupera la juventud que se pierde con el paso de los años. Ayuda aumentar y tonificar la masa muscular en el cuerpo de manera rápida y efectiva de forma genuina en su metabolismo.</div>
						<div class="precio-servicio">Precio: $100</div>
					</div>					
				</div>
				<div class="flip">
					<div class="face front">
						<img src="imagenes\puntadiamante.jpeg" alt="puntadiamante">
					</div>
					<div class="face back">
						<div class="enlace">
							<a href="reservas.html">LIMPIEZA FACIAL</a>
						</div>
						<div class="descripcion-servicio">Limpieza facial con punta de diamante. Reduce las manchas solares en la piel. Suaviza líneas de expresión y arrugas. Luminosidad instantánea en la piel. Produce de colágeno y elastina. Regenera la piel a través de la creación de nuevas células.</div>
						<div class="precio-servicio">Precio: $20</div>
					</div>
				</div>
				<div class="flip">
					<div class="face front">
						<img src="imagenes\hidrolipoclasia.jpg" alt="hidrolipoclasia">
					</div>
					<div class="face back">
						<div class="enlace">
							<a href="reserva.html">HIDROLIPOCLASIA ULTRASONICA</a>
						</div>
						<div class="descripcion-servicio">Rompe la grasa resistente. Reduce de 2cm a 5cm de abdomen. Elimina grasa localizada. Cambia el aspecto de la piel.</div>
						<div class="precio-servicio">Precio: $120</div>
					</div>					
				</div>	
				<div class="flip"> 
					<div class="face front">
						<img src="imagenes\cocktail.jpeg" alt="cocktail">
					</div>
					<div class="face back">
						<div class="enlace">
							<a href="reservas.html">COCKTAIL ANTIAGING</a>
						</div>
						<div class="descripcion-servicio">Vitamina C 15g. Acido Alfa Lipoico 100mg. Biotina 20mg. Coenzima Q10 10mg. Glutation 60mg</div>
						<div class="precio-servicio">Precio: $50</div>
					</div>					
				</div>	
				<div class="flip">
					<div class="face front">
						<img src="imagenes\plasma.jpeg" alt="plasma">
					</div>
					<div class="face back">
						<div class="enlace">
							<a href="reservas.html">PLASMA GEL+PRP</a>
						</div>
						<div class="descripcion-servicio">Ideal para rellenar las arrugas de forma inmediata. se hacen 3 sesiones con un periodo de tiempo de 2 o 3 meses entre ellas. El resultado dura de 8 a 10 meses tras la última inyección</div>
						<div class="precio-servicio">Precio: $100</div>
					</div>					
				</div>	
				<div class="flip">
					<div class="face front">
						<img src="imagenes\carboxiterapia.jpg" alt="carboxiterapia">
					</div>
					<div class="face back">
						<div class="enlace">
							<a href="reservas.html">CARBOXITERAPIA</a>
						</div>
						<div class="descripcion-servicio"> Favorece la oxigenación de las células corporales mediante la infiltración de CO210 - Consta de 10 masajes reductores, 10 drenajes reductores y 10 carboxiterapia .</div>
						<div class="precio-servicio">Precio: $100</div>
					</div>					
				</div>	
				<div class="flip">
					<div class="face front">
						<img src="imagenes\yesoterapia.jpeg" alt="yesoterapia">
					</div>
					<div class="face back">
						<div class="enlace">
							<a href="reservas.html">YESOTERAPIA REDUCTORA </a>
						</div>
						<div class="descripcion-servicio"> Incluye masaje reductores, ampolla reductora, crema reductora, drenaje linfatico, guia nutricionl, te limpiador y yesoterapia .</div>
						<div class="precio-servicio">Precio: $180</div>
					</div>					
				</div> -->
		</div>
		</div>
	<footer>
		<div class="pp">
			<p>&reg; Realizamos toda la documentación en registros públicos</p>
		</div>
	</footer>
	<script src="https://kit.fontawesome.com/51296bdbc9.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.js"></script>
	<script src="js\mov.js"></script>
</body>
</html>