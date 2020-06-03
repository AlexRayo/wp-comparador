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
		</div>
	</section>
	
<?php get_footer(); ?>