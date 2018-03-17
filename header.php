<?php
/**
 * Template para iniciação de projetos
 *
 * @package WordPress
 * @subpackage Inicial Houtlyn
 * @since Houtlyn Blank Page 1.0
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); //ATRIBUINDO A LINGUAGEM ?>">
    <head>
        <meta charset="<?php bloginfo('charset') //ATRIBUIDNO CHARSET DEFAULT ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
        <link href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap-grid.css" rel="stylesheet">
        <link href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap-grid.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato" />

				<link href="<?php bloginfo( 'get_template_directory_uri' ); /* APLICA A URL DO TEMA COM O STYLE.CSS
																																(FEITO PARA ISSO ESSE CODIGO) */?>"
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
