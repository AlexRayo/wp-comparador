
<?php get_header(); ?>
	<section class="container section-404 d-flex align-items-center">
		<div class="col-11 text-center" style="margin: 150px auto;">
			<h1 class="title text-xl">404!</h1>
			<p class="text-md">La página que buscas no existe 😰</p>	
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-lg btn-secondary">Regresar a la página de inicio</a>
		</div>				
	</section>
<?php get_footer(); ?>