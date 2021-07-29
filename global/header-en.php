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
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
	<link rel="preload" href="https://previo.mcoghlan.mx/fonts/Catamaran-VariableFont_wght.ttf" as="font" crossorigin="">
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

</head>
<body class="">

<div id="site-wrap" class="site">
    <div id="header-wrap" style="width: 100%; z-index: 3" class="fixed-top pad-top-nav">
        <header id="header">
            <div class="container">
				<nav class="navbar navbar-expand-lg navbar-dark">
					  <a class="navbar-brand" href="/en/mariangel-coghlan-interior-design-firm">
					  	<div id="logo" class="logo-top-white"></div>
					  </a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
						  <li class="nav-item <?php if ($page == "home") echo 'active'; ?>">
							<a class="nav-link" href="/en/mariangel-coghlan-interior-design-firm">Home<span class="sr-only">(current)</span></a>
						  </li>
						  
						  <li class="nav-item dropdown <?php if ($page == "nosotros") echo 'active'; ?>">
							<a class="nav-link" href="/en/about-us-mariangel-coghlan" style="display: inline-block">
							  About us
							</a>
							<a class="nav-link dropdown-toggle" href="index" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: inline-block">
							
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							   		<a href="/en/mariangel-coghlan-design-firm-team" class="dropdown-item">Get to know us</a>
                                    <!-- <a href="/conversaciones" class="dropdown-item">Conversaciones</a>
                                    <a href="/libros" class="dropdown-item">Libros</a> -->
          							<a href="/en/faq-mariangel-coghlan-design-firm" class="dropdown-item">FAQ</a>
							</div>
						  </li>
						  <li class="nav-item dropdown <?php if ($page == "servicios") echo 'active'; ?>">
							<a class="nav-link" href="/en/interior-design-services" style="display: inline-block">Servicios</a>
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: inline-block">
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							   		<a href="/en/residential-interior-design" class="dropdown-item">Residential Design</a>
									<a href="/en/commercial-interior-design" class="dropdown-item">Commercial interior design</a>
									<a href="/en/remodeling-project" class="dropdown-item">Remodeling project</a>
									<a href="/en/diseno-arquitectonico" class="dropdown-item">Architectural design</a>
							</div>
						  </li>
						  <li class="nav-item dropdown <?php if ($page == "proyectos") echo 'active'; ?>">
							<a class="nav-link" href="/en/interior-design-portfolio" style="display: inline-block">Portfolio</a>
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: inline-block">
							
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							   		<a href="/en/interior-design-portfolio#ciudad" class="dropdown-item">City</a>
									<a href="/en/interior-design-portfolio#campo" class="dropdown-item">Country</a>
									<a href="/en/interior-design-portfolio#playa" class="dropdown-item">Beach</a>
									<a href="/en/interior-design-portfolio#oficinas" class="dropdown-item">Offices</a>
									<a href="/en/interior-design-portfolio#ebooks" class="dropdown-item">Ebooks</a>
							</div>
						  </li>
						  <li class="nav-item <?php if ($page == "galeria") echo 'active'; ?>">
							<a class="nav-link" href="/en/interior-design-usa">Gallery</a>
						  </li>
						  <li class="nav-item dropdown <?php if ($page == "color") echo 'active'; ?>">
							<a class="nav-link" href="/en/color-for-interior-design" style="display: inline-block">Color</a>
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: inline-block">
							
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							   		<a href="/en/color/interior-design-inspiration" class="dropdown-item">Inspiration</a>
									<a href="/en/color/interior-design-color-palettes" class="dropdown-item">Color pallets</a>
									<a href="/en/color/interior-design-color-tendencies" class="dropdown-item">Tendencies</a>
							</div>
						  </li>
						  <!-- <li class="nav-item">
							<a class="nav-link" href="/blog">Blog</a>
						  </li> -->
						  <li class="nav-item <?php if ($page == "contacto") echo 'active'; ?>">
							<a class="nav-link" href="/en/contact-us-mariangel-coghlan">Contact</a>
						  </li>
						</ul>
					  </div>
					</nav>

            </div>
            <!-- #header-inner -->
        </header>
   
    </div>
</div>
     
