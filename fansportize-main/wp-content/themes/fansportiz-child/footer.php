<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="site-name">
				<p>© Fansportiz, 2021  Powered by.<a href="https://www.yudiz.com/" target="_blank" >Yudiz</a></p>
			</div><!-- .site-name -->
			<div class="footer-nav-menu">
		<?php
			wp_nav_menu( array( 
				'theme_location' => 'footer-nav', 
				'container_class' => 'custom-menu-class' ) ); 
			?>
		</div>
		</div><!-- .site-info -->
		
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	jQuery(window).on("scroll", function() {
    if(jQuery(window).scrollTop() > 10) {
        jQuery(".site-header").addClass("header-style");
    } else {
       jQuery(".site-header").removeClass("header-style");
    }
});	

$(document).ready(function () {
            $('.js-tilt').tilt({
                glare: true,
                maxGlare: .1
			});
		});

		
		$( document ).ready(function() {
		  $(".card-box").attr("data-tilt");
		  $(".feature-item").attr("data-tilt");
});
$( document ).ready(function() {
		  $(".card-box").attr("data-tilt-perspective" , "2000");
		  $(".feature-item").attr("data-tilt-perspective" , "2000");
});
/* counter */
		jQuery('.count span').each(function () {
    jQuery(this).prop('Counter',0).animate({
        Counter: jQuery(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            jQuery(this).text(Math.ceil(now));
        }
    });
});
new WOW().init();
		var scene = document.getElementById('scene');
        var parallaxInstance = new Parallax(scene);

        var scene2 = document.getElementById('scene2');
        var parallaxInstance = new Parallax(scene2);

        var scene3 = document.getElementById('scene3');
        var parallaxInstance = new Parallax(scene3);

        var scene4 = document.getElementById('scene4');
        var parallaxInstance = new Parallax(scene4);

        var scene5 = document.getElementById('scene5');
		var parallaxInstance = new Parallax(scene5);
		
		var scene6 = document.getElementById('scene6');
		var parallaxInstance = new Parallax(scene6);
		var scene7 = document.getElementById('scene7');
		var parallaxInstance = new Parallax(scene7);
		var scene8 = document.getElementById('scene8');
		var parallaxInstance = new Parallax(scene8);
		var scene9 = document.getElementById('scene9');
		var parallaxInstance = new Parallax(scene9);
		var scene10 = document.getElementById('scene10');
		var parallaxInstance = new Parallax(scene10);
		var scene11 = document.getElementById('scene11');
		var parallaxInstance = new Parallax(scene11);
		var scene12 = document.getElementById('scene12');
		var parallaxInstance = new Parallax(scene12);

		
</script>
</body>
</html>
