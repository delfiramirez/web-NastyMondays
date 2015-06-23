<?php
/*
 * Template Name: PhotoAlbum
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>

<?php get_header(); ?>
<div class="post">
<div class="gallery">
<?php 

$fields = get_post_custom();
if (isset($fields['gallery'])) {
	$images = split(',',$fields['gallery'][0]);
	$current = ($paged == '') ? 1 : $paged;
	$image = $images[$current-1];
	
?>
<div id="gallery">
	<img
	src="<?php echo $image; ?>" 
	alt="<?php echo "Image $current of ".count($images); ?>"
	/>
	<?php 

	if (count($images) > 1) {
	?>
	<ul>
		<?php if ($current > 1) { ?>
		<li class="prev">
		<a href="<?php the_permalink() ?>page/<?php echo $current-1; ?>">Previous Gallery</a>
		</li>
		<?php } ?>
		<?php if ($current < count($images)) { ?>
		<li class="next">
		<a href="<?php the_permalink() ?>page/<?php echo $current+1; ?>">Next Gallery</a>
		</li>
		<?php } ?>
	</ul>
	<?php } ?>
</div>
<?php } ?>
</div>
</div>

        <hr />

<?php get_template_part( 'modules/segonquart' );  ?>

<?php wp_nav_menu('menu=NastyMondays'); ?>
	            
<?php get_template_part( 'modules/segonquart' );  ?>
<?php get_footer(); ?>
</div>
</div>
</body>
</html>