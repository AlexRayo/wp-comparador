<footer class="container-fluid bg-secondary mx-auto">
	<section class="container py-5 px-4 px-lg-0">
		<div class="row col-12 d-flex justify-content-between">
			<?php dynamic_sidebar( 'footer-block' ); ?>
		</div>
	</section>
	<section class="col-12 copyright">
		<div class="container px-5 px-lg-0">
			<div class="row col-12 d-flex justify-content-between">
				<?php dynamic_sidebar( 'block-bottom' ); ?>
			</div>
		</div>
	</section>
	

</footer>
<script>
	//Allows toggle submenus instead open its link
    jQuery( document ).ready( function($) {
        if ( $( '.menu-toggle' ).is( ':visible' ) ) {
            $( '.main-navigation' ).addClass( 'sfHover' );
            $( '.main-navigation .sub-menu' ).addClass( 'toggled-on' );
        }
    } );
</script>
<?php wp_footer(); ?>
</body>
</html>