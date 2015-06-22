<?php
/*
	* Template Name: PhotoAlbum
	*
	 * @package WordPress
	 * @subpackage nastymondays
 */
*/
?>
<?php get_header(); ?>
	<div class="post">

			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
	<div class="gallery">
		<h2>
		<?php the_title(); ?>
		</h2>
			<?php echo do_shortcode('[gallery option1="value1" columns="4"]'); ?>
			<?php endwhile; ?>
				
	<?php else : ?>
			<h2>
			<?php print 'Not Found' ;?>
			</h2>
			<p><?php print 'Sorry, bro ; were goin to Andorra' ; ?>.</p>
	<?php endif; ?>

	</div>
		<hr />
		<?php wp_nav_menu('menu=NastyMondays'); ?>
		<hr />
</div>	            
		<?php get_template_part( 'modules/segonquart' );  ?>
		
		<h4 class="backstage">
		<a href="http://nastymondays.com/backstage/">
		<?php print " &spades;  &spades;  &spades;  Visit Nasty Mondays Backstage. It's free and you'll meet Soren and Max &spades;  &spades;  &spades; " ?>
		</a>
		</h4>
<?php get_footer(); ?>
</div>	
</body>
</html>