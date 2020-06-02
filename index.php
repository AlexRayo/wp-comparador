<?php get_header(); ?>
<section id="main" class="bg-white">
	<!--  COVER  -->
	<section class="container-fluid cover d-flex align-items-center">
		<div class="container">
			<div class="col-12 mx-auto d-flex justify-content-between mt-5 px-4 px-lg-0">
				<?php dynamic_sidebar( 'Cover' ); ?>
			</div>
		</div>
	</section>

	<!--  BENEFICIOS  -->
	<section class="container-fluid container-beneficios d-flex align-items-center py-5 bg-3">
		<div class="container">
			<div class="col-12 mx-auto d-flex justify-content-between px-4 px-sm-2 px-lg-0 my-5">
				<?php dynamic_sidebar( 'beneficios' ); ?>
			</div>
		</div>
	</section>

	<!--  S2 ESTADISTICAS -->
	<section class="s2 container mx-auto py-0 py-md-5 my-5 text-center">
		<div class="container">
			<div class="mx-auto col-11 col-sm-8 col-md-10 mb-5">
				<?php dynamic_sidebar( 'single-block-center' ); ?>
			</div>
			<!--  BLOQUES -->
			<div class="row d-flex col-12 mx-auto h-100 justify-content-between">			
				<?php dynamic_sidebar( 'block' ); ?>
			</div>
		</div>
	</section>

	<!--  RESULTADOS EN 1 MINUTO  -->
	<section class="container-fluid text-center bg-secondary py-1 text-bold text-white text-lg px-2 px-md-0">
		<?php dynamic_sidebar( 'Block thin' ); ?>
	</section>

	<!--  ABOUT  -->
	<section class="container-fluid about d-flex align-items-center my-5 py-0 py-md-5 px-4 px-md-0">
		<div class="container">
			<div class="col-12 mx-auto d-flex justify-content-between mt-5">
				<?php dynamic_sidebar( 'about' ); ?>
			</div>
		</div>
	</section>
</section>
<?php get_footer(); ?>