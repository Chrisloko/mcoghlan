<!DOCTYPE html>
<html lang="es-mx" class="no-js no-svg">
<head>
    <!-- Google Tag Manager -->
	
	<!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="<?php echo $desc; ?>">
    <meta name="keywords" content="<?php echo $key; ?>">
    <title><?php echo $title; ?></title>
    <link rel="canonical" href="<?php echo $canonical; ?>"/>
    <meta name="robots" content="index, follow"/>
	<link rel="icon" type="image/png" href="/img/favicon.png" />
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <script src="/js/jquery3.5.1.min.js" ></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
	<!-- <link rel="preload" href="https://mcoghlan.mx/fonts/Catamaran-VariableFont_wght.ttf" as="font" crossorigin=""> -->
	<!-- <link rel="preconnect" href="https://www.google-analytics.com">
	<link rel="preconnect" href="https://www.googletagmanager.com">	 -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-1GK8QN1B37"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-1GK8QN1B37');
	</script>
	    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-38568777-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-38568777-1');
	</script>
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '295087370684251');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=295087370684251&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
</head>
<body class="">

<div id="site-wrap" class="site">
    <div id="header-wrap" style="width: 100%; z-index: 3" class="fixed-top pad-top-nav">
        <header id="header">
            <div class="container">
				<nav class="navbar navbar-expand-lg navbar-dark">
					  <a class="navbar-brand" href="/index">
					  	<div id="logo" class="logo-top-white"></div>
					  </a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
						  <li class="nav-item <?php if ($page == "home") echo 'active'; ?>">
							<a class="nav-link" href="/index">Inicio<span class="sr-only">(current)</span></a>
						  </li>
						  
						  <li class="nav-item dropdown <?php if ($page == "nosotros") echo 'active'; ?>">
							<a class="nav-link" href="/nosotros" style="display: inline-block">
							  Nosotros
							</a>
							<a class="nav-link dropdown-toggle" href="/index" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: inline-block">
							
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							   		<a href="/equipo-mariangel-coghlan" class="dropdown-item">Conócenos</a>
                                    <a href="/conversaciones" class="dropdown-item">Conversaciones</a>
                                    <a href="/libros" class="dropdown-item">Libros</a>
          							<a href="/preguntas-frecuentes" class="dropdown-item">Preguntas Frecuentes</a>
							</div>
						  </li>
						  <li class="nav-item dropdown <?php if ($page == "servicios") echo 'active'; ?>">
							<a class="nav-link" href="/servicios-de-la-firma-mariangel-coghlan" style="display: inline-block">Servicios</a>
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: inline-block">
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							   		<a href="/diseno-de-interiores-casas" class="dropdown-item">Interiorismo Residencial</a>
									<a href="/diseno-de-interiores-comercial" class="dropdown-item">Interiorismo Comercial</a>
									<a href="/proyecto-de-remodelacion" class="dropdown-item">Proyecto de remodelación</a>
									<a href="/diseno-arquitectonico" class="dropdown-item">Diseño arquitectónico</a>
							</div>
						  </li>
						  <li class="nav-item dropdown <?php if ($page == "proyectos") echo 'active'; ?>">
							<a class="nav-link" href="/diseno-interior" style="display: inline-block">Proyectos</a>
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: inline-block">
							
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							   		<a href="/diseno-interior#ciudad" class="dropdown-item">Ciudad</a>
									<a href="/diseno-interior#campo" class="dropdown-item">Campo</a>
									<a href="/diseno-interior#playa" class="dropdown-item">Playa</a>
									<a href="/diseno-interior#oficinas" class="dropdown-item">Oficinas</a>
									<a href="/diseno-interior#hoteles" class="dropdown-item">Hoteles</a>
									<a href="/ebooks" class="dropdown-item">Ebooks</a>
							</div>
						  </li>
						  <li class="nav-item <?php if ($page == "galeria") echo 'active'; ?>">
							<a class="nav-link" href="/diseno-de-interiores-en-mexico">Galería</a>
						  </li>
						  <li class="nav-item dropdown <?php if ($page == "color") echo 'active'; ?>">
							<a class="nav-link" href="/colores-para-interiorismo" style="display: inline-block">Color</a>
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: inline-block">
							
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							   		<a href="/color/inspiracion-diseno-de-interiores" class="dropdown-item">Inspiración</a>
									<a href="/color/diseno-de-interiores-paletas-de-color" class="dropdown-item">Paletas de color</a>
									<a href="/color/tendencias-de-colores-interiorismo" class="dropdown-item">Tendencias</a>
							</div>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="/blog">Blog</a>
						  </li>
						  <li class="nav-item <?php if ($page == "contacto") echo 'active'; ?>">
							<a class="nav-link" href="/contacto-mariangel-coghlan">Contacto</a>
						  </li>
						</ul>
					  </div>
					</nav>

            </div>
            <!-- #header-inner -->
        </header>
   
    </div>
</div>
     
