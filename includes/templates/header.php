<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>

    <header class="header <?php echo $start ? 'start' : ''; ?>">
        <div class="container contents-header">
            <div class="bar">
                <a href="/"> <!--bienesraices/index.php -->
                <img src="/build/img/logo.svg" alt="logo">
            </a>

            <div class="mobile-menu">
            <img src="/build/img/barras.svg" alt="icono menu responsive">
                
            </div>
            <div class="right">
                <img class=dark-mode-button src="/build/img/dark-mode.svg" alt="darkmode">
            <nav class="navigation">
                <a href="we.php">Nosotros</a>
                <a href="advertisements.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contact.php">Contacto</a>
            </nav>
        </div>
            </div><!--cierre barra-->

            <?php  if($start){?>
                <h1>Venta de Casas y Departamentos Exlusivos de Lujo</h1>
            <?php  } ?>
           
        </div>
    </header>