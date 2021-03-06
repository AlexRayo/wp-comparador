<?php get_header(); ?>
<!--INICIO main-->
<div class="container archive col-12 col-xl-10">
	<h2 class="text-center mt-5 py-5 bg-secondary text-white mb-5 text-uppercase text-bold" ><?php single_cat_title($prefix='',$display=true); ?></h2>	
	<form name="form" action="" method="post" class="text-center">		
		<select name="tipo" class="my-select custom-select" onchange="this.form.submit()" style="max-width: 350px;">
			<option value="Soluciones" selected>👉 Seleccione su tipo de préstamo</option>
			<option value="Minicredito">Minicredito</option>
			<option value="prestamos-personales">Préstamos Personales</option>
			<option value="prestamos-hipotecarios">Préstamos Hipotecarios</option>
			<option value="Coche">Coche Aval</option>
			<option value="Bancamovil">Abrir cuenta online</option>
			<option value="Soluciones">Ver todo</option>
		</select>
	</form>
	
	<?php $my_cat = $_POST['tipo']; ?>
	<?php query_posts('category_name='.$my_cat); ?>
	<h4 class="text-center mt-3 text-uppercase"><?php single_cat_title($prefix='',$display=true); ?></h4>
	<?php
		switch ($my_cat) {
			case 'Minicredito':
				echo '<p class="text-center">(Desde 50 hasta 1000 €)</p>';
				break;
			case 'prestamos-personales':
				echo '<p class="text-center">(Desde 1000 hasta 50000 €)</p>';
				break;
			case 'prestamos-hipotecarios':
				echo '<p class="text-center">(Desde 10000 hasta 50000 €)</p>';
				break;
			case 'Coche':
				echo '<p class="text-center">(Obtenga hasta 10000 € con su coche como Aval)</p>';
				break;
			case 'Bancamovil':
				echo '<p class="text-center">(Le permite abrir una cuenta bancaria)</p>';
				break;	
			default:
				echo '<p class="text-center">(Puede buscar según el tipo de crédito que necesite)</p>';
				break;
		}
	?>
	
	<div class="row d-flex justify-content-between col-12 col-md-8 mx-auto mt-5">	
		<?php $i = 1; if(have_posts()):while (have_posts() && $i <= 40 ) : the_post(); ?>		
		<div class="col-11 col-md-5 mx-2 py-4 px-3 px-md-5 mb-5 bg-white box box-shadow">
			<h4 class="text-center"><b><?php the_title(); ?></b></h4>
			<div class="text-center">
				<?php if(has_post_thumbnail()) {the_post_thumbnail('list_articles_thumb'); } ?>
			</div>
			<div class="text-justify" style="min-height: 100px;">
				<?php the_excerpt(); ?>
			</div>
			<div class="text-center">
				<a href="<?php the_permalink(); ?>" class="btn btn-primary">Ver más</a>
			</div>					
		</div>
		<?php $i++; endwhile;else: ?>
			<h2 class="text-center display-5">Próximamente...</h2>
	<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>