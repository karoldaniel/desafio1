
<?php 
    $args = array('post_type' => 'page', 'pagename' => 'slide');

    $my_page = get_posts($args);
?>
<?php 
    if($my_page) : forEach($my_page as $post) : setup_postdata($post);
?>
<section id="">
<?php
    the_content(); 
    endforeach; 
  ?>
  <?php else: ?>
  <?php endif; ?>



</section>
