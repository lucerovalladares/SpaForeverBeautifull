<?php
    session_start();
    require "conex.php";

    $sql="SELECT * FROM producto ";
    $resultado1 = $conexion->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/diseño_productos.css">
    <link rel="stylesheet" href="css/Estilo-servicios.css">
    <title>Productos</title>
</head>
<html>

<body>
    <header>
		<div class="conteiner">
			<img src="imagenes/logo.jpeg" alt="logo">
			<nav class="navega">
				<ul>
					<li><a href="Index.html">Inicio</a></li>
					<li><a href="productos.php">Productos</a></li>
                    <li><a href="servicios.php">Servicios</a></li>
                    <li><a href="reservas.html">Reservar</a></li>
					<li><a href="#">Contacto</a></li>
                    <li><a href="login.php">Iniciar sesion</a></li>
				</ul>
			</nav>
            
            <!-- icono -->
            <div class="container-icon">
				<div class="container-cart-icon">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
						stroke-width="1.5"
						stroke="currentColor"
						class="icon-cart"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
						/>
					</svg>
					<div class="count-products">
						<span id="contador-productos">0</span>
					</div>
				</div>
				
				<!-- funcionalidad -->
				<div class="container-cart-products hidden-cart">
					<div class="row-product hidden">
						<div class="cart-product">
							<div class="info-cart-product">
								<span class="cantidad-producto-carrito">1</span>
								<p class="titulo-producto-carrito">Zapatos Nike</p>
								<span class="precio-producto-carrito">$80</span>
							</div>
							<svg
								xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 24 24"
								stroke-width="1.5"
								stroke="currentColor"
								class="icon-close"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									d="M6 18L18 6M6 6l12 12"
								/>
							</svg>
						</div>
					</div>

					<div class="cart-total hidden">
						<h3>Total:</h3>
						<span class="total-pagar">$200</span>
					</div>
					<p class="cart-empty">El carrito está vacío</p>
				</div>
			</div>
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
        configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-1642799-I9HRIEGLNY78E2LC/index.json',
      });
    });
    s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
  }
}
</script>

    <h1>Productos</h1>
    
    <div class="product-container">
    <?php while($row = $resultado1->fetch_assoc()){ ?>
        <div class="product">
            <img src="DASHBOARD/startbootstrap-sb-admin-2-gh-pages/articulos/<?php echo $row["img"];?>.jpg?nocache=<?php echo time(); ?>" alt="">
            <h3><?php echo $row ['NOM_PROD']; ?></h3>
            <br>
            <p>S/<?php echo $row ['PREC_PROD']; ?></p>
            <!-- <div class="carrito"> -->
                <br>
            <button class="add-to-cart-btn">Añadir al carrito</button>
            <!-- </div> -->
        </div>
    <?php }?>
    </div>
    <script src="js/carrito.js"></script>
</body>
</html>