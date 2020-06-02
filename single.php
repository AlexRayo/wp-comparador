<?php get_header(); ?>
	<section class="container page">
		<div class="row d-flex justify-content-between">

			<div class="row col-11 col-md-8 mx-auto bg-white py-2 py-md-0 my-5 pb-5 content box-shadow">
				<div class="cover-single">
					<?php if(has_post_thumbnail()) {the_post_thumbnail('list_articles_thumb'); } ?>
				</div>
				<div class="col-12 mt-md-5 px-3 pb-5 px-md-5">
					<?php if(have_posts()):while (have_posts()):the_post(); ?>
					<h1 class="title text-xl text-bold pl-2 mt-4 mt-md-0"><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
				<?php endwhile;else: ?>
						<h1>En Edición</h1>
				<?php endif; ?>
			</div>

			<div class="aside col-11 col-md-3 mx-auto bg-white px-2 py-2 box box-shadow pt-5 my-2 my-md-5 mr-5">
				<?php query_posts('category_name=sugerencias'); ?>
				<h2 class="title text-md border-bottom bg-gray py-2 text-center">Sugerencias</h2>
				<?php $sugerencias = 1; if(have_posts()):while (have_posts() && $sugerencias <=10 ) : the_post(); ?>
						
				<div class="plan mx-auto" style="">
						<a href="<?php the_permalink()?>" class="d-block mb-4 border-bottom px-2 text-dark"><?php the_title(); ?></a>
					
				</div>
				<?php $sugerencias++; endwhile;else: ?>
					<h2 class="mx-auto text-xl">En edición...</h2>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>