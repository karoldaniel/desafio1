
<?php 
    $args = array('post_type' => 'page', 'pagename' => 'sobre');

    $my_page = get_posts($args);
?>
<?php 
    if($my_page) : forEach($my_page as $post) : setup_postdata($post);
?>
<section>
<?php
        the_content(); 
      endforeach; 
  ?>
  <?php else: ?>
      <!-- <p>Nenhum conteúdo inserido na página Header</p> -->
  <?php endif; ?>
    <div>
        <?php query_posts('post_types=posteres'); ?>  
            <?php if(have_posts()): ?>
                <?php while(have_posts()): ?> 
                    <?php the_post(); ?>
                    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	                <?php  the_content(); ?>
                <?php endwhile; ?>
            <?php else : ?>
                Post não encontrado.
            <?php endif; ?>
        <?php  wp_reset_query(); ?>
        
    </div>
</section>
