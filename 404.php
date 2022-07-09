<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>gk</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-180x180.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
		rel="stylesheet">
	<!-- Template Basic Images End -->
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->
    <style>
body{
    margin: 0;
}        
.wrap-404{
    width: 100%;
    height: 100vh;
    padding: 0;
    margin: 0;
    font-family: 'Montserrat';
    background-image: url(https://www.knyagynyn.if.ua/wp-content/themes/knyagynyn/img/mob-fon.jpg);
    background-position: center;
    background-size: cover;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #E9DFD0;
    position: relative;
    
}
.wrap-404::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(62,71,82,.6);
}
.wrap-404 h1{
    font-size: 110px;
    font-weight: 500;
    line-height: 43px;
    margin-bottom: 50px;
    position: relative;
    z-index: 100;
}
.wrap-404 span{
    font-size: 24px;
    font-weight: 600;
    line-height: 30px;
    position: relative;
    z-index: 100;
}
.wrap-404 p{
    font-size: 36px;
    line-height: 32px;
    position: relative;
    z-index: 100;
}
.wrap-404 a{
    color: #E9DFD0;
    font-weight: 700;
}
</style>  
</head>

<body>
  
<div class="wrap-404">
    <h1>404</h1>
    <p>Error</p>
    <span>Сторінка не знайдена</span>
    <span>Повернутися на <a href="/">головну</a></span>
</div>
</body>
</html>
