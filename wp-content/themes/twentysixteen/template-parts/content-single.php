<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage 
 * @since 
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header> 
	<div class="entry-content">
		<?php
			the_content(); // chamando o conteudo na página seguinte

		// ?>
	</div>
</article>
