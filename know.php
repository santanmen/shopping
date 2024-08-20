<?php
$title = "Quiénes Somos - Shopping Portal";
$company_name = "Shopping Portal";
$description = "En $company_name, nos dedicamos a ofrecerte la mejor experiencia de compra en línea. Nuestra misión es brindarte una amplia variedad de productos de alta calidad a precios competitivos, todo en un solo lugar.";
$mission = "Fundados con la visión de simplificar el proceso de compra, hemos creado una plataforma intuitiva y segura donde puedes explorar, comparar y adquirir productos desde la comodidad de tu hogar. Nuestro compromiso es con la satisfacción del cliente, y trabajamos incansablemente para asegurar que cada pedido llegue a tus manos de manera rápida y eficiente.";
$commitment = "Nos enorgullece ser un portal de compras confiable, respaldado por un equipo de profesionales dedicados a mejorar continuamente nuestra oferta de productos y servicios. Gracias por elegir $company_name, donde tu satisfacción es nuestra prioridad.";
$current_year = date("Y");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>Bienvenidos a <?php echo $company_name; ?></h1>
    </header>
    <section>
        <h2>Quiénes Somos</h2>
        <p><?php echo $description; ?></p>
        <p><?php echo $mission; ?></p>
        <p><?php echo $commitment; ?></p>
    </section>
    <footer>
        <p>&copy; <?php echo $current_year; ?> <?php echo $company_name; ?>. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
